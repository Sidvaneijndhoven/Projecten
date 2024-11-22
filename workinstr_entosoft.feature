Feature: Work instruction test

  Background:
    Given Log in
    | Username  | Password  | Page|
    | root      | 123456789 |SHEQ|
# choose which work instruction on which page you want to test

Scenario: Checks if the column Renew before by exist in DOM
  When There should be a column named Renew before

Scenario: Tests if the Renew Before column has any expired work instructions
  Then When a Renew Before is expired the background is red and a message is send 

Scenario: Loops trough the Update on column and Renew before column to check if exist in DOM
  When Column row Updated On exist in DOM stay in loop

  Then Renew before exist in DOM stay in loop

