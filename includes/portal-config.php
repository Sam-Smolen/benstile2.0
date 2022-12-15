<?php

/*
portal-config.php

Used to store all of our IT162 configuration information

*/

ob_start();

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');


//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;
//die;

switch(THIS_PAGE){

    case 'index.php':
        $title = "Bens Tile & more";
        $logo = 'images/nav-logo.png';
    break;

    case 'learnmoretile.php':
        $title = "Learn more | Custom Tile Design";
        $logo = 'images/nav-logo.png';
    break;

    case 'learnmorebathroom.php':
        $title = "Learn more | Custom Bathroom Remodel & Design";
        $logo = 'images/nav-logo.png';
    break;

    case 'learnmorekitchen.php':
        $title = "Learn more | Custom Kitchen Remodel & Design";
        $logo = 'images/nav-logo.png';
    break;

    case 'contact.php':
        $title = "Contact Form | Bens Tile & More";
        $logo = 'images/nav-logo.png';
    break;

    default:
        $title = THIS_PAGE;
        $logo = ''; //no icon by default
        $logo_color = ''; //make logo_color an empty string by default
}



/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/

function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text){
        if($url == THIS_PAGE){
            $myReturn .= "<a class=\"selected\" href=\"$url\">$text</a>";
        }else{
            $myReturn .= "<a href=\"$url\">$text</a>";
        }

	    
    	    
    }
      
    return $myReturn;    
}


/*
<a href="index.php" class="active">Welcome</a>
<a href="big/index.php">BIG</a>
<a href="aia.php">AIA</a>
<a href="flowchart.php">Flowchart</a>
<a href="fp/index.php">Final Project</a>
<a href="contactme.php">Contact Sam</a>
*/

?>
