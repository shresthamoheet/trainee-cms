<?php
/**
 * JankariTech
 *
 * @author Trainee <jankaritech@gmail.com>
 */
namespace Page;

use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

/**
 * PageObject for the common functions and methods 
 * 
 *
 * @author Trainee <jankaritech@gmail.com>
 *
 */
class CMSPage extends Page{
	
	protected $xpathOfPageTitle = '//title';
	
	/**
	 * 
	 * @return \Behat\Mink\Element\NodeElement|NULL
	 */
	function getPageTitle() {
		return $this->find('xpath', $this->xpathOfPageTitle);
	}
}
