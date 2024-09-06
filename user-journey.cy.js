// To let cypress fill in input field use .type("")
// Look good at the names
// cntrl S!
// to check the home page only use 

describe("User-journey", () => {

  Cypress.Commands.add("getByData", (selector) => {
    return cy.get(`[data-test=${selector}]`)
  })

  beforeEach(() => {
    cy.visit('http://localhost:3000')
  })

  it("a user can find a course on the home page and complete the courses lessons", () => {
    cy.getByData("course-0").find("a").contains("Get started").click()
    cy.location("pathname").should("eq", "/testing-your-first-application")
    cy.getByData("next-lesson-button").click()
    cy.location("pathname").should(
      "eq",
      "/testing-your-first-application/app-install-and-overview"
    )
   
    cy.getByData("challenge-answer-0").click()
    cy.getByData("next-lesson-button").should("exist").click()
    cy.location("pathname").should(
      "eq",
      "/testing-your-first-application/installing-cypress-and-writing-our-first-test"
    )

    cy.getByData("challenge-answer-0").click()
    cy.getByData("next-lesson-button").should("exist").click()
    cy.location("pathname").should(
      "eq",
      "/testing-your-first-application/setting-up-data-before-each-test"
    )

    cy.getByData("challenge-answer-0").click()
    cy.getByData("next-lesson-button").should("exist").click()
    cy.location("pathname").should(
      "eq",
      "/"
    )
  })
})
