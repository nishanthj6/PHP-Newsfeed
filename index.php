<?php
    // General Configurement
    declare(strict_types=1);
    define('FEED_ROOT', __DIR__ .'\\');
    require __DIR__."/configs/config.php";      // General Configurements
    require __DIR__."/include/functions.php";

    // Initlize user session
    session_start();

    /* Page specific PHP */
    /*********************/

    // Assign Layout - Set Layout and Page Title
    AssignToTemplate ('index_body', 'NewsFeed');

    // Fetch posts from Database
    $MySQL = ConnectDB(true);
    $Query = $MySQL->prepare('SELECT * FROM posts ORDER BY ID DESC');
    $Query->execute();
    $_SESSION['Results'] = $Query->fetchAll();

    // Print out is in the template file, see style/template/index.php for example.
    //
    // Foreach ($results as $r):
    //   <HTML CODE HERE>
    // EndForeach;
    // 
    // r['username']  -> would be username column in database, at the ID row
