function setCopyRightText() {
	document.getElementById("copyright-text").innerHTML = `© ${new Date().getFullYear()} KP Auto Oy`;
}
function openNav() {
	document.getElementById("myNav").style.width = "80%";
	$("#myHeader").fadeOut();
}
function closeNav() {
	document.getElementById("myNav").style.width = "0%";
	$("#myHeader").fadeIn();
}
function scrolling() {
	let scrollTop = document.documentElement.scrollTop;
	let height = (90-(scrollTop/6));
	let visibility = (0.3+(scrollTop/200));

	if (height > 60) {
		const headerHeight = height+'px';
		const headerBackground = 'rgba(0,0,0,'+visibility+')';
		document.getElementById("desktop-header").style.height = headerHeight;
		document.getElementById("desktop-header").style.backgroundColor = headerBackground;
	}
}