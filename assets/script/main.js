// ========= SVG ANIMATION =============
// svg elements of the circle
const item1 = document.getElementById('item_1');
const item2 = document.getElementById('item_2');
const item3 = document.getElementById('item_3');
const item4 = document.getElementById('item_4');
const item5 = document.getElementById('item_5');

const palletColors = {
	'light-green': '#c0e7be',
	'light-pink': '#ffb3ff',
	'light-grey': '#f2f2f2',
};

function animateColor() {
	setTimeout(() => {
		item2.style.fill = palletColors['light-green'];
		item3.style.fill = palletColors['light-pink'];
		item4.style.fill = palletColors['light-grey'];
	}, 800);
	setTimeout(() => {
		item1.style.fill = palletColors['light-green'];
		item2.style.fill = palletColors['light-pink'];
		item3.style.fill = palletColors['light-grey'];
	}, 1600);
	setTimeout(() => {
		item5.style.fill = palletColors['light-green'];
		item1.style.fill = palletColors['light-pink'];
		item2.style.fill = palletColors['light-grey'];
	}, 2400);
	setTimeout(() => {
		item4.style.fill = palletColors['light-green'];
		item5.style.fill = palletColors['light-pink'];
		item1.style.fill = palletColors['light-grey'];
	}, 3200);
	setTimeout(() => {
		item3.style.fill = palletColors['light-green'];
		item4.style.fill = palletColors['light-pink'];
		item5.style.fill = palletColors['light-grey'];
	}, 4000);
}

animateColor(); // to start the animation immediately after the page loaded

setInterval(animateColor, 6000); // then do the animation every 7s

// ======== SHOW / HIDE MOBILE MENU ============
const showMenu = (toggleId, navId) => {
	const toggle = document.getElementById(toggleId),
		nav = document.getElementById(navId);

	// Validate that variables exist
	if (toggle && nav) {
		toggle.addEventListener('click', () => {
			nav.classList.toggle('show-menu');
		});
	}
};
showMenu('nav-toggle', 'nav-menu');

const navLinks = document.querySelectorAll('.nav__link');

function linkAction() {
	const navMenu = document.getElementById('nav-menu');
	// When we click on each nav__link, we remove the show-menu class
	navMenu.classList.remove('show-menu');
}
navLinks.forEach((link) => link.addEventListener('click', linkAction));

// ========== FIXED AND ADD SHADOW TO HEADER ON SCROLL =============

function scrollHeader() {
	const nav = document.getElementById('header');
	// When the scroll is greater than 80 viewport height, make the box shadow to the header element
	window.addEventListener('scroll', () => {
		this.scrollY > 80
			? nav.classList.add('scroll-header')
			: nav.classList.remove('scroll-header');
	})
}
window.addEventListener('scroll', scrollHeader);
