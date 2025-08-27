document.addEventListener('DOMContentLoaded', function () {
    // Smooth scrolling for navigation links
    const navLinks = document.querySelectorAll('nav a[href^="#"]');
    navLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const href = this.getAttribute('href');
            const targetElement = document.querySelector(href);
            if (targetElement) {
                targetElement.scrollIntoView({ behavior: 'smooth' });
            }
            // Close mobile menu if open
            const mobileMenu = document.getElementById('mobile-menu');
            if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.add('hidden');
                document.getElementById('mobile-menu-open-icon').classList.remove('hidden');
                document.getElementById('mobile-menu-close-icon').classList.add('hidden');
            }
        });
    });

    // Mobile menu toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const openIcon = document.getElementById('mobile-menu-open-icon');
    const closeIcon = document.getElementById('mobile-menu-close-icon');

    if (mobileMenuButton && mobileMenu && openIcon && closeIcon) {
        mobileMenuButton.addEventListener('click', function () {
            mobileMenu.classList.toggle('hidden');
            openIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });
    }


    // Change nav background on scroll
    const nav = document.getElementById('main-nav');
    if (nav) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 50) {
                nav.classList.remove('bg-transparent');
                nav.classList.add('bg-background/80', 'backdrop-blur-md', 'border-b', 'border-border/50', 'shadow-elegant');
            } else {
                nav.classList.add('bg-transparent');
                nav.classList.remove('bg-background/80', 'backdrop-blur-md', 'border-b', 'border-border/50', 'shadow-elegant');
            }
        });
    }

    // Back to top button
    const backToTopButton = document.getElementById('back-to-top');
    if (backToTopButton) {
        backToTopButton.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // Contact form submission
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();
            const name = document.getElementById('name').value;
            const message = document.getElementById('message').value;
            const phoneNumber = '918547470675';
            const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(`Hi, I'm ${name}. ${message}`)}`;
            window.open(whatsappUrl, '_blank');
        });
    }

    // Scroll-triggered animations
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in');
                entry.target.classList.remove('opacity-0');
            }
        });
    }, {
        threshold: 0.1
    });

    const testimonialCards = document.querySelectorAll('.testimonial-card');
    testimonialCards.forEach(card => {
        observer.observe(card);
    });
});
