<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // The header includes the head tag and start of body
      require "includes/head.php";
    ?>
    <meta property="og:title" content="<?php echo $META['shortName'];?>"/>
    <meta name="twitter:title" content="<?php echo $META['shortName'];?>"/>

    <title>
      <?php echo $META['shortName'];?>
    </title>
    <style>
      body {
        background-color: white;
      }
      #headerGrad {
        background-image:
        url("timer/Zagreb.jpg");
        background-size: cover;
        background-position: center center;
        height: 25vh;
        color: #102A83;
      }
      #clockdiv {
        font-size: 2rem;
        /* background-color: rgba(255,255,255,.8); */
      }
      h4 {
        color: #102A83;
      }
      footer {
        display: none;
      }
    </style>
  </head>
  <body class="home">
    <audio id="ringtone" src="timer/melody.mp3" preload="auto"></audio>

    <header id="headerGrad" class="pt-4 px-3 d-flex justify-content-between">
      <h1>
        <a href="https://eurocrypt.iacr.org/">Eurocrypt 2020</a>
      </h1>
      <div id="clockdiv" class="d-flex w-50">
        <h3 class="pt-2 mr-4">Time until session starts:</h3>
        <!-- <div class="d-none px-1"><span class="days"></span></div>
        <div class="d-none px-1"><span class="hours"></span>:</div> -->
        <div class="px-1 w-25">
          <span class="minutes"></span>:<span class="seconds"></span>
        </div>
      </div>
    </header>
    <main class="container-fluid p-4">
      <h2 class="indPageTitle text-center">
        Many thanks to our sponsors
      </h2>

      <div id="sponsorslideshow" class="mt-4 w-75 mx-auto">
        <section class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/sponsors/eurocrypt2020/tiilogo.png" class="d-block w-50 mx-auto" alt="Technology Innovation Institute">
              <h4 class="text-center mt-3">
                Diamond Sponsor
              </h4>
            </div>

            <div class="carousel-item">
              <img src="images/sponsors/eurocrypt2020/calibra.png" class="d-block w-50 mx-auto" alt="Calibra">
              <h4 class="text-center mt-3">
                Gold Sponsor
              </h4>
            </div>
            <div class="carousel-item">
              <img src="images/sponsors/eurocrypt2020/VisaResearch.png" class="d-block w-50 mx-auto" alt="Visa Research">
              <h4 class="text-center mt-3">
                Gold Sponsor
              </h4>
            </div>
            <div class="carousel-item">
              <img src="images/sponsors/eurocrypt2020/google.png" class="d-block w-50 mx-auto" alt="Google">
              <h4 class="text-center mt-3">
                Gold Sponsor
              </h4>
            </div>

            <div class="carousel-item">
              <img src="images/sponsors/eurocrypt2020/cloudflare.png" class="d-block w-50 mx-auto" alt="Cloudflare">
              <h4 class="text-center mt-3">
                Silver Sponsor
              </h4>
            </div>
            <div class="carousel-item">
              <img src="images/sponsors/eurocrypt2020/IBM-Research-logo.png" class="d-block w-50 mx-auto" alt="IBM Research">
              <h4 class="text-center mt-3">
                Silver Sponsor
              </h4>
            </div>

            <div class="carousel-item">
              <img src="images/sponsors/eurocrypt2020/CEAlogo.png" class="d-block w-50 mx-auto" alt="CEA">
              <h4 class="text-center mt-3">
                Bronze Sponsor
              </h4>
            </div>
            <div class="carousel-item">
              <img src="images/sponsors/eurocrypt2020/crx.png" class="d-block w-50 mx-auto" alt="CryptoExperts">
              <h4 class="text-center mt-3">
                Bronze Sponsor
              </h4>
            </div>
            <div class="carousel-item">
              <img src="images/sponsors/eurocrypt2020/hardwear_logo.png" class="d-block w-50 mx-auto bg-dark" alt="hardwear.io">
              <h4 class="text-center mt-3">
                Bronze Sponsor
              </h4>
            </div>
            <div class="carousel-item">
              <img src="images/sponsors/eurocrypt2020/Logo-Intrinsic-ID_238x40.png" class="d-block w-50 mx-auto" alt="Intrinsic ID">
              <h4 class="text-center mt-3">
                Bronze Sponsor
              </h4>
            </div>
            <div class="carousel-item">
              <img src="images/sponsors/eurocrypt2020/pqshield.jpg" class="d-block w-50 mx-auto" alt="PQShield">
              <h4 class="text-center mt-3">
                Bronze Sponsor
              </h4>
            </div>
            <div class="carousel-item">
              <img src="images/sponsors/eurocrypt2020/rambus.png" class="d-block w-50 mx-auto" alt="Rambus">
              <h4 class="text-center mt-3">
                Bronze Sponsor
              </h4>
            </div>
            <div class="carousel-item">
              <img src="images/sponsors/eurocrypt2020/PlatON.png" class="d-block w-50 mx-auto" alt="PlatON">
              <h4 class="text-center mt-3">
                Bronze Sponsor
              </h4>
            </div>
          </div>
        </section>
      </div>
    </main>

    <!-- <div id="page" class="mt-0">
      <div id="headerGrad">
        <div class="row">
          <div class="col-4">
            <span class="px-2">Eurocrypt 2020</span>
          </div>
          <div class="col-8">
            <div id="clockdiv" class="d-none d-flex flex-row">
              <span class="mr-5">Time until session starts:</span>
              <div class="d-none px-1"><span class="days"></span></div>
              <div class="d-none px-1"><span class="hours"></span>:</div>
              <div class="px-1 w-25">
                <span class="minutes"></span>:<span class="seconds"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <h2 class="text-center mt-3 mb-3">
        Thank you to our sponsors
      </h2>
      <div id="sponsorslideshow" class="w-75 mx-auto">
        <div class="carousel slide" data-ride="carousel" data-interval="10000">
          <div class="carousel-item active text-center">
            <img src="images/sponsors/eurocrypt2020/tiilogo.png" class="img-fluid w-50 mx-auto">
            <h4 class="text-center">Diamond Sponsor</h4>
          </div>
          <div class="carousel-item">
            <h4 class="text-center">Gold Sponsor</h4>
            <img src="images/sponsors/eurocrypt2020/calibra.png" class="img-fluid align-middle">
          </div>
          <div class="carousel-item">
            <h4 class="text-center">Gold Sponsor</h4>
            <img src="images/sponsors/eurocrypt2020/VisaResearch.png" class="mt-5 d-block img-fluid w-50 mx-auto">
          </div>
          <div class="carousel-item">
            <h4 class="mt-4 text-center">Gold Sponsor</h4>
            <img src="images/sponsors/eurocrypt2020/google.png" class="mt-5 d-block img-fluid w-50 mx-auto">
          </div>
          <div class="carousel-item">
            <h4 class="text-center">Silver Sponsor</h4>
            <img src="images/sponsors/eurocrypt2020/cloudflare.png" class="d-block img-fluid mx-auto w-100">
          </div>
          <div class="carousel-item">
            <h4 class="mt-5 text-center">Silver Sponsor</h4>
            <img src="images/sponsors/eurocrypt2020/IBM-Research-logo.png" class="mt-5 d-block img-fluid w-75 mx-auto">
          </div>
          <div class="carousel-item">
            <img src="images/sponsors/eurocrypt2020/CEAlogo.png" class="d-block img-fluid mx-auto w-50">
          </div>
          <div class="carousel-item">
            <img src="images/sponsors/eurocrypt2020/crx.png" class="d-block img-fluid mx-auto w-100">
          </div>
          <div class="carousel-item">
            <img style="background-color:#000000;" src="images/sponsors/eurocrypt2020/hardwear_logo.png" class="mt-5 d-block img-fluid mx-auto w-100">
          </div>
          <div class="carousel-item">
            <img src="images/sponsors/eurocrypt2020/Logo-Intrinsic-ID_238x40.png" class="mt-5 d-block img-fluid mx-auto w-100">
          </div>
          <div class="carousel-item">
            <img src="images/sponsors/eurocrypt2020/pqshield.jpg" class="d-block img-fluid mx-auto w-100">
          </div>
          <div class="carousel-item">
            <img src="images/sponsors/eurocrypt2020/rambus.png" class="d-block img-fluid mx-auto w-100">
          </div>
          <div class="carousel-item">
            <img src="images/sponsors/eurocrypt2020/PlatON.png" class="d-block img-fluid mx-auto w-25">
          </div>
        </div>
      </div>
    </div> -->
    <!-- NOTE: you need this, even though you don't display it, as it includes jQuery -->
    <?php include "includes/footer.php"; ?>
<script>
 function getTimeRemaining(endtime) {
   var t = Date.parse(endtime) - Date.parse(new Date());
   var seconds = Math.floor((t / 1000) % 60);
   var minutes = Math.floor((t / 1000 / 60) % 60);
   var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
   var days = Math.floor(t / (1000 * 60 * 60 * 24));
   return {
     'total': t,
     'days': days,
     'hours': hours,
     'minutes': minutes,
     'seconds': seconds
   };
 }

 function initializeClock(id, endtime) {
   var clock = document.getElementById(id);
   var daysSpan = clock.querySelector('.days');
   var hoursSpan = clock.querySelector('.hours');
   var minutesSpan = clock.querySelector('.minutes');
   var secondsSpan = clock.querySelector('.seconds');

   function updateClock() {
     var t = getTimeRemaining(endtime);

//     daysSpan.innerText = t.days;
//     hoursSpan.innerText = ('0' + t.hours).slice(-2);
     minutesSpan.innerText = ('0' + t.minutes).slice(-2);
     secondsSpan.innerText = ('0' + t.seconds).slice(-2);

     if (t.total <= 0) {
       clearInterval(timeinterval);
       document.getElementById('ringtone').play();
     }
   }

   updateClock();
   var timeinterval = setInterval(updateClock, 1000);
 }
// var deadline = new Date(Date.parse('2020-05-11T13:00:00Z'));
 // initializeClock('clockdiv', deadline);

</script>

<div class="modal fade" id="inputModal" tabindex="-1" role="dialog" aria-labelledby="inputLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3>Set Timer</h3>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label id="inputLabel" for="minutes-input">Enter the number of minutes</label>
          <input type="number" class="form-control" id="minutes-input" name="minutes">
        </div>
        <button class="btn btn-primary" role="button" onClick="setMinutes()">Start timer</button>
      </div>
    </div>
  </div>
</div>


<script>
 function setMinutes() {
   let input = document.getElementById('minutes-input');
   if (input.value > 0) {
     let now = Date.now();
     now += input.value * 60000;
     let deadline = new Date(now);
     initializeClock('clockdiv', deadline);
     $('#inputModal').modal('hide');
   }
 }
 $(document).ready(function() {
   $('#inputModal').modal('show');
 });
</script>
</body>
</html>
