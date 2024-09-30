import {Given, When, Then} from "cypress-cucumber-preprocessor/steps"

Given("Visit the budget app", () => {
    cy.visit("http://127.0.0.1:3000/budget_app/index.html")
})

When("Visiting the budget app it should load correctly", () => {
    cy.get('.total-amount-container').should("exist")
    cy.wait(500)
    cy.get('#total-amount').should("exist").type("test").clear()
    cy.get('#total-amount-button').should("exist").contains("Set Budget")
    cy.get('.total-amount-container > h3').should("exist").contains("Budget")
    cy.get('.user-amount-container').should("exist")
    cy.get('.user-amount-container > h3').should("exist").contains("Expenses")
    cy.wait(500)
    cy.get('#product-title').should("exist").type("test").clear()
    cy.wait(500)
    cy.get('#user-amount').should("exist").type("test").clear()
    cy.get('.output-container').should("exist")
    cy.get('.output-container > :nth-child(1) > p').should("exist").contains("Total Budget")
    cy.get('.output-container > :nth-child(2) > p').should("exist").contains("Expenses")
    cy.get(':nth-child(3) > p').should("exist").contains("Balance")
    cy.get('.list > h3').should("exist").contains("Expense List")
    cy.get('.list').should("exist")
})

Then("Can fill in under here what to test", (data) => {
    data.hashes().forEach(element => {
        cy.get('#total-amount').type(element.Budget)
        cy.get('#total-amount-button').click()
        cy.get('#product-title').type(element.Title)
        cy.get('#user-amount').type(element.Cost)
        cy.get('#check-amount').click()
        cy.wait(5000)
    });
})

When("Fill in if you want to edit or remove", (data2) => {
    cy.get('#total-amount').click().type("250")
    cy.wait(2000)
    cy.get('#total-amount-button').click()
    cy.wait(5000)
    cy.get('#product-title').click().type("Airpods 4")
    cy.get('#user-amount').click().type("199")
    cy.wait(2000)
    cy.get('#check-amount').click()
    data2.hashes().forEach(element => {
        if (element.Edit === "yes") {
            cy.get('#check-amount').click()
            cy.get('.fa-pen-to-square').click();
            cy.get('#check-amount').click()
        } else if (element.Edit === "no") {
            cy.get('.fa-pen-to-square').should("exist");
        }
    });

    data2.hashes().forEach(element => {
        if (element.Remove === "yes") {
            cy.get('#check-amount').click()
            cy.get('.fa-trash-can').click();
            cy.get('#check-amount').click()
        } else if (element.Remove === "no") {
            cy.get('.fa-trash-can').should("exist");
        }
    });
});

   













// Then("Fills in the following and tests if page loaded", (data) => {
//     data.hashes().forEach(element => {
//     cy.get("#id_username").type(element.Username)
//     cy.get("#id_password").type(element.Password)