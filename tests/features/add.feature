@insulated
Feature: Add new articles
As an admin
I want to add new article
So that I can give extra information to the user

	Background:
		Given I am logged in as an admin

	Scenario: redirect to the New Article page
		Given I goto Add a New Article
		And I should be redirected to the page with the title "New Article"

	Scenario Outline: Add Articles using date before 2070 and after 2070
		Given I am on the New Article page
		And I fill in the following details
		|title  |summary  |content  |date  |
		|<title>|<summary>|<content>|<date>|
		And I save the changes
		Then I should be redirected to the page with the title "All Articles"
		And the article with the title "<title>" should be listed
		And a notification should be displayed with the text "Your changes have been saved."
		Examples:
		|title|summary|content      |date       |
		|artur|ram kills rawan|main characters are ram, laxman, sita and ravan|12/02/1971|
		|Bible|Jesus  |Died on cross| 01/01/1969|

