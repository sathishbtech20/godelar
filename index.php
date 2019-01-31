<?php
// Home class
class Home
{
	public function __construct()
	{
	}
	
	/* 
	 * Get the page title 
     */     
	public function getPageTitle()
	{
		return 'Home page';
	}
}

$home = new Home();

echo $home->getPageTitle();
