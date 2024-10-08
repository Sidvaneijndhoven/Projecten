// run test: npx cypress run --spec "cypress/e2e/user_entosoft.feature"
// run checklist: npx cypress run --spec "cypress/e2e/user_entosoft.feature" --env TAGS='@smoke'
import { Given, When, Then, Before } from "cypress-cucumber-preprocessor/steps";

Given("Log in", (dataTable) => 
{
    dataTable.hashes().forEach(element => {
        cy.login(element.Username, element.Password);
    });
    cy.visit("https://cypress-cucumber-m77rbe.entosoft.protix-dev.eu/");
})

When("Log in as user1 start the batch and then login as user2 and edit batch",(data) => {
    cy.get('#bhiDropdown').click()
    cy.wait(500)
    cy.get('.nav-item.show > .dropdown-menu > :nth-child(1) > a').click()

    // user1 start batch
    // starting SBU 1
    cy.get(':nth-child(1) > .card > .card-body').should("exist")
    cy.get(':nth-child(1) > .card > .card-body > .card-title').should("exist").contains("SBU 1") // making sure to start SBU 1
    cy.get(':nth-child(1) > .card > .card-body > .card-text > .btn').click()
    cy.get('h1').should("exist").contains("Start Breed Batch for SBU 1")
    // starting batch
    data.hashes().forEach((element) => {
        cy.get('#id_genetics_source').select(element.Genetics)
        cy.get('#id_pupae_timing').type(element["Pupae timing"])
        cy.get('#id_nr_prepupae_in_sample').type(element["Num of prepupae in sample"])
        cy.get('#id_nr_pupae_in_sample').type(element["Num of Pupae in sample"])
        cy.get('#id_nr_empty_pupae_in_sample').type(element["Num of empty Pupae in sample"])
        cy.wait(1000)
        cy.get('#submit-id-submit').click()
    });
    // making sure the batch started
    cy.get('.btn').should("exist").contains("Stop batch")
    cy.get(':nth-child(2) > .card-text > .btn-secondary').should("exist").contains("Details")
    for (let i = 1; i < 5; i++) 
    {
        cy.get(`tbody > :nth-child(${i}) > :nth-child(1)`).should("exist").scrollIntoView()
        cy.wait(500)
    }
    for (let i = 1; i < 5; i++) 
    {
        cy.get(`tbody > :nth-child(${i}) > :nth-child(2)`).should("exist").scrollIntoView()
        cy.wait(500)
    }
});

Then("User2 logs in and edits the running batch from user1", (login) => {
    // user2 edit batch
    // user 1 logout
    cy.get('#userDropdown').click()
    cy.get('.nav-link > .dropdown-menu > :nth-child(2)').click()
    cy.get('.card-body > :nth-child(2) > a').click()
    login.hashes().forEach((element) => 
    {
        cy.get("#id_username").type(element.Login);
        cy.get("#id_password").type(element.Pass);
        cy.get(':nth-child(2) > .card-body > form > .btn').click()
    })
    cy.wait(500)
    cy.get('#bhiDropdown').click()
    cy.get('.nav-item.show > .dropdown-menu > :nth-child(1) > a').click()
    cy.wait(200)
    cy.get('.btn').contains("Stop batch").scrollIntoView().click()
    cy.wait(200)
    cy.get('.modal-footer > .btn-primary').click()
});
    
When("User1 logs in and checks some activitys", (checklogin) => {
    checklogin.hashes().forEach((element) =>
    {
        cy.get("#id_username").type(element.Login2);
        cy.get("#id_password").type(element.Pass2);
        cy.get(':nth-child(2) > .card-body > form > .btn').click()
    })
    cy.get('#bhiDropdown').click()
    cy.get('.nav-item.show > .dropdown-menu > :nth-child(1) > a').click()
    cy.wait(2000)
    // Checks the activitys
    cy.get('input[type="checkbox"]').check({ multiple: true, force: true });
    cy.wait(1500)
    cy.get(':nth-child(2) > :nth-child(2) > .btn').click()
    cy.wait(1000)
    cy.get(':nth-child(2) > :nth-child(2) > .btn').click()
    cy.get(':nth-child(6) > :nth-child(1) > .nav-link').click()
    cy.get('.nav-link > .dropdown-menu > :nth-child(2) > a').click()
    cy.get('.card-body > :nth-child(2) > a').click()
});

Then("User2 logs in and should see the activitys but cant edit them", (checklogin2) => 
{
    checklogin2.hashes().forEach((element) =>
    {
        cy.get("#id_username").type(element.Login3);
        cy.get("#id_password").type(element.Pass3);
        cy.get(':nth-child(2) > .card-body > form > .btn').click()
    });
    cy.get('#bhiDropdown').click()
    cy.get('.nav-item.show > .dropdown-menu > :nth-child(1) > a').click()
    cy.wait(2000)
    cy.get(':nth-child(2) > .btn').click()
    cy.get('input[type="checkbox"]').should("exist")   
    cy.get('.justify-content-center > :nth-child(1) > :nth-child(2) > :nth-child(2)').should("be.visible") 
})
    

