<?php
    // include header
    include 'header-nav.php';
?>

    <div id="map">
    </div>
    <script>
      function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });

      // reference database
      const dbRef = firebase.database().ref().child("user").child("wEJOYY0WUtgiuLYN6gSU6Sm58Tv2").child("location");

      // sync data
      dbRef.on('value', snap => console.log(snap.val()));
      }
    </script>

<?php
    // include footer
    include 'footer.php';
?>
