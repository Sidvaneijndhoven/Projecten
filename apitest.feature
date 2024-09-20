Feature: Testing budget app

     Background:
        Given Visit the budget app
    
Scenario: Testing if the page loads
    When Visiting the budget app it should load correctly

Scenario: User can fill in the fields
    Then Can fill in under here what to test
    | Budget  | Title      | Cost     |
    | 1       | 1          |  1       | 

Scenario: User can edit or remove the expense
  When Fill in if you want to edit or remove
    | Remove   | Edit  |
    | no      | no    |

    #type yes or no