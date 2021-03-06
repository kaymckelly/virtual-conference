<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // The header includes the head tag and start of body
      require "includes/head.php";
    ?>
    <meta property="og:title" content="<?php echo $META['shortName'];?> rump session"/>
    <meta name="twitter:title" content="<?php echo $META['shortName'];?> rump session"/>

    <title>
      <?php echo $META['shortName'];?> Rump Session
    </title>
  </head>
  <body>
    <?php require "includes/nav.php"; ?>

    <main class="container p-4">
      <h2 class="indPageTitle">
        Rump Session
      </h2>

      <!-- NOTE: below is standard placeholder text for when the page is under construction.
           IACR does not have a standard way to organize rump session submissions, but you
           can always use the program editor to create your program: https://iacr.org/tools/program
           and then copy stuff from program.php and js/program.js.
      -->
      <p class="alert alert-info">
        The <a href="rumpprogram.php">rump session program</a> is now available.
      </p>
      <h3 class="pageSubtitle">
        Call for Papers
      </h3>
      <div class="alert alert-danger">
        <!-- NOTE: don't ask me why but you need .text-center on these p elements -->
        <p class="text-center">
          <strong>Submission deadline:</strong>  Tuesday 12 May 2020 11:59:59am UTC (extended)
        </p>
        <p class="text-center">
          Deadline has now passed.
        </p>
      </div>
<!--      <div class="alert alert-danger">
        <h2 class="text-center">
          Rump session deadline is soon!
        </h2>
        <div id="clockdiv" class="d-flex flex-row justify-content-center">
          <div class="p-2 text-center">
            <span class="days"></span>
            <div class="smalltext">Days</div>
          </div>
          <div class="p-2 text-center">
            <span class="hours"></span>
            <div class="smalltext">Hours</div>
          </div>
          <div class="p-2 text-center">
            <span class="minutes"></span>
            <div class="smalltext">Minutes</div>
          </div>
          <div class="p-2 text-center">
            <span class="seconds"></span>
            <div class="smalltext">Seconds</div>
          </div>
        </div>
      
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

     daysSpan.innerHTML = t.days;
     hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
     minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
     secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

     if (t.total <= 0) {
       clearInterval(timeinterval);
     }
   }

   updateClock();
   var timeinterval = setInterval(updateClock, 1000);
 }

 var deadline = new Date(Date.parse('2020-05-12T11:59:00Z'));
 initializeClock('clockdiv', deadline);
</script>
        <p class="text-center">
          <strong>Time constraints:</strong> 1-5 minutes, 6 minutes if very funny
        </p>
        <a href="https://submit.iacr.org/ec2020rump/" class="btn btn-warning btn-block w-50 mx-auto">Submit a talk</a>
      </div>-->
      <div class="row">
        <div class="col-12 col-md-7">
          <p>
            Schools are closed, bars are shut down, the civilization is collapsed, but the rump session will still go on! We will always be here with you (but the snacks are on you this time)! Join us for the first ever virtual rump session at Eurocrypt 2020! If you have any breaking news or interesting stories to share with the crypto community, please make them short and entertaining, and fill out the submission form and ask for a talk slot!
          </p>
        </div>
        <div class="col-12 col-md-5">
          <p class="alert alert-info">
            The detailed program for the rump session <a href="rumpprogram.php">is available here</a>. There are no current plans to distribute printed programs, but we are open to suggestions. 😃

          </p>
        </div>
      </div>


      <h3 class="pageSubtitle">
        Platform
      </h3>
      <p>
        The rump session will be run via Zoom webinar. All the speakers will be panelists during the rump session and are required to use their real names. Speakers will be asked to share their own screen at the time of the talk. To reduce the talk-switching time, we encourage all the speakers to locally practice screen sharing on Zoom.
      </p>

      <h3 class="pageSubtitle">
        Detailed Instructions
      </h3>
      <p>
        The organizers will start the practice session 20 minutes before the rump session starts (i.e., May 13 at 16:40 UTC).
      </p>
      <ol>
        <li>
          The speakers are recommended to join the webinar on May 13 at 16:40 UTC.
        </li>
        <li>
          During 16:40 UTC to 17:00 UTC, before the beginning of the rump session, the organizers will promote each speaker from an attendee to a panelist. The promotion protocol is the following:
          <ol type="a">
            <li>
              speakers use the ‘raise hand’ feature, or send a message using the “chat” in Zoom
            </li>
            <li>
              the webinar hosts will make the speakers the panelists
            </li>
          </ol>
        </li>
        <li>
          The organizers will send a private message via Zoom to signal the speaker(s) to be ready shortly before the start time of their talk. (The speaker should be prepared to be put on spotlight after the signal.)
        </li>
      </ol>

      <h3 class="pageSubtitle">
        Format
      </h3>
      <p>
        The format of the material can be slides, video, or live performance. <strong>Do not play copyrighted music as part of your talks.</strong> We require the speakers to submit at least a title slide even if you are not planning to prepare slides for the talk. The reason is that we will let every speaker share their screen at the beginning of their talk, thereby bringing the focus to them before the start of their talk.
      </p>

      <h3 class="pageSubtitle">
        Rump Session Chairs
      </h3>
      <div class="row mt-3 mt-md-4">
        <aside class="col-12 col-md-4 text-center mb-2">
          <h4 class="subSubtitle">
            Yilei Chen
          </h4>
          <p class="text-center">
            Visa Research<br>
            USA
          </p>
        </aside>
        <aside class="col-12 col-md-4 text-center mb-2">
          <h4 class="subSubtitle">
            Rishab Goyal
          </h4>
          <p class="text-center">
            Simons Institute for the Theory of Computing<br>
            University of California, Berkeley<br>
            USA
          </p>
        </aside>
        <aside class="col-12 col-md-4 text-center mb-2">
          <h4 class="subSubtitle">
            Lisa Kohl
          </h4>
          <p class="text-center">
            Technion<br>
            Israel
          </p>
        </aside>
      </div>

      <div class="row">
        <div class="col-12 text-center mb-5">
          <a href="mailto:eurocrypt2020rump@iacr.org">
            <img src="images/icons/email.svg" class="icon" />&nbsp;<img src="images/contacts/ec2020rump.jpg" />
          </a>
        </div>
      </div>

    </main>

    <?php include "includes/footer.php"; ?>
  </body>
</html>
