<?php

/* DATABASE CONNECTION */
/********************* */

try {
    require (FEED_ROOT . 'configs/config.php');
    $MySQL = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}

catch (Exception $e) {
    echo '<b>Could not connect to Database:</b>\n\n ',  $e->getMessage(), "\n";
}

/* END - DATABASE CONNECTION */
/*************************** */

/**
 * Mimik Template Engine
 *  Assign file to template, give page title
 *
 * @param string $fileName       # name of the HTML file. ./style/template
 * @param string $title          # sets the title of the page
 *
 * @return $PageTitle
 *
 */

function AssignToTemplate (String $fileName, String $title): string
{
    $PageTitle = "$title";
    $Assigned = require_once (FEED_ROOT . "style\\template\\$fileName.php");
    if ($Assigned && $PageTitle === $title)
        return $PageTitle;
}


/**
 *  LikeSystem Images
 *  returns thumbsup/thumbsdown depending on input
 *
 * @param string $type      # Positive / Negative, gives ThumbsUp / ThumbsDown
 *
 * @return null
 *
 */

function Like(String $type)
{
    $type = strtolower($type);
    if ($type === 'positive')
    {
        $image = 'style\\template\\images\\include\\thumb_up1600.png';
        echo "<img src='$image' />";
        return;
    }

    if ($type === 'negative')
    {
        $image = 'style\\template\\images\\include\\thumb_down1600.png';
        echo "<img src='$image' />";
        return;
    }

    else
        die('Invalid argument for Like function. \n\n
             Allowed (1): Positive \n
             Allowed (2): Negative');
}
