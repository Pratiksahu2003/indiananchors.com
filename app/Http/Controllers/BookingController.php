<?php

namespace App\Http\Controllers;

use App\Mail\LeadEmail;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function submit(Request $request)
    {
        // Honeypot: if filled, treat as bot (silent reject)
        if ($request->filled('website_url')) {
            return redirect()->back()->withFragment('contact')->with('success', 'Thank you! Your request has been received.');
        }

        // Time check: form submitted in under 3 seconds = likely bot
        $formToken = $request->input('form_token');
        if ($formToken && is_numeric($formToken)) {
            $elapsed = time() - (int) $formToken;
            if ($elapsed < 3) {
                return redirect()->back()->withFragment('contact')->with('success', 'Thank you! Your request has been received.');
            }
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'event' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        // Always store the lead in database first (never lose a lead)
        $lead = Lead::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'event' => $validated['event'],
            'location' => $validated['location'],
            'message' => $validated['message'],
            'email_sent' => false,
        ]);

        // Try to send email
        try {
            Mail::to('digital@tytil.com')->send(new LeadEmail(
                name: $validated['name'],
                email: $validated['email'],
                phone: $validated['phone'],
                event: $validated['event'],
                location: $validated['location'],
                message: $validated['message'],
                submittedAt: now()->format('d M Y, h:i A'),
            ));
            $lead->update(['email_sent' => true]);
        } catch (\Exception $e) {
            Log::error('Lead email failed', [
                'lead_id' => $lead->id,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
            // Lead is already saved - user still sees success
        }

        return redirect()->back()->withFragment('contact')->with('success', 'Thank you! Your booking request has been received. We will contact you soon.');
    }
}
