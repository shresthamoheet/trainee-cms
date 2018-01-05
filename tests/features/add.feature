@insulated
Feature: Add new articles
As an admin
I want to add new article
So that I can give extra information to the user

	Scenario: redirect to the New Article page
		Given I am on the login page
		And I am logged in as an admin
		When I goto Add a New Article
		Then I should be redirected to the page with the title "New Article"

