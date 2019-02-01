<?php
// Home class
class Home
{
	public function __construct()
	{
	}
	
	/* 
	 * Get the page title 
	 *
	 */
	public function getPageTitle()
	{
		return 'Home page';
	}

	/* 
	 * Get the breadcrumb
	 *
	 */
	public function getBreadcrumb()
	{
		return 'Home';
	}
}

$home = new Home();

echo $home->getPageTitle();
