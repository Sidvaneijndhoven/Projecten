import {Given, When, Then} from "cypress-cucumber-preprocessor/steps"

Given("opens the website", () => {
    cy.visit("http://127.0.0.1:3000/login/index.html")
})

When("Tests if home page loads correctly", () => {
    cy.get("form").should("exist")
    cy.get("#submit-button").should("exist")
    cy.get("#input-field").should("exist")
    cy.get("#pass-input-field").should("exist")
    cy.get("label").should("exist")
})

Then("Login as Following", (datatab) => {
    datatab.hashes().forEach(element => {
        cy.get("#input-field").type(element.naam)
        cy.get("#pass-input-field").type(element.wachtwoord)
        cy.get("#submit-button").click()
        cy.get(".result").should("exist")
    });
});



