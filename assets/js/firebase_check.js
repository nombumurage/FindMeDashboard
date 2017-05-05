$(document).ready(function() {

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

    firebase.auth().onAuthStateChanged(firebaseUser => {
        if (!firebaseUser) {
            window.location.assign("index.html");
        }

        // console.log(firebaseUser);

        $(".user_name").html(firebaseUser.displayName);
        $(".user_email").html(firebaseUser.email);
    });

    // add new admin
    // button to save
    $("#new_User").click(function() {
        // body...
        // collect values from form
        const auth = firebase.auth();

        // signIn
        const promise = auth.createUserWithEmailAndPassword(email, pass);

    });

    // logout from dashboard
    // button to logout
    $("#logout").click(function(e) {
        // body...
        firebase.auth().signOut();

    });

    // get the current user key
    var uid = $("#uid").text();
    // console.log(">>>> " + uid);

    // reference database
    const dbRef = firebase.database().ref().child("user").child(uid);

    // sync data
    dbRef.on('value', snap => {
        // console.log(">>> " + snap.val().);

        // get placeholders
        // full name
        $("#prof_fullname").html(snap.val().medicalDetails.name);
        // first name
        $("#prof_fname")[0].placeholder = snap.val().medicalDetails.name;
        // last name
        $("#prof_lname")[0].placeholder = snap.val().medicalDetails.name;
        // lblood group
        $("#prof_blood")[0].placeholder = snap.val().medicalDetails.bloodGroup;
        // medical allergies
        $("#prof_medallergies")[0].placeholder = snap.val().medicalDetails.medAllergies;
        // phone number
        $("#prof_phone")[0].placeholder = snap.val().medicalDetails.phoneNumber;
        // other conditions
        $("#prof_condition")[0].placeholder = snap.val().medicalDetails.condition;

        // emagency contact 1
        $("#prof_em1name").html(snap.val().emergencyContacts.emergencyContactNameOne);
        $("#prof_em1")[0].placeholder = snap.val().emergencyContacts.emergencyContactNumberOne;
        // emagency contact 2
        $("#prof_em2name").html(snap.val().emergencyContacts.emergencyContactNameTwo);
        $("#prof_em2")[0].placeholder = snap.val().emergencyContacts.emergencyContactNumberTwo;
        // emagency contact 3
        $("#prof_em3name").html(snap.val().emergencyContacts.emergencyContactNameThree);
        $("#prof_em3")[0].placeholder = snap.val().emergencyContacts.emergencyContactNumberThree;

    });

    // reference database
    const dbRefAll = firebase.database().ref().child("user");
    //sync data
    dbRefAll.on('value', snap => {

        // $("#usersAll");

        console.log(snap.val());
        console.log(">>> " + snap.numChildren());

        snap.forEach(
            function(childSnapshot) {
                console.log(childSnapshot.uid);
            }
        );

        // for (var i = 0; i < snap.numChildren(); i++) {
        //     // console.log(snap.childSnapshot.name();
        //     console.log(Object.keys(snap));
        // }
    });

});
