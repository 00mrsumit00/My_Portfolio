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

  
  
    // Initialize AOS (Animate on Scroll)
    AOS.init({
      duration: 1000,
      offset: 100,
      once: true
    });
  
    // Theme Toggle
    const themeToggle = document.getElementById('themeToggle');
    const body = document.body;
    
    // Check for saved theme in localStorage
    if (localStorage.getItem('theme') === 'dark') {
      body.classList.add('dark-theme');
    }
    
    themeToggle.addEventListener('click', function() {
      body.classList.toggle('dark-theme');
      // Save theme preference
      if (body.classList.contains('dark-theme')) {
        localStorage.setItem('theme', 'dark');
      } else {
        localStorage.setItem('theme', 'light');
      }
    });
  
    // Scroll to top button
    const scrollTopBtn = document.getElementById('scrollToTop');
    
    window.addEventListener('scroll', function() {
      if (window.scrollY > 300) {
        scrollTopBtn.classList.add('active');
      } else {
        scrollTopBtn.classList.remove('active');
      }
    });
    
    scrollTopBtn.addEventListener('click', function() {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  
    // Menu button toggle
    const menuBtn = document.querySelector('.menu-btn');
    const navigation = document.querySelector('.navigation');
    const navLinks = document.querySelectorAll('.nav_link');
    
    menuBtn.addEventListener('click', function() {
      menuBtn.classList.toggle('active');
      navigation.classList.toggle('active');
    });
    
    // Close menu when clicking a nav link (mobile)
    navLinks.forEach(link => {
      link.addEventListener('click', function() {
        menuBtn.classList.remove('active');
        navigation.classList.remove('active');
      });
    });
  
    // Sticky header
    const header = document.querySelector('header');
    
    window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
        header.classList.add('sticky');
      } else {
        header.classList.remove('sticky');
      }
    });
  
    // Active nav link on scroll
    const sections = document.querySelectorAll('section');
    
    window.addEventListener('scroll', function() {
      let current = '';
      
      sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        
        if (scrollY >= (sectionTop - sectionHeight / 3)) {
          current = section.getAttribute('id');
        }
      });
      
      navLinks.forEach(link => {
        link.classList.remove('active-link');
        if (link.getAttribute('href').substring(1) === current) {
          link.classList.add('active-link');
        }
      });
    });
  
    // Typed.js for animated text
    new Typed('.typed_out', {
      strings: [
        'Front-End Developer',
        'Java Programmer',
        'Python Developer',
        'UI/UX Designer'
      ],
      typeSpeed: 50,
      backSpeed: 30,
      backDelay: 2000,
      loop: true
    });
  
    // Counter animation
    const counters = document.querySelectorAll('.counter');
    
    function runCounter() {
      counters.forEach(counter => {
        const target = Number(counter.getAttribute('data-target'));
        const count = +counter.innerText;
        const increment = target / 100;
        
        if (count < target) {
          counter.innerText = Math.ceil(count + increment);
          setTimeout(runCounter, 50);
        } else {
          counter.innerText = target;
        }
      });
    }
    
    // Start counter animation when scrolled into view
    const countSection = document.querySelector('.professional-list');
    
    const countObserver = new IntersectionObserver((entries, observer) => {
      if (entries[0].isIntersecting) {
        runCounter();
        observer.unobserve(entries[0].target); // Ensure the counter runs only once
      }
    }, { threshold: 0.5 });
    
    if (countSection) {
      countObserver.observe(countSection);
    }
  
    // Project filter
    const filterBtns = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card');
    
    filterBtns.forEach(btn => {
      btn.addEventListener('click', function() {
        // Remove active class from all buttons
        filterBtns.forEach(btn => btn.classList.remove('active'));
        // Add active class to clicked button
        this.classList.add('active');
        
        const filterValue = this.getAttribute('data-filter');
        
        projectCards.forEach(card => {
          if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
            card.style.display = 'block';
            setTimeout(() => {
              card.style.opacity = '1';
              card.style.transform = 'scale(1)';
            }, 200);
          } else {
            card.style.opacity = '0';
            card.style.transform = 'scale(0.7)';
            setTimeout(() => {
              card.style.display = 'none';
            }, 300);
          }
        });
      });
    });
    
    // Enhanced project hover effects
    projectCards.forEach(card => {
      card.addEventListener('mouseenter', function() {
        this.querySelector('.project-overlay').style.opacity = '1';
      });
      
      card.addEventListener('mouseleave', function() {
        this.querySelector('.project-overlay').style.opacity = '0';
      });
    });
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
        
        const targetId = this.getAttribute('href');
        if (targetId === '#') return;
        
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
          window.scrollTo({
            top: targetElement.offsetTop - 70, // Adjust for header height
            behavior: 'smooth'
          });
        }
      });
    });


    // Section titles
    const sectionTitles = document.querySelectorAll('.section-title-01, .section-title-02');
    
    sectionTitles.forEach(title => {
      const text = title.textContent;
      const span = document.createElement('span');
      span.classList.add('section-title-bg');
      span.textContent = text;
      title.appendChild(span);
    });
    
    // Form submission with validation and feedback
    const contactForm = document.querySelector('.contact-form');
    const formStatus = document.getElementById('form-status');
    
    if (contactForm) {
      contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Basic form validation
        const name = this.querySelector('input[name="name"]').value;
        const email = this.querySelector('input[name="email"]').value;
        const subject = this.querySelector('input[name="subject"]').value;
        const message = this.querySelector('textarea[name="message"]').value;
        
        if (!name || !email || !subject || !message) {
          formStatus.innerHTML = '<div class="alert alert-danger">Please fill all fields</div>';
          return;
        }
        
        // Email validation
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
          formStatus.innerHTML = '<div class="alert alert-danger">Please enter a valid email address</div>';
          return;
        }
        
        // This would normally send data to the server via AJAX
        // For demo purposes, show success message
        formStatus.innerHTML = '<div class="alert alert-success">Message sent successfully! I\'ll get back to you soon.</div>';
        this.reset();
        
        // Clear success message after 5 seconds
        setTimeout(() => {
          formStatus.innerHTML = '';
        }, 5000);
      });
    }
    
    // Skill bars animation
    const skillBars = document.querySelectorAll('.progress-line');
    const skillSection = document.querySelector('.skills');
    
    const skillObserver = new IntersectionObserver((entries) => {
      if (entries[0].isIntersecting) {
        skillBars.forEach(bar => {
          bar.style.width = bar.parentElement.querySelector('.info span:nth-child(2)').textContent;
          bar.classList.add('animate');
        });
      }
    }, { threshold: 0.5 });
    
    if (skillSection) {
      skillObserver.observe(skillSection);
    }
    
    // Enhanced hover effects for buttons
    const buttons = document.querySelectorAll('.btn');
    
    buttons.forEach(btn => {
      btn.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-3px)';
      });
      
      btn.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0)';
      });
    });
    
    // Parallax effect for home section
    const homeSection = document.querySelector('.home');
    
    if (homeSection) {
      window.addEventListener('scroll', function() {
        const scrollPosition = window.scrollY;
        const homeOffset = homeSection.offsetTop;
        const distanceScrolled = scrollPosition - homeOffset;
        
        if (scrollPosition >= homeOffset && scrollPosition <= (homeOffset + homeSection.offsetHeight)) {
          homeSection.style.backgroundPositionY = distanceScrolled * 0.5 + 'px';
        }
      });
    }
    
    // Image lazy loading
    const lazyImages = document.querySelectorAll('img[data-src]');
    
    const imageObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const img = entry.target;
          img.src = img.getAttribute('data-src');
          img.removeAttribute('data-src');
          observer.unobserve(img);
        }
      });
    }, { threshold: 0.5 });
    
    lazyImages.forEach(img => {
      imageObserver.observe(img);
    });
    
    // Dynamic copyright year
    const copyrightYear = document.querySelector('.copyright p');
    if (copyrightYear) {
      const currentYear = new Date().getFullYear();
      copyrightYear.textContent = `© ${currentYear} Sumit Tupsundare. All Rights Reserved.`;
    }
});