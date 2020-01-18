<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>
// Set the date we're counting down to
var countDownDate = new Date("March 18, 2019 20:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var heures = Math.floor(distance / (1000 * 60 * 60 ));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  /*document.getElementById("demo").innerHTML = days + " jours et " + hours + " heures";*/

  document.getElementById("hours").innerHTML = hours;
  document.getElementById("minutes").innerHTML = minutes;
  document.getElementById("secondes").innerHTML = seconds;
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

<script type="text/javascript">
    $(document).scroll(function() {
      var y = $(this).scrollTop();
      if (y > 400) {
        $('.bottomMenu').fadeIn();
      } else {
        $('.bottomMenu').fadeOut();
      }
    });
</script>

<div class="bottomMenu">
    <p>Les inscriptions se terminent dans</p> <p class="chiffres" id="hours"></p> h <p class="chiffres" id="minutes"></p> m <p class="chiffres" id="secondes"></p> s <p class="countdown-cta">  <a href="https://boussole.wake-up.io/cours-audio/monpodcast/inscription">Inscrivez-vous maintenant !</a></p>
</div>