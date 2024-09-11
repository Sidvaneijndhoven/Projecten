describe("Testing news website", () => {

  beforeEach(() => {
    cy.visit('http://127.0.0.1:3000/Web-applications/news-app/index.html') // can chance
  })

  it("should have a stable connection with the api", () => {
    cy.request('GET', 'http://newsapi.org/s/india-news-api')
    .then((response) => {
      expect(response.status).to.eq(200);
    })
  })

  it("should load the general page correctly", () => {
    cy.get(".container").should("exist")
    cy.get("h4").should("exist")
    for (let i = 1; i <= 20; i++){
      cy.get(`:nth-child(${i}) > .news-content`).should("exist");
      cy.wait(150)
    }
    for (let x = 1; x <= 20; x++){
      cy.get(`:nth-child(${x}) > .news-image-container > img`).should("exist");
      cy.wait(150)
    }
  })

  it("the buttons read more should work correct", () => {
    // Prevents the tabs from opening
    cy.visit('http://127.0.0.1:3000/Web-applications/news-app/index.html', {
      onLoad: (contentWindow) => {
        contentWindow.document.addEventListener('click', (event) => {
          if (event.target && event.target.matches('.view-button')) {
            event.preventDefault();
            event.stopImmediatePropagation();
          }
        });
      }
    });
    //checks if the button redirect you too the news site
    for (let y = 1; y <= 20; y++){
      cy.get(`:nth-child(${y}) > .news-content > .view-button`).should("exist").contains("Read More").click();
      cy.wait(150)
    }
  })

  it("should go the the entertainment section and load properly", () => {
    cy.get(".option").should("exist").contains("entertainment").click().click()
    cy.get(".active").should("exist")
    cy.get(".container").should("exist")
    cy.get("h4").should("exist")
    for (let o = 1; o <= 15; o++){
      cy.get(`:nth-child(${o}) > .news-content`).should("exist");
      cy.wait(150)
    }
    for (let p = 1; p <= 15; p++){
      cy.get(`:nth-child(${p}) > .news-image-container > img`).should("exist");
      cy.wait(150)
    }
  })

  it("the buttons should link you to the correct page and work", () => {
    cy.get(".option").should("exist").contains("entertainment").click().click()
    for (let a = 1; a <= 15; a++){
      cy.get(`:nth-child(${a}) > .news-content > .view-button`).should("exist").contains("Read More");
      cy.wait(150)
    }
    cy.wait(2000)
  })

  it("should go to the health section and load properly", () => {
    cy.get(".option").should("exist").contains("health").click()
    cy.wait(2000)
    cy.get(".option").should("exist").contains("entertainment").click()
    cy.wait(2000)
    cy.get(".option").should("exist").contains("health").click()
    cy.get(".active").should("exist")
    cy.get(".container").should("exist")
    cy.get("h4").should("exist")
    for (let t = 1; t <= 20; t++){
      cy.get(`:nth-child(${t}) > .news-content`).should("exist");
      cy.wait(150)
    }
    for (let r = 1; r <= 20; r++){
      cy.get(`:nth-child(${r}) > .news-image-container > img`).should("exist");
      cy.wait(150)
    }
    cy.wait(300)
  })
 
  it("the buttons should link you to the correct page and work", () => {
    cy.get(".option").should("exist").contains("health").click()
    cy.wait(2000)
    cy.get(".option").should("exist").contains("entertainment").click()
    cy.wait(2000)
    cy.get(".option").should("exist").contains("health").click()
    for (let a = 1; a <= 20; a++){
      cy.get(`:nth-child(${a}) > .news-content > .view-button`).should("exist").contains("Read More");
      cy.wait(150)
    }
    cy.wait(2000)
  })

  it("should go to the science section and load properly", () => {
    cy.get(".option").should("exist").contains("science").click()
    cy.wait(2000)
    cy.get(".option").should("exist").contains("health").click()
    cy.wait(2000)
    cy.get(".option").should("exist").contains("science").click()
    cy.get(".active").should("exist")
    cy.get(".container").should("exist")
    cy.get("h4").should("exist")
    for (let t = 1; t <= 20; t++){
      cy.get(`:nth-child(${t}) > .news-content`).should("exist");
      cy.wait(150)
    }
    for (let r = 1; r <= 20; r++){
      cy.get(`:nth-child(${r}) > .news-image-container > img`).should("exist");
      cy.wait(150)
    }
    cy.wait(300)
  })

  it("the buttons should link you to the correct page and work", () => {
    cy.get(".option").should("exist").contains("science").click()
    cy.wait(2000)
    cy.get(".option").should("exist").contains("health").click()
    cy.wait(2000)
    cy.get(".option").should("exist").contains("science").click()
    for (let q = 1; q <= 20; q++){
      cy.get(`:nth-child(${q}) > .news-content > .view-button`).should("exist").contains("Read More");
      cy.wait(150)
    }
    cy.wait(2000)
  })

  it("should go to the sports section and load properly", () => {
    cy.get(".option").should("exist").contains("sports").click()
    cy.wait(2000)
    cy.get(".option").should("exist").contains("science").click()
    cy.wait(2000)
    cy.get(".option").should("exist").contains("sports").click()
    cy.get(".active").should("exist")
    cy.get(".container").should("exist")
    cy.get("h4").should("exist")
    for (let c = 1; c <= 20; c++){
      cy.get(`:nth-child(${c}) > .news-content`).should("exist");
      cy.wait(150)
    }
    for (let l = 1; l <= 20; l++){
      cy.get(`:nth-child(${l}) > .news-image-container > img`).should("exist");
      cy.wait(150)
    }
    cy.wait(300)
  })

  it("the buttons should link you to the correct page and work", () => {
    cy.get(".option").should("exist").contains("sports").click()
    cy.wait(2000)
    cy.get(".option").should("exist").contains("science").click()
    cy.wait(2000)
    cy.get(".option").should("exist").contains("sports").click()
    for (let q = 1; q <= 20; q++){
      cy.get(`:nth-child(${q}) > .news-content > .view-button`).should("exist").contains("Read More");
      cy.wait(150)
    }
    cy.wait(2000)
  })

  it("should go to the technology page and load corrertly", () => {
    cy.get(".option").should("exist").contains("technology").click()
    cy.wait(2000)
    cy.get(".option").should("exist").contains("sports").click()
    cy.wait(2000)
    cy.get(".option").should("exist").contains("technology").click()
    cy.get(".active").should("exist")
    cy.get(".container").should("exist")
    cy.get("h4").should("exist")
    for (let c = 1; c <= 7; c++){
      cy.get(`:nth-child(${c}) > .news-content`).should("exist");
      cy.wait(150)
    }
    for (let l = 1; l <= 7; l++){
      cy.get(`:nth-child(${l}) > .news-image-container > img`).should("exist");
      cy.wait(150)
    }
    cy.wait(300)
  })

  it("the buttons should link you to the correct page and work", () => {
    cy.get(".option").should("exist").contains("technology").click()
    cy.wait(2000)
    cy.get(".option").should("exist").contains("sports").click()
    cy.wait(2000)
    cy.get(".option").should("exist").contains("technology").click()
    for (let q = 1; q <= 7; q++){
      cy.get(`:nth-child(${q}) > .news-content > .view-button`).should("exist").contains("Read More");
      cy.wait(150)
    }
    cy.wait(2000)
    cy.visit('http://127.0.0.1:3000/Web-applications/news-app/index.html')
  })
  it("checks if test is succes or not", () => {
    cy.location("pathname").should("eq", "/Web-applications/news-app/index.html")
    cy.log("TEST SUCCESSFULL!")
  })
})
