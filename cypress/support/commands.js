// ***********************************************
// This example commands.js shows you how to
// create various custom commands and overwrite
// existing commands.
//
// For more comprehensive examples of custom
// commands please read more here:
// https://on.cypress.io/custom-commands
// ***********************************************
//
//
// -- This is a parent command --
// Cypress.Commands.add('login', (email, password) => { ... })
//
//
// -- This is a child command --
// Cypress.Commands.add('drag', { prevSubject: 'element'}, (subject, options) => { ... })
//
//
// -- This is a dual command --
// Cypress.Commands.add('dismiss', { prevSubject: 'optional'}, (subject, options) => { ... })
//
//
// -- This will overwrite an existing command --
// Cypress.Commands.overwrite('visit', (originalFn, url, options) => { ... })


// cypress/support/commands.js

// Cypress.Commands.add('login', () => {
//     cy.session([Username, Password], () => 
//         {
//         Then("Fills in the following", (data) => {
//             data.hashes().forEach(element => {
//                 cy.get("#id_username").type(element.Username)
//                 cy.get("#id_password").type(element.Password)
//                 cy.get(":nth-child(2) > .card-body > form > .btn").click()
//                 cy.url().should("eq", 
//                     "https://cypress-cucumber-m77rbe.entosoft.protix-dev.eu/")
//                 cy.get(".jumbotron").should("exist")
//                 cy.get(".display-4").should("exist").contains("Entosoft® Control Center")
//             });
//         }) 
//     });
// })




















