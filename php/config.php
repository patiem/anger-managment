<?php

// create an array with data for title, and meta, for each page
$pgdata = array();
$pgdata['home'] = array(
 'title'=>'Home page with hidden photo',
 'description'=>'Home page with hidden photo',
 'keywords'=>'homepage, home page, patiem'
);
$pgdata['about'] = array(
 'title'=>'Title About Me page',
 'description'=>'Hell in arts',
 'keywords'=>'about me, hell'
);
$pgdata['blog'] = array(
 'title'=>'Angry menagment page',
 'description'=>'See what has irrited people',
 'keywords'=>'anger, irritate '
);
$pgdata['contact'] = array(
 'title'=>'Send your anger to me',
 'description'=>'You can send to me what irritates you most',
 'keywords'=>'contact, form'
);

// set the page name
$pgname = isset($_GET['pg']) ? trim(strip_tags($_GET['pg'])) : 'home';

// get title, and meta data for current /accessed page
$title = $pgdata[$pgname]['title'];
$description = $pgdata[$pgname]['description'];
$keywords = $pgdata[$pgname]['keywords'];

// set header for utf-8 encode
header('Content-type: text/html; charset=utf-8');
?>