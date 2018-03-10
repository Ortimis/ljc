export default function Parallax() {
	var location = document.getElementById('parallax-1');

	if ( location != null) {
		window.onscroll = function () {
			var scrolldiff = scrollY;
			console.log(scrolldiff);
			console.log(location);
			
			location.style.transform ="translateY(" + scrolldiff * 0.5 + "px);"
		}
	}
}
