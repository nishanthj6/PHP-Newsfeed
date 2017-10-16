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
