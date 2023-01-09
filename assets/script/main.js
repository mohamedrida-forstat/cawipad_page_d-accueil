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
	}, 1000);
	setTimeout(() => {
		item1.style.fill = palletColors['light-green'];
		item2.style.fill = palletColors['light-pink'];
		item3.style.fill = palletColors['light-grey'];
	}, 2000);
	setTimeout(() => {
		item5.style.fill = palletColors['light-green'];
		item1.style.fill = palletColors['light-pink'];
		item2.style.fill = palletColors['light-grey'];
	}, 3000);
	setTimeout(() => {
		item4.style.fill = palletColors['light-green'];
		item5.style.fill = palletColors['light-pink'];
		item1.style.fill = palletColors['light-grey'];
	}, 4000);
	setTimeout(() => {
		item3.style.fill = palletColors['light-green'];
		item4.style.fill = palletColors['light-pink'];
		item5.style.fill = palletColors['light-grey'];
	}, 5000);
}

animateColor(); // to start the animation immediately after the page loaded

setInterval(animateColor, 7000); // then do the animation every 7s
