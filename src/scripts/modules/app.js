export default function App() {	
	console.log('App initialized');
	var topmenu = document.getElementById('masthead');
	console.log(topmenu);

		window.onscroll = function () {
			var startetscroll = scrollY;

			console.log(startetscroll);

			if (startets > 100 ) {
				topmenu.style.backgroundColor("#9D0000");
			}
		}


}