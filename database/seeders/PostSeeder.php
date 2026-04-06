<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();
        $tags = Tag::all();

        if ($categories->isEmpty()) {
            $this->command->error('Please run DatabaseSeeder first to seed categories and tags.');
            return;
        }

        $postsData = [
            [
                'title' => 'Mastering the Stage: 5 Tips for Corporate Event Emcees',
                'excerpt' => 'Learn how to command attention and maintain professional energy during high-stakes corporate gatherings.',
                'youtube' => 'https://www.youtube.com/watch?v=ScMzIvxBSi4',
            ],
            [
                'title' => 'The Evolution of Virtual Hosting in the Digital Age',
                'excerpt' => 'How virtual events have transformed from a necessity into a high-end experience for global brands.',
                'youtube' => 'https://www.youtube.com/watch?v=ScMzIvxBSi4',
            ],
            [
                'title' => 'Wedding Anchoring: Creating Unforgettable Moments for Couples',
                'excerpt' => 'A guide to balancing tradition, entertainment, and emotional connection in Indian weddings.',
                'youtube' => 'https://www.youtube.com/watch?v=ScMzIvxBSi4',
            ],
            [
                'title' => 'Multilingualism: The Secret Weapon of a Top Indian Anchor',
                'excerpt' => 'Why being fluent in English, Hindi, and regional languages opens doors to Indias most prestigious events.',
                'youtube' => 'https://www.youtube.com/watch?v=ScMzIvxBSi4',
            ],
            [
                'title' => 'Award Show Hosting: Impeccable Timing and Gracious Transitions',
                'excerpt' => 'Key strategies for maintaining the pace and prestige of a national recognition evening.',
                'youtube' => 'https://www.youtube.com/watch?v=ScMzIvxBSi4',
            ],
            [
                'title' => 'Brand Launches: Turning a Product Reveal into a Moving Story',
                'excerpt' => 'How the right host can amplify your brand message and create instant market buzz.',
                'youtube' => 'https://www.youtube.com/watch?v=ScMzIvxBSi4',
            ],
            [
                'title' => 'Stage Presence: Beyond Just Speaking into a Microphone',
                'excerpt' => 'Understanding body language, eye contact, and the psychology of audience engagement.',
                'youtube' => 'https://www.youtube.com/watch?v=ScMzIvxBSi4',
            ],
            [
                'title' => 'The Future of Hybrid Events: Integrating Tech and Talent',
                'excerpt' => 'Exploring the synergy between physical venues and remote digital participation in 2026.',
                'youtube' => 'https://www.youtube.com/watch?v=ScMzIvxBSi4',
            ],
            [
                'title' => 'Motivational Speaking: Connecting with the Youth of India',
                'excerpt' => 'Insights into how storytelling can inspire the next generation of industry leaders.',
                'youtube' => 'https://www.youtube.com/watch?v=ScMzIvxBSi4',
            ],
            [
                'title' => 'Behind the Scenes: Preparing for a National Summit Host Role',
                'excerpt' => 'The research, rehearsals, and mental preparation that go into a flawless high-profile hosting gig.',
                'youtube' => 'https://www.youtube.com/watch?v=ScMzIvxBSi4',
            ],
        ];

        foreach ($postsData as $data) {
            $category = $categories->random();
            $content = "<h2>A New Standard in Excellence</h2><p>{$data['excerpt']}</p><p>Standing on a stage that spans thousands of square feet, with thousands of eyes fixed upon you, is an experience like no other. In the world of professional anchoring, especially within the vibrant and diverse Indian market, successful hosting requires more than just a clear voice. It requires an internal rhythm—an ability to read the energy of the room and pivot in a heartbeat.</p><blockquote>Success on stage is 10% talent and 90% preparation. You must know your subject, but you must also know your soul.</blockquote><p>As we look toward the future of events in India, the integration of technology and storytelling has become the hallmark of premium productions. Whether it's a high-stakes corporate award ceremony in Mumbai or a destination wedding in Jaipur, the role of the anchor is to be the thread that weaves every moment together.</p>";

            $post = Post::updateOrCreate(
                ['slug' => Str::slug($data['title'])],
                [
                    'title' => $data['title'],
                    'category_id' => $category->id,
                    'content' => $content,
                    'youtube_url' => $data['youtube'],
                    'published_at' => now()->subDays(rand(1, 30)),
                    'status' => 'published',
                    'meta_title' => $data['title'] . ' | Indian Anchors Journal',
                    'meta_description' => $data['excerpt'],
                ]
            );

            // Sync random tags
            $randomTags = $tags->random(rand(2, 5))->pluck('id');
            $post->tags()->sync($randomTags);
        }

        $this->command->info('Initial blog posts seeded successfully.');
    }
}
