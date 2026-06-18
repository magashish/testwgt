/* Tritch Door & Window — main.js */

// Sticky nav shadow
const nav = document.getElementById('mainNavTritch');
if (nav) {
  window.addEventListener('scroll', () => {
    nav.classList.toggle('shadow', window.scrollY > 10);
  });
}

// Fade-up on scroll
const fadeEls = document.querySelectorAll('.fade-up');
if (fadeEls.length) {
  const io = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) { e.target.classList.add('visible'); io.unobserve(e.target); }
    });
  }, { threshold: 0.12 });
  fadeEls.forEach(el => io.observe(el));
}

// Back to top
const btt = document.getElementById('back-to-top');
if (btt) {
  window.addEventListener('scroll', () => {
    btt.style.display = window.scrollY > 400 ? 'flex' : 'none';
  });
  btt.addEventListener('click', e => { e.preventDefault(); window.scrollTo({ top: 0, behavior: 'smooth' }); });
}
