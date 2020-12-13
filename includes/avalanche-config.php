<?php

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){
    case 'index.php':
        $title = "Avalanche Solutions";
        $logo = 'fa-home';
        $logo_color = ' style="color:blue"';
        $PageID = 'AvalancheSolutions';
    break;
    case 'about.php':
        $title = "About Us";
        $logo = 'fa-pencil-square-o';
        $logo_color = ' style="color:red"';
        $PageID = 'AboutUs';
        
    break;
    case 'ourteam.php':
        $title = "Our Team";
        $logo = 'fa-pencil-square-o';
        $logo_color = ' style="color:red"';
        $PageID = 'OurTeam';
    break;
    case 'services.php':
        $title = "Services";
        $logo = 'fa-pencil-square-o';
        $logo_color = ' style="color:red"';
        $PageID = 'Services';
    break;
    case 'securitysolutions.php':
        $title = "Security Solutions";
        $logo = 'fa-pencil-square-o';
        $logo_color = ' style="color:red"';
        $PageID = 'SecuritySolutions';
    break;
    case 'digitalfabrication.php':
        $title = "Digital Fabrication";
        $logo = 'fa-pencil-square-o';
        $logo_color = ' style="color:red"';
        $PageID = 'DigitalFabrication';
    break;
    case 'automation.php':
        $title = "Automation Solutions";
        $logo = 'fa-pencil-square-o';
        $logo_color = ' style="color:red"';
        $PageID = 'AutomationSolutions';
    break;
    case 'technicalins.php':
        $title = "Technical Installations and Maintenance";
        $logo = 'fa-pencil-square-o';
        $logo_color = ' style="color:red"';
        $PageID = 'TechnicalInstallations';
    break;
    case 'productdesign.php':
        $title = "Product Design and Prototyping";
        $logo = 'fa-pencil-square-o';
        $logo_color = ' style="color:red"';
        $PageID = 'ProductDesign';
    break;
    case 'gallery.php':
        $title = "Gallery";
        $logo = 'fa-pencil-square-o';
        $logo_color = ' style="color:red"';
        $PageID = 'Gallery';
    break;
    case 'contact.php':
        $title = "Contact Us";
        $logo = 'fa-pencil-square-o';
        $logo_color = ' style="color:red"';
        $PageID = 'Contact Us';
    break;
   default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';

}
/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}

?>

