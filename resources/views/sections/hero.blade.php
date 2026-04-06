@php $hero = config('site.hero', []); @endphp
<section id="hero" class="hero-v2" aria-label="Hero">

    <!-- Left: Content -->
    <div class="hero-v2__content">
        <div class="hero-v2__inner" data-aos="fade-right">

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
    <div class="hero-v2__media" data-hero-animate data-aos="fade-left">
        <div class="hero-v2__img-wrap">
            <img
                src="{{ asset($hero['image'] ?? 'img/gallery/vidhu_front.jpeg') }}"
                alt="{{ $hero['title'] ?? config('site.name') }}"
                class="hero-v2__img"
                fetchpriority="high"
            >
            <!-- Floating card -->
            <div class="hero-v2__float-card shadow-2xl">
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
