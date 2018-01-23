<?php
/**
 * JankariTech
 *
 * @author Trainee <jankaritech@gmail.com>
 */
namespace Page;

use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

/**
 * PageObject for the Add Article Page
 * 
 * @author Trainee <jankaritech@gmail.com>
 *
 */
class AddArticlePage extends Page {
	protected $xpathOfSave = '//div/input[@name="saveChanges"]';
	protected $xpathOfCancel = '//div/input[@name="cancel"]';
	protected $xpathOfSiteAdmin = '//a[@href="admin.php"]';
	
	/**
	 * 
	 * @param string $title
	 * 
	 * @return void
	 */
	function addTitle($title) {
		$this->fillField("title", $title);
	}
	/**
	 * 
	 * @param string $summary
	 * 
	 * @return void
	 */
	function addSummary($summary) {
		$this->fillField("summary", $summary);
	}
	/**
	 * 
	 * @param string $content
	 * 
	 * @return void
	 */
	function addContent($content) {
		$this->fillField("content", $content);
	}
	/**
	 * 
	 * @param string $date
	 * 
	 * @return void
	 */
	function addDate($date) {
		$this->fillField("publicationDate", $date);
	}
	/**
	 * @return void
	 */
	function save() {
		$this->find('xpath', $this->xpathOfSave)->click();
	}
	/**
	 * @return void
	 */
	function cancel() {
		$this->find('xpath', $this->xpathOfCancel)->click();
	}
	/**
	 * @return void
	 */
	function siteAdmin() {
		$this->find('xpath', $this->xpathOfSiteAdmin)->click();
	}
}