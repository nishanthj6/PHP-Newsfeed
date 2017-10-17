<?php
/* Assign file to template, give page title
*
* fileName, without extension
*/

function AssignToTemplate (String $fileName, String $title): string
{
    $PageTitle = "$title";
    $Assigned = require_once (FEED_ROOT . "style\\template\\$fileName.php");
    if ($Assigned && $PageTitle === $title)
        return $PageTitle;
}

function LikeSystem ()
{
    $VOTEUP     = 'style\\template\\images\\include\\thumb_up1600.png';
    $VOTEDOWN   =' style\\template\\images\\include\\thumb_down1600.png';

    echo "<span id='thumbs'>";
    echo "<a href='#'><img src=$VOTEUP /> </a>" . "<a href='#'><img src=$VOTEDOWN /> </a>";
    echo "</span>";
}
