describe("testing recipe app", () => {

  beforeEach(() => {
    cy.visit('http://127.0.0.1:3000/Web-applications/recipe-app/index.html') // can chance
  })
  it("should have a stable connection with the api",() => {
    cy.request('GET', 'https://www.themealdb.com/api/json/v1/1/search.php?s=')
    .then((response) => {
      expect(response.status).to.eq(200);
    })
  })

  it("should load the page correctly", () => {
    cy.get(".container").should("exist")
    cy.get("#user-inp").should("exist")
    cy.get("#search-btn").should("exist").contains("Search")
    
  })

  it("should load the result correctly and show the way to make it and hide recipe", () => {
    cy.get("#user-inp").should("exist").type("pasta")
    cy.get("#search-btn").should("exist").click()
    cy.get("ul").should("exist")
    cy.get(".details").should("exist")
    cy.get("img").should("exist")
    cy.get("#show-recipe").should("exist").contains("View Recipe").click()
    cy.get("#instructions").should("exist")
    cy.wait(1000)
    cy.get("#hide-recipe").should("exist").click()
  })
  it("checks some meals", () => {

    const basicMeals = [
      "Spaghetti Bolognese",
      "Sandwich",
      "Salad",
      "Tacos",
      "Pizza",
      "Soup",
      "Pancakes",
      "Burger",
      "Yogurt",
      "Big Mac"
    ];
    
    for (let i = 0; i < basicMeals.length; i++)
    {
      cy.get("#user-inp").should("exist").type(basicMeals[i])
      cy.get("#search-btn").should("exist").click()
      cy.wait(1000)
      cy.get("#show-recipe").should("exist").contains("View Recipe").click()
      cy.get("#instructions").should("exist")
      cy.wait(1000)
      cy.get("#hide-recipe").should("exist").click()
      cy.get("#user-inp").should("exist").clear()
      cy.wait(1000)
    }
  })

  it("should detect a wrong input", () => {
    cy.get("#user-inp").should("exist").type("milkshake")
    cy.get("#search-btn").should("exist").click()
    cy.get("h3").should("exist").contains("Invalid Input")
    cy.reload()
  })

  it("Test succes?", () => {
    cy.location("pathname").should("eq", "/Web-applications/recipe-app/index.html")
    cy.log("TEST SUCCES!");
  })
})