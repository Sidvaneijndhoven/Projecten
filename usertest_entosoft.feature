Feature: Entosoft user test 

     Background:
      Given Log in
      | Username  | Password  |       
      | root      | 123456789 | 

Scenario: Check if the test users exist if not type credentials here
When The user is logged in check if test users exist
 |UserName |PassWord | UserName2| PassWord2|
 |test_user |qwerty@1234 | test_user2| qwerty__ | 

Scenario: Optional delete the users
When User want to delete users delete them
|Delete|
|no|
# yes is delete - no is dont delete


