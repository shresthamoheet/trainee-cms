@insulated
Feature: Delete Article
As an admin 
I want to be able to delete articles
So that I can remove unnecessary and outdated articles

	Scenario: delete unnecessary articles
		Given I am logged in as an admin
		And an article with the following details exists
		|title|summary|content|date|
		|title|ram kills rawan|main characters are ram, laxman, sita and ravan|12/02/1971|
		When I open the article with the title "title" 
		Then I should be redirected to the page with the title "Edit Article"
		And I click the delete link
		Then a message box must appear with the message "Delete This Article?"
		When I confirm the delete action
		Then a message should be displayed with the text "Article deleted."
		And the article with the title "title" should not be listed
	