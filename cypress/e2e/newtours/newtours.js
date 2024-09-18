import { Before, After, Given, When, Then, And } from "cypress-cucumber-preprocessor/steps"

Before(() => {
    cy.reload()
})

After(() => {
    cy.reload()
})

Given("open newtours application", () => {
    cy.visit("https://demo.guru99.com/test/newtours/")
})

// When("provide validation {string} and {string}", (userName, password) => {
//     cy.get('[name=userName]').type(userName)
//     cy.get('[name=password]').type(password)
// })

When("I login in as Following", (datatable) => {
    datatable.hashes().forEach(element => {
        cy.get('[name=userName]').type(element.userName)
        cy.get('[name=password]').type(element.password)
    });
})

Then("click on submit button", () => {
   cy.get('[name=submit]').click()
})

And("verify title should be {string}", (title) => {
    cy.title().should('eq', title)
})



