/* BlueMarket Hero Interactive JavaScript */

document.addEventListener('DOMContentLoaded', function() {
    
    // Hero animations on load
    const heroTitle = document.querySelector('.hero-title');
    const heroSubtitle = document.querySelector('.hero-subtitle');
    const searchBox = document.querySelector('.search-box');
    const featureBadges = document.querySelectorAll('.feature-badge');
    
    // Staggered animation for elements
    // setTimeout(() => {
    //     if (heroTitle) heroTitle.style.animation = 'shimmer 3s ease-in-out infinite, fadeInUp 1s ease both';
    // }, 2000);
    
    setTimeout(() => {
        if (heroSubtitle) heroSubtitle.style.animation = 'fadeInUp 1s ease both';
    }, 600);
    
    setTimeout(() => {
        if (searchBox) searchBox.style.animation = 'slideInUp 1s ease both';
    }, 1000);
    
    // Feature badges animation
    featureBadges.forEach((badge, index) => {
        setTimeout(() => {
            badge.style.animation = 'fadeIn 0.8s ease both';
        }, 1400 + (index * 200));
    });
    
    // Search box interactions
    const searchInput = document.querySelector('.search-box input');
    const searchButton = document.querySelector('.search-box button');
    
    if (searchInput) {
        searchInput.addEventListener('focus', function() {
            this.parentElement.parentElement.style.transform = 'scale(1.02)';
            this.parentElement.parentElement.style.boxShadow = '0 25px 50px rgba(0,0,0,0.25), 0 0 0 1px rgba(255,255,255,0.2)';
        });
        
        searchInput.addEventListener('blur', function() {
            this.parentElement.parentElement.style.transform = 'scale(1)';
            this.parentElement.parentElement.style.boxShadow = '0 20px 40px rgba(0,0,0,0.15), 0 0 0 1px rgba(255,255,255,0.1)';
        });
        
        // Dynamic placeholder text
        const placeholders = [
            'Cari produk, kategori, atau brand favorit Anda...',
            'Temukan smartphone terbaru...',
            'Cari fashion trending...',
            'Dapatkan gadget terkini...',
            'Temukan furniture impian...'
        ];
        
        let placeholderIndex = 0;
        setInterval(() => {
            if (!searchInput.matches(':focus')) {
                placeholderIndex = (placeholderIndex + 1) % placeholders.length;
                searchInput.placeholder = placeholders[placeholderIndex];
            }
        }, 3000);
    }
    
    // Feature badges hover effects
    featureBadges.forEach(badge => {
        badge.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px) scale(1.05)';
            this.style.background = 'rgba(255,255,255,0.3)';
        });
        
        badge.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
            this.style.background = 'rgba(255,255,255,0.15)';
        });
    });
    
    // Scroll indicator click
    const scrollIndicator = document.querySelector('.scroll-indicator');
    if (scrollIndicator) {
        scrollIndicator.addEventListener('click', function() {
            const categoriesSection = document.querySelector('.container.my-5.py-5');
            if (categoriesSection) {
                categoriesSection.scrollIntoView({ 
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    }
    
    // Parallax effect for floating elements
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const floatingElements = document.querySelectorAll('.floating-icon');
        
        floatingElements.forEach((element, index) => {
            const speed = 0.5 + (index * 0.1);
            element.style.transform = `translateY(${scrolled * speed}px) rotate(${scrolled * 0.1}deg)`;
        });
    });
    
    // Search functionality
    if (searchButton) {
        searchButton.addEventListener('click', function() {
            const searchTerm = searchInput.value.trim();
            if (searchTerm) {
                // Add loading animation
                this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Mencari...';
                this.disabled = true;
                
                // Simulate search (replace with actual search functionality)
                setTimeout(() => {
                    this.innerHTML = '<i class="fas fa-search"></i> Cari Sekarang';
                    this.disabled = false;
                    alert(`Mencari: "${searchTerm}"\n\nFitur pencarian akan segera tersedia!`);
                }, 1500);
            } else {
                // Shake animation for empty search
                searchBox.style.animation = 'shake 0.5s ease-in-out';
                setTimeout(() => {
                    searchBox.style.animation = '';
                }, 500);
            }
        });
    }
    
    // Enter key for search
    if (searchInput) {
        searchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                searchButton.click();
            }
        });
    }
    
    // Add shake animation keyframes
    const style = document.createElement('style');
    style.textContent = `
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
            20%, 40%, 60%, 80% { transform: translateX(5px); }
        }
    `;
    document.head.appendChild(style);
});

// Intersection Observer for animations
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Observe elements for scroll animations
document.addEventListener('DOMContentLoaded', function() {
    const animatedElements = document.querySelectorAll('.category-card, .product-card, .stat-item');
    animatedElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
        observer.observe(el);
    });
});
