<?php

/* Assign file to template, give page title
*
* fileName, without extension
*
*/

function AssignToTemplate (String $fileName, String $title): string
{
    $PageTitle = "$title";
    $Assigned = require_once (FEED_ROOT . "style\\template\\$fileName.php");
    if ($Assigned && $PageTitle === $title)
        return $PageTitle;
}

/* Connect to Database
*
* 
*
*/

function ConnectDB(bool $stat)
{
    require __DIR__."/configs/config.php";  

    if ($stat)
    {
        
        $MySQL = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        
        if (!$MySQL)
            printf("Connect failed: %s\n", mysqli_connect_error());

        else
            return $MySQL;
    }

    else
    {
        $MySQL->close();
        return $MySQL;
    }
}

/* Render Thumb images, print out
*
*
*/

function LikeSystem ()
{
    $VOTEUP     = 'style\\template\\images\\include\\thumb_up1600.png';
    $VOTEDOWN   = 'style\\template\\images\\include\\thumb_down1600.png';

    echo "<span id='thumbs'>";
    echo "<a href='#'><img src=$VOTEUP /> </a>" . "<a href='#'><img src=$VOTEDOWN /> </a>";
    echo "</span>";
    return null;
}
