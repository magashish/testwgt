/* ============================================================
   We Got This Dumpster Rentals - Main JS
   ============================================================ */

document.addEventListener('DOMContentLoaded', function () {

  // ---- Navbar: add .scrolled shadow on scroll ----
  var nav = document.getElementById('mainNav');
  if (nav) {
    window.addEventListener('scroll', function () {
      nav.classList.toggle('scrolled', window.scrollY > 50);
    }, { passive: true });
  }

  // ---- Back-to-top button ----
  var btt = document.getElementById('back-to-top');
  if (btt) {
    window.addEventListener('scroll', function () {
      btt.style.display = window.scrollY > 400 ? 'flex' : 'none';
    }, { passive: true });
    btt.addEventListener('click', function (e) {
      e.preventDefault();
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  // ---- Intersection Observer: .fade-up animations ----
  var fadeEls = document.querySelectorAll('.fade-up');
  if ('IntersectionObserver' in window && fadeEls.length) {
    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12 });

    fadeEls.forEach(function (el) { observer.observe(el); });
  } else {
    // Fallback: show all immediately
    fadeEls.forEach(function (el) { el.classList.add('visible'); });
  }

  // ---- Active nav link on scroll (simple offset approach) ----
  var sections = document.querySelectorAll('section[id], div[id].highlight-bar');
  var navLinks = document.querySelectorAll('.navbar-wgt .nav-link[href^="#"]');

  if (sections.length && navLinks.length) {
    window.addEventListener('scroll', function () {
      var scrollPos = window.scrollY + 120;
      sections.forEach(function (section) {
        if (section.offsetTop <= scrollPos &&
            section.offsetTop + section.offsetHeight > scrollPos) {
          navLinks.forEach(function (link) {
            link.classList.remove('active');
            if (link.getAttribute('href') === '#' + section.id) {
              link.classList.add('active');
            }
          });
        }
      });
    }, { passive: true });
  }

  // ---- Smooth scroll for all anchor links ----
  document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
      var target = document.querySelector(anchor.getAttribute('href'));
      if (target) {
        e.preventDefault();
        var offset = nav ? nav.offsetHeight : 70;
        var top = target.getBoundingClientRect().top + window.scrollY - offset;
        window.scrollTo({ top: top, behavior: 'smooth' });

        // Close mobile nav if open
        var navCollapse = document.getElementById('navMenu');
        if (navCollapse && navCollapse.classList.contains('show')) {
          var toggler = document.querySelector('.navbar-toggler');
          if (toggler) toggler.click();
        }
      }
    });
  });

  // ---- Contact form: basic client-side validation feedback ----
  var form = document.querySelector('form[action="contact-handler.php"]');
  if (form) {
    form.addEventListener('submit', function (e) {
      if (!form.checkValidity()) {
        e.preventDefault();
        e.stopPropagation();
      }
      form.classList.add('was-validated');
    });
  }

});
