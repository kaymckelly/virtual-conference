<?php
// This implements an ajax call to get the current program.
// We need this because it needs to add the current URLs for
// session. We do this by fetching the basic program.json
// created in the program editor, fetch the current URLs of
// the sessions, and populate the URLs in the program. The
// schema is modified by adding a youtubeUrl, zoomUrl, and
// chatUrl into each session.

$confname = 'eurocrypt2020';

$editorData = json_decode(file_get_contents('../json/rump_program.json'), TRUE);
$extraLinks = json_decode(file_get_contents('slides.json'), TRUE);
$slides = $extraLinks['slides'];
header('Content-Type: application/json');
foreach($editorData['days'] as $dayindex => &$day) {
  foreach ($day['timeslots'] as $timeslotindex => &$timeslot) {
    foreach($timeslot['sessions'] as $sessionindex => &$session) {
      foreach($session['talks'] as $talkindex => &$talk) {
        if (isset($talk['paperId'])) {
          $talk['slidesUrl'] = $slides[$talk['paperId']];
        }
      }
    }
  }
}
echo json_encode($editorData);
?>
