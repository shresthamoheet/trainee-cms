<?php
/**
 * JankariTech
 *
 * @author Trainee <jankaritech@gmail.com>
 */
namespace Page;

use Page\CMSPage;

/**
 * PageObject for the AdminPage
 *
 * @author Trainee <jankaritech@gmail.com>
 *
 */
class AdminPage extends CMSPage{
	
	protected $xpathOfAddNewArticle = '//a[@href="admin.php?action=newArticle"]';
	protected $xpathOfOpenArticle = '//td[text()[normalize-space() = "%s"]]';
	
	/**
	 * @return void
	 */
	function addNewArticle() {
		$this->find('xpath', $this->xpathOfAddNewArticle)->click();
	}
	
	/**
	 * 
	 * @param string $title
	 * 
	 * @return void
	 */
	function openArticle($title) {
		$titleof = sprintf($this->xpathOfOpenArticle, $title);
		$this->find("xpath", $titleof)->click();
		
	}
} 