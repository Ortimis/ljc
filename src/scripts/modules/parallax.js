export default function Parallax() {
	var location = document.getElementById('parallax-1');
	var topmenu = document.getElementById('masthead')

	if ( location != null) {
		window.onscroll = function () {
			var scrolldiff = scrollY;
			
			location.style.transform ="translateY(" + scrolldiff * 0.5 + "px)"

			if (scrolldiff > 800) {
				location.style.transform ="translateY(0)";
				topmenu.style.backgroundColor = "#9D0000";
			} else {
				topmenu.style.backgroundColor = "transparent";
			}
		}
	}
}
