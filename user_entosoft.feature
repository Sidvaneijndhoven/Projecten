Feature: Entosoft testing 
     
     Background:
      Given Log in
         | Username  | Password  |
         | test_user | qwerty@1234 |

Scenario: Test if batch1 is already on
    When If batch1 is already on stop and rerun code else run code

Scenario: User1 starts the batch and user2 stops the running batch
  When Log in as user1 start the batch and then login as user2 and edit batch  
  |Weigh indivual| Genetics    | Pupae timing | Num of prepupae in sample | Num of Pupae in sample | Num of empty Pupae in sample |
  |yes           | BPF-0000    | 1            | 2                         | 3                      | 4                            |

  Then User2 logs in and edits the running batch from user1
  |Login     | Pass   |
  |root|123456789|

@smoke
Scenario: Test activity check off list 
  When User1 logs in and checks some activitys
         |Login2     | Pass2   |
         |test_user|qwerty@1234|

  Then User2 logs in and should see the activitys but cant edit them
         |Login3     | Pass3   |
         |test_user2|qwerty__|

  

