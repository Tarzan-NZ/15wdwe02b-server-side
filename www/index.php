<?php 

$requestedPage = isset($_GET['page']) ? $_GET['page'] : 'home';

// We need the Page class
require 'classes/Page.php';

// Load the appropriate content
switch ($requestedPage) {
	// Home
	case 'home':
		require 'homepage.php';
		$page = new homePage('Home Page','The best student deals around');
	break;

	// other page
	case 'about':
		require 'about.php';
		$page = new Page('About Us Page','All the info you could ever need to know about us and what we do');
	break;

	case 'contact.php';
		require 'contact.php';
		$page = new Page('Contact Us Page','Contact us info to harass us to fix or improve something');
	break;
	// 404	
	default:
		$page = new Page('404 Page not found','We cannot find the page you were looking for try again')		
	break;
}

$page->headerHTML();
$page->contentHTML();
$page->footerHTML();