describe("Pokemon api test", () => {

  beforeEach(() => {
    cy.visit('http://127.0.0.1:3000/Web-applications/pokemon_card_gen/index.html')
  })

  it("should load the page/cards", () => {
    cy.get("#card").should("exist")
    cy.get(".hp").should("exist")
    cy.get(".poke-name").should("exist")
    cy.get(".types").should("exist")
    cy.get("h3").should("exist")
    cy.get(".stats").contains("Attack")
    cy.get(':nth-child(2) > p').contains("Defense")
    cy.get(':nth-child(3) > p').contains("Speed")
    cy.get("img").should("exist")
  })

  it("should generate a new pokemon when you click on Generate button", () => {
    cy.get("#btn").should("exist").click()
  })

  // api connection check
  it("checks connection with api", () => {
    cy.request('GET', 'https://pokeapi.co/api/v2/pokemon')
    .then((response) => {
      expect(response.status).to.eq(200);
    })
  })
  // api looping trough recourses
  for (let id = 1; id <= 150; id++) {
    it(`checks if Pokemon with ID ${id} loads`, () => {
      cy.request(`GET`, `https://pokeapi.co/api/v2/pokemon/${id}`)
        .then((response) => {
          expect(response.status).to.eq(200);
          expect(response.body.id).to.eq(id);
        });
    });
  }
  
})


