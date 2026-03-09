/**
 * Vidhu Slathia - Single Page Website
 * All JS bundled via Vite
 */
import 'bootstrap';
import AOS from 'aos';
import GLightbox from 'glightbox';
import PureCounter from '@srexi/purecounterjs';

document.addEventListener('DOMContentLoaded', () => {
    // AOS
    AOS.init({ duration: 800, once: true, offset: 50 });

    // Header scroll effect (modern UI)
    const header = document.querySelector('.header-modern');
    if (header) {
        const onScroll = () => header.classList.toggle('scrolled', window.scrollY > 50);
        window.addEventListener('scroll', onScroll);
        onScroll();
    }

    // GLightbox - gallery lightbox (data-glightbox groups images for prev/next)
    GLightbox({
        selector: '#gallery [data-glightbox]',
        touchNavigation: true,
        loop: true,
    });

    // Mobile nav (legacy + modern)
    const toggle = document.querySelector('.mobile-nav-toggle');
    const navmenu = document.querySelector('#navmenu');
    const navModern = document.querySelector('.nav-modern ul');
    if (toggle && navmenu) {
        toggle.addEventListener('click', () => {
            navmenu.classList.toggle('mobile-nav-active');
            toggle.classList.toggle('bi-list');
            toggle.classList.toggle('bi-x');
        });
    }
    if (toggle && navModern) {
        toggle.addEventListener('click', () => {
            navModern.classList.toggle('mobile-open');
            toggle.classList.toggle('active');
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

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href === '#') return;
            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });
});
