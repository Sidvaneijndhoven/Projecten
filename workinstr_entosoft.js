// run file: npx cypress run --spec "cypress/e2e/workinstr_entosoft.feature" 
import { Given, When, Then} from "cypress-cucumber-preprocessor/steps";

Given("Log in", (dataTable) => 
    {
        dataTable.hashes().forEach(element => {
            cy.login(element.Username, element.Password)
            cy.witest(element.Page)
        });
    })
    
When("There should be a column named Renew before", () => {
    cy.get('thead > tr > :nth-child(3)').should("exist").contains("Renew Before")  
})

Then("When a Renew Before is expired the background is red and a message is send", () => {
    let messageCount = 1;
    function Errorwitest(a) {
      cy.get('body').then(($body2) => {
        const $row2 = $body2.find(`tbody > :nth-child(${a}) > :nth-child(3)`);
        if ($row2.length > 0) {
          cy.wrap($row2).should('have.css', 'background-color').then((bgColor) => {
            if (bgColor === 'rgb(0, 0, 0)') 
            {
              cy.wait(75);
              Errorwitest(a + 1); 
            }       
            else if (bgColor === 'rgb(255, 192, 192)' || bgColor === 'rgb(240, 176, 176)') 
            {     
                cy.get('.error').should("exist")
                cy.get(`tbody > :nth-child(${a}) > :nth-child(3)`).invoke('text').then((text2) => {
                cy.log(`FOUND: Work Instruction ${a} is expired`);
                cy.get(`:nth-child(${a}) > :nth-child(1) > a`).invoke('text').then((text) => {
                cy.log(`With title: ${text}`);
                cy.get('h1').invoke('text').then((page) => {
                cy.wait(75)
                const message = `**:incoming_envelope:LOG ${messageCount}:** \nWork instruction: __${a}__ "${text}" is expired(Should be renewed before: __${text2}__)! \nOn page: __${page}__`;
                cy.task('sendDiscordMessage', message);
                
                messageCount++;
              })
              })
              });
              
              Errorwitest(a + 1); 
            }

            else if(bgColor === 'rgb(255, 240, 176)' || bgColor === 'rgb(240, 224, 160)')
            {
                cy.get('.warning').should("exist")
                cy.get(`tbody > :nth-child(${a}) > :nth-child(3)`).invoke('text').then((text2) => {
                cy.log(`FOUND: Work Instruction ${a} is ALMOST expired`);
                cy.get(`:nth-child(${a}) > :nth-child(1) > a`).invoke('text').then((text) => {
                cy.log(`With title: ${text}`);
                cy.get('h1').invoke('text').then((page) => {
                cy.wait(75)
                const message = `**:warning::incoming_envelope:LOG ${messageCount}:** \nWork instruction: __${a}__ "${text}" is ALMOST expired(Needs to be renewed before: __${text2}__)! \nOn page: __${page}__`;
                cy.task('sendDiscordMessage', message);
                
                messageCount++;
              })
              })
              });
              
              Errorwitest(a + 1);
            }

            else 
            {
              cy.log(`Work Instruction ${a} found but NOT expired! Background is ${bgColor}.`);
              Errorwitest(a + 1); 
            }
          });
        }
       
        else 
        {
          cy.log("No work instruction found in DOM ending loop");
        }
      });
    }

    let a = 1;
    Errorwitest(a);
  
});

When("Column row Updated On exist in DOM stay in loop", () => {
    function checkUpdate(p) {
        cy.get('body').then(($body) => {
          if ($body.find(`tbody > :nth-child(${p}) > :nth-child(2)`).length > 0) 
          {
            cy.wait(75)
            cy.log(`Column row ${p} exists in DOM`);
      
            p += 1; 
            checkUpdate(p); 
          } 
          else 
          {
            cy.log('Element no longer exists ending loop');
          }
        });
      }
      
      let p = 1;
      checkUpdate(p);
})

Then("Renew before exist in DOM stay in loop", () => {
    function checkNeedUpdate(z) {
        cy.get('body').then(($body) => {
          if ($body.find(`tbody > :nth-child(${z}) > :nth-child(3)`).length > 0) 
          {
            cy.wait(75)
            cy.log(`Column row ${z} exists in DOM`);
      
            z += 1; 
            checkNeedUpdate(z); 
          } 
          else 
          {
            cy.log('Element no longer exists ending loop');
          }
        });
      }
      
      let z = 1;
      checkNeedUpdate(z);
})