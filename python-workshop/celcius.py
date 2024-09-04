
while True:

    print("celsius to farhenheit")

    degree = int(input("Enter the temprature"))

    which = input("is this in C/F?").strip().upper()    

    def calc_function():
        if which == "C":
            result = degree * 9 / 5 + 32 
            print(degree, "c is", result, "f")
        elif which == "F":
            result = (degree - 32) * 5 / 9
            print(degree, "f is", result, "c")
        else:
            print("error")
            
    calc_function()   

    reset = input("Do you want to reset? (yes/no)") 
    if reset.lower() != "yes":
        break

    print("goodbye")

