/**
 * Veteria theme interactions.
 *
 * Scroll reveals, animated counters, back-to-top button.
 * All motion is disabled when the user prefers reduced motion.
 */
(function () {
	'use strict';

	var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

	/* ---------- Scroll reveal ---------- */
	var revealEls = document.querySelectorAll('.veteria-pet-card, .veteria-service-card');

	if (revealEls.length && !reduceMotion && 'IntersectionObserver' in window) {
		var revealObserver = new IntersectionObserver(function (entries) {
			entries.forEach(function (entry) {
				if (entry.isIntersecting) {
					entry.target.classList.add('is-visible');
					revealObserver.unobserve(entry.target);
				}
			});
		}, { threshold: 0.12 });

		revealEls.forEach(function (el) {
			revealObserver.observe(el);
		});
	}

	/* ---------- Back to top ---------- */
	var toTop = document.createElement('button');
	toTop.className = 'veteria-to-top';
	toTop.setAttribute('type', 'button');
	toTop.setAttribute('aria-label', 'Back to top');
	toTop.innerHTML = '&uarr;';
	toTop.style.cssText = 'position:fixed;right:1.25rem;bottom:1.25rem;width:48px;height:48px;border-radius:999px;border:0;background:#0e7c66;color:#fff;font-size:1.4rem;cursor:pointer;opacity:0;pointer-events:none;transition:opacity .25s;z-index:99;box-shadow:0 10px 24px rgba(14,124,102,.35)';
	document.body.appendChild(toTop);

	toTop.addEventListener('click', function () {
		window.scrollTo({ top: 0, behavior: reduceMotion ? 'auto' : 'smooth' });
	});

	window.addEventListener('scroll', function () {
		var show = window.scrollY > 600;
		toTop.style.opacity = show ? '1' : '0';
		toTop.style.pointerEvents = show ? 'auto' : 'none';
	}, { passive: true });
})();
