<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // The header includes the head tag and start of body
      require "includes/head.php";
    ?>
    <meta property="og:title" content="<?php echo $META['shortName'];?> rump session"/>
    <meta name="twitter:title" content="<?php echo $META['shortName'];?> rump session"/>

    <title>
      <?php echo $META['shortName'];?> Rump Session Program
    </title>
    <style>
     #renderedProgram .track1Event,
     #renderedProgram .track2Event,
     #renderedProgram .mutualEvent {
       padding: 1rem;
     }
     ul.nav .nav-link:hover {
       background-color: #eeeeee;
     }
    </style>
  </head>
  <body>
    <?php require "includes/nav.php"; ?>

    <main class="container p-4">
      <h2 class="indPageTitle">
        Rump Session Program
      </h2>

      <p class="alert alert-info">
        There will be a quiz during the program. Questions will be announced during the program.
        <span>You will go to <a href="https://forms.gle/k38QSbEh24pHUVjK7">this page to answer the quiz.</a></span>
      </p>
      <p class="alert alert-info">
        There will be a poll for the best rump session presentation. When the session is
        over you can <a href="https://forms.gle/wnGMKhMQpr7XeNoVA">vote here</a>.
      </p>
      <div class="row">
        <div id="renderedProgram" class="col-12">
          <!-- Handlebars script that will render the program template based on the program.json file -->
          <script id="program-template" type="text/x-handlebars-template">
            {{#each days}}
            <div class="row" id="day-{{date}}">
              <!-- This is broken if there are two tracks -->
              <div class="col-12 mb-3">
                {{#if @first}}
                {{else}}
                <hr />
                {{/if}}
                <h3 class="pageSubtitle">
                  {{formatDate date}}
                  <br class="d-sm-none">
                <small>(dates may differ in your timezone)</small>
                </h3>
              </div>
            </div>
            {{#each timeslots}}
            <div class="row">
              <div class="col-sm-2">
                <p class="timeSlot text-center" title="UTC: {{../date}} {{starttime}}-{{endtime}}">
                  {{localstarttime}} <br>to<br> {{localendtime}}<br>
                <small class="text-center">(UTC: {{starttime}}-{{endtime}})</small>
                </p>
              </div>
              {{#if twosessions}}
              <div class="col-10 col-sm-5">
                <div class="track1Event">
                  <h5 class="text-center">
                    {{sessions.0.session_title}}
                    {{#if sessions.0.session_url}}
                    &nbsp; <a href="{{sessions.0.session_url}}"><img class="sessionInfoIcon" src="images/icons/info.svg" title="Session Info"></a>
                    {{/if}}
                  </h5>
                  {{#if sessions.0.location.name}}
                  <p class="dualTrackDescr">
                    {{sessions.0.location.name}}
                  </p>
                  {{/if}}
                  {{#if sessions.0.moderator}}
                  <p class="dualTrackDescr">
                    {{sessions.0.moderator}}
                  </p>
                  {{/if}}
                  {{#each sessions.0.talks}}
                  <p class="talkTitle">
                    {{title}}
                  </p>
                  <p class="dualTrackDescr">
                    {{#each authors}}
                    <span class="authorName">{{this}}</span>
                    {{/each}}
                  </p>
                  {{#if paperUrl}}
                  <span class="talkMedia">
                    Media: &nbsp; <a target="_blank" href="{{paperUrl}}"><img class="talkMediaIcon" src="images/icons/file.svg" title="Paper"></a>
                  </span>
                  {{/if}}
                  {{#if slidesUrl}}
                  <span class="talkMedia">
                    &nbsp; <a target="_blank" href="{{slidesUrl}}"><img class="talkMediaIcon" src="images/icons/presentation.svg" title="Slides"></a>
                  </span>
                  {{/if}}
                  {{#if videoUrl}}
                  <span class="talkMedia">
                    &nbsp; <a target="_blank" href="{{videoUrl}}"><img class="talkMediaIcon" src="images/icons/video.svg" title="Video"></a>
                  </span>
                  {{/if}}
                  {{/each}}
                </div>
              </div>
              <!-- This is visible only on mobile, when sessions wrap -->
              <div class="col-2 d-sm-block d-md-none">
                <p class="timeSlot">
                  {{starttime}}-{{endtime}}
                </p>
              </div>
              <div class="col-10 col-sm-5">
                <div class="track2Event">
                  <h5 class="text-center">
                    {{sessions.1.session_title}}
                    {{#if sessions.1.session_url}}
                    &nbsp; <a href="{{sessions.1.session_url}}"><img class="sessionInfoIcon" src="images/icons/info.svg" title="Session Info"></a>
                    {{/if}}
                  </h5>
                  {{#if sessions.1.location.name}}
                  <p class="dualTrackDescr">
                    {{sessions.1.location.name}}
                  </p>
                  {{/if}}
                  {{#if sessions.1.moderator}}
                  <p class="dualTrackDescr">
                    {{sessions.1.moderator}}
                  </p>
                  {{/if}}
                  {{#each sessions.1.talks}}
                  <p class="talkTitle">
                    {{title}}
                  </p>
                  <p class="dualTrackDescr">
                    {{#each authors}}
                    <span class="authorName">{{this}}</span>
                    {{/each}}
                  </p>
                  {{#if paperUrl}}
                  <span class="talkMedia">
                    Media: &nbsp; <a target="_blank" href="{{paperUrl}}"><img class="talkMediaIcon" src="images/icons/file.svg" title="Paper"></a>
                  </span>
                  {{/if}}
                  {{#if slidesUrl}}
                  <span class="talkMedia">
                    &nbsp; <a target="_blank" href="{{slidesUrl}}"><img class="talkMediaIcon" src="images/icons/presentation.svg" title="Slides"></a>
                  </span>
                  {{/if}}
                  {{#if videoUrl}}
                  <span class="talkMedia">
                    &nbsp; <a target="_blank" href="{{videoUrl}}"><img class="talkMediaIcon" src="images/icons/video.svg" title="Video"></a>
                  </span>
                  {{/if}}
                  {{/each}}
                </div>
              </div>
              {{else}}
              <div class="col-sm-10">
                <div class="mutualEvent">
                  <h4 id="{{sessions.0.id}}">
                    {{sessions.0.session_title}}
                    {{#if sessions.0.session_url}}
                    &nbsp; <a href="{{sessions.0.session_url}}"><img class="sessionInfoIcon" src="images/icons/info.svg" title="Session Info"></a>
                    {{/if}}
                  </h4>
                  {{#if sessions.0.youtubeUrl}}
                  <a class="btn btn-info m-3" href="{{sessions.0.youtubeUrl}}">YouTube</a>
                  {{/if}}
                  {{#if sessions.0.chatUrl}}
                  <a class="btn btn-info m-3" href="{{sessions.0.chatUrl}}">Chat</a>
                  {{/if}}
                  {{#if sessions.0.zoomUrl}}
                  <a class="btn btn-info m-3" href="{{sessions.0.zoomUrl}}">Zoom webinar</a>
                  {{/if}}
                  {{#if sessions.0.location.name}}
                  <p class="eventDescr">
                    {{sessions.0.location.name}}
                  </p>
                  {{/if}}
                  {{#if sessions.0.moderator}}
                  <p class="eventDescr">
                    {{sessions.0.moderator}}
                  </p>
                  {{/if}}
                  {{#each sessions.0.talks}}
                  <p class="mutualEventTalkTitle">
                    ({{talkstarttime}}-{{talkendtime}}) {{title}}
                  </p>
                  <p class="eventDescr">
                    {{#each authors}}
                    <span class="authorName">{{this}}</span>
                    {{/each}}
                  </p>
                  <p class="eventDescr">
                    <small><span class="authorName">{{affiliations}}</span></small>
                  </p>
                  {{#if paperUrl}}
                  <span class="talkMedia">
                    Media: &nbsp; <a target="_blank" href="{{paperUrl}}"><img class="talkMediaIcon" src="images/icons/file.svg" title="Paper"></a>
                  </span>
                  {{/if}}
                  {{#if slidesUrl}}
                  <span class="talkMedia">
                    &nbsp; <a target="_blank" href="{{slidesUrl}}"><img class="talkMediaIcon" src="images/icons/presentation.svg" title="Slides"></a>
                  </span>
                  {{/if}}
                  {{#if videoUrl}}
                  <span class="talkMedia">
                    &nbsp; <a target="_blank" href="{{videoUrl}}"><img class="talkMediaIcon" src="images/icons/video.svg" title="Video"></a>
                  </span>
                  {{/if}}
                  {{/each}}
                </div>
              </div>
              {{/if}}
            </div>
            {{/each}}
            {{/each}}
          </script>

        </div>
      </div>

      <h3 class="pageSubtitle mt-4 text-center">
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
    <script src="https://iacr.org/libs/js/handlebars/handlebars-v4.1.0.js" type="text/javascript"></script>
    <script src="./js/tooltips.js"></script>
    <script src="https://iacr.org/libs/js/moment/moment.js"></script>
    <script src="https://iacr.org/libs/js/moment/moment-timezone-with-data-10-year-range.js"></script>
    <script src="rump/rump.js?v=5"></script>
  </body>
</html>
