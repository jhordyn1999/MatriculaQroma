<?php
// require_once(__DIR__ . '/../config.php');

// global $PAGE, $DB, $USER, $SITE;

// require_login();

// $urlparams = array();
// $PAGE->set_url('/matricula/', $urlparams);

// $PAGE->set_pagetype('site-matricula');
// $PAGE->set_title($SITE->fullname);

// $rolesArr = [];
// $userRol = $DB->get_records_sql("SELECT * FROM {role_assignments} WHERE userid=?",array($USER->id));

// foreach($userRol as $ur) {
// 	$rolesArr[] = $ur->roleid;
// }

// if(!in_array(1, $rolesArr) && !is_siteadmin()) {
// 	header("Location: https://aulavirtual.urbanova.com.pe");
// 	exit();
// }

// echo $OUTPUT->header();

// include('home.html');

// echo $OUTPUT->footer();

require_once(__DIR__ . '/../../config.php');
global $DB;

require_login();

$context = context_system::instance();
$PAGE->set_url(new moodle_url('/local/mundo_qroma/index.php'));
$PAGE->set_context(\context_system::instance());
$PAGE->set_title('Mundo Qroma');
$PAGE->set_heading('Mundo Qroma');


$templateContext = (object)[
    'sesskey' => sesskey()
];

echo $OUTPUT->header();
// echo $OUTPUT->render_from_template('local_mundo_qroma/index', $templateContext);
include('index.html');
echo $OUTPUT->footer();