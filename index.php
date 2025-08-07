<?php
$dir = __DIR__ . '/columns/';
$files = glob($dir . '*.php');
usort($files, function($a, $b){ return filemtime($b) - filemtime($a); });

$latest = array_slice($files, 0, 4);

foreach($latest as $file) {
    include($file);
    echo '<div class="p-home-column-list__item">';
    echo '<div class="p-home-column-thumb"><img src="'.htmlspecialchars($thumb).'" alt="'.htmlspecialchars($title).'"></div>';
    echo '<div class="p-home-column-meta">';
    echo '<span class="p-home-column-category">'.htmlspecialchars($category).'</span>｜';
    echo '<span class="p-home-column-date">'.htmlspecialchars($date).'</span>';
    echo '<h3 class="p-home-column-title">'.htmlspecialchars($title).'</h3>';
    echo '<div class="p-home-column-author">'.htmlspecialchars($author).'</div>';
    echo '</div>';
    echo '<a href="columns/'.basename($file).'" class="p-home-column-link"></a>';
    echo '</div>';
}
?>

