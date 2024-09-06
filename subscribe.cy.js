// To let cypress fill in input field use .type("")
// Look good at the names


describe("testing subsribe input", () => {

  Cypress.Commands.add("getByData", (selector) => {
    return cy.get(`[data-test=${selector}]`)
  })

  beforeEach(() => {
      cy.visit('http://localhost:3000')
    })

    it("allows user to subscribe to the email list" , () =>{
        cy.getByData("email-input").type("sid@aol.com")
        cy.getByData("submit-button").click()
        cy.getByData("success-message").should("exist").contains("sid@aol.com")
    })

    it("does NOT allow a invalid email address", () => {
        cy.getByData("email-input").type("sid")
        cy.getByData("submit-button").click()
        cy.getByData("success-message").should("not.exist")
    })

    it("does NOT subscribe if alr subscribed", () => {
      cy.getByData("email-input").type("john@example.com")
      cy.getByData("submit-button").click()
      cy.getByData("server-error-message").should("exist").contains("already exists. Please use a different email address.")
    })

}) 
