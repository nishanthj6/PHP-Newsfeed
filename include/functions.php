<?php

/* DATABASE CONNECTION */
/********************* */

try {
    $path = makePath('configs','config.php');
    require (FEED_ROOT . $path);
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
    $Path = makePath('style', 'template', $fileName);
    $Assigned = require_once (FEED_ROOT . $Path.'.php');
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
        $Path = makePath('style', 'template', 'images', 'include', 'thumb_up1600.png');
        $image = $Path;
        echo "<img src='$image' />";
        return;
    }

    if ($type === 'negative')
    {
        $Path = makePath('style', 'template', 'images', 'include', 'thumb_down1600.png');
        $image = $Path;
        echo "<img src='$image' />";
        return;
    }

    else
        die('Invalid argument for Like function. \n\n
             Allowed (1): Positive \n
             Allowed (2): Negative');
}

/**
 *  Create Universal Directoring
 *  returns path supported by both PC and MAC
 *
 * @param $parts      # Multi value argument
 *
 * @return implode()  # internal function
 *
 */

function makePath(...$parts) {
   return implode(DIRECTORY_SEPARATOR, $parts);
}
