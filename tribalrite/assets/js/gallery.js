(function() {
    const images = window.galleryImages || [];
    
    if (images.length === 0) {
        console.error('No images found in gallery');
        return;
    }

    let currentIndex = 0;
    const mainImage = document.getElementById('mainImage');
    const loader = document.getElementById('loader');
    const thumbnails = document.querySelectorAll('.thumbnail');

    function preloadImage(index) {
        if (index >= 0 && index < images.length) {
            const img = new Image();
            img.src = images[index].path;
        }
    }

    function showImage(index) {
        if (index < 0 || index >= images.length) return;
        
        currentIndex = index;
        mainImage.classList.remove('loaded');
        
        const loaderTimeout = setTimeout(() => {
            loader.classList.remove('hidden');
        }, 300);

        const img = new Image();
        img.onload = function() {
            clearTimeout(loaderTimeout);
            mainImage.src = this.src;
            mainImage.classList.add('loaded');
            loader.classList.add('hidden');
            
            thumbnails.forEach((t, i) => {
                t.classList.toggle('active', i === index);
            });
            
            thumbnails[index].scrollIntoView({
                behavior: 'smooth',
                block: 'nearest',
                inline: 'center'
            });

            preloadImage(index - 1);
            preloadImage(index + 1);
        };
        img.src = images[index].path;
    }

    // Navigation
    document.getElementById('prevBtn').addEventListener('click', () => {
        showImage(currentIndex === 0 ? images.length - 1 : currentIndex - 1);
    });

    document.getElementById('nextBtn').addEventListener('click', () => {
        showImage(currentIndex === images.length - 1 ? 0 : currentIndex + 1);
    });

    // Thumbnail clicks
    thumbnails.forEach((thumb, index) => {
        thumb.addEventListener('click', () => showImage(index));
    });

    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') {
            showImage(currentIndex === 0 ? images.length - 1 : currentIndex - 1);
        } else if (e.key === 'ArrowRight') {
            showImage(currentIndex === images.length - 1 ? 0 : currentIndex + 1);
        }
    });

    // Touch swipe
    let touchStartX = 0;
    let touchEndX = 0;

    document.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
    });

    document.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        if (touchStartX - touchEndX > 50) {
            showImage(currentIndex === images.length - 1 ? 0 : currentIndex + 1);
        } else if (touchEndX - touchStartX > 50) {
            showImage(currentIndex === 0 ? images.length - 1 : currentIndex - 1);
        }
    });

    // Initialize
    showImage(0);
})();
