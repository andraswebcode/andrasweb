const sections = document.querySelectorAll('section[id]');
const navLinks = document.querySelectorAll('#navLinks a[href*="#"]');

const sectionObserver = new IntersectionObserver((entries) => {
	entries.forEach(entry => {
		if (!entry.isIntersecting) {
			return;
		}

		navLinks.forEach(link => {
			const isActive = link.hash === `#${entry.target.id}`;

			link.classList.toggle('text-white', isActive);
			link.classList.toggle('text-zinc-400', !isActive);
		});
	});
}, {
	threshold: 0.3
});

sections.forEach(section => sectionObserver.observe(section));

const fadeEls = document.querySelectorAll('.compare-row, .service-card, .project-card, .ref-card, .process-step');

const fadeObserver = new IntersectionObserver((entries) => {
	entries.forEach(entry => {
		if (entry.isIntersecting) {
			entry.target.style.opacity = '1';
			entry.target.style.transform = 'translateY(0)';
		}
	});
}, {
	threshold: 0.08
});

fadeEls.forEach((el, i) => {
	el.style.opacity = '0';
	el.style.transform = 'translateY(14px)';
	el.style.transition = `opacity .45s ease ${i * .04}s, transform .45s ease ${i * .04}s`;

	fadeObserver.observe(el);
});

const hamburger = document.getElementById('navHamburger');
const menu = document.getElementById('navLinks');
const bars = hamburger.querySelectorAll('span');

function toggleMenu(open) {
	menu.classList.toggle('translate-y-[-8px]', !open);
	menu.classList.toggle('opacity-0', !open);
	menu.classList.toggle('pointer-events-none', !open);

	menu.classList.toggle('translate-y-0', open);
	menu.classList.toggle('opacity-100', open);
	menu.classList.toggle('pointer-events-auto', open);

	bars[0].classList.toggle('translate-y-[6px]', open);
	bars[0].classList.toggle('rotate-45', open);

	bars[1].classList.toggle('opacity-0', open);
	bars[1].classList.toggle('scale-x-0', open);

	bars[2].classList.toggle('-translate-y-[6px]', open);
	bars[2].classList.toggle('-rotate-45', open);

	hamburger.setAttribute('aria-expanded', open);
}

hamburger.addEventListener('click', () => {
	toggleMenu(menu.classList.contains('opacity-0'));
});

menu.querySelectorAll('a').forEach(link => {
	link.addEventListener('click', () => {
		toggleMenu(false);
	});
});