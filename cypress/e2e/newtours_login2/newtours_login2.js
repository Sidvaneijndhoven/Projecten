import {Given, When, Then} from "cypress-cucumber-preprocessor/steps"

Given("opens the website and tests", () => {
    cy.visit("http://127.0.0.1:3000/login-test2/index.html")
})

When("Tests if page load correctly in the browser", () => {
    cy.get(".login-container").should("exist")
    cy.get("h2").should("exist")
    cy.get("#username").should("exist")
    cy.get("#password").should("exist")
    cy.get("#loginButton").should("exist")
});

Then("Puts in different user in the input field", (data) => {
    data.hashes().forEach(element => {
        cy.get("#username").type(element.name)
        cy.get("#password").type(element.pass)
        cy.get("#loginButton").click()
        cy.wait(5000)
        cy.get("#logoutButton").should("exist").click()
    });
});