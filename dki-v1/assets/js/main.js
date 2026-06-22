/* =============================================================
   DKI EMPIRE — Main JS
   ============================================================= */

/* ---- Navbar scroll shadow ---- */
(function () {
  const nav = document.getElementById('mainNav');
  if (!nav) return;
  const onScroll = () => nav.classList.toggle('scrolled', window.scrollY > 40);
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();
})();

/* ---- Back to top ---- */
(function () {
  const btn = document.getElementById('back-to-top');
  if (!btn) return;
  window.addEventListener('scroll', () => btn.classList.toggle('visible', window.scrollY > 400), { passive: true });
  btn.addEventListener('click', (e) => { e.preventDefault(); window.scrollTo({ top: 0, behavior: 'smooth' }); });
})();

/* ---- Fade-up scroll animation ---- */
(function () {
  const els = document.querySelectorAll('.fade-up');
  if (!els.length) return;
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) { entry.target.classList.add('visible'); observer.unobserve(entry.target); }
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
  els.forEach((el) => observer.observe(el));
})();

/* ---- Smooth scroll for anchors ---- */
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener('click', function (e) {
    const target = document.querySelector(this.getAttribute('href'));
    if (!target) return;
    e.preventDefault();
    const offset = document.getElementById('mainNav')?.offsetHeight ?? 72;
    window.scrollTo({ top: target.offsetTop - offset, behavior: 'smooth' });
    const collapse = document.getElementById('navMenu');
    if (collapse && collapse.classList.contains('show')) {
      document.querySelector('.navbar-toggler')?.click();
    }
  });
});

/* ---- Stat counter animation ---- */
(function () {
  const statNums = document.querySelectorAll('.stat-num');
  if (!statNums.length) return;

  const animateCounter = (el) => {
    const raw = el.dataset.target || el.textContent;
    const suffix = raw.replace(/[\d.]/g, '');
    const num = parseFloat(raw);
    if (isNaN(num)) return;
    const duration = 1800;
    const step = 16;
    const steps = duration / step;
    let current = 0;
    const increment = num / steps;
    const timer = setInterval(() => {
      current += increment;
      if (current >= num) { current = num; clearInterval(timer); }
      el.textContent = (Number.isInteger(num) ? Math.round(current) : current.toFixed(1)) + suffix;
    }, step);
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        animateCounter(entry.target);
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 });

  statNums.forEach((el) => observer.observe(el));
})();

/* ---- Portfolio filter ---- */
(function () {
  const btns  = document.querySelectorAll('.pf-btn');
  const items = document.querySelectorAll('.portfolio-filter-item');
  if (!btns.length) return;
  btns.forEach((btn) => {
    btn.addEventListener('click', () => {
      btns.forEach((b) => b.classList.remove('active'));
      btn.classList.add('active');
      const filter = btn.dataset.filter;
      items.forEach((item) => item.classList.toggle('hidden', filter !== 'all' && item.dataset.cat !== filter));
    });
  });
})();
