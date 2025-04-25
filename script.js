// Wait for the DOM content to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
    // Preloader
    window.addEventListener('load', function() {
      const preloader = document.querySelector('.preloader');
      preloader.style.opacity = '0';
      preloader.addEventListener('transitionend', function() {
        preloader.style.display = 'none';
      });
    });

    // ...existing code...

    // Section titles
    const sectionTitles = document.querySelectorAll('.section-title-01, .section-title-02');
    
    sectionTitles.forEach(title => {
      const text = title.textContent;
      const span = document.createElement('span');
      span.classList.add('section-title-bg');
      span.textContent = text;
      title.appendChild(span);
    });

    // ...existing code...
});
