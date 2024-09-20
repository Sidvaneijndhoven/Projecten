Feature: newtours validation
  
Background:
  Given open newtours application

@smoke @sanity
Scenario: Home Page
  When I login in as Following
    |userName| password|
    |mercury | mercury |
  Then click on submit button
  And verify title should be 'Login: Mercury Tours'

@regression 
    Scenario: Verifying my Title
  When I login in as Following
    |userName| password|
    |mercury | mercury |
  Then click on submit button
  And verify title should be 'Login: Mercury Tours'