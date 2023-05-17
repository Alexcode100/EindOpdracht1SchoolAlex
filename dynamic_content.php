<?php
date_default_timezone_set('Europe/Amsterdam');
$currentHour = date('H');

if ($currentHour >= 6 && $currentHour < 12) {
    $greeting = 'Goedemorgen';
    $backgroundImage = 'download.jpg';
} elseif ($currentHour >= 12 && $currentHour < 18) {
    $greeting = 'Goedemiddag';
    $backgroundImage = 'download-_1_.jpg';
} elseif ($currentHour >= 18 && $currentHour < 24) {
    $greeting = 'Goedeavond';
    $backgroundImage = 'download-_2_.jpg';
} else {
    $greeting = 'Goedenacht';
    $backgroundImage = 'download-_3_.jpg';
}

echo '<style>body { background-image: url("' . $backgroundImage . '"); }</style>';
?>

<h1><?php echo $greeting; ?></h1>
<p>Het is nu <?php echo date('H:i'); ?>.</p>
