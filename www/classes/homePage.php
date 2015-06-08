<?php

// Class specially for the home page
// Based off the Page
class HomePage extends Page {
	
	// Method to show base of home page
	public function home($value='') {
		# code...
	}

	// Method to show content for the home page
	public function contentHTML() {
		
		// Show call to action 
		include 'templates/home/callToAction.php';

		// show latest student deals
		include 'templates/home/latestDeals.php';
	}
}