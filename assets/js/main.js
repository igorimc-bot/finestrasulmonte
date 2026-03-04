document.addEventListener('DOMContentLoaded', () => {
    document.body.classList.add('loaded');
    const header = document.querySelector('header');
    const mobileToggle = document.querySelector('.mobile-toggle');
    const navLinks = document.querySelector('.nav-links');

    if (mobileToggle) {
        mobileToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
    }

    // Header scroll background
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

    // Intersection Observer for scroll reveal
    const reveals = document.querySelectorAll('.reveal');
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, { threshold: 0.1 });

    reveals.forEach(reveal => revealObserver.observe(reveal));

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if (targetId && targetId !== '#') {
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            }
        });
    });

    // --- Cookie Banner Logic ---
    const cookieBanner = document.getElementById('cookie-banner');
    const cookieModal = document.getElementById('cookie-modal');
    
    const btnAcceptAll = document.getElementById('cookie-accept-all');
    const btnRejectAll = document.getElementById('cookie-reject-all');
    const btnPreferences = document.getElementById('cookie-preferences-btn');
    
    const btnCloseModal = document.getElementById('close-cookie-modal');
    const btnSavePreferences = document.getElementById('cookie-save-preferences');
    
    const toggleAnalytics = document.getElementById('toggle-analytics');
    const toggleMarketing = document.getElementById('toggle-marketing');

    // Check if consent has already been given
    const cookieConsent = localStorage.getItem('cookieConsent');
    
    if (!cookieConsent) {
        // Show banner if no consent is found
        setTimeout(() => {
            cookieBanner.style.display = 'flex';
        }, 1000);
    } else {
        // Load preferences if they exist
        try {
            const consentData = JSON.parse(cookieConsent);
            if (toggleAnalytics) toggleAnalytics.checked = consentData.analytics;
            if (toggleMarketing) toggleMarketing.checked = consentData.marketing;
            
            // Execute analytics / marketing scripts here based on consent
            if (consentData.analytics) {
                // initAnalytics();
            }
        } catch (e) {
            console.error('Error parsing cookie consent data', e);
        }
    }

    // Accept All
    if (btnAcceptAll) {
        btnAcceptAll.addEventListener('click', () => {
            saveConsent(true, true);
        });
    }

    // Reject non-essential
    if (btnRejectAll) {
        btnRejectAll.addEventListener('click', () => {
            saveConsent(false, false);
        });
    }

    // Open Preferences Modal
    if (btnPreferences) {
        btnPreferences.addEventListener('click', () => {
            cookieModal.style.display = 'flex';
            // Sync toggles with localStorage if exists
            if (cookieConsent) {
                const consentData = JSON.parse(cookieConsent);
                toggleAnalytics.checked = consentData.analytics;
                toggleMarketing.checked = consentData.marketing;
            } else {
                toggleAnalytics.checked = false;
                toggleMarketing.checked = false;
            }
        });
    }

    // Close Modal
    if (btnCloseModal) {
        btnCloseModal.addEventListener('click', () => {
            cookieModal.style.display = 'none';
        });
    }

    // Save Preferences from Modal
    if (btnSavePreferences) {
        btnSavePreferences.addEventListener('click', () => {
            saveConsent(toggleAnalytics.checked, toggleMarketing.checked);
        });
    }

    // Close modal when clicking outside of the content
    window.addEventListener('click', (e) => {
        if (e.target === cookieModal) {
            cookieModal.style.display = 'none';
        }
    });

    function saveConsent(analytics, marketing) {
        const consentData = {
            necessary: true,
            analytics: analytics,
            marketing: marketing,
            timestamp: new Date().toISOString()
        };
        
        localStorage.setItem('cookieConsent', JSON.stringify(consentData));
        cookieBanner.style.display = 'none';
        cookieModal.style.display = 'none';
        
        // You can dispatch a custom event here to trigger script loading dynamically
        document.dispatchEvent(new CustomEvent('cookieConsentUpdated', { detail: consentData }));
    }
});
