<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Vidhu Slathia | India's National Award Winner - Best Anchor & Entertainer</title>
    <meta name="description" content="India's National Award Winner - Best Anchor and Entertainer">
    <meta name="keywords" content="anchor, entertainer, wedding host, corporate events, Vidhu Slathia">

    <link href="{{ asset('img/fav.png') }}" rel="icon">
    <link href="{{ asset('img/fav.png') }}" rel="apple-touch-icon">

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

<header id="header" class="header-modern">
    <div class="container header-inner">
        <a href="{{ url('/') }}" class="logo-modern">
            <img src="{{ asset('img/logo.png') }}" alt="Vidhu Slathia" class="logo-img">
        </a>
        <nav class="nav-modern">
            <ul>
                <li><a href="#what">What I Offer</a></li>
                <li><a href="#why">Why Choose Us</a></li>
                <li><a href="#about">About Me</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#testi">Testimonials</a></li>
            </ul>
            <button class="mobile-nav-toggle d-xl-none" aria-label="Menu"><span></span><span></span><span></span></button>
        </nav>
        <a class="cta-modern" href="tel:917838663434">
            <span class="cta-text">Call +91-7838663434</span>
            <span class="cta-icon"><i class="bi bi-telephone-fill"></i></span>
        </a>
    </div>
</header>

<main class="main-modern">
    <!-- Hero Section - Cinematic -->
    <section id="hero" class="hero-modern">
        <div class="hero-bg" style="background-image: url('https://picsum.photos/1920/1080?random=1');"></div>
        <div class="hero-overlay"></div>
        <div class="hero-noise"></div>
        <div class="hero-content-modern">
            <div class="hero-badge animate-fade-in">National Award Winner</div>
            <h1 class="hero-title">
                <span class="line line-1"><span class="word">VIDHU</span></span>
                <span class="line line-2"><span class="word">SLATHIA</span></span>
            </h1>
            <p class="hero-tagline animate-slide-up">Best Anchor & Entertainer — Weddings • Corporate • Events</p>
            <div class="hero-cta-group animate-slide-up">
                <a href="#contact" class="btn-hero btn-primary">Book Now</a>
                <a href="#about" class="btn-hero btn-outline">Discover More</a>
            </div>
            <div class="hero-scroll">
                <span class="scroll-text">Scroll</span>
                <div class="scroll-line"></div>
            </div>
        </div>
    </section>

    <!-- What I Offer -->
    <section id="what" class="section-modern section-offer">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">Services</span>
                <h2 class="section-title">What I <span class="gradient-text">Offer</span></h2>
                <p class="offer-section-subtitle">Professional hosting that turns every moment into a memory — from weddings to boardrooms.</p>
                <p class="offer-section-desc">As India's National Award Winner for Best Anchor & Entertainer, I bring professional hosting, infectious energy, and a personal touch to every occasion — from intimate celebrations to large-scale corporate events.</p>
            </div>
            <div class="offer-grid">
                <div class="offer-card offer-cta" data-aos="fade-up" data-aos-delay="100">
                    <div class="offer-card-inner">
                        <h3>Elevate Your Event</h3>
                        <p>Whether it's a wedding, corporate gala, or private celebration — I tailor my hosting style to match your vision. From custom scripts and flow design to seamless coordination with your team, every detail is crafted to reflect your brand and audience.</p>
                        <p>Fluent in English, Hindi, Haryanavi & Punjabi, I connect with diverse audiences and create moments that resonate long after the lights go down.</p>
                        <p class="offer-cta-note">15+ years of experience • Worked with top celebrities & brands • National & international events</p>
                        <a href="#contact" class="btn-modern">Work With Me</a>
                    </div>
                </div>
                <div class="offer-card offer-featured" data-aos="fade-up" data-aos-delay="200">
                    <div class="offer-image-wrap">
                        <img src="{{ asset('img/gallery/offer.jpeg') }}" alt="Vidhu Slathia - Events">
                        <div class="offer-image-overlay"></div>
                    </div>
                </div>
                <div class="offer-card offer-list" data-aos="fade-up" data-aos-delay="300">
                    <ul class="offer-types">
                        <li><i class="bi bi-heart-fill"></i><span><strong>Weddings</strong> — Sangeet, reception & full wedding hosting. I bring warmth, humour and flow so your big day runs smoothly and guests feel included.</span></li>
                        <li><i class="bi bi-people-fill"></i><span><strong>Team Building</strong> — Corporate offsites & engagement events. Interactive hosting that boosts morale and strengthens team bonds.</span></li>
                        <li><i class="bi bi-briefcase-fill"></i><span><strong>Corporate</strong> — Conferences, launches & award nights. Professional, polished hosting that elevates your brand and keeps audiences engaged.</span></li>
                        <li><i class="bi bi-mic-fill"></i><span><strong>Award Ceremonies</strong> — Gala nights & recognition events. I honour achievers with grace and energy, making every moment feel special.</span></li>
                        <li><i class="bi bi-stars"></i><span><strong>Private Parties</strong> — Birthdays, anniversaries & celebrations. Personalised hosting that matches your vibe and keeps the party going.</span></li>
                    </ul>
                </div>
            </div>
            <div class="offer-benefits" data-aos="fade-up">
                <div class="offer-benefit-item"><i class="bi bi-check2-circle"></i> Custom scripts & flow design</div>
                <div class="offer-benefit-item"><i class="bi bi-check2-circle"></i> Multilingual hosting</div>
                <div class="offer-benefit-item"><i class="bi bi-check2-circle"></i> Coordination with your team</div>
                <div class="offer-benefit-item"><i class="bi bi-check2-circle"></i> Professional & punctual</div>
            </div>
        </div>
    </section>

    <!-- Stats -->
    <section id="stats" class="section-modern section-stats">
        <div class="stats-bg"></div>
        <div class="container">
            <h2 class="stats-title" data-aos="fade-up">Numbers That <span class="gradient-text">Speak</span></h2>
            <div class="stats-grid">
                <div class="stat-card" data-aos="zoom-in" data-aos-delay="100">
                    <span class="stat-number purecounter" data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="2">0</span>
                    <span class="stat-label">Shows Hosted</span>
                </div>
                <div class="stat-card" data-aos="zoom-in" data-aos-delay="200">
                    <span class="stat-number purecounter" data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="2">0</span>
                    <span class="stat-label">Years Experience</span>
                </div>
                <div class="stat-card" data-aos="zoom-in" data-aos-delay="300">
                    <span class="stat-number purecounter" data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="2">0</span>
                    <span class="stat-label">Events Worldwide</span>
                </div>
                <div class="stat-card" data-aos="zoom-in" data-aos-delay="400">
                    <span class="stat-number purecounter" data-purecounter-start="0" data-purecounter-end="98" data-purecounter-duration="2">0</span>
                    <span class="stat-label">% Satisfaction</span>
                </div>
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
                <p class="videos-subtitle">See Vidhu Slathia bring energy, charm & unforgettable moments to every stage.</p>
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
                                        <iframe src="https://www.youtube.com/embed/{{ $video['id'] }}" title="{{ $video['title'] ?? 'Vidhu Slathia' }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen loading="lazy"></iframe>
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
                    <a href="https://www.youtube.com/@anchoratulsharma3002" target="_blank" rel="noopener" class="btn-videos-cta">
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
                <h2 class="section-title">Why Choose <span class="gradient-text">Vidhu Slathia</span>?</h2>
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
                <a href="tel:917838663434" class="btn-hero btn-primary btn-lg">Call Now +91-7838663434</a>
            </div>
        </div>
    </section>

    <!-- About -->
    <section id="about" class="section-modern section-about">
        <div class="container">
            <div class="about-grid">
                <div class="about-image" data-aos="fade-right">
                    <div class="about-image-frame">
                        <img src="{{ asset('img/gallery/vidhu_front.jpeg') }}" alt="Vidhu Slathia">
                        <div class="about-image-accent"></div>
                    </div>
                </div>
                <div class="about-content" data-aos="fade-left">
                    <span class="section-label">About</span>
                    <h2 class="about-title">I'm <span class="gradient-text">Vidhu Slathia</span></h2>
                    <p class="about-subtitle">A Defining Moment: Vidhu Slathia Honored as Best Female Anchor (Jammu) at Youth Icon Awards</p>
                    <p class="about-text">Success is not built overnight — it is earned through consistency, confidence, and courage to stand out. For Vidhu Slathia, that defining moment came at the prestigious Youth Icon Awards, hosted during the grand SPL Cricket Trophy Unveiling Ceremony at the iconic Constitution Club of India.</p>
                    <p class="about-text">In the presence of respected spiritual leader Devkinandan Thakur and internationally renowned motivational speaker Vivek Bindra, Vidhu Slathia was proudly honored with the title of <strong>Best Female Anchor (Jammu)</strong> — a recognition that celebrates not just talent, but impact.</p>
                    <h3 class="about-heading">More Than Just an Award</h3>
                    <p class="about-text">The Best Female Anchor (Jammu) honor is not simply a trophy placed on a shelf — it represents years of dedication to mastering the art of communication and stage presence. Anchoring is not merely about speaking into a microphone; it is about owning the stage, setting the tone of an event, and creating a connection that resonates with every individual in the audience.</p>
                    <p class="about-text">Vidhu Slathia has consistently demonstrated these qualities. Her voice carries clarity and authority. Her presence commands attention without demanding it. Her confidence uplifts the atmosphere of any event she hosts. These are not accidental traits — they are cultivated through passion and discipline.</p>
                    <h3 class="about-heading">A Journey Still Rising</h3>
                    <p class="about-text">This milestone marks not a peak, but a stepping stone in Vidhu Slathia's evolving career. The Youth Icon Awards recognition affirms her growing impact and establishes her as a strong, credible, and influential name in professional anchoring.</p>
                    <p class="about-text">As she continues to elevate standards and inspire others, the title of Best Female Anchor (Jammu) will remain a proud testament to her talent, hard work, and unwavering commitment to excellence.</p>
                    <p class="about-text about-closing">Vidhu Slathia is not just hosting events — she is creating experiences. And this award is a powerful acknowledgment of that extraordinary journey.</p>
                    <a href="tel:917838663434" class="btn-modern">Call Now +91-7838663434</a>
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
                        <h3>What kind of events does Vidhu Slathia specialize in hosting?</h3>
                        <i class="bi bi-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Vidhu Slathia specializes in hosting a wide range of events, including weddings, corporate gatherings, award ceremonies, product launches, and private parties. Her versatility and charisma make every event memorable and engaging.</p>
                    </div>
                </div>
                <div class="faq-item-modern" data-aos="fade-up">
                    <div class="faq-question">
                        <h3>What sets Vidhu Slathia apart from other anchors and entertainers?</h3>
                        <i class="bi bi-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Vidhu Slathia combines charm, wit, and professionalism to create a lively and captivating atmosphere. Her ability to adapt to different audiences, along with her National Award-winning skills, ensures a unique and unforgettable experience for every event.</p>
                    </div>
                </div>
                <div class="faq-item-modern" data-aos="fade-up">
                    <div class="faq-question">
                        <h3>Can Vidhu Slathia customize her hosting style for specific themes or events?</h3>
                        <i class="bi bi-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, Vidhu Slathia is known for tailoring her hosting style to match the theme and requirements of each event. Whether it's a traditional Indian wedding or a modern corporate event, she ensures her approach aligns with the client's vision.</p>
                    </div>
                </div>
                <div class="faq-item-modern" data-aos="fade-up">
                    <div class="faq-question">
                        <h3>How can I book Vidhu Slathia for an event?</h3>
                        <i class="bi bi-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>To book Vidhu Slathia, you can contact her directly at +91-7838663434 or email digital@tytil.com. It's recommended to book in advance as her calendar fills up quickly due to high demand.</p>
                    </div>
                </div>
                <div class="faq-item-modern" data-aos="fade-up">
                    <div class="faq-question">
                        <h3>Does Vidhu Slathia offer multilingual hosting?</h3>
                        <i class="bi bi-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, Vidhu Slathia is proficient in multiple languages, enabling her to connect with diverse audiences across India and abroad. Her multilingual skills add an extra layer of personalization to her hosting.</p>
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
                        <a href="tel:917838663434" class="contact-phone"><i class="bi bi-telephone-fill"></i> +91-7838663434</a>
                        <a href="mailto:digital@tytil.com" class="contact-phone"><i class="bi bi-envelope-fill"></i> digital@tytil.com</a>
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
    <footer class="footer-modern">
        <div class="container">
            <div class="footer-top">
                <a href="{{ url('/') }}" class="footer-logo">
                    <img src="{{ asset('img/logo.png') }}" alt="Vidhu Slathia">
                </a>
                <nav class="footer-nav">
                    <a href="#what">What I Offer</a>
                    <a href="#why">Why Choose Us</a>
                    <a href="#about">About Me</a>
                    <a href="#gallery">Gallery</a>
                    <a href="#testi">Testimonials</a>
                </nav>
                <div class="footer-social">
                    <a href="https://www.instagram.com/anchoratulsharma/" target="_blank" rel="noopener"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.facebook.com/atulsharma.anchor" target="_blank" rel="noopener"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.youtube.com/@anchoratulsharma3002/shorts" target="_blank" rel="noopener"><i class="bi bi-youtube"></i></a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© 2026 <a href="https://www.dywix.com/" target="_blank" rel="noopener">DyWix.Com</a> & Studio space powered by Suganta International. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top-modern"><i class="bi bi-arrow-up"></i></a>

    <!-- Float Contact -->
    <div class="float-contact" id="chatbot-open-container">
        <button class="float-btn" id="open-chat-button" aria-label="Contact">
            <i class="bi bi-chat-dots-fill"></i>
        </button>
        <div class="float-dropdown" id="chatbot-container">
            <a href="tel:917838663434" class="float-link"><i class="bi bi-telephone-fill"></i> Call</a>
            <a href="https://wa.me/917838663434" target="_blank" rel="noopener" class="float-link"><i class="bi bi-whatsapp"></i> WhatsApp</a>
            <a href="mailto:digital@tytil.com" class="float-link"><i class="bi bi-envelope-fill"></i> Email</a>
            <button class="float-close" id="close-chat-button" aria-label="Close"><i class="bi bi-x-lg"></i></button>
        </div>
    </div>
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
