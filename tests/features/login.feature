@insulated
Feature: Admin login
As an admin 
I want to be able to login into my account
So that I can edit my articles

	Scenario: admin login with correct password
		Given I am on the login page
		When I login with username "admin" and password "mypass"
		Then I should be redirected to the page with the title "All Articles"

	Scenario: admin login with invalid password
		Given I am on the login page
		When I login with username "admin" and password "invalid"
		Then I should be redirected to the page with the title "Admin Login | Widget News"
		And a notification should be displayed with the text "Incorrect username or password. Please try again."

	Scenario: login with username that does not exist
		Given I am on the login page
		When I login with username "adddiii" and password "mypass"
		Then I should be redirected to the page with the title "Admin Login | Widget News"
		And a notification should be displayed with the text "Incorrect username or password. Please try again."

	Scenario: login with empty password
		Given I am on the login page
		When I login with username "adddiii" and password " "
		Then I should be redirected to the page with the title "Admin Login | Widget News"
