@insulated
Feature: Edit Article
As an admin 
I want to be able to edit articles
So that I can correct or update articles

	Scenario: edit articles
		Given I am logged in as an admin
		And an article with the following details exists
		|title|summary|content|date|
		|title|rawan kills ram|main characters are ram, laxman, sita and ravan|12/02/1971|
		When I open the article with the title "title" 
		Then I should be redirected to the page with the title "Edit Article"
		And I fill in the following details
		|title  |summary  |content  |date  |
		|new-title|ram kills rawan|main characters are ram, laxman, sita and ravan|12/02/1972|
		And I save the changes
		Then a message should be displayed with the text "Your changes have been saved."
		And the article with the title "new-title" and date "2 Dec 1972" should be listed