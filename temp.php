<?php
    // General Configurement
    declare(strict_types=1);
    define('FEED_ROOT', __DIR__ . DIRECTORY_SEPARATOR);
    require __DIR__.DIRECTORY_SEPARATOR.'configs'.DIRECTORY_SEPARATOR.'config.php';      // General Configurements
    require __DIR__.DIRECTORY_SEPARATOR.'include'.DIRECTORY_SEPARATOR.'functions.php';


    // Initlize user session
    session_start();

    /* Page specific PHP */
    /*********************/

    // Assign Layout - Set Layout and Page Title
    AssignToTemplate ('index_body', 'NewsFeed');

    // Fetch posts from Database
    $Query = $MySQL->prepare('SELECT * FROM posts ORDER BY ID DESC');
    $Query->execute();
    $_SESSION['Results'] = $Query->fetchAll();

    // Page Specific PHP
    if (isset($_GET['like']))
    {
        $i = intval($_GET['like']);
        $Query = $MySQL->prepare('UPDATE posts SET likes = likes +1 WHERE id = :postid');
        $Query->bindParam('postid', $i, PDO::PARAM_INT);
        $Query->execute();
	}

	if (isset($_GET['dislike']))
    {
        $i = intval($_GET['dislike']);
        $Query = $MySQL->prepare('UPDATE posts SET likes = likes -1 WHERE id = :postid');
        $Query->bindParam('postid', $i, PDO::PARAM_INT);
        $Query->execute();
    }

    // Print out is in the template file, see style/template/index.php for example.
    //
    // Foreach ($results as $r):
    //   <HTML CODE HERE>
    // EndForeach;
    //
    // r['username']  -> would be username column in database, at the ID row
