<?php
// Home class
class Page
{
	protected $pageTitle;
	protected $breadcrumb;

	public function __construct()
	{
	}
	
	/* 
	 * Set the page title 
	 *
	 */
	public function setPageTitle($title)
	{
		$this->pageTitle = $title;
	}

	/* 
	 * Get the page title 
	 *
	 */
	public function getPageTitle()
	{
		return $this->pageTitle;
	}

	/* 
	 * Get the breadcrumb
	 *
	 */
	public function setBreadcrumb($value)
	{
		$this->breadcrumb = $value;
	}

	/* 
	 * Get the breadcrumb
	 *
	 */
	public function getBreadcrumb()
	{
		return $this->breadcrumb;
	}
}

$page = new Page();
$page->getPageTitle('Home');
echo $page->getPageTitle();
