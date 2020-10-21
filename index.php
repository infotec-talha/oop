<?php
class webpage
{
    function __construct($header,$body,$footer) 
    {
        $this->header=$header;
        $this->body=$body;
        $this->footer=$footer;
    }
 
}
$webpage=new webpage(include_once 'header.php', include_once 'body.php', include_once 'footer.php');
echo $webpage->header;
echo $webpage->body;
echo $webpage->footer;