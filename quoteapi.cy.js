describe("quote api connection test", () => {

  beforeEach(() => {
    cy.visit('http://127.0.0.1:3000/Web-applications/qr_code/index.html')
  })

  it("check if page is loaded correctly", () => {
      cy.request('https://api.quotable.io/random').should("exist")
      cy.get("h1").should("exist").contains("Quote Generator")
      cy.get("p").should("exist").contains("Quote Generator gemaakt met javascript en een quote api Api: Quote Api")
  })

  it("button working correctly and load new quote", () => {
    cy.get("button").contains("New Quote").should("exist").click()
  })

  it("api link test", () => {
    cy.get("p").contains("Quote Api").should("exist").click()
    cy.visit('http://127.0.0.1:3000/Web-applications/qr_code/index.html')
    cy.location("pathname").should(
      "eq",
      "/Web-applications/qr_code/index.html"
    )
  })

  it("github links works to profile" , () => {
    cy.get("button").contains("SidvanEijndhoven").should("exist").click()
    cy.visit('http://127.0.0.1:3000/Web-applications/qr_code/index.html')
    cy.location("pathname").should(
      "eq",
      "/Web-applications/qr_code/index.html"
    )
  })

})