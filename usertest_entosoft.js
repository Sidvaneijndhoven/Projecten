import { Given, When, Then, Before } from "cypress-cucumber-preprocessor/steps";

Given("Log in", (dataTable) => 
    {
        dataTable.hashes().forEach(element => {
            cy.login(element.Username, element.Password);
        });
        cy.visit("https://cypress-cucumber-m77rbe.entosoft.protix-dev.eu/");
    })
    
When("The user is logged in check if test users exist", (usermaker) => {
    usermaker.hashes().forEach((element) => {
        cy.get('#adminDropdown').click()
        cy.get('.nav-item.show > .dropdown-menu').contains("Admin Site").click()
        cy.get('.model-user > th > a').should("exist").contains("Users").click()
        cy.get('#searchbar').should("exist").type("test_user{enter}")

        cy.get('.paginator').then(($paginator) => {
            if ($paginator.text().trim() === "0 users") {
                // makes user 1 breed permission only
                cy.log("no user found making new one")
                cy.get('li > .addlink').click()
                cy.get('#id_username').should("exist").type(element.UserName)
                cy.get('#id_password1').should("exist").type(element.PassWord)
                cy.get('#id_password2').should("exist").type(element.PassWord)
                cy.get('[value="Save and continue editing"]').click()
                cy.get('#id_first_name').type(element.UserName)
                cy.get('#id_last_name').type(element.UserName)
                cy.get('#id_groups_input').should("exist").type("breed")
                cy.get('#id_groups_add_all_link').click()
                cy.get('#id_user_permissions_input').should("exist").type("breed")
                cy.get('#id_user_permissions_add_all_link').click()
                cy.get('#id_user_permissions_input').clear()
                cy.wait(1000)
                cy.get('#id_user_permissions_input').should("exist").type("bhi")
                cy.get('#id_user_permissions_from').select("bhi | remark | Can add remark")
                cy.get('#id_user_permissions_add_all_link').click()
                cy.get('[value="Save and add another"]').contains("Save and add another").click()
                // makes user 2 read only
                cy.get('#id_username').type(element.UserName2)
                cy.get('#id_password1').type(element.PassWord2)
                cy.get('#id_password2').type(element.PassWord2)
                cy.get('[value="Save and continue editing"]').click()
                cy.get('#id_first_name').type(element.UserName2)
                cy.get('#id_last_name').type(element.UserName2)
                cy.get('#id_groups_input').type("read")
                cy.get('#id_groups_add_all_link').click()
                cy.get('.default').click()                
            }
            else
            {
                // test if users are correctly made
                cy.get('#user-tools').should("exist").contains("Log out").click()
                cy.get('.card-body > :nth-child(2) > a').click()
                cy.get('#id_username').type(element.UserName)
                cy.get('#id_password').type(element.PassWord)
                cy.get(':nth-child(2) > .card-body > form > .btn').click()
                cy.get('#userDropdown').should("exist").contains(element.UserName).click()
                cy.log("test_user succesfully made!")
                cy.get('.nav-link > .dropdown-menu').contains("Log out").click()
                cy.get('.card-body > :nth-child(2) > a').click()
                cy.get('#id_username').type(element.UserName2)
                cy.get('#id_password').type(element.PassWord2)
                cy.get(':nth-child(2) > .card-body > form > .btn').click()
                cy.get('#userDropdown').should("exist").contains(element.UserName2).click()
                cy.log("test_user2 succesfully made!")
            }
        })
    })
})

When("User want to delete users delete them", (deletete) => {
    deletete.hashes().forEach((element) => {
        if(element.Delete == "yes")
        {
            cy.log("!PLEASE MAKE SURE YOU WANT TO DELETE USERS!")
            cy.get('#id_username').type("root")
            cy.get('#id_password').type("123456789")
            cy.get(':nth-child(2) > .card-body > form > .btn').click()
            cy.get('#adminDropdown').click()
            cy.get('.nav-item.show > .dropdown-menu').should("exist").contains("Admin Site").click()
            cy.get('.model-user > th > a').contains("Users").click()
            cy.get('#searchbar').type("test_user{enter}")
            cy.get('.field-username').should("exist").contains("test_user").click()
            cy.get('.deletelink').click()
            cy.get('[type="submit"]').click()
            cy.get('.field-username').should("exist").contains("test_user2").click()
            cy.get('.deletelink').click()
            cy.get('[type="submit"]').click()

        }
        
        else
        {
            cy.log("NO USERS DELETED")
        }
    })
    cy.log("!TEST PASSED!")
    cy.wait(10000)
})