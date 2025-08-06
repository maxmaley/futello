document.addEventListener('DOMContentLoaded', function() {
    // Мобильное меню
    const mobileToggle = document.querySelector('.mobile-menu-toggle');
    const mobileNav = document.querySelector('.mobile-nav');
    
    if (mobileToggle && mobileNav) {
        mobileToggle.addEventListener('click', function() {
            mobileNav.classList.toggle('active');
        });
    }
    
    // Табы для страницы прогноза
    const tabButtons = document.querySelectorAll('.tab-btn');
    const tabPanels = document.querySelectorAll('.tab-panel');
    
    if (tabButtons.length > 0) {
        document.body.classList.add('js-tabs-initialized');
        
        tabButtons.forEach(button => {
            button.addEventListener('click', function() {
                const targetTab = this.getAttribute('data-tab');
                
                // Remove active class from all buttons and panels
                tabButtons.forEach(btn => btn.classList.remove('active'));
                tabPanels.forEach(panel => panel.classList.remove('active'));
                
                // Add active class to clicked button and corresponding panel
                this.classList.add('active');
                const targetPanel = document.getElementById(targetTab);
                if (targetPanel) {
                    targetPanel.classList.add('active');
                }
            });
        });
    }
    
    // Smooth scrolling for anchor links
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    anchorLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href === '#') return;
            
            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // Animation for stats bars (when they come into view)
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const bars = entry.target.querySelectorAll('.bar-fill');
                bars.forEach(bar => {
                    const width = bar.style.width;
                    bar.style.width = '0%';
                    setTimeout(() => {
                        bar.style.width = width;
                    }, 100);
                });
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    const statsSection = document.querySelector('.summary-stats');
    if (statsSection) {
        observer.observe(statsSection);
    }
    
    // Share functionality
    const shareBtn = document.querySelector('.share-btn');
    if (shareBtn) {
        shareBtn.addEventListener('click', function() {
            if (navigator.share) {
                navigator.share({
                    title: document.title,
                    url: window.location.href
                });
            } else {
                // Fallback - copy to clipboard
                navigator.clipboard.writeText(window.location.href).then(() => {
                    showNotification('Link copied to clipboard!');
                }).catch(() => {
                    // Fallback if clipboard API fails
                    showNotification('Unable to copy link');
                });
            }
        });
    }
    
    // Form submissions
    const commentForm = document.querySelector('.comment-form');
    if (commentForm) {
        commentForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const input = this.querySelector('input');
            const comment = input.value.trim();
            
            if (comment) {
                // Here you would normally send to server
                console.log('Comment submitted:', comment);
                
                // Clear input
                input.value = '';
                
                // Show success message
                showNotification('Comment submitted!');
            }
        });
    }
    
    // Like button functionality
    const likeButtons = document.querySelectorAll('.likes');
    likeButtons.forEach(button => {
        button.addEventListener('click', function() {
            const currentText = this.textContent;
            const match = currentText.match(/\d+/);
            if (match) {
                const currentCount = parseInt(match[0]);
                const newCount = currentCount + 1;
                
                this.textContent = `👍 ${newCount}`;
                this.style.color = '#22C55E';
                
                // Add animation
                this.style.transform = 'scale(1.1)';
                setTimeout(() => {
                    this.style.transform = 'scale(1)';
                }, 150);
            }
        });
    });
    
    // Filter functionality for predictions page
    const filterSelects = document.querySelectorAll('.filter-select');
    filterSelects.forEach(select => {
        select.addEventListener('change', function() {
            // Here you would filter the matches
            console.log('Filter changed:', this.value);
        });
    });
    
    // Date navigation
    const dateNavBtns = document.querySelectorAll('.date-nav-btn');
    const dateDisplay = document.querySelector('.date-display');
    
    dateNavBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            // Here you would change the date
            console.log('Date navigation:', this.id);
            
            // Add visual feedback
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = 'scale(1)';
            }, 100);
        });
    });
    
    // Utility function to show notifications
    function showNotification(message) {
        const notification = document.createElement('div');
        notification.textContent = message;
        notification.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: #22C55E;
            color: white;
            padding: 12px 20px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            z-index: 10000;
            animation: slideIn 0.3s ease-out;
            font-family: 'Poppins', sans-serif;
        `;
        
        document.body.appendChild(notification);
        
        setTimeout(() => {
            notification.style.animation = 'slideOut 0.3s ease-out';
            setTimeout(() => {
                notification.remove();
            }, 300);
        }, 3000);
    }
});

// CSS Animation for notifications
const style = document.createElement('style');
style.textContent = `
    @keyframes slideIn {
        from {
            transform: translateX(100%);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
    
    @keyframes slideOut {
        from {
            transform: translateX(0);
            opacity: 1;
        }
        to {
            transform: translateX(100%);
            opacity: 0;
        }
    }
`;
document.head.appendChild(style);
