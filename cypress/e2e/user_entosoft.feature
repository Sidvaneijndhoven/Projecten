Feature: Entosoft testing 
     
     Background:
      Given Log in
         | Username  | Password  |
         | test_user | qwerty@1234 |

Scenario: User1 starts the batch and user2 stops the running batch
  When Log in as user1 start the batch and then login as user2 and edit batch  
  | Genetics    | Pupae timing | Num of prepupae in sample | Num of Pupae in sample | Num of empty Pupae in sample |
  | BPF-0000    | 2            | 1                         | 2                      | 3                            |

  Then User2 logs in and edits the running batch from user1
  |Login     | Pass   |
  |test_user2|qwerty__|





  

