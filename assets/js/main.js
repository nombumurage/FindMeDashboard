$(document).ready(function(){

	// Initialize Firebase
	var config = {
		apiKey: " AIzaSyD76lVZtdMr2FQ4CA_mvcTAtWVCF19gkQI",
		authDomain: "findme-99505.firebaseapp.com",
		databaseURL: "https://findme-99505.firebaseio.com/",
		projectId: "findme-99505",
		storageBucket: "findme-99505.appspot.com",
		messagingSenderId: "491577700016"
	};
	firebase.initializeApp(config);

	// get input fields
	const userEmail = $("#login_email");
	const userPass = $("#login_password");
	const btnLogin = $("#signin_btn");

	btnLogin.click(function(e){
		const email = userEmail.val();
		const pass = userPass.val();
		const auth = firebase.auth();

		// signIn
		const promise = auth.signInWithEmailAndPassword(email, pass);

		// console.log("email => " + email + " pass => " + pass);
		promise.catch(e => console.log(e.message));
		return false;
	});

	firebase.auth().onAuthStateChanged(firebaseUser => {
		if (firebaseUser) {
			window.location.assign("dashboard.php");
		}else {
			console.log("Not Loged In");
		}
	});
});