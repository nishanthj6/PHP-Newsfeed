<?php
    // General Configurement
    declare(strict_types=1);
    define('FEED_ROOT', __DIR__ .'\\');
    require __DIR__."/configs/config.php";      // General Configurements
    require __DIR__."/include/functions.php";

    // Assign Layout - Set Layout and Page Title
    AssignToTemplate ('index', 'NewsFeed');

    // Page specific PHP

?>
