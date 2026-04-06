<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Create Default Admin
        User::updateOrCreate(
            ['email' => 'admin@indiananchors.com'],
            [
                'name' => 'Pratik Sahu',
                'password' => bcrypt('admin123'),
                'email_verified_at' => now(),
            ]
        );

        // 2. Real SEO-Friendly Categories
        $categories = [
            'Corporate Events',
            'Wedding Entertainment',
            'Award Ceremonies',
            'Product Launches',
            'Virtual & Hybrid Events',
            'Fashion & Lifestyle Shows',
            'Government & Public Events',
            'Sports & Athletics Hosting',
            'Educational & Tech Summits',
            'Motivational Speaking',
            'Concerts & Music Festivals',
            'Exhibitions & Trade Fairs',
            'Private & Social Gatherings',
            'Professional Training & Workshops',
            'Media & Television Hosting'
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(
                ['slug' => Str::slug($category)],
                ['name' => $category]
            );
        }

        // 3. Real SEO-Friendly Tags
        $tags = [
            // Core Roles
            'Professional Anchor', 'Male Emcee', 'Female Anchor', 'Corporate Host', 'Wedding Presenter',
            'Bilingual Emcee', 'Multi-lingual Anchor', 'Celebrity Host', 'TV Presenter', 'Radio Jockey',
            'Voice Over Artist', 'Motivational Speaker', 'Keynote Speaker', 'Stage Host', 'Digital Emcee',

            // Specialties
            'Award Show Hosting', 'Product Launch Anchor', 'Conference Emcee', 'Gala Dinner Host',
            'Auctioneer', 'Quiz Master', 'Stand-up Emcee', 'Fashion Show Presenter', 'Sports Journalist',
            'Virtual Event Specialist', 'Webinar Moderator', 'Podcast Host', 'Workshop Facilitator',

            // Geographical Tags (India)
            'Mumbai Anchors', 'Delhi Emcees', 'Bangalore Host', 'Hyderabad Anchor', 'Chennai Emcee',
            'Kolkata Presenter', 'Pune Event Host', 'Ahmedabad Anchor', 'Jaipur Emcee', 'Goa Event Hosting',
            'Chandigarh Presenter', 'Lucknow Anchor', 'Indore Emcee', 'Nagpur Host', 'Patna Anchor',

            // Skill Based Tags
            'Audience Engagement', 'Stage Presence', 'Microphone Technique', 'Script Writing',
            'Improvisational Comedy', 'Storytelling', 'Teleprompter Proficient', 'Live Streaming Expert',
            'Cross-Cultural Communication', 'Bilingual English Hindi', 'Public Relations',

            // Niche Based Tags
            'Tech Event Anchor', 'Pharma Conference Emcee', 'Automobile Launch Host', 'Real Estate Award Host',
            'Beauty Pageant Presenter', 'E-sports Shoutcaster', 'Children Event Host', 'Luxury Brand Anchor'
        ];

        foreach ($tags as $tag) {
            Tag::updateOrCreate(
                ['slug' => Str::slug($tag)],
                ['name' => $tag]
            );
        }

        // 4. Seed Initial Blog Posts
        $this->call(PostSeeder::class);

        echo "Seeding Real categories, tags, and initial posts completed successfully.\n";
    }
}
