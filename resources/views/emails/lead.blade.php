<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Lead - {{ config('site.name') }}</title>
    <style>
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; line-height: 1.6; color: #1a1a1a; margin: 0; padding: 0; background: #f5f5f5; }
        .container { max-width: 600px; margin: 0 auto; padding: 24px; }
        .card { background: #fff; border-radius: 12px; box-shadow: 0 4px 24px rgba(0,0,0,0.08); overflow: hidden; }
        .header { background: linear-gradient(135deg, #0a1628 0%, #132238 100%); color: #fff; padding: 24px; text-align: center; }
        .header h1 { margin: 0; font-size: 1.5rem; font-weight: 700; }
        .header span { color: #d4af37; }
        .body { padding: 24px; }
        .field { margin-bottom: 16px; padding-bottom: 16px; border-bottom: 1px solid #eee; }
        .field:last-of-type { border-bottom: none; margin-bottom: 0; padding-bottom: 0; }
        .label { font-size: 0.75rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em; color: #888; margin-bottom: 4px; }
        .value { font-size: 1rem; color: #1a1a1a; }
        .message-box { background: #f8f6f3; border-left: 4px solid #d4af37; padding: 16px; margin-top: 16px; border-radius: 0 8px 8px 0; }
        .footer { text-align: center; padding: 16px; font-size: 0.8rem; color: #888; }
        .footer a { color: #d4af37; text-decoration: none; }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="header">
                <h1>New Lead from <span>{{ config('site.name') }}</span> Website</h1>
                <p style="margin: 8px 0 0; opacity: 0.9; font-size: 0.9rem;">Event / Booking Inquiry</p>
            </div>
            <div class="body">
                <div class="field">
                    <div class="label">Name</div>
                    <div class="value">{{ $name }}</div>
                </div>
                <div class="field">
                    <div class="label">Email</div>
                    <div class="value"><a href="mailto:{{ $email }}">{{ $email }}</a></div>
                </div>
                <div class="field">
                    <div class="label">Phone</div>
                    <div class="value"><a href="tel:{{ $phone }}">{{ $phone }}</a></div>
                </div>
                <div class="field">
                    <div class="label">Event Date</div>
                    <div class="value">{{ $event }}</div>
                </div>
                <div class="field">
                    <div class="label">Location</div>
                    <div class="value">{{ $location }}</div>
                </div>
                <div class="field">
                    <div class="label">Message</div>
                    <div class="message-box">{{ $inquiry }}</div>
                </div>
            </div>
            <div class="footer">
                Sent at {{ $submittedAt }} · {{ config('site.name') }} | {{ config('site.tagline') }}
            </div>
        </div>
    </div>
</body>
</html>
