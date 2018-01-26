<?php
/**
 * JankariTech
 *
 * @author Trainee <jankaritech@gmail.com>
 */
namespace Page;

/**
 * PageObject for the EditArticlePage
 *
 * @author Trainees <jankaritechtrainee@gmail.com>
 *
 */
class EditArticlePage extends ArticlePage {
	protected  $xpathOfDelete = '//a[contains(text(),"Delete")]';
	
	/**
	 * @return void
	 */
	function deleteArticle() {
		$this->find('xpath', $this->xpathOfDelete)->click();
	}
}