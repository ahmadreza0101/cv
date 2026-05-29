if ('scrollRestoration' in history) {
    history.scrollRestoration = 'manual';
}

window.addEventListener('beforeunload', function () {
    sessionStorage.setItem('scrollY', window.scrollY);
});

document.addEventListener('DOMContentLoaded', function () {
    var savedY = sessionStorage.getItem('scrollY');
    if (savedY === null) return;

    function restoreScroll() {
        document.documentElement.style.scrollBehavior = 'auto';
        window.scrollTo(0, parseInt(savedY, 10));
        sessionStorage.removeItem('scrollY');
      
        requestAnimationFrame(function () {
            requestAnimationFrame(function () {
                document.documentElement.style.visibility = '';
                document.documentElement.style.scrollBehavior = '';
            });
        });
    }

    var heroImg = document.querySelector('.hero-img-container img');
    if (heroImg && !heroImg.complete) {
        heroImg.addEventListener('load',  restoreScroll, { once: true });
        heroImg.addEventListener('error', restoreScroll, { once: true });
    } else {
        restoreScroll();
    }
});

document.addEventListener('DOMContentLoaded', function () {

    
    document.querySelectorAll('a[href^="#"]').forEach(function (link) {
        link.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href === '#') return;

            const target = document.querySelector(href);
            if (!target) return;

            e.preventDefault();

            const headerHeight = document.querySelector('header')?.offsetHeight || 0;
            const targetY = target.getBoundingClientRect().top + window.scrollY - headerHeight;

            window.scrollTo({
                top: targetY,
                behavior: 'smooth'
            });

         
            history.pushState(null, '', href);
        });
    });



   const toggleBtn = document.getElementById('darkToggle');
const iconSun   = document.getElementById('icon-sun');
const iconMoon  = document.getElementById('icon-moon');

function applyTheme(isDark) {
    document.documentElement.classList.toggle('dark', isDark);
    if (iconSun && iconMoon) {
        iconSun.style.display = isDark ? 'flex' : 'none';
        iconMoon.style.display = isDark ? 'none' : 'flex';
    }
}

const savedTheme = localStorage.getItem('theme');
const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

if (savedTheme === 'dark' || (!savedTheme && systemPrefersDark)) {
    applyTheme(true);
} else {
    applyTheme(false);
}

if (toggleBtn) {
    toggleBtn.addEventListener('click', function () {
        const isDark = document.documentElement.classList.contains('dark');
        const newTheme = !isDark;
        
        applyTheme(newTheme);
        localStorage.setItem('theme', newTheme ? 'dark' : 'light');
    });
}


    const beforeImg = document.getElementById("before-img-target");

    if (beforeImg) {
        if (beforeImg.complete) {
            beforeImg.classList.add('is-loaded');
        } else {
            beforeImg.addEventListener('load', () => {
                beforeImg.classList.add('is-loaded');
            });
        }
    }

    const menuBtn = document.getElementById('menuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    const headerBg = document.getElementById('headerBg'); // Ambil elemen background

    if (menuBtn && mobileMenu && headerBg) {
        
        menuBtn.addEventListener('click', function () {
            mobileMenu.classList.toggle('is-open');
            
         
            if (mobileMenu.classList.contains('is-open')) {
               
                const menuHeight = mobileMenu.querySelector('.mobile-menu-inner').scrollHeight;
              
                headerBg.style.height = `calc(100% + ${menuHeight}px)`;
            } else {
              
                headerBg.style.height = '100%';
            }

            const isOpen = mobileMenu.classList.contains('is-open');
            menuBtn.setAttribute('aria-expanded', isOpen);
        });

       
        mobileMenu.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                mobileMenu.classList.remove('is-open');
                headerBg.style.height = '100%'; 
                menuBtn.setAttribute('aria-expanded', 'false');
                
            
                menuBtn.classList.remove('active');
            });
        });
    }


    window.openModal = function (type) {

        const modal =
            document.getElementById('modal-' + type);

        if (!modal) return;

        modal.style.display = 'flex';

        document.body.style.overflow = 'hidden';
    };


    window.closeModal = function (type) {

        const modal =
            document.getElementById('modal-' + type);

        if (!modal) return;

        modal.style.display = 'none';

        document.body.style.overflow = '';
    };


    window.handleBackdrop = function (event, type) {

        if (event.target === event.currentTarget) {

            closeModal(type);
        }
    };


   
    document.addEventListener('keydown', function (e) {

        if (e.key === 'Escape') {

            ['graphic', '3d', 'video']
                .forEach(function (type) {

                    const modal =
                        document.getElementById('modal-' + type);

                    if (modal) {

                        modal.style.display = 'none';
                    }
                });

            document.body.style.overflow = '';
        }
    });



    window.switchTab = function (type, index) {

        document
            .querySelectorAll(`[id^="${type}-panel-"]`)
            .forEach(function (panel) {

                panel.classList.add('hidden');
            });

        document
            .querySelectorAll(`.tab-btn-${type}`)
            .forEach(function (tab) {

                tab.classList.remove(
                    'bg-pink-500', 'bg-cyan-500', 'bg-purple-500', 'text-white',
                    'bg-pink-50', 'bg-cyan-50', 'bg-purple-50',
                    'dark:bg-gray-700',
                    'text-pink-600', 'text-cyan-600', 'text-purple-600',
                    'dark:text-pink-400', 'dark:text-cyan-400', 'dark:text-purple-400'
                );

                if (type === 'graphic') {
                    tab.classList.add('bg-pink-50', 'dark:bg-gray-700', 'text-pink-600', 'dark:text-pink-400');
                } else if (type === '3d') {
                    tab.classList.add('bg-cyan-50', 'dark:bg-gray-700', 'text-cyan-600', 'dark:text-cyan-400');
                } else {
                    tab.classList.add('bg-purple-50', 'dark:bg-gray-700', 'text-purple-600', 'dark:text-purple-400');
                }
            });

        const activePanel = document.getElementById(`${type}-panel-${index}`);
        if (activePanel) activePanel.classList.remove('hidden');

        const activeTab = document.getElementById(`tab-${type}-${index}`);
        if (!activeTab) return;

        activeTab.classList.remove(
            'bg-pink-50', 'bg-cyan-50', 'bg-purple-50',
            'dark:bg-gray-700',
            'text-pink-600', 'text-cyan-600', 'text-purple-600',
            'dark:text-pink-400', 'dark:text-cyan-400', 'dark:text-purple-400'
        );

        activeTab.classList.add('text-white');

        if (type === 'graphic') {
            activeTab.classList.add('bg-pink-500');
        } else if (type === '3d') {
            activeTab.classList.add('bg-cyan-500');
        } else {
            activeTab.classList.add('bg-purple-500');
        }
    };

});