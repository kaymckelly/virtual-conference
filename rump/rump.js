function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.innerText = minutes + ":" + seconds;

        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}

function adjustTalkTime(date, talk) {
  let starttime = moment.utc(date + 'T' + talk.starttime.padStart(5, '0') + ':00').local().format('HH:mm');
  talk.talkstarttime = starttime.padStart(5, '0');
  let endtime = moment.utc(date + 'T' + talk.endtime.padStart(5, '0') + ':00').local().format('HH:mm');
  talk.talkendtime = endtime.padStart(5, '0');
}
function adjustTimes(date, session) {
  // Make sure they are formatted as yyyy-MM-ddTHH:mm:ss, because they could be things like '7:00'
  let starttime = moment.utc(date + 'T' + session.starttime.padStart(5, '0') + ':00').local().format('ddd DD MMM HH:mm');
  session.localstarttime = starttime.padStart(5, '0');
  let endtime = moment.utc(date + 'T' + session.endtime.padStart(5, '0') + ':00').local().format('ddd DD MMM HH:mm');
  session.localendtime = endtime.padStart(5, '0');
}

function loadProgram(name) {
  $.ajax({
    cache: false,
    url: name + '?v=' + Date.now(),
    dataType: 'json',
      success: function(data) {
      var renderedProgram = document.getElementById('renderedProgram');
      if (!data.hasOwnProperty('days')) {
        renderedProgram.innerHTML = '<p>The conference program is not currently available. Please check back later.</p>';
        return;
      }

      // set up Handlebars helper to display dates with day of the week
      Handlebars.registerHelper('formatDate', function(isodate) {
	  var parts = isodate.split('-');
	  return new Date(parts[0],
			  parts[1] - 1, // months are zero-based
			  parts[2]).toLocaleString('en-US', {weekday: "long", month: "short", day: "numeric"});
      });

      var theTemplateScript = $("#program-template").html();
      var theTemplate = Handlebars.compile(theTemplateScript);
      var days = data['days'];
      for (var i = 0; i < days.length; i++) {
        var timeslots = days[i]['timeslots'];
        for (var j = 0; j < timeslots.length; j++) {
          if(timeslots[j]['sessions'].length > 1) {
            timeslots[j]['twosessions'] = true;
          }
          adjustTimes(days[i].date, timeslots[j]);
          timeslots[j].sessions.forEach(session => {
            if (session['talks'] !== null) {
              for (var k = 0; k < session['talks'].length; k++) {
                adjustTalkTime(days[i].date, session['talks'][k], 'HH:MM')
              }
            }
          });
        }
      }
      console.dir(data);
      var theCompiledHtml = theTemplate(data);
      renderedProgram.innerHTML = theCompiledHtml;
//      let countdown = document.getElementById('countdown');
//      startTimer(2000, countdown);
    },
    fail: function(jqxhr, textStatus, error) {
      document.getElementById('renderedProgram');
      renderedProgram.innerHTML = '<p>The conference program is not currently available. Please check back later.</p>';

      if (textStatus === 'error') {
        console.log('program.json not found, check file name and try again');
      } else {
        console.log('There is a problem with program.json. The problem is ' + error);
      }
    }
  });
}
$(document).ready(function() {
    console.log('loading');
    loadProgram('rump/rump.php?v=' + Date.now());
//    let now = new Date();
//    console.dir(now);
//    if (now > new Date('2050-05-13T17:00:00Z')) {
//        console.dir(now);
//        document.getElementById('quiz').classList.remove('d-none');
//    }
});
