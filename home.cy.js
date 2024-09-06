
describe('home page', () => {

  Cypress.Commands.add("getByData", (selector) => {
    return cy.get(`[data-test=${selector}]`)
  })

  beforeEach(() => {
    cy.visit('http://localhost:3000')
  })

  // test in the hero if h1 contains the correct text also tests if the feature homepages are correct
  context("hero section", () => {
    it('the h1 contains the correct text', () => {

      cy.getByData("hero-heading")
      .should("exist")
      .contains("Testing Next.js Applications with Cypress")
    })
  
    it("The feature on the homepage are correct", () =>{
      cy.get("dt").eq(0).contains("4 Courses")
      cy.get("dt").eq(1).contains("25+ Lessons")
      cy.get("dt").eq(2).contains("Free and Open Source")
    })
  })


  // tests in the course section if you can click on the button and it redirects you to the good page
  context("Course section", () => {
    it.only("Course: Testing Your First Next.js Application" , () => {
      cy.getByData("course-0").find("a").contains("Get started").click()
      cy.location("pathname").should("eq", "/testing-your-first-application")
    })

    it.only("Course: Testing Your First Next.js Application" , () => {
      cy.getByData("course-1").find("a").contains("Get started").click()
      cy.location("pathname").should("eq", "/testing-foundations")
    })

    it.only("Course: Testing Your First Next.js Application" , () => {
      cy.getByData("course-2").find("a").contains("Get started").click()
      cy.location("pathname").should("eq", "/cypress-fundamentals")
    })
  })
})

