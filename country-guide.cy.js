// test for country-guide-app api
describe("Testing weather-guide app", () => {

  beforeEach(() => {
    cy.visit('http://127.0.0.1:3000/Web-applications/country-guide/index.html') // can chance
  })

  it("should load the page correctly", () => {
    cy.get("#country-inp").should("exist")
    cy.get("#search-btn").should("exist").contains("Search")
  })

  it("should load the result correctly", () => {
    cy.get("#country-inp").type("Netherlands")
    cy.get("#search-btn").click()
    cy.get("#result").should("exist")
    cy.get(':nth-child(3) > .data-wrapper')
    cy.get(':nth-child(4) > .data-wrapper')
    cy.get(':nth-child(5) > .data-wrapper')
    cy.get(':nth-child(6) > .data-wrapper')
    cy.get(':nth-child(7) > .data-wrapper')
    cy.get(".flag-img").should("exist")
    cy.get("h2").should("exist")
  })

  it("tests connection with api", () => {
    cy.request("https://restcountries.com/v3.1/name/eesti").then((response) => {
      expect(response.status).to.eq(200);
    })
  })

  const countries = [
    "Canada", "Brazil", "Germany", "Japan", "India", 
    "Australia", "Mexico", "Russia", "China", "South Africa",
    "France", "Egypt", "Argentina", "Italy", "United Kingdom",
    "Spain", "South Korea", "Turkey", "Indonesia", "Nigeria"
  ];

  for (let i = 0; i < countries.length; i++)
    {
      it("loops trough countries to test", () => {
          cy.get("#country-inp").type(countries[i])
          cy.get("#search-btn").click()
          cy.wait(1500);
      })
  }
})

