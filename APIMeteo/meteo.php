<?php

require_once './class/OpenWeather.php';
$weather=new OpenWeather('4e7484b05ddd57473aa2e35c9f272fa3');
$forecast = $weather->getForecast('Angers, fr');
$today = $weather->getToday('Angers, fr');
?>

<div class="container">
    <ul>
        <li>En ce moment <?= $today['description'] ?> <?= $today['temp'] ?>°C</li>
        <?php foreach($forecast as $day): ?>
        <li><?= $day['date']->format('d/m/Y') ?> <?= $day['description'] ?> <?= $day['temp'] ?>°C</li>
        <?php endforeach ?>
    </ul>
</div>
