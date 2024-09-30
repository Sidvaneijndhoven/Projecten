import {Given, When, Then} from "cypress-cucumber-preprocessor/steps"

Given("Should load the calculator", () => {
    cy.visit("http://127.0.0.1:3000/Calculator/index.html")
})

When("Open the calculator it should load", () => {
    cy.get('#input').should("exist")
    cy.get('[value="1"]').should("exist")
    cy.get('[value="2"]').should("exist")
    cy.get('[value="3"]').should("exist")
    cy.get('[value="4"]').should("exist")
    cy.get('[value="5"]').should("exist")
    cy.get('[value="6"]').should("exist")
    cy.get('[value="7"]').should("exist")
    cy.get('[value="8"]').should("exist")
    cy.get('[value="9"]').should("exist")
    cy.get('#equal').should("exist")
    cy.get('[value="+"]').should("exist")
    cy.get('[value="-"]').should("exist")
    cy.get('[value="*"]').should("exist")
    cy.get('[value="/"]').should("exist")
    cy.get('#erase').should("exist")
    cy.get('#clear').should("exist")
})