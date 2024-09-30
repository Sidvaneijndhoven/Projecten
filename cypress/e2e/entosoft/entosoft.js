import {Given, When, Then, Before} from "cypress-cucumber-preprocessor/steps"

Given("Visit the Entosoft testing site", () => {
    cy.visit("https://cypress-cucumber-m77rbe.entosoft.protix-dev.eu/accounts/login/")
})

Before(() => {
    Cypress.on('uncaught:exception', (err, runnable) => {
        if (err.message.includes('ourJquery is not a function')) {
          return false; 
        }
      
        return true; 
      });
})

When("Local login test", () => {
    cy.wait(2000)
    cy.get("#id_username").should("exist")
    cy.get("#id_password").should("exist")
    cy.get(":nth-child(2) > .card-body > form > .btn").should("exist").contains("login")
    cy.get(".mb-0 > a").should("exist").contains("Lost password?")
    cy.get(":nth-child(2) > .card-header").should("exist").contains("Local login")
    cy.get(":nth-child(2) > label").should("exist").contains("Username")
    cy.get(":nth-child(3) > label").should("exist").contains("Password")
})

When("You put here where you want to go and you go there", (where) => {
    where.hashes().forEach(element => {
        cy.get("#id_username").type("root")
        cy.get("#id_password").type("123456789")
        cy.get(":nth-child(2) > .card-body > form > .btn").click()
        cy.get(element.Where).click().get('.nav-item.show > .dropdown-menu').contains(element.Exact).click();
        cy.log("*** New test ***")
        cy.wait(3000)
    })
});

When("Tests the deliveries page", () => {
    cy.get("#id_username").type("root")
    cy.get("#id_password").type("123456789")
    cy.get(":nth-child(2) > .card-body > form > .btn").click()
    cy.get("#stockDropdown").click().get('.nav-item.show > .dropdown-menu').contains("Deliveries").click();
    cy.get("h1").should("exist").contains("Deliveries")
    cy.get('.mb-2 > .btn').should("exist").contains("New delivery")

    const deli = [ 
        { id3: "thead > tr > :nth-child(1)", text3: "#"},
        { id3: "thead > tr > :nth-child(2)", text3: "Internal reference (Exact)"},
        { id3: "thead > tr > :nth-child(3)",  text3: "Created on"},
        { id3: "thead > tr > :nth-child(4)",  text3: "Delivery date"},
        { id3: "thead > tr > :nth-child(5)",  text3: "Ingredient"},
        { id3: "thead > tr > :nth-child(6)",  text3: "Supplier"},
        { id3: "thead > tr > :nth-child(7)",  text3: "Storage"},
        { id3: "thead > tr > :nth-child(8)",  text3: "Delivered Quantity (kg)"},
        { id3: "thead > tr > :nth-child(9)",  text3: "Quantity (kg)"},                                             
        { id3: "thead > tr > :nth-child(10)",  text3: "Notes"},
        { id3: "thead > tr > :nth-child(11)",  text3: "# Samples"},
        { id3: "thead > tr > :nth-child(12)",  text3: "Action"}
    ]

    deli.forEach(({ id3, text3 }) => {
        cy.get(id3)
          .should('exist')
          .then(element => {
            if (text3) {
              cy.wrap(element).contains(text3);
            }
          });
      });
      //page 1
      cy.get("#div_id_internal_reference").should("exist").contains("Internal reference")
      cy.get("#div_id_ingredient").should("exist").contains("Ingredient")
      cy.get("#div_id_created_after").should("exist").contains("Created after")
      cy.get("#div_id_created_before").should("exist").contains("Created before")
      cy.get('#submit-id-apply_filter').should("exist").contains("Apply filter")
      cy.get(':nth-child(3) > .page-link').should("exist").click()
      //page 2
      cy.wait(2000)
      cy.get("#div_id_internal_reference").should("exist").contains("Internal reference")
      cy.get("#div_id_ingredient").should("exist").contains("Ingredient")
      cy.get("#div_id_created_after").should("exist").contains("Created after")
      cy.get("#div_id_created_before").should("exist").contains("Created before")
      cy.get('#submit-id-apply_filter').should("exist").contains("Apply filter")
      cy.get('#id_internal_reference').type("test").clear()
      cy.wait(2000)
});
 
Then("Tests the final products page", () => {
    cy.get("#id_username").type("root")
    cy.get("#id_password").type("123456789")
    cy.get(":nth-child(2) > .card-body > form > .btn").click()
    cy.get("#stockDropdown").click().get('.nav-item.show > .dropdown-menu').contains("Final Products").click();
    cy.get("h1").should("exist").contains("Final Products")
    cy.get('.mb-2 > .btn').should("exist").contains("New final product")

    const final = [ 
        { id4: "tr > :nth-child(1)", text4: "Batch"},
        { id4: "tr > :nth-child(2)", text4: "Created on"},
        { id4: "tr > :nth-child(3)",  text4: "Created by"},
        { id4: "tr > :nth-child(4)",  text4: "Ingredient"},
        { id4: "tr > :nth-child(5)",  text4: "Quantity (kg)"},
        { id4: "tr > :nth-child(6)",  text4: "Location"},
        { id4: "tr > :nth-child(7)",  text4: "Stock Location"},
        { id4: "tr > :nth-child(8)",  text4: "Dry Matter"},
        { id4: "tr > :nth-child(9)",  text4: "Protein DS"},                                             
        { id4: "tr > :nth-child(10)",  text4: "Fat DS"},
        { id4: "tr > :nth-child(11)",  text4: "Ash"},
        { id4: "tr > :nth-child(13)",  text4: "Notes"},
        { id4: "tr > :nth-child(14)",  text4: "# Samples"},
        { id4: "tr > :nth-child(15)",  text4: "Action"},
        { id4: "tr > :nth-child(16)",  text4: "Labels"}
    ]

    final.forEach(({ id4, text4 }) => {
        cy.get(id4)
          .should('exist')
          .then(element => {
            if (text4) {
              cy.wrap(element).contains(text4);
            }
          });
      });
      cy.wait(300)
      cy.get('#div_id_batch').should("exist").contains("Batch")
      cy.get('#div_id_ingredient').should("exist").contains("Ingredient")
      cy.get('#div_id_created_after').should("exist").contains("Created after")
      cy.get('#div_id_created_before').should("exist").contains("Created before")
      cy.get('#submit-id-apply_filter').should("exist").contains("Apply filter")
      cy.get('#id_batch').type("test").clear()
      cy.wait(1000)
});

Then("Tests the R&D products page", () => {
    cy.get("#id_username").type("root")
    cy.get("#id_password").type("123456789")
    cy.get(":nth-child(2) > .card-body > form > .btn").click()
    cy.get("#stockDropdown").click().get('.nav-item.show > .dropdown-menu').contains("R&D Products").click();
    cy.get("h1").should("exist").contains("R&D Products")
    cy.get('.mb-2 > .btn').should("exist").contains("New R&D product")

    const rd = [ 
        { id5: "tr > :nth-child(1)", text5: "#"},
        { id5: "tr > :nth-child(2)", text5: "Created on"},
        { id5: "tr > :nth-child(3)",  text5: "Ingredient"},
        { id5: "tr > :nth-child(4)",  text5: "Quantity (kg)"},
        { id5: "tr > :nth-child(5)",  text5: "Name"},
        { id5: "tr > :nth-child(6)",  text5: "Experiment type"},
        { id5: "tr > :nth-child(7)",  text5: "Project id"},
        { id5: "tr > :nth-child(8)",  text5: "Experiment id"},
        { id5: "tr > :nth-child(9)",  text5: "Notes"},                                             
        { id5: "tr > :nth-child(10)",  text5: "# Samples"},
        { id5: "tr > :nth-child(11)",  text5: "Action"},
    ]

    rd.forEach(({ id5, text5 }) => {
        cy.get(id5)
          .should('exist')
          .then(element => {
            if (text5) {
              cy.wrap(element).contains(text5);
            }
          });
      });
      cy.get('#div_id_name').should("exist").contains("Name")
      cy.get('#div_id_experiment_type').should("exist").contains("Experiment type")
      cy.get('#div_id_project_id').should("exist").contains("Project id")
      cy.get('#div_id_experiment_id').should("exist").contains("Experiment id")
      cy.get('#div_id_ingredient').should("exist").contains("Ingredient")
      cy.get('#div_id_created_after').should("exist").contains("Created after")
      cy.get('#div_id_created_before').should("exist").contains("Created before")
      cy.get('#submit-id-apply_filter').should("exist").contains("Apply filter")
      cy.wait(200)
      cy.get('#id_name').type("test").clear()
      cy.wait(200)
      cy.get('#id_project_id').type("test").clear()
      cy.wait(200)
      cy.get('#id_experiment_id').type("test").clear()
});

Then("Tests the quality assurance products page", () => {
    cy.get("#id_username").type("root")
    cy.get("#id_password").type("123456789")
    cy.get(":nth-child(2) > .card-body > form > .btn").click()
    cy.get("#stockDropdown").click().get('.nav-item.show > .dropdown-menu').contains("Quality Assurance Products").click();
    cy.get("h1").should("exist").contains("Quality Assurance Products")
    cy.get('.mb-2 > .btn').should("exist").contains("New Quality Assurance product")

    const rd = [ 
        { id6: "tr > :nth-child(1)", text6: "#"},
        { id6: "tr > :nth-child(2)", text6: "Created on"},
        { id6: "tr > :nth-child(3)",  text6: "Ingredient"},
        { id6: "tr > :nth-child(4)",  text6: "Quantity (kg)"},
        { id6: "tr > :nth-child(5)",  text6: "Notes"},
        { id6: "tr > :nth-child(6)",  text6: "# Samples"},
        { id6: "tr > :nth-child(7)",  text6: "Action"}
    ]

    rd.forEach(({ id6, text6 }) => {
        cy.get(id6)
          .should('exist')
          .then(element => {
            if (text6) {
              cy.wrap(element).contains(text6);
            }
          });
      });
      cy.wait(300)
      cy.get('#div_id_ingredient').should("exist").contains("Ingredient")
      cy.get('#div_id_created_after').should("exist").contains("Created after")
      cy.get('#div_id_created_before').should("exist").contains("Created before")
      cy.get('#submit-id-apply_filter').should("exist").contains("Apply filter")
})

Then("Tests the ingredient journal page", () => {
    cy.get("#id_username").type("root")
    cy.get("#id_password").type("123456789")
    cy.get(":nth-child(2) > .card-body > form > .btn").click()
    cy.get("#stockDropdown").click().get('.nav-item.show > .dropdown-menu').contains("Ingredient Journal").click();
    cy.get("h1").should("exist").contains("Ingredient Journal")

    const ij = [ 
        { id6: "tr > :nth-child(1)", text6: "Date and time"},
        { id6: "tr > :nth-child(2)", text6: "Source"},
        { id6: "tr > :nth-child(3)",  text6: "Source reference"},
        { id6: "tr > :nth-child(4)",  text6: "Description"},
    ]

    ij.forEach(({ id6, text6 }) => {
        cy.get(id6)
          .should('exist')
          .then(element => {
            if (text6) {
              cy.wrap(element).contains(text6);
            }
          });
      });
      cy.get('#div_id_after').should("exist").contains("After")
      cy.get('#div_id_before').should("exist").contains("Before")
      cy.get('#div_id_source_reference').should("exist").contains("Source reference")
      cy.get('#submit-id-apply_filter').should("exist").contains("Apply filter")
      cy.get('#id_source_reference').type("test").clear()
});

When("Tests the samples page", () => {
    cy.get("#id_username").type("root")
    cy.get("#id_password").type("123456789")
    cy.get(":nth-child(2) > .card-body > form > .btn").click()
    cy.get("#samplesDropdown").click().get('.nav-item.show > .dropdown-menu').contains("Samples").click();
    cy.get("h1").should("exist").contains("Samples")

      const sa = [ 
        { id7: "tr > :nth-child(1)", text7: "Select"},
        { id7: "tr > :nth-child(2)", text7: "Sample number"},
        { id7: "tr > :nth-child(3)",  text7: "Created on"},
        { id7: "tr > :nth-child(4)",  text7: "Created by"},
        { id7: "tr > :nth-child(5)",  text7: "Ingredient"},
        { id7: "tr > :nth-child(6)",  text7: "Source type"},
        { id7: "tr > :nth-child(7)",  text7: "Source id"},
        { id7: "tr > :nth-child(8)",  text7: "Quantity (g)"},
        { id7: "tr > :nth-child(9)",  text7: "Site"},
        { id7: "tr > :nth-child(10)",  text7: "Notes"}
      ]
    
    sa.forEach(({ id7, text7 }) => {
        cy.get(id7)
          .should('exist')
          .then(element => {
            if (text7) {
              cy.wrap(element).contains(text7);
            }
          });
      });
      cy.get('#div_id_sample_number').should("exist").contains("Sample number")
      cy.get('#div_id_created_after').should("exist").contains("Created after")
      cy.get('#div_id_created_before').should("exist").contains("Created before")
      cy.get('#submit-id-apply_filter').should("exist").contains("Apply filter")
      cy.get('[method="POST"] > .btn').should("exist").contains("Add shipments")
      cy.get('a.btn').should("exist").contains("Add new sample")
      cy.get('#id_sample_number').type("test").clear()
    });


Then("Tests the shipments page", () => {
    cy.get("#id_username").type("root")
    cy.get("#id_password").type("123456789")
    cy.get(":nth-child(2) > .card-body > form > .btn").click()
    cy.get("#samplesDropdown").click().get('.nav-item.show > .dropdown-menu').contains("Shipments").click();
    cy.get("h1").should("exist").contains("Shipments")

      const ship = [ 
        { id8: "tr > :nth-child(1)", text8: "#"},
        { id8: "tr > :nth-child(2)", text8: "Sample"},
        { id8: "tr > :nth-child(3)",  text8: "Shipped from"},
        { id8: "tr > :nth-child(4)",  text8: "Shipped on"},
        { id8: "tr > :nth-child(5)",  text8: "Shipped by"},
        { id8: "tr > :nth-child(6)",  text8: "Shipped to"},
        { id8: "tr > :nth-child(7)",  text8: "Received on"},
        { id8: "tr > :nth-child(8)",  text8: "Received by"},
        { id8: "tr > :nth-child(9)",  text8: "Transported by"},
        { id8: "tr > :nth-child(10)",  text8: "Action"},
        
      ]
    
    ship.forEach(({ id8, text8 }) => {
        cy.get(id8)
          .should('exist')
          .then(element => {
            if (text8) {
              cy.wrap(element).contains(text8);
            }
          });
      });
});

Then("Tests the protocols page", () => {
  cy.get("#id_username").type("root")
  cy.get("#id_password").type("123456789")
  cy.get(":nth-child(2) > .card-body > form > .btn").click()
  cy.get("#samplesDropdown").click().get('.nav-item.show > .dropdown-menu').contains("Protocols").click();
  cy.get("h1").should("exist").contains("Protocols")

    const proto = [ 
      { id9: "thead > tr > :nth-child(1)", text9: "#"},
      { id9: "thead > tr > :nth-child(2)", text9: "Name"},
      { id9: "thead > tr > :nth-child(3)",  text9: "Measurement type"},
      { id9: "thead > tr > :nth-child(4)",  text9: "Product type"},
      { id9: "thead > tr > :nth-child(5)",  text9: "Site"},
    ] 
  
  proto.forEach(({ id9, text9 }) => {
      cy.get(id9)
        .should('exist')
        .then(element => {
          if (text9) {
            cy.wrap(element).contains(text9);
          }
        });
      });
      cy.get(".btn").should("exist").contains("New protocol")
});

 Then("Tests the Measurement Overview page", () => {
  cy.get("#id_username").type("root")
  cy.get("#id_password").type("123456789")
  cy.get(":nth-child(2) > .card-body > form > .btn").click()
  cy.get("#samplesDropdown").click().get('.nav-item.show > .dropdown-menu').contains("Measurements Overview").click();
  cy.get("h1").should("exist").contains("Measurement Overview")

    const measur = [ 
      { id10: "tr > :nth-child(1)", text10: "Sample"},
      { id10: "tr > :nth-child(2)", text10: "Ingredient"},
      { id10: "tr > :nth-child(3)",  text10: "Created on"},
      { id10: "tr > :nth-child(4)",  text10: " As"},
      { id10: "tr > :nth-child(5)",  text10: " Eiwit"},
      { id10: "tr > :nth-child(6)",  text10: " Vet"},
      { id10: "tr > :nth-child(7)",  text10: " Vocht"},
      { id10: "tr > :nth-child(8)",  text10: "Deadline"},
      { id10: "tr > :nth-child(9)",  text10: "Site"},
    ]
  
  measur.forEach(({ id10, text10 }) => {
      cy.get(id10)
        .should('exist')
        .then(element => {
          if (text10) {
            cy.wrap(element).contains(text10);
          }
        });
      });
      cy.get('[scope="col"]').should("exist").contains("Action")
});

When("Tests the sbus page", () => {
  cy.get("#id_username").type("root")
  cy.get("#id_password").type("123456789")
  cy.get(":nth-child(2) > .card-body > form > .btn").click()
  cy.get("#bhiDropdown").click().get('.nav-item.show > .dropdown-menu').contains("SBUs").click();
  cy.get("h1").should("exist").contains("SBUs")
  cy.get('h2').should("exist").contains("Shift Activities")
  cy.get(':nth-child(2) > .text-center').should("exist").contains("Morning shift")
  cy.get(':nth-child(3) > .text-center').should("exist").contains("Afternoon shift")
  cy.get('.center-text > .text-center').should("exist").contains("Night shift")
  cy.get('.justify-content-center > :nth-child(1) > :nth-child(2) > :nth-child(2)').should("exist")
  cy.get('.justify-content-center > :nth-child(1) > :nth-child(2) > :nth-child(3)').should("exist")
  cy.get('.center-text').should("exist")

  
  const sbu = 
  [ 
    { id11: ":nth-child(1) > .card > .card-body"},
    { id11: ":nth-child(2) > .card > .card-body"},
    { id11: ":nth-child(3) > .card > .card-body"},
    { id11: ":nth-child(4) > .card > .card-body"},
    { id11: ":nth-child(5) > .card > .card-body"},
    { id11: ":nth-child(6) > .card > .card-body"},
    { id11: ":nth-child(7) > .card > .card-body"},
    { id11: ":nth-child(8) > .card > .card-body"},
    { id11: ":nth-child(9) > .card > .card-body"},
    { id11: ":nth-child(10) > .card > .card-body"},
    { id11: ":nth-child(11) > .card > .card-body"},
    { id11: ":nth-child(12) > .card > .card-body"},
    { id11: ":nth-child(13) > .card > .card-body"},
    { id11: ":nth-child(14) > .card > .card-body"},
    { id11: ":nth-child(15) > .card > .card-body"},
    { id11: ":nth-child(16) > .card > .card-body"},
  ]

 sbu.forEach(({ id11}) => {
    cy.get(id11)
      .should('exist')
    });



  cy.get('.justify-content-center > :nth-child(1) > :nth-child(4)').should("exist").contains("Register ovisite racks of single harvest day at pre-hatch cabinet")
  cy.get('#div_id_register_date_time > .requiredField').should("exist").contains("When did you move the ovisite racks*")
  cy.get('#div_id_target_location > .requiredField').should("exist").contains("Where did you put them?*")
  cy.get('#submit-id-register').should("exist").contains("Register ovisite racks at pre-hatch cabinet")
  cy.get('#id_register_date_time').should("exist")
  cy.get('#id_target_location').should("exist")
  cy.get(':nth-child(6) > h4').should("exist").contains("Register new hatch rate measurement for a breed batch")
  cy.get(':nth-child(6) > .btn').should("exist").contains("Add new measurement")
})


Then("Tests the breed batches page", () => {
  cy.get("#id_username").type("root")
  cy.get("#id_password").type("123456789")
  cy.get(":nth-child(2) > .card-body > form > .btn").click()
  cy.get("#bhiDropdown").click().get('.nav-item.show > .dropdown-menu').contains("Breed Batches").click();
  cy.get("h1").should("exist").contains("Breed Batches")
  cy.get('#div_id_after').should("exist").contains("After*")
  cy.get('#div_id_before').should("exist").contains("Before*")
  cy.get('#submit-id-apply_filter').should("exist").contains("Apply filter")
  cy.get('.user-select-none').should("exist")
})

Then("Tests the ovisite racks page", () => {
  cy.get("#id_username").type("root")
  cy.get("#id_password").type("123456789")
  cy.get(":nth-child(2) > .card-body > form > .btn").click()
  cy.get("#bhiDropdown").click().get('.nav-item.show > .dropdown-menu').contains("Ovisite Racks").click();
  cy.get("h1").should("exist").contains("Ovisite Racks") 

  const ovisite = [ 
    { id12: "tbody > :nth-child(1) > :nth-child(1)", text12: "Select"},
    { id12: "tbody > :nth-child(1) > :nth-child(2)", text12: "Label"},
    { id12: "tbody > :nth-child(1) > :nth-child(3)", text12: "Harvest date"},
    { id12: "tbody > :nth-child(1) > :nth-child(4)", text12: "Breed batch"},
    { id12: "tbody > :nth-child(1) > :nth-child(5)", text12: "Sub-SBU"},
    { id12: "tbody > :nth-child(1) > :nth-child(6)", text12: "Eggs (g)"},
    { id12: "tbody > :nth-child(1) > :nth-child(7)", text12: "Location"},
    { id12: "tbody > :nth-child(1) > :nth-child(8)", text12: "At location since"},

  
  ]

  ovisite.forEach(({ id12, text12 }) => {
    cy.get(id12)
      .should('exist')
      .then(element => {
        if (text12) {
          cy.wrap(element).contains(text12);
        }
      });
    });

    cy.get('.btn-secondary').should("exist").contains("Select all")
    cy.get('h4').should("exist").contains("Move selected ovisite racks")
    cy.get('#div_id_move_date_time > .requiredField').should("exist").contains("When did you move the ovisite racks*")
    cy.get('#div_id_target_location > .requiredField').should("exist").contains("Where did you move the ovisite racks to?*")
    cy.get('#div_id_move_date_time').should("exist")
    cy.get('#div_id_target_location').should("exist")
    cy.get('#submit-id-move_selected_ovisites').should("exist").contains("Move selected ovisite racks")
    cy.get('#div_id_label').should("exist").contains("Label")
    cy.get('#id_label').type("test").clear()
    cy.get('#div_id_harvest_date').should("exist").contains("Harvest date")
    cy.get('#div_id_sbu').should("exist").contains("From SBU")
    cy.get('#id_sbu').type("test").clear()
    cy.get('#div_id_location').should("exist").contains("Location")
    cy.get('#submit-id-apply_filter').should("exist").contains("Apply filter")
})

Then("Tests ovisite rack logs", () => {
  cy.get("#id_username").type("root")
  cy.get("#id_password").type("123456789")
  cy.get(":nth-child(2) > .card-body > form > .btn").click()
  cy.get("#bhiDropdown").click().get('.nav-item.show > .dropdown-menu').contains("Ovisite Rack Logs").click();
  cy.get("h1").should("exist").contains("Ovisite rack log") 
  cy.get('#div_id_date').should("exist").contains("Date*")
  cy.get('#submit-id-apply_filter').should("exist").contains("Apply filter")

  const racklog = [ 
    { id13: "tbody > :nth-child(1) > :nth-child(1)", text13: "Breed batch"},
    { id13: "tbody > :nth-child(1) > :nth-child(2)", text13: "SBU"},
    { id13: "tbody > :nth-child(1) > :nth-child(3)", text13: "Eggs (g)"},
    { id13: "tbody > :nth-child(1) > :nth-child(4)", text13: "date"},
    { id13: "tbody > :nth-child(1) > :nth-child(5)", text13: "Location"},  
  ]

  racklog.forEach(({ id13, text13 }) => {
    cy.get(id13)
      .should('exist')
      .then(element => {
        if (text13) {
          cy.wrap(element).contains(text13);
        }
      });
    });
})

Then("Tests the work instructions page", () => {
  cy.get("#id_username").type("root")
  cy.get("#id_password").type("123456789")
  cy.get(":nth-child(2) > .card-body > form > .btn").click()
  cy.get("#bhiDropdown").click().get('.nav-item.show > .dropdown-menu').contains("Work Instructions").click();
  cy.get("h1").should("exist").contains("Work Instructions for Breed") 

  const workbreed = [ 
    { id14: "thead > tr > :nth-child(1)", text14: "Title"},
    { id14: "thead > tr > :nth-child(2)", text14: "Updated On"},
    { id14: "thead > tr > :nth-child(3)", text14: "Updated By"},
    { id14: "thead > tr > :nth-child(4)", text14: "Action"},
  ]

    workbreed.forEach(({ id14, text14 }) => {
        cy.get(id14)
          .should('exist')
          .then(element => {
            if (text14) {
              cy.wrap(element).contains(text14);
            }
          });
        });
        cy.get(':nth-child(3) > .row > .col-12').should("exist")
})

Then("Tests activity configurations page", () => {
  cy.get("#id_username").type("root")
  cy.get("#id_password").type("123456789")
  cy.get(":nth-child(2) > .card-body > form > .btn").click()
  cy.get("#bhiDropdown").click().get('.nav-item.show > .dropdown-menu').contains("Activity Configurations").click();
  cy.get("h1").should("exist").contains("Activity configurations for Breed") 
  cy.get('.col-12 > :nth-child(2)').should("exist").contains("Activities are explained on their manual page.")
  cy.get(':nth-child(1) > h2').should("exist").contains("Batch activity configurations")
  cy.get(':nth-child(1) > p').should("exist").contains("Activities for these configurations are created when a batch is created and are shown based on the age of the batch.")
  cy.get(':nth-child(2) > h2').should("exist").contains("Shift activity configurations")
  cy.get(':nth-child(2) > p').should("exist").contains("The activities for these configurations are created on specific times on specific days of the week or month.")
  cy.get(':nth-child(1) > .mb-2 > .btn').should("exist").contains("New configuration")
  cy.get(':nth-child(2) > .mb-2 > .btn').should("exist").contains("New configuration")

  const conf = [ 
    { id15: ":nth-child(1) > .table > tbody > :nth-child(1) > :nth-child(1)", text15: "Id"},
    { id15: ":nth-child(1) > .table > tbody > :nth-child(1) > :nth-child(2)", text15: "Description"},
    { id15: ":nth-child(1) > .table > tbody > :nth-child(1) > :nth-child(3)", text15: "Start after"},
    { id15: ":nth-child(1) > .table > tbody > :nth-child(1) > :nth-child(4)", text15: "Lifetime"},  
  ]

    conf.forEach(({ id15, text15 }) => {
        cy.get(id15)
          .should('exist')
          .then(element => {
            if (text15) {
              cy.wrap(element).contains(text15);
            }
          });
        });
        // NOT DONE YET
})

Then("Tests breed dashboard", () => {
  cy.get("#id_username").type("root")
  cy.get("#id_password").type("123456789")
  cy.get(":nth-child(2) > .card-body > form > .btn").click()
  cy.get("#bhiDropdown").click().get('.nav-item.show > .dropdown-menu').contains("Dashboard: Daily Yield per harvest day").click();
  cy.get("h1").should("exist").contains("Breed Dashboard: Daily Yield per Harvest Day") 


  // cy.log("**** TEST SUCCES REMOVE ****")
  // cy.wait(200000)
})

Then("Fills in the following and tests if page loaded", (data) => {
    data.hashes().forEach(element => {
    cy.get("#id_username").type(element.Username)
    cy.get("#id_password").type(element.Password)
    cy.get(":nth-child(2) > .card-body > form > .btn").click()
    cy.url().should("eq", 
        "https://cypress-cucumber-m77rbe.entosoft.protix-dev.eu/")
    cy.get(".jumbotron").should("exist")
    cy.get(".display-4").should("exist").contains("Entosoft® Control Center")
    cy.get(".navbar-brand").should("exist")
    cy.get(".navbar").should("exist")
    // checking nav
    const dropdowns = [
        { id: '#stockDropdown', text: 'Stock' },
        { id: '#samplesDropdown', text: 'Samples' },
        { id: '#bhiDropdown', text: 'Breed' },
        { id: '#breedDropdown', text: 'SBU-18' },
        { id: '#nurseryDropdown', text: 'Nursery' },
        { id: '#r4bDropdown', text: 'R4B' },
        { id: '#rearingDropdown', text: 'Rearing' },
        { id: '#processingDropdown', text: 'Processing' },
        { id: '#dashboardsDropdown', text: 'Dashboards' },
        { id: '#geneticsDropdown', text: 'Genetics' },
        { id: '#sheqDropdown', text: 'SHEQ' },
        { id: '#utilitiesDropdown', text: 'Utilities' },
        { id: '#helpDropdown', text: 'Help' },
        { id: '#userDropdown', text: '' }
      ];
      
      dropdowns.forEach(({ id, text }) => {
        cy.get(id)
          .should('exist')
          .then(element => {
            if (text) {
              cy.wrap(element).contains(text);
            }
          });
      });

      const drop = [
        { id2: '#stockDropdown', texts: ['Deliveries', 'Final Products', 'R&D Products', 'Quality Assurance Products', 'Ingredient Journal'], urls: ['/stock/deliveries', '/stock/final_products', '/stock/research_and_development_products', '/stock/quality_assurance_products', '/stock/ingredient_journal'] },
        { id2: '#samplesDropdown', texts: ['Samples', 'Shipments', 'Protocols', 'Measurements Overview'], urls: ['/samples/samples', '/samples/shipments', '/samples/protocols', '/samples/measurement_overview'] },
        { id2: '#bhiDropdown', texts: ['SBUs', 'Breed Batches', 'Ovisite Racks', 'Ovisite Rack Logs', 'Work Instructions', 'Error Log' ,'Activity Configurations', 'Dashboard: Daily Yield per harvest day', 'Dashboard: Daily Yield per SBU', 'Dashboard: SBU Total Yields'], urls: ['/bhi/sbus', '/bhi/breed_batches', '/bhi/ovisite_racks', '/bhi/ovisite_racklogs', '/work_instructions/B/?order_by=title', '/error_log/error_log/B','/activities/activity_configurations/B', '/bhi/dashboard_daily_harvest_per_day', '/bhi/dashboard_daily_harvest_per_sbu', '/bhi/dashboard_sbu_total_yields'] },
        { id2: '#breedDropdown', texts: ['SBUs', 'Breed Batches', 'Work Instructions', 'Error Log', 'Activity Configurations', 'QR codes', 'Dashboard: Daily Yield per harvest day', 'Dashboard: Daily Yield per SBU', 'Dashboard: SBU Total Yields'], urls: ['/breed/sbus', '/breed/breed_batches', '/work_instructions/0/?order_by=title','/error_log/error_log/0', 'activities/activity_configurations/0', '/breed/qr_codes', '/breed/dashboard_daily_harvest_per_day', '/breed/dashboard_daily_harvest_per_sbu', '/breed/dashboard_sbu_total_yields'] },
        { id2: '#nurseryDropdown', texts: ['Running Batches', 'Old Batches', 'Nursery Batches', 'Dosing Times', 'Dosing Manual Counts', 'Ovisite Rack Hatch Rates', 'Egg Allocation Schema', 'Work Instructions','Error Log', 'Activity Configurations'], urls: ['/nursery/running_batches', '/nursery/old_batches', '/nursery/nursery_batches', '/nursery/dosing_times', '/nursery/view_manual_counts', '/bhi/ovisite_rack_hatch_rates', '/bhi/egg_allocations', '/work_instructions/N/?order_by=title', '/error_log/error_log/N', '/activities/activity_configurations/N'] },
        { id2: '#r4bDropdown', texts: ['R4B Unit', 'R4B Batches', 'R4B Tracking Data for Eleven Days', 'Feed Batches', 'Feed Overview', 'Work Instructions','Error Log', 'Activity Configurations'], urls: ['/rearing_for_breed/r4b_unit', '/rearing_for_breed/rearing_for_breed_batches', '/rearing_for_breed/tracking_for_eleven_days', '/rearing_for_breed/feed_batches', '/rearing_for_breed/feed_overview', '/work_instructions/C/?order_by=title','/error_log/error_log/C','/activities/activity_configurations/C'] },
        { id2: '#rearingDropdown', texts: ['SRUs', 'Rearing Batches', 'Rearing Batches Report', 'Sieving Decks', 'Rejected LSPs', 'Work Instructions', 'Error Log', 'Activity Configurations'], urls: ['/rearing/srus', '/rearing/rearing_batches', '/rearing/rearing_batch_report', '/rearing/view_sieving_decks', '/rearing/rejected_lsps', '/work_instructions/R/?order_by=title','/error_log/error_log/R', '/activities/activity_configurations/R'] },
        { id2: '#processingDropdown', texts: ['Processing Overview', 'Rearing Belt Batches', 'Mincer Batches', 'Pasteurizer Batches', 'Bagging Batches', 'Daily Lipid Batches', 'Puree Filling Batches', 'Work Instructions','Error Log', 'Activity Configurations'], urls: ['/processing/processing_batches_overview', '/processing/rearing_belt_batches', '/processing/mincer_batches', '/processing/pasteurizer_batches', '/processing/bagging_batches', '/processing/daily_lipid_batches', '/processing/puree_filling_batches', '/work_instructions/P/?order_by=title', '/error_log/error_log/P', '/activities/activity_configurations/P'] },
        { id2: '#dashboardsDropdown', texts: ['Breed Daily', 'Breed Weekly', 'Entohatch', 'Incidents Weekly', 'Incidents Monthly', 'SBU Yield', 'SBU Cage Yield', 'Rearing per Batch', 'Rearing Weekly', 'Rearing Line Speed', 'Rearing Line Speed by Shift', 'Rearing Batch Crates', 'Processing', 'Silo Levels', 'Batch Linking'], urls: ['/dashboards/bhi/day', '/dashboards/bhi/week', '/dashboards/entohatch', '/incidents/dashboard/week', '/incidents/dashboard/month', '/dashboards/sbu_yield', '/dashboards/sbu_cage_yield', '/dashboards/rearing/day', '/dashboards/rearing/week', '/dashboards/rearing_line_speed', '/dashboards/rearing_line_speed_by_shift', '/dashboards/rearing_batch_crates?batch=1443&sort_by=S', '/dashboards/processing', '/dashboards/silo_level', '/dashboards/batch_linking'] },
        { id2: '#geneticsDropdown', texts: ['Work Instructions', 'Error Log', 'Genetics Sources'], urls: ['/work_instructions/G/?order_by=title', '/error_log/error_log/G', '/genetics/genetics-source']},
        { id2: '#sheqDropdown', texts: ['Work Instructions'], urls: ['/work_instructions/S/?order_by=title'] },
        { id2: '#utilitiesDropdown', texts: ['Work Instructions', 'Error Log'], urls: ['/work_instructions/U/?order_by=title', '/error_log/error_log/U' ]},
      ].forEach(({ id2, texts, urls }) => {
        cy.get(id2)
          .should('exist')
          .click()
          .get('.nav-item.show > .dropdown-menu')
          .should('exist')
          .then(() => {
            texts.forEach((text, index) => {
                // skips any error log
                if (text.includes('Error Log')) {
                    cy.log('Skipping Error Log entry');
                    return;
                  }
              cy.get(`.nav-item.show > .dropdown-menu > :nth-child(${index + 1}) > a`)
                .contains(text)
                .click()
                .wait(600)
                .url()
                .should('include', urls[index]); 
              cy.go('back'); 
              cy.get(id2).click(); 
              cy.wait(1100);
            });
          });
      });
    });
});

