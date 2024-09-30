import {Given, When, Then} from "cypress-cucumber-preprocessor/steps"

Given("Load the flag game", () => {
    cy.visit("http://127.0.0.1:3000/flag_game/index.html")
})

When("Run the test the flag game should load", () => {
    cy.get('#start').should("exist").contains("Start Game").click()
    cy.get('h3').should("exist").contains("Drag & Drop The Flags Over Their Respective Country Names")
    cy.get('.draggable-objects').should("exist")
    cy.get('.drop-points').should("exist")
    cy.get(':nth-child(1) > .countries').should("exist")
    cy.get(':nth-child(2) > .countries').should("exist")
    cy.get(':nth-child(3) > .countries').should("exist")
    cy.get('.container').should("exist")
})

Then("Drags the items to the correct box", () => {
    const data = [
        "belgium",
        "bhutan",
        "brazil",
        "china",
        "cuba",
        "ecuador",
        "georgia",
        "germany",
        "hong-kong",
        "india",
        "iran",
        "myanmar",
        "norway",
        "spain",
        "sri-lanka",
        "sweden",
        "switzerland",
        "united-states",
        "uruguay",
        "wales",
      ];

      cy.get('.draggable-objects').drag(data)

      










})