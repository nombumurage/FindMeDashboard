<?php
    // include header
    include 'header-nav.php';
?>

    <div id="map">
    </div>
    <script>
      function initMap() {
          // reference database
          // const dbRef = firebase.database().ref().child("user").child("wEJOYY0WUtgiuLYN6gSU6Sm58Tv2").child("location");
          const dbRef = firebase.database().ref().child("alerts").child("wEJOYY0WUtgiuLYN6gSU6Sm58Tv2");
          // sync data
          dbRef.on('value', snap => {

            // console.log(snap.val());
            var lat = parseFloat(snap.val().latitude);
            var lng = parseFloat(snap.val().longitude);

            // console.log(lat + lng);

            // var alert2 = {lat: snap.val().latitude, lng: snap.val().longitude};
            var alert1 = {lat: lat, lng: lng};
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 16,
              center: alert1
            });
            var marker = new google.maps.Marker({
              position: alert1,
              map: map

          });



        });

      }
    </script>

<?php
    // include footer
    include 'footer.php';
?>
