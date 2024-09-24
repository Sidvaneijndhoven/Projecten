using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Xml;

namespace Atm
{
    internal class Program
    {
        // sets a balance
        static decimal balance = 100000.00M;

        static void Main(string[] args)
        {

            // controls the loop
            bool exit = false;

            while (!exit)
            {
                //asks user to select 1-4
                Console.WriteLine();
                Console.WriteLine("Welcome to Sydney's bank!");
                Console.WriteLine("1. Check Balance");
                Console.WriteLine("2. Deposit Money");
                Console.WriteLine("3. Withdraw Money");
                Console.WriteLine("5. Go to the lamborghini shop");
                Console.WriteLine("6. Go to the House market");
                Console.WriteLine("7. Go to the MotorBike shop");
                Console.WriteLine("8. Get a loan");
                Console.WriteLine("4. Exit");

                Console.WriteLine("Select one of the 8 options (1-8): ");
                // gets the result and set it in the option
                string option = Console.ReadLine();

                // checks which input is passed on and of that calls a function
                switch (option)
                {
                    case "1":
                        CheckBalance();
                        break;
                    case "2":
                        DepositMoney();
                        break;
                    case "3":
                        WithdrawMoney();
                        break;
                    case "4":
                        exit = true;
                        Console.WriteLine("Thank you for choosing Sydney's bank!");
                        break;
                    case "5":
                        LamboShop();
                        break;
                    case "6":
                        HouseMarket();
                        break;
                    case "7":
                        MotorShop();
                        break;
                    case "8":
                        Loan();
                        break;
                    default:
                        Console.WriteLine("Please enter a valid number");
                        break;
                }
            }
            Console.WriteLine("Press Enter to exit...");
            Console.ReadLine();


            }
        // gets the currect balance of the decimal balance
        static void CheckBalance()  
        {
            Console.WriteLine($"Your current balance is: {balance:C}");
        }
        // created a decimal depositamount and does balance + depositamount so you can deposit money
        static void DepositMoney()
        {
         
            bool exit2 = false;

            while (!exit2)
            {
                Console.WriteLine();
                Console.WriteLine("You dont think its that easy! You gotta work for you're money!");
                Console.WriteLine("Type 'I need money' for 250k every time");

                string work = Console.ReadLine();

                if (work == "I need money")
                {
                    Console.WriteLine("Great work + $250.000");
                    balance += 250000M;
                    Console.WriteLine($"Your new balance is {balance:C}");
                    Console.WriteLine();

                }
                else
                {
                    Console.WriteLine("Work harder!");
                }

                Console.WriteLine("Press 'Enter' to keep working or type 'stop' to return to the main menu.");
                string input = Console.ReadLine();
                if (input.ToLower() == "stop")
                {
                    exit2 = true;  // Exits the loop to go back to the main menu
                }
            }
        }

        // created a withdrawamount if withdrawamount is higher then the balance you can withdraw it else the balance
        // wil get - of the widthdrawamount
        static void WithdrawMoney()
        {
            Console.WriteLine("Enter amount to withdraw: ");
            decimal withdrawAmount = decimal.Parse( Console.ReadLine() ); 

            if(withdrawAmount > balance)
            {
                Console.WriteLine("Insufficient balance.");
            }

            else
            {
                balance -= withdrawAmount;
                Console.WriteLine($"You have withdrawn {withdrawAmount:C}. Your new balance is {balance:C}.");
            }
           
        }

        static void LamboShop()
        {
            Console.WriteLine("Welcome to the Lamborghini shop!");
            Console.WriteLine();
            Console.WriteLine("Would you like to buy the Lamborghini SVJ 2018 for $2.400.000? (type: yes/no) ");
            string car = Console.ReadLine();
            if (car == "yes" && balance >= 2400000M)
            {
                balance -= 2400000M;
                Console.WriteLine("Congratulations on with youre NEW Lamborghini SVJ 2018!");
                Console.WriteLine();
            }

            else if(car == "no")
            {
                Console.WriteLine("You are a poor bastard!");
                Console.WriteLine();
            }

            else
            {
                Console.WriteLine("Too poor or enter a yes or no! ");
                Console.WriteLine();
            }
        }
        
        static void HouseMarket()
        {
            Console.WriteLine("Welcome to the House Market!");
            Console.WriteLine("Whe have alot of variations of houses: Villa($1.000.000), Standard House($350.000), Mansion($10.000.000), Las Vegas Mansion($100.000.000), Dubai Burj Khalifa($1.500.000.000) ");
            Console.WriteLine();
            Console.WriteLine("Which house youre interested in? ");
            string house = Console.ReadLine();

            if(house == "Villa" && balance >= 1000000M)
            {
                balance -= 1000000M;
                Console.WriteLine("Congratiulations with you're NEW Villa!");
                Console.WriteLine();
                Console.WriteLine($"You have payed $1.000.000 youre new balance is {balance:C}.");

            }

            else if(house == "Standard House" && balance >= 350000M)
            {
                balance -= 350000M;
                Console.WriteLine("Congratiulations with you're NEW(kinda) Standard House!");
                Console.WriteLine();
                Console.WriteLine($"You have payed $350.000 youre new balance is {balance:C}.");
            }

            else if(house == "Mansion" && balance >= 10000000M)
            {
                balance -= 10000000M;
                Console.WriteLine("Congratiulations with you're NEW Mansion!");
                Console.WriteLine();
                Console.WriteLine($"You have payed $10.000.000 youre new balance is {balance:C}.");

            }

            else if(house == "Las Vegas Mansion" && balance >= 100000000M)
            {
                balance -= 100000000M;
                Console.WriteLine("Congratiulations with you're NEW Las Vegas Mansion!");
                Console.WriteLine();
                Console.WriteLine($"You have payed $100.000.000 youre new balance is {balance:C}.");

            }

            else if(house == "Dubai Burj Khalifa" && balance >= 1500000000M)
            {
                balance -= 1500000000M;
                Console.WriteLine("Congratiulations with you're NEW Dubai Burj Khalifa!!");
                Console.WriteLine();
                Console.WriteLine($"You have payed $1.500.000.000 youre new balance is {balance:C}.");

            }
        }

        static void MotorShop()
        {
            Console.WriteLine();
            Console.WriteLine("Welcome to the MotorBike shop!");
            Console.WriteLine("We have nice bikes for sale: BMW S1000RR(17.550)!, BMW M1000RR(35.230)!, KAWASAKI NINJA H2(65.890)!, KAWASAKI ZX-10R(17.399), DUCATI PANIGALE V4(25.000)!" );
            Console.WriteLine("Which Bike you want to buy?");
            string bike = Console.ReadLine();

            if( bike == "BMW S1000RR" && balance >= 17550M)
            {
                balance -= 17550M;
                Console.WriteLine("Drive Safe with youre NEW bmw s1000rr!");
                Console.WriteLine($"You have payed $17.550 youre new balance is {balance:C}.");

                Console.WriteLine();
            }

            else if( bike == "KAWASAKI NINJA H2" && balance >= 65890M)
            {
                balance -= 65890M;
                Console.WriteLine("Drive Safe with youre NEW kawasaki ninja h2!");
                Console.WriteLine();
                Console.WriteLine($"You have payed $65.890 youre new balance is {balance:C}.");
            }

            else if (bike == "BMW M1000RR" && balance >= 35230M)
            {
                balance -= 35230M;
                Console.WriteLine("Drive Safe with youre NEW bmw m1000rr!");
                Console.WriteLine();
                Console.WriteLine($"You have payed $35.230 youre new balance is {balance:C}.");

            }

            else if (bike == "KAWASAKI ZX-10R" && balance >= 17399M)
            {
                balance -= 17399M;
                Console.WriteLine("Drive Safe with youre NEW kawasaki zx-10r !");
                Console.WriteLine();
                Console.WriteLine($"You have payed $17.399 youre new balance is {balance:C}.");
            }

            else if (bike == "DUCATI PANIGALE V4" && balance >= 25000M)
            {
                balance -= 25000M;
                Console.WriteLine("Drive Safe with youre NEW ducati panigale v4");
                Console.WriteLine();
                Console.WriteLine($"You have payed $25.000 youre new balance is {balance:C}.");
            }

            else
            {
                Console.WriteLine("Whe dont have that in stock right now! Or you're just too poor");
                Console.WriteLine();
            }
        }

        static void Loan()
        {
            Console.WriteLine();
            Console.WriteLine("Too lazy to work? Just get a loan here");
            Console.WriteLine();
            Console.WriteLine("Loans: 1 = '100.000' or 2 = '50.000'");
            Console.WriteLine("Type 1 or 2 to get a loan ");
            string loan = Console.ReadLine();

            if (loan == "1")
            {
                balance += 100000M;
                Console.WriteLine();
                Console.WriteLine($"Loan succes + $100.000 youre new balance is {balance:C}.");
                balance -= 100000M;
                Console.WriteLine($"What do you think! You gotta work for you're money get back to Work!");
                Console.WriteLine($"-$100.000 new balance is {balance:C}.");
            }

            else if (loan == "2")
            {
                balance += 50000M;
                Console.WriteLine();
                Console.WriteLine($"Loan succes + $50.000 youre new balance is {balance:C}.");
                balance -= 50000M;
                Console.WriteLine($"What do you think! You gotta work for you're money get back to Work!");
                Console.WriteLine($"-$50.000 new balance is {balance:C}.");
            }

            else
            {
                Console.WriteLine("Not a valid number!");
            }
        }
        
        

    }
}
