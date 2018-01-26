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
	
	/**
	 * @return void
	 */
	function addNewArticle() {
		$this->find('xpath', $this->xpathOfAddNewArticle)->click();
	}
} 