window.addEventListener('scroll', function() {
    var scrollIcon = document.getElementById('scroll-icon');
    if (window.scrollY > 0) {
        scrollIcon.classList.add('hidden');
    } else {
        scrollIcon.classList.remove('hidden');
    }
});