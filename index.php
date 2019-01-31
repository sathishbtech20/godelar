<?php
class Home
{
	public function __construct()
	{
	}
	
	public function getPageTitle()
	{
		return 'Home page';
	}
}

$home = new Home();

echo $home->getPageTitle();
