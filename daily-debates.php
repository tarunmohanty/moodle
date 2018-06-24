<?php

require_once('config.php');

$PAGE->set_context(get_system_context());
$PAGE->set_pagelayout('standard');
$PAGE->set_title("Your title");
$PAGE->set_heading("Blank page");
$PAGE->set_url($CFG->wwwroot.'/feedback.php');

echo $OUTPUT->header();
echo "Hello World";
echo "<br>";
echo "this is ias myths page ";
echo $OUTPUT->footer();
?>
