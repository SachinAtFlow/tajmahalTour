/**
 * Smart Header & Mobile Navigation Scripts
 * File: assets/js/header.js
 */

document.addEventListener('DOMContentLoaded', () => {
    // =========================================================================
    // 1. DESKTOP HOVER DROPDOWNS WITH GRACEFUL 250ms CLOSE DELAY
    // =========================================================================
    if (window.innerWidth >= 992) {
        document.querySelectorAll('.navbar-nav .dropdown').forEach(dropdown => {
            const menu = dropdown.querySelector('.dropdown-menu');
            let timer = null;

            dropdown.addEventListener('mouseenter', () => {
                if (timer) clearTimeout(timer);
                dropdown.classList.add('show');
                if (menu) menu.classList.add('show');
            });

            dropdown.addEventListener('mouseleave', () => {
                timer = setTimeout(() => {
                    dropdown.classList.remove('show');
                    if (menu) menu.classList.remove('show');
                    dropdown.querySelectorAll('.dropdown-submenu, .dropdown-submenu-menu').forEach(sub => sub.classList.remove('show'));
                }, 220);
            });
        });

        // Level 2 Submenus (Flyout Right)
        document.querySelectorAll('.dropdown-submenu').forEach(sub => {
            const subMenu = sub.querySelector('.dropdown-submenu-menu');
            let subTimer = null;

            sub.addEventListener('mouseenter', () => {
                if (subTimer) clearTimeout(subTimer);
                sub.classList.add('show');
                if (subMenu) subMenu.classList.add('show');
            });

            sub.addEventListener('mouseleave', () => {
                subTimer = setTimeout(() => {
                    sub.classList.remove('show');
                    if (subMenu) subMenu.classList.remove('show');
                }, 200);
            });
        });
    }

    // =========================================================================
    // 2. MOBILE DRAWER NAVIGATION & ACCORDIONS
    // =========================================================================
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenuClose = document.getElementById('mobile-menu-close');
    const mobileMenuDrawer = document.getElementById('mobile-menu-drawer');
    const mobileMenuBackdrop = document.getElementById('mobile-menu-backdrop');

    const openMobileMenu = () => {
        if (!mobileMenuDrawer || !mobileMenuBackdrop) return;
        mobileMenuDrawer.classList.add('is-open');
        mobileMenuBackdrop.classList.add('is-open');
        document.body.classList.add('overflow-hidden');
        if (mobileMenuToggle) mobileMenuToggle.setAttribute('aria-expanded', 'true');
    };

    const closeMobileMenu = () => {
        if (!mobileMenuDrawer || !mobileMenuBackdrop) return;
        mobileMenuDrawer.classList.remove('is-open');
        mobileMenuBackdrop.classList.remove('is-open');
        document.body.classList.remove('overflow-hidden');
        if (mobileMenuToggle) mobileMenuToggle.setAttribute('aria-expanded', 'false');
    };

    if (mobileMenuToggle) {
        mobileMenuToggle.addEventListener('click', (e) => {
            e.stopPropagation();
            if (mobileMenuDrawer && mobileMenuDrawer.classList.contains('is-open')) {
                closeMobileMenu();
            } else {
                openMobileMenu();
            }
        });
    }

    if (mobileMenuClose) {
        mobileMenuClose.addEventListener('click', closeMobileMenu);
    }

    if (mobileMenuBackdrop) {
        mobileMenuBackdrop.addEventListener('click', closeMobileMenu);
    }

    // Close on Escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            closeMobileMenu();
        }
    });

    // Mobile Accordion items toggle
    document.querySelectorAll('.mobile-accordion-toggle').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            const accordion = btn.closest('.mobile-accordion');
            if (!accordion) return;

            const content = Array.from(accordion.children).find(el => el.classList.contains('accordion-content'));
            const chevron = btn.querySelector('.accordion-chevron');
            if (!content) return;

            const isCurrentlyHidden = content.classList.contains('d-none');
            if (isCurrentlyHidden) {
                content.classList.remove('d-none');
                if (chevron) chevron.classList.add('is-rotated');
            } else {
                content.classList.add('d-none');
                if (chevron) chevron.classList.remove('is-rotated');
            }
        });
    });

    // Close drawer when clicking nav links
    if (mobileMenuDrawer) {
        mobileMenuDrawer.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                closeMobileMenu();
            });
        });
    }

    // =========================================================================
    // 3. HEADER ELEVATION ON SCROLL
    // =========================================================================
    const header = document.getElementById('site-smart-header');
    let isTicking = false;

    const handleHeaderScroll = () => {
        const currentScrollY = Math.max(0, window.pageYOffset || document.documentElement.scrollTop || 0);
        if (header) {
            if (currentScrollY > 15) {
                header.classList.add('shadow');
                header.classList.remove('shadow-sm');
            } else {
                header.classList.remove('shadow');
                header.classList.add('shadow-sm');
            }
        }
        isTicking = false;
    };

    window.addEventListener('scroll', () => {
        if (!isTicking) {
            window.requestAnimationFrame(handleHeaderScroll);
            isTicking = true;
        }
    }, { passive: true });

    handleHeaderScroll();
});
