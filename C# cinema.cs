using System;

namespace Cinema
{
    internal class Program
    {
        static void Main(string[] args)
        {
            bool exit = false;

            while (!exit)
            {
                Console.WriteLine();
                Console.WriteLine("Welcome to Sydney's Cinema!");
                Console.WriteLine("1. Available Movies");
                Console.WriteLine("2. Booking");
                Console.WriteLine("3. Cinemas");
                Console.WriteLine("4. Exit");

                Console.WriteLine("Select one of the 4 options (1-4) ");
                string option = Console.ReadLine();

                switch (option)
                {
                    case "1":
                        Movies();
                        break;
                    case "2":
                        Booking();
                        break;
                    case "3":
                        Cinema();
                        break;
                    case "4":
                        exit = true;
                        Console.WriteLine("Thank you for choosing Sydney's Cinema!");
                        break;
                    default:
                        Console.WriteLine("Please enter a valid number");
                        break;
                }
            }
        }
        static void Movies()
        {
            Console.WriteLine();
            Console.WriteLine("Here you can see the available movies");
            Console.WriteLine();
            Console.WriteLine("Movies: Slingshot, Joker, Smile2, Flight Risk");
            Console.WriteLine("If you want to book a movie go to the Booking section!");
        }
        static void Booking()
        {
            Console.WriteLine("Here you can book a movie!");
            Console.WriteLine();
            Console.WriteLine("Which one you want to book?");
            Console.WriteLine();
            Console.WriteLine("1. Slingshot(Start - 14:15 End - 15:30 Duration - 1 hours 45 min)");
            Console.WriteLine("2. Joker(Start - 17:30 End - 19:32 Duration 2 hours 2 min");
            Console.WriteLine("3. Smile2(Start - 20:00 End - 21:36 Duration 1 hours 36 min)");
            Console.WriteLine("4. Flight Risk(Start - 10:30 End - 12:20 Duration 1 hour 50 min)");
            Console.WriteLine();
            Console.WriteLine("Which one you want to book?(type 1-4) ");
            string book = Console.ReadLine();

            if(book == "1")
            {
                Console.WriteLine("Slingshot Great choice! Which row you want?");
                Console.WriteLine();
                Console.WriteLine("################");
                Console.WriteLine("1---------------");
                Console.WriteLine("2---------------");
                Console.WriteLine("3---------------");
                Console.WriteLine("4---------------");
                               
                Console.WriteLine();
                Console.WriteLine("Choose youre row ");
                string book2 = Console.ReadLine();
                if (book2 == "1")
                {
                    Console.WriteLine("Reservation made for row 1 & Movie: Slingshot");
                }

                else if (book2 == "2")
                {
                    Console.WriteLine("Reservation made for row 2 & Movie: Slingshot");
                }

                else if (book2 == "3")
                {
                    Console.WriteLine("Reservation made for row 3 & Movie: Slingshot");
                }

                else if (book2 == "4")
                {
                    Console.WriteLine("Reservation made for row 4 & Movie: Slingshot");
                }

                else
                {
                    Console.WriteLine("Please choose a valid row");
                }


            }

            if (book == "2")
            {   
                Console.WriteLine("Joker Great choice! Which row you want?");
                Console.WriteLine();
                Console.WriteLine("################");
                Console.WriteLine("1---------------");
                Console.WriteLine("2---------------");
                Console.WriteLine("3---------------");
                Console.WriteLine("4---------------");
                Console.WriteLine();
                Console.WriteLine("Choose youre row ");
                string book2 = Console.ReadLine();
                if (book2 == "1")
                {
                    Console.WriteLine("Reservation made for row 1 & Movie: Joker");
                }

                else if (book2 == "2")
                {
                    Console.WriteLine("Reservation made for row 2 & Movie: Joker");
                }

                else if (book2 == "3")
                {
                    Console.WriteLine("Reservation made for row 3 & Movie: Joker");
                }

                else if (book2 == "4")
                {
                    Console.WriteLine("Reservation made for row 4 & Movie: Joker");
                }

                else
                {
                    Console.WriteLine("Please choose a valid row");
                }


            }

            if (book == "3")
            {
                Console.WriteLine("Smile2 Great choice! Which row you want?");
                Console.WriteLine();
                Console.WriteLine("################");
                Console.WriteLine("1---------------");
                Console.WriteLine("2---------------");
                Console.WriteLine("3---------------");
                Console.WriteLine("4---------------");
                Console.WriteLine();
                Console.WriteLine("Choose youre row ");
                string book2 = Console.ReadLine();
                if (book2 == "1")
                {
                    Console.WriteLine("Reservation made for row 1 & Movie: Smile2");
                }

                else if (book2 == "2")
                {
                    Console.WriteLine("Reservation made for row 2 & Movie: Smile2");
                }

                else if (book2 == "3")
                {
                    Console.WriteLine("Reservation made for row 3 & Movie: Smile2");
                }

                else if (book2 == "4")
                {
                    Console.WriteLine("Reservation made for row 4 & Movie: Smile2");
                }

                else
                {
                    Console.WriteLine("Please choose a valid row");
                }


            }

            if (book == "4")
            {
                Console.WriteLine("Flight Risk Great choice! Which row you want?");
                Console.WriteLine();
                Console.WriteLine("################");
                Console.WriteLine("1---------------");
                Console.WriteLine("2---------------");
                Console.WriteLine("3---------------");
                Console.WriteLine("4---------------");
                Console.WriteLine();
                Console.WriteLine("Choose youre row ");
                string book2 = Console.ReadLine();
                if (book2 == "1")
                {
                    Console.WriteLine("Reservation made for row 1 & Movie: Flight Risk");
                }

                else if (book2 == "2")
                {
                    Console.WriteLine("Reservation made for row 2 & Movie: Flight Risk");
                }

                else if (book2 == "3")
                {
                    Console.WriteLine("Reservation made for row 3 & Movie: Flight Risk");
                }

                else if (book2 == "4")
                {
                    Console.WriteLine("Reservation made for row 4 & Movie: Flight Risk");
                }

                else
                {
                    Console.WriteLine("Please choose a valid row");
                }
            }
        }

        static void Cinema()
        {
            Console.WriteLine("Our Cinema locations!");
            Console.WriteLine("Sydney's Cinema - Location: Amsterdam - Opening Times: Daily from 10:00 to 00:00");
            Console.WriteLine("Sydney's Cinema - Location: Utrecht - Opening Times: Daily from 10:00 to 00:00");
            Console.WriteLine("Sydney's Cinema - Location: Rotterdam - Opening Times: Daily from 11:00 to 23:00");
            Console.WriteLine("Sydney's Cinema - Location: The Hague - Opening Times: Daily from 10:00 to 23:00");
        }

    }

}


