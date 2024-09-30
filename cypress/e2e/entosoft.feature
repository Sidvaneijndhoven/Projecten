Feature: Entosoft testing 

    Background:
        Given Visit the Entosoft testing site
     
Scenario: Test if page loads
    When Local login test

Scenario: Lets user decide where to go on page
When You put here where you want to go and you go there
|  Where          | Exact          |
|  #rearingDropdown | Rearing Batches Report |

# Choose from: #stockDropdown, #samplesDropdown, #bhiDropdown, #breedDropdown, #nurseryDropdown, #r4bDropdown,
# - #rearingDropdown, #processingDropdown, #dashboardsDropdown, #geneticsDropdown, #sheqDropdown, #utilitiesDropdown,
# - #adminDropdown, #helpDropdown, #userDropdown
# Then select the item you want to select under Exact


Scenario: Stock - test deliveries section
    When Tests the deliveries page

Scenario: Stock - test Final Products
    Then Tests the final products page

Scenario: Stock - test R&D Products page
    Then Tests the R&D products page
       
Scenario: Stock - test Quality Assurance Products
    Then Tests the quality assurance products page

Scenario: Stock - test Ingredient Journal page
    Then Tests the ingredient journal page

Scenario: Samples - test samples section
    When Tests the samples page 

Scenario: Samples - test Shipments page
    Then Tests the shipments page

Scenario: Samples - test Protocols page
    Then Tests the protocols page

Scenario: Samples - test Measurement Overview page
    Then Tests the Measurement Overview page

Scenario: Breed - test the Breed section
    When Tests the sbus page

Scenario: Breed - test the Breed Batches page
    Then Tests the breed batches page

Scenario: Breed - test the Oviste Racks page
    Then Tests the ovisite racks page

Scenario: Breed - test the Ovisite Rack logs
    Then Tests ovisite rack logs

Scenario: Breed - test work instructions for breed page
    Then Tests the work instructions page

Scenario: Breed - test Activity configurations page 
    Then Tests activity configurations page

Scenario: Breed - test Breed dashboard: daily yield per harvest daily
    Then Tests breed dashboard



Scenario: User logs into the Entosoft website - tests if page loaded correct and all nav work(takes a min)
    Then Fills in the following and tests if page loaded
    | Username  | Password  |
    | root | 123456789|






# later toevoegen
#Scenario: Tests the page you want to test
 #   When You fill in here which page you want to test



