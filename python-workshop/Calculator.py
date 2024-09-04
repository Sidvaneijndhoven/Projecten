print("calculator in python")

while True:

    first_input = int(input("Enter first number"))

    second_input = int(input("Enter second number")) 

    chooser = (input("Choose one: +, /, *, - "))

    if chooser == "+":
        result = first_input + second_input
    elif chooser == "-":
        result = first_input - second_input
    elif chooser == "/":
            if second_input == 0:
                 result = "error"
            else:
                result = first_input - second_input
    elif chooser == "*":
        result = first_input * second_input
    else:
        print("no input")

    print("Result:" , result)

    again = input("Do you want to reset the calculator? (yes/no) ")
    if again.lower() != "yes":
        break

    print("goodbye")