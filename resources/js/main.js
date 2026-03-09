/**
 * Indian Anchors - Single Page Website
 * All JS bundled via Vite
 */
import 'bootstrap';
import AOS from 'aos';
import GLightbox from 'glightbox';
import PureCounter from '@srexi/purecounterjs';

document.addEventListener('DOMContentLoaded', () => {
    // PureCounter - animate numbers when in view
    new PureCounter();

    // AOS
    AOS.init({ duration: 800, once: true, offset: 50 });

    // Header scroll effect (modern UI)
    const header = document.querySelector('.header-modern');
    if (header) {
        const onScroll = () => header.classList.toggle('scrolled', window.scrollY > 50);
        window.addEventListener('scroll', onScroll);
        onScroll();
    }

    // Hero staggered entrance animations
    const hero = document.querySelector('.hero-v2, .hero-notion, .hero-split, .hero-premium');
    if (hero) {
        hero.classList.add('hero-visible');
        const animateEls = hero.querySelectorAll('[data-hero-animate]');
        animateEls.forEach((el, i) => {
            el.style.animationDelay = `${0.12 + i * 0.1}s`;
        });
    }

    // GLightbox - gallery lightbox (data-glightbox groups images for prev/next)
    GLightbox({
        selector: '#gallery [data-glightbox]',
        touchNavigation: true,
        loop: true,
    });

    // Mobile nav toggle - open/close on click
    const mobileToggle = document.querySelector('.mobile-nav-toggle');
    const navList = document.querySelector('.nav-modern ul');
    if (mobileToggle && navList) {
        mobileToggle.addEventListener('click', () => {
            const isOpen = navList.classList.toggle('mobile-open');
            mobileToggle.classList.toggle('active', isOpen);
            mobileToggle.setAttribute('aria-expanded', isOpen);
        });
        // Close menu when clicking a nav link (smooth scroll will handle navigation)
        navList.querySelectorAll('a').forEach((link) => {
            link.addEventListener('click', () => {
                navList.classList.remove('mobile-open');
                mobileToggle.classList.remove('active');
                mobileToggle.setAttribute('aria-expanded', 'false');
            });
        });
    }

    // FAQ accordion - event delegation for reliable toggle
    const faqList = document.getElementById('faq-list') || document.querySelector('.faq-list');
    if (faqList) {
        faqList.addEventListener('click', (e) => {
            const item = e.target.closest('.faq-item-modern, .faq-item');
            if (!item) return;
            e.preventDefault();
            const isActive = item.classList.contains('faq-active');
            faqList.querySelectorAll('.faq-item, .faq-item-modern').forEach((i) => i.classList.remove('faq-active'));
            if (!isActive) item.classList.add('faq-active');
        });
    }

    // Scroll to top
    const scrollTop = document.querySelector('#scroll-top');
    if (scrollTop) {
        window.addEventListener('scroll', () => scrollTop.classList.toggle('active', window.scrollY > 100));
        scrollTop.addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // Smooth scroll for anchor links (nav, footer, in-page)
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href === '#' || !href) return;
            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                const headerOffset = 90;
                const elPos = target.getBoundingClientRect().top + window.scrollY;
                window.scrollTo({ top: elPos - headerOffset, behavior: 'smooth' });
            }
        });
    });
});
