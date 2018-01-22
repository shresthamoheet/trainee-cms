<?php
/**
 * @author JankariTechTrainees <trainee@jankaritech.com>
 */
require "config.php";
$action = isset($_GET['action']) ? $_GET['action'] : "";

switch ($action) {
	case 'archive':
		archive();
		break;
	case 'viewArticle':
		viewArticle();
		break;
	default:
		homepage();
}

/**
 * @return void
 */
function archive() {
	$results = array();
	$data = Article::getList();
	$results['articles'] = $data['results'];
	$results['totalRows'] = $data['totalRows'];
	$results['pageTitle'] = "Article Archive | Widget News";
	include TEMPLATE_PATH . "/archive.php";
}

/**
 * @return void
 */
function viewArticle() {
	if (! isset($_GET["articleId"]) || ! $_GET["articleId"]) {
		homepage();
		return;
	}
	
	$results = array();
	$results['article'] = Article::getById((int) $_GET["articleId"]);
	$results['pageTitle'] = $results['article']->title . " | Widget News";
	include TEMPLATE_PATH . "/viewArticle.php";
}

/**
 * @return void
 */
function homepage() {
	$results = array();
	$data = Article::getList(HOMEPAGE_NUM_ARTICLES);
	$results['articles'] = $data['results'];
	$results['totalRows'] = $data['totalRows'];
	$results['pageTitle'] = "Widget News";
	include TEMPLATE_PATH . "/homepage.php";
}

?>
