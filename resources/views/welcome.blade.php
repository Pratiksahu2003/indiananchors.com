<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{ config('site.name') }} | {{ config('site.tagline') }}</title>
    <meta name="description" content="{{ config('site.description') }}">
    <meta name="keywords" content="{{ config('site.keywords') }}">

    <link href="{{ asset(config('site.favicon')) }}" rel="icon">
    <link href="{{ asset(config('site.favicon')) }}" rel="apple-touch-icon">

    @vite(['resources/css/main.css', 'resources/js/main.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700&display=swap" rel="stylesheet">
</head>
<body class="index-page modern-ui">

<!-- Animated Background Orbs -->
<div class="bg-orbs">
    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>
    <div class="orb orb-3"></div>
</div>

<header id="header" class="hdr">
    <div class="container hdr__inner">

        <!-- Logo -->
        <a href="{{ url('/') }}" class="hdr__logo" aria-label="{{ config('site.name') }}">
            <img src="{{ asset(config('site.logo')) }}" alt="{{ config('site.name') }}" class="hdr__logo-img">
        </a>

        <!-- Desktop Nav -->
        <nav class="hdr__nav" id="hdr-nav" aria-label="Main navigation">
            <a href="#what" class="hdr__link">What I Offer</a>
            <a href="#corporate-event-anchors" class="hdr__link">Services</a>
            <a href="#why" class="hdr__link">Why Us</a>
            <a href="#about" class="hdr__link">About</a>
            <a href="#gallery" class="hdr__link">Gallery</a>
            <a href="#testi" class="hdr__link">Testimonials</a>
        </nav>

        <!-- Right: CTA + Burger -->
        <div class="hdr__right">
            <a href="#contact" class="hdr__cta">
                <i class="bi bi-calendar-check-fill"></i>
                <span class="hdr__cta-text">Book Now</span>
            </a>
            <a href="tel:{{ config('site.phone') }}" class="hdr__phone">
                <i class="bi bi-telephone-fill"></i>
                <span class="hdr__phone-text">{{ config('site.phone_display') }}</span>
            </a>
            <button class="hdr__burger" id="hdr-burger" type="button" aria-label="Toggle menu" aria-expanded="false" aria-controls="hdr-nav">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>

    </div>
</header>

<main class="main-modern">
    <!-- Hero Section -->
    @php $hero = config('site.hero', []); @endphp
    <section id="hero" class="hero-v2" aria-label="Hero">

        <!-- Left: Content -->
        <div class="hero-v2__content">
            <div class="hero-v2__inner">

                <span class="hero-v2__badge" data-hero-animate>
                    <i class="bi bi-trophy-fill"></i>
                    {{ $hero['badge'] ?? 'National Award Winner' }}
                </span>

                <h1 class="hero-v2__title" data-hero-animate>
                    India's Most <span class="hero-v2__highlight">Celebrated</span><br>Event Anchor
                </h1>

                <p class="hero-v2__desc" data-hero-animate>
                    {{ $hero['tagline'] ?? 'Best Anchor & Entertainer' }} — bringing energy, elegance, and unforgettable moments to every stage across India.
                </p>

                <div class="hero-v2__tags" data-hero-animate>
                    <span><i class="bi bi-building"></i> Corporate</span>
                    <span><i class="bi bi-hearts"></i> Weddings</span>
                    <span><i class="bi bi-trophy"></i> Award Shows</span>
                    <span><i class="bi bi-broadcast"></i> Virtual Events</span>
                </div>

                <div class="hero-v2__actions" data-hero-animate>
                    <a href="#contact" class="hero-v2__btn hero-v2__btn--primary">
                        <i class="bi bi-calendar-check-fill"></i>
                        Book Now
                    </a>
                    <a href="tel:{{ config('site.phone') }}" class="hero-v2__btn hero-v2__btn--outline">
                        <i class="bi bi-telephone-fill"></i>
                        {{ config('site.phone_display') }}
                    </a>
                </div>

                <div class="hero-v2__stats" data-hero-animate>
                    <div class="hero-v2__stat">
                        <span class="hero-v2__stat-number">500<sup>+</sup></span>
                        <span class="hero-v2__stat-label">Events Hosted</span>
                    </div>
                    <div class="hero-v2__stat-divider"></div>
                    <div class="hero-v2__stat">
                        <span class="hero-v2__stat-number">15<sup>+</sup></span>
                        <span class="hero-v2__stat-label">Years Experience</span>
                    </div>
                    <div class="hero-v2__stat-divider"></div>
                    <div class="hero-v2__stat">
                        <span class="hero-v2__stat-number">50<sup>+</sup></span>
                        <span class="hero-v2__stat-label">Cities Covered</span>
                    </div>
                </div>

            </div>
        </div>

        <!-- Right: Media -->
        <div class="hero-v2__media" data-hero-animate>
            <div class="hero-v2__img-wrap">
                <img
                    src="{{ asset($hero['image'] ?? 'img/gallery/vidhu_front.jpeg') }}"
                    alt="{{ $hero['title'] ?? config('site.name') }}"
                    class="hero-v2__img"
                    fetchpriority="high"
                >
                <!-- Floating card -->
                <div class="hero-v2__float-card">
                    <div class="hero-v2__float-icon"><i class="bi bi-star-fill"></i></div>
                    <div>
                        <p class="hero-v2__float-title">Youth Icon Award</p>
                        <p class="hero-v2__float-sub">Best Female Anchor — Jammu</p>
                    </div>
                </div>
                <!-- Decorative ring -->
                <div class="hero-v2__ring"></div>
            </div>
        </div>

    </section>

   

    <!-- Service: Corporate Event Anchors -->
    <section id="corporate-event-anchors" class="section-modern section-service-detail">
        <div class="container">
            <div class="service-detail-content" data-aos="fade-up">
                <span class="section-label">Services</span>
                <h2 class="section-title">Corporate Event <span class="gradient-text">Anchors</span></h2>
                <p class="service-detail-desc">From annual conferences to seminars, product launches to team offsites — Indian Anchors brings professional polish and engaging energy to every corporate gathering. Whether you need a formal keynote host or an interactive emcee who keeps the room alive, we tailor the tone to match your brand and audience.</p>
                <p class="service-detail-desc">Our corporate hosting includes seamless coordination with your event team, custom scripts aligned to your agenda, and the ability to handle Q&A sessions, panel moderation, and award presentations with confidence and flair.</p>
                <a href="#contact" class="btn-modern">Book for Your Event</a>
            </div>
        </div>
    </section>

    <!-- Service: Wedding Anchors -->
    <section id="wedding-anchors" class="section-modern section-service-detail section-service-alt">
        <div class="container">
            <div class="service-detail-content" data-aos="fade-up">
                <span class="section-label">Services</span>
                <h2 class="section-title">Wedding <span class="gradient-text">Anchors</span></h2>
                <p class="service-detail-desc">Make your big day unforgettable. Indian Anchors brings warmth, humour, and perfect flow to sangeets, receptions, and full wedding ceremonies. We ensure your guests feel included, the schedule runs smoothly, and every moment — from grand entrances to emotional exchanges — is handled with grace and energy.</p>
                <p class="service-detail-desc">Fluent in English, Hindi, Haryanavi & Punjabi, we connect with families and friends of all ages. From traditional rituals to modern celebrations, we adapt our hosting style to reflect your vision and create memories that last a lifetime.</p>
                <a href="#contact" class="btn-modern">Book for Your Wedding</a>
            </div>
        </div>
    </section>

    <!-- Service: Award Show Hosts -->
    <section id="award-show-hosts" class="section-modern section-service-detail">
        <div class="container">
            <div class="service-detail-content" data-aos="fade-up">
                <span class="section-label">Services</span>
                <h2 class="section-title">Award Show <span class="gradient-text">Hosts</span></h2>
                <p class="service-detail-desc">Recognize excellence with style. Indian Anchors honours achievers with grace, energy, and impeccable timing. Whether it's an industry gala, internal recognition night, or a high-profile awards ceremony, we ensure every honoree feels celebrated and every moment resonates with the audience.</p>
                <p class="service-detail-desc">We handle everything from opening remarks to trophy presentations, keeping the pace engaging and the atmosphere electric. Our experience with national and international award events means we deliver professionalism that matches the prestige of the occasion.</p>
                <a href="#contact" class="btn-modern">Host Your Award Night</a>
            </div>
        </div>
    </section>

    <!-- Service: Brand Launch Hosts -->
    <section id="brand-launch-hosts" class="section-modern section-service-detail section-service-alt">
        <div class="container">
            <div class="service-detail-content" data-aos="fade-up">
                <span class="section-label">Services</span>
                <h2 class="section-title">Brand Launch <span class="gradient-text">Hosts</span></h2>
                <p class="service-detail-desc">Give your brand the spotlight it deserves. Indian Anchors turns product launches, rebrand reveals, and corporate milestones into memorable experiences. We work closely with your marketing and events team to craft a script and flow that amplifies your message and creates buzz.</p>
                <p class="service-detail-desc">From intimate press gatherings to large-scale launch parties, we bring energy, sophistication, and the ability to adapt on the fly. Your brand story deserves a host who can tell it with impact — and we're here to deliver.</p>
                <a href="#contact" class="btn-modern">Launch With Us</a>
            </div>
        </div>
    </section>

    <!-- Service: Podcast Hosts -->
    <section id="podcast-hosts" class="section-modern section-service-detail">
        <div class="container">
            <div class="service-detail-content" data-aos="fade-up">
                <span class="section-label">Services</span>
                <h2 class="section-title">Podcast <span class="gradient-text">Hosts</span></h2>
                <p class="service-detail-desc">Bring your podcast to life with a host who knows how to hold attention. Indian Anchors brings clarity, warmth, and conversational flow to audio and video podcasts. Whether you need a permanent host, a guest episode host, or someone to moderate panel discussions, we help your content stand out.</p>
                <p class="service-detail-desc">Our multilingual capability and experience with diverse audiences make us ideal for podcasts targeting Indian and global listeners. From tech and business to culture and entertainment — we adapt our tone to match your brand and keep listeners engaged.</p>
                <a href="#contact" class="btn-modern">Discuss Your Podcast</a>
            </div>
        </div>
    </section>

    <!-- Service: Virtual Event Anchors -->
    <section id="virtual-event-anchors" class="section-modern section-service-detail section-service-alt">
        <div class="container">
            <div class="service-detail-content" data-aos="fade-up">
                <span class="section-label">Services</span>
                <h2 class="section-title">Virtual Event <span class="gradient-text">Anchors</span></h2>
                <p class="service-detail-desc">Virtual doesn't mean impersonal. Indian Anchors brings the same energy and connection to online events — webinars, virtual conferences, hybrid gatherings, and live-streamed celebrations. We keep remote audiences engaged, manage transitions smoothly, and create moments that feel real even across screens.</p>
                <p class="service-detail-desc">With experience in both in-person and virtual hosting, we understand the nuances of camera presence, timing, and interactive elements like Q&A and polls. Whether your audience is in the room or across the globe, we ensure they stay connected and invested.</p>
                <a href="#contact" class="btn-modern">Host Your Virtual Event</a>
            </div>
        </div>
    </section>

    <!-- Stats -->
    <section id="stats" class="section-modern section-stats">
        <div class="stats-bg"></div>
        <div class="container">
            <h2 class="stats-title" data-aos="fade-up">Numbers That <span class="gradient-text">Speak</span></h2>
            <div class="stats-grid">
                @foreach(config('site.stats', []) as $idx => $stat)
                <div class="stat-card" data-aos="zoom-in" data-aos-delay="{{ 100 + ($idx * 50) }}">
                    <span class="stat-number purecounter" data-purecounter-start="0" data-purecounter-end="{{ $stat['end'] }}" @if(!empty($stat['suffix'])) data-purecounter-suffix="{{ $stat['suffix'] }}" @endif data-purecounter-duration="2">0</span>
                    <span class="stat-label">{{ $stat['label'] }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- YouTube Videos - Watch In Action -->
    <section class="section-modern section-videos" id="videos">
        <div class="videos-bg"></div>
        <div class="container position-relative">
            <div class="videos-header" data-aos="fade-up">
                <span class="section-label">Watch</span>
                <h2 class="section-title">In <span class="gradient-text">Action</span></h2>
                <p class="videos-subtitle">See {{ config('site.name') }} bring energy, charm & unforgettable moments to every stage.</p>
            </div>
            <div class="videos-showcase" data-aos="fade-up">
                <div class="video-carousel-modern">
                    <div id="videoCarousel" class="carousel slide" data-bs-ride="carousel">
                        @if(count(config('videos.videos', [])) > 1)
                        <div class="carousel-indicators-modern">
                            @foreach(config('videos.videos') as $idx => $video)
                            <button type="button" data-bs-target="#videoCarousel" data-bs-slide-to="{{ $idx }}" class="{{ $idx === 0 ? 'active' : '' }}" aria-label="Video {{ $idx + 1 }}"></button>
                            @endforeach
                        </div>
                        @endif
                        <div class="carousel-inner">
                            @foreach(config('videos.videos', []) as $idx => $video)
                            <div class="carousel-item {{ $idx === 0 ? 'active' : '' }}">
                                <div class="video-card">
                                    <div class="video-frame">
                                        <iframe src="https://www.youtube.com/embed/{{ $video['id'] }}" title="{{ $video['title'] ?? config('site.name') }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen loading="lazy"></iframe>
                                        <div class="video-play-badge"><i class="bi bi-play-fill"></i></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @if(count(config('videos.videos', [])) > 1)
                        <button class="carousel-control-modern carousel-control-prev" type="button" data-bs-target="#videoCarousel" data-bs-slide="prev" aria-label="Previous video">
                            <i class="bi bi-chevron-left"></i>
                        </button>
                        <button class="carousel-control-modern carousel-control-next" type="button" data-bs-target="#videoCarousel" data-bs-slide="next" aria-label="Next video">
                            <i class="bi bi-chevron-right"></i>
                        </button>
                        @endif
                    </div>
                </div>
                <div class="videos-cta">
                    <a href="{{ config('site.social.youtube') }}" target="_blank" rel="noopener" class="btn-videos-cta">
                        <i class="bi bi-youtube"></i>
                        <span>More on YouTube</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section id="why" class="section-modern section-why">
        <div class="why-bg" style="background-image: url('https://picsum.photos/1920/800?random=2');"></div>
        <div class="why-overlay"></div>
        <div class="container position-relative">
            <div class="section-header light" data-aos="fade-up">
                <span class="section-label">Why Me</span>
                <h2 class="section-title">Why Choose <span class="gradient-text">{{ config('site.name') }}</span>?</h2>
            </div>
            <div class="why-grid">
                <div class="why-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="why-icon"><i class="bi bi-stars"></i></div>
                    <h3>Complete Hosting Solution</h3>
                    <p>Dynamic, captivating, and adaptable — beyond being a traditional host.</p>
                </div>
                <div class="why-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="why-icon"><i class="bi bi-emoji-smile"></i></div>
                    <h3>Endless Entertainment</h3>
                    <p>Boundless enthusiasm, energetic environment — unforgettable times.</p>
                </div>
                <div class="why-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="why-icon"><i class="bi bi-gem"></i></div>
                    <h3>Sharp & Fashionable</h3>
                    <p>Elegance, Wittiness, Eloquence, and Sophistication.</p>
                </div>
                <div class="why-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="why-icon"><i class="bi bi-lightning-charge"></i></div>
                    <h3>Active Hosting</h3>
                    <p>Exciting, mesmerizing, immersive — a journey like no other.</p>
                </div>
            </div>
            <div class="why-cta" data-aos="zoom-in">
                <a href="tel:{{ config('site.phone') }}" class="btn-hero btn-primary btn-lg">Call Now {{ config('site.phone_display') }}</a>
            </div>
        </div>
    </section>

    <!-- About -->
    <section id="about" class="section-modern section-about">
        <div class="container">
            <div class="about-grid">
                <div class="about-image" data-aos="fade-right">
                    <div class="about-image-frame">
                        <img src="{{ asset(config('site.about_image')) }}" alt="{{ config('site.name') }}">
                        <div class="about-image-accent"></div>
                    </div>
                </div>
                <div class="about-content" data-aos="fade-left">
                    <span class="section-label">About</span>
                    <h2 class="about-title">I'm <span class="gradient-text">{{ config('site.name') }}</span></h2>
                    <p class="about-subtitle">A Defining Moment: Indian Anchors Honored as Best Female Anchor (Jammu) at Youth Icon Awards</p>
                    <p class="about-text">Success is not built overnight — it is earned through consistency, confidence, and courage to stand out. For Indian Anchors, that defining moment came at the prestigious Youth Icon Awards, hosted during the grand SPL Cricket Trophy Unveiling Ceremony at the iconic Constitution Club of India.</p>
                    <p class="about-text">In the presence of respected spiritual leader Devkinandan Thakur and internationally renowned motivational speaker Vivek Bindra, Indian Anchors was proudly honored with the title of <strong>Best Female Anchor (Jammu)</strong> — a recognition that celebrates not just talent, but impact.</p>
                    <h3 class="about-heading">More Than Just an Award</h3>
                    <p class="about-text">The Best Female Anchor (Jammu) honor is not simply a trophy placed on a shelf — it represents years of dedication to mastering the art of communication and stage presence. Anchoring is not merely about speaking into a microphone; it is about owning the stage, setting the tone of an event, and creating a connection that resonates with every individual in the audience.</p>
                    <p class="about-text">Indian Anchors has consistently demonstrated these qualities. Her voice carries clarity and authority. Her presence commands attention without demanding it. Her confidence uplifts the atmosphere of any event she hosts. These are not accidental traits — they are cultivated through passion and discipline.</p>
                    <h3 class="about-heading">A Journey Still Rising</h3>
                    <p class="about-text">This milestone marks not a peak, but a stepping stone in Indian Anchors's evolving career. The Youth Icon Awards recognition affirms her growing impact and establishes her as a strong, credible, and influential name in professional anchoring.</p>
                    <p class="about-text">As she continues to elevate standards and inspire others, the title of Best Female Anchor (Jammu) will remain a proud testament to her talent, hard work, and unwavering commitment to excellence.</p>
                    <p class="about-text about-closing">Indian Anchors is not just hosting events — she is creating experiences. And this award is a powerful acknowledgment of that extraordinary journey.</p>
                    <a href="tel:{{ config('site.phone') }}" class="btn-modern">Call Now {{ config('site.phone_display') }}</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery -->
    <section id="gallery" class="section-modern section-gallery">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">Gallery</span>
                @php
                    $gallerySub = config('gallery.subtitle', 'From the Heartlands of India to International Arenas');
                    $galleryHl = config('gallery.subtitle_highlight', 'International Arenas');
                @endphp
                <h2 class="section-title">{!! str_replace($galleryHl, '<span class="gradient-text">'.e($galleryHl).'</span>', e($gallerySub)) !!}</h2>
                @if(config('gallery.description'))
                <p class="gallery-subtitle">{{ config('gallery.description') }}</p>
                @endif
            </div>
            <div class="gallery-grid">
                @foreach(config('gallery.images', []) as $idx => $img)
                <div class="gallery-item" data-aos="fade-up" data-aos-delay="{{ $idx * 50 }}">
                    <a href="{{ asset('img/gallery/' . $img['file']) }}" class="glightbox" data-glightbox="gallery" data-gallery="gallery">
                        <img src="{{ asset('img/gallery/' . $img['file']) }}" alt="{{ $img['alt'] ?? 'Gallery image' }}" loading="lazy">
                        <div class="gallery-overlay">
                            <i class="bi bi-zoom-in"></i>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section id="testi" class="section-modern section-testimonials">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">Testimonials</span>
                <h2 class="section-title">What Clients <span class="gradient-text">Say</span></h2>
            </div>
            <div class="testimonial-card" data-aos="fade-up">
                <div class="testimonial-quote">"</div>
                <div class="testimonial-content">
                    <p>Beyond anchoring, Vidhu's talent as an entertainer is equally commendable. Her lively energy and knack for bringing an element of surprise to every event make her a crowd favorite. From humorous banter to heartfelt interactions, she ensures every moment is memorable.</p>
                    <div class="testimonial-author">
                        <div class="testimonial-stars">
                            @for($i = 0; $i < 5; $i++)<i class="bi bi-star-fill"></i>@endfor
                        </div>
                        <h4>Natassha Sharma</h4>
                        <span>Mumbai, Maharashtra</span>
                    </div>
                </div>
                <div class="testimonial-image">
                    <img src="{{ asset('img/gallery/client.jpeg') }}" alt="Client">
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="section-modern section-faq">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">FAQ</span>
                <h2 class="section-title">Frequently Asked <span class="gradient-text">Questions</span></h2>
            </div>
            <div class="faq-list" id="faq-list">
                <div class="faq-item-modern faq-active" data-aos="fade-up">
                    <div class="faq-question">
                        <h3>What kind of events does {{ config('site.name') }} specialize in hosting?</h3>
                        <i class="bi bi-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>{{ config('site.name') }} specializes in hosting a wide range of events, including weddings, corporate gatherings, award ceremonies, product launches, and private parties. Her versatility and charisma make every event memorable and engaging.</p>
                    </div>
                </div>
                <div class="faq-item-modern" data-aos="fade-up">
                    <div class="faq-question">
                        <h3>What sets {{ config('site.name') }} apart from other anchors and entertainers?</h3>
                        <i class="bi bi-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>{{ config('site.name') }} combines charm, wit, and professionalism to create a lively and captivating atmosphere. Her ability to adapt to different audiences, along with her National Award-winning skills, ensures a unique and unforgettable experience for every event.</p>
                    </div>
                </div>
                <div class="faq-item-modern" data-aos="fade-up">
                    <div class="faq-question">
                        <h3>Can {{ config('site.name') }} customize hosting style for specific themes or events?</h3>
                        <i class="bi bi-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, {{ config('site.name') }} is known for tailoring hosting style to match the theme and requirements of each event. Whether it's a traditional Indian wedding or a modern corporate event, she ensures her approach aligns with the client's vision.</p>
                    </div>
                </div>
                <div class="faq-item-modern" data-aos="fade-up">
                    <div class="faq-question">
                        <h3>How can I book {{ config('site.name') }} for an event?</h3>
                        <i class="bi bi-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>To book {{ config('site.name') }}, you can contact directly at {{ config('site.phone_display') }} or email {{ config('site.email') }}. It's recommended to book in advance as the calendar fills up quickly due to high demand.</p>
                    </div>
                </div>
                <div class="faq-item-modern" data-aos="fade-up">
                    <div class="faq-question">
                        <h3>Does {{ config('site.name') }} offer multilingual hosting?</h3>
                        <i class="bi bi-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, {{ config('site.name') }} is proficient in multiple languages, enabling her to connect with diverse audiences across India and abroad. Her multilingual skills add an extra layer of personalization to her hosting.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="section-modern section-contact">
        @if(session('success'))
            <div class="flash-message flash-success" role="alert">
                <i class="bi bi-check-circle-fill"></i> {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="flash-message flash-error" role="alert">
                <i class="bi bi-exclamation-circle-fill"></i> {{ session('error') }}
            </div>
        @endif
        <div class="contact-bg" style="background-image: url('https://picsum.photos/1920/600?random=contact');"></div>
        <div class="contact-overlay"></div>
        <div class="container position-relative">
            <div class="contact-grid contact-grid-modern">
                <div class="contact-info contact-info-modern" data-aos="fade-right">
                    <span class="section-label light">Get In Touch</span>
                    <h2 class="section-title light">Ready to <span class="gradient-text">Talk</span>?</h2>
                    <p class="contact-desc">Let's create an unforgettable experience for your next event. Share your vision and we'll make it happen together.</p>
                    <ul class="contact-benefits">
                        <li><i class="bi bi-clock"></i> Response within 24 hours</li>
                        <li><i class="bi bi-shield-check"></i> No obligation — just a friendly chat</li>
                        <li><i class="bi bi-calendar-event"></i> Weddings, Corporate, Private Events</li>
                        <li><i class="bi bi-lock"></i> Your details stay private & secure</li>
                    </ul>
                    <div class="contact-direct">
                        <span class="contact-direct-label">Or reach us directly</span>
                        <a href="tel:{{ config('site.phone') }}" class="contact-phone"><i class="bi bi-telephone-fill"></i> {{ config('site.phone_display') }}</a>
                        <a href="mailto:{{ config('site.email') }}" class="contact-phone"><i class="bi bi-envelope-fill"></i> {{ config('site.email') }}</a>
                    </div>
                </div>
                <form action="{{ route('book.submit') }}" method="POST" class="contact-form contact-form-modern" data-aos="fade-left" id="lead-form">
                    @csrf
                    <input type="hidden" name="form_token" value="{{ time() }}" id="form-token">
                    <div class="form-honeypot" aria-hidden="true">
                        <label for="website_url">Leave blank</label>
                        <input type="text" name="website_url" id="website_url" tabindex="-1" autocomplete="off">
                    </div>
                    <div class="form-header">
                        <h3>Send a Message</h3>
                        <p>Fill in the details below and we'll get back to you soon.</p>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name"><i class="bi bi-person"></i> Your Name</label>
                            <input type="text" id="name" name="name" placeholder="e.g. Priya Sharma" value="{{ old('name') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="bi bi-envelope"></i> Email Address</label>
                            <input type="email" id="email" name="email" placeholder="e.g. priya@example.com" value="{{ old('email') }}" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone"><i class="bi bi-telephone"></i> Phone Number</label>
                            <input type="tel" id="phone" name="phone" placeholder="e.g. +91 98765 43210" value="{{ old('phone') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="event"><i class="bi bi-calendar3"></i> Event Date</label>
                            <input type="text" id="event" name="event" placeholder="e.g. 15 Dec 2026" value="{{ old('event') }}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="location"><i class="bi bi-geo-alt"></i> Event Location</label>
                        <input type="text" id="location" name="location" placeholder="e.g. Delhi, Mumbai, or Destination" value="{{ old('location') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="message"><i class="bi bi-chat-text"></i> Tell Us About Your Event</label>
                        <textarea id="message" name="message" rows="4" placeholder="Share your event type, guest count, theme, or any special requirements..." required>{{ old('message') }}</textarea>
                    </div>
                    @if($errors->any())
                        <p class="form-error"><i class="bi bi-info-circle"></i> Please fill all required fields correctly.</p>
                    @endif
                    <button type="submit" name="submit_form" class="btn-form-submit">
                        <span class="btn-text">Send Message</span>
                        <span class="btn-icon"><i class="bi bi-send-fill"></i></span>
                    </button>
                    <p class="form-trust"><i class="bi bi-lock-fill"></i> Your information is secure. We'll respond within 24 hours.</p>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer-new">
        <div class="container">

            <!-- Footer Grid: Brand + Links + Contact -->
            <div class="footer-new__grid">

                <!-- Brand Column -->
                <div class="footer-new__brand">
                    <a href="{{ url('/') }}" class="footer-new__logo">
                        <img src="{{ asset(config('site.logo')) }}" alt="{{ config('site.name') }}">
                    </a>
                    <p class="footer-new__tagline">Indian Anchors connects professional event anchors with brands, event planners, and production houses across India. We provide experienced hosts for corporate events, weddings, award shows, podcasts and live productions.</p>
                    <div class="footer-new__social">
                        <a href="{{ config('site.social.instagram') }}" target="_blank" rel="noopener" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="{{ config('site.social.facebook') }}" target="_blank" rel="noopener" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="{{ config('site.social.youtube_shorts') }}" target="_blank" rel="noopener" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>

                <!-- Navigation Column -->
                <div class="footer-new__col">
                    <h4 class="footer-new__col-title">Quick Links</h4>
                    <ul class="footer-new__links">
                        <li><a href="#what">What I Offer</a></li>
                        <li><a href="#why">Why Choose Us</a></li>
                        <li><a href="#about">About Me</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                        <li><a href="#testi">Testimonials</a></li>
                        <li><a href="#contact">Book Now</a></li>
                    </ul>
                </div>

                <!-- Services Column -->
                <div class="footer-new__col">
                    <h4 class="footer-new__col-title">Services</h4>
                    <ul class="footer-new__links">
                        <li><a href="#corporate-event-anchors">Corporate Events</a></li>
                        <li><a href="#wedding-anchors">Weddings</a></li>
                        <li><a href="#award-show-hosts">Award Shows</a></li>
                        <li><a href="#brand-launch-hosts">Brand Launches</a></li>
                        <li><a href="#podcast-hosts">Podcasts</a></li>
                        <li><a href="#virtual-event-anchors">Virtual Events</a></li>
                    </ul>
                </div>

                <!-- Contact Column -->
                <div class="footer-new__col">
                    <h4 class="footer-new__col-title">Get In Touch</h4>
                    <ul class="footer-new__contact">
                        <li>
                            <i class="bi bi-telephone-fill"></i>
                            <a href="tel:{{ config('site.phone') }}">{{ config('site.phone_display') }}</a>
                        </li>
                        <li>
                            <i class="bi bi-envelope-fill"></i>
                            <a href="mailto:{{ config('site.email') }}">{{ config('site.email') }}</a>
                        </li>
                        <li>
                            <i class="bi bi-geo-alt-fill"></i>
                            <span>Pan India</span>
                        </li>
                    </ul>
                    <a href="#contact" class="footer-new__cta">Book Your Event</a>
                </div>

            </div>

            <!-- Footer Bottom Bar -->
            <div class="footer-new__bottom">
                <p class="footer-new__copy">
                    © {{ config('site.footer_copyright') }}
                    <a href="{{ route('home') }}" target="_blank" rel="noopener">{{ config('site.site_url') }}</a>
                    · All Rights Reserved
                    @if(config('site.footer_powered_by'))
                        · Powered by {{ config('site.footer_powered_by') }}
                    @endif
                </p>
            </div>

        </div>
    </footer>
   
</main>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const openBtn = document.getElementById('open-chat-button');
    const closeBtn = document.getElementById('close-chat-button');
    const container = document.getElementById('chatbot-container');
    if (openBtn && closeBtn && container) {
        openBtn.addEventListener('click', () => {
            container.classList.add('active');
            openBtn.classList.add('hidden');
        });
        closeBtn.addEventListener('click', () => {
            container.classList.remove('active');
            openBtn.classList.remove('hidden');
        });
    }
});
</script>
</body>
</html>
