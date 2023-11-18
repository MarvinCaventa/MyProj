print("BuildaKey: Your blueprint to your customized keyboard")
print("-----------------------------------------------------")
print("\n")

keyboard_prices = {
    "Royal Kludge RK 100": 2860.00,
    "Glorious GMMK 100%": 6590.00,
    "AJAZZ AK992 RGB": 2827.00,
    "AJAZZ K870T PRO": 2519.99,
    "Tecware Phantom+": 2365.00,
    "Rakk Lam-ang pro": 1559.00,
    "Womier WK61": 3742.00,
    "Leaven K620": 620.00,
    "Redragon Fizz": 1395.00
}

switch_options = {
    "Linear": ["Gateron Yellows", "Cherry MX Reds", "Akko CS switch Jelly Whites"],
    "Tactile": ["Boba U4T", "Glorious Holy Panda Switches", "Akko V3 Pro Cream Blue"],
    "Clicky": ["Kailh Box Navy Jade", "Kailh Box White V2", "Redragon Bullet R"]
}

switch_prices = {
    "Gateron Yellows": 10.00,
    "Cherry MX Reds": 30.00,
    "Akko CS switch Jelly Whites": 18.00,
    "Boba U4T": 30.00,
    "Glorious Holy Panda Switches": 35.00,
    "Akko V3 Pro Cream Blue": 16.00,
    "Kailh Box Navy Jade": 23.00,
    "Kailh Box White V2": 35.89,
    "Redragon Bullet R": 22.00
}

keycaps_options = {
    "OEM": ["RAKK Gradient PBT", "KeyTok Magic Lamp Black and White", "Royal Kludge Custom 136 Keycaps"],
    "CHERRY": ["GMK Alter", "GMK Ash", "Olivia PBT Double-Shot"],
    "ASA": ["AKKO Chocolate PBT", "AKKO Pudding ASA set", "Piifox Rock and Roll ASA"]
}

keycaps_prices = {
    "RAKK Gradient PBT": 250.00,
    "KeyTok Magic Lamp Black and White": 2893.00,
    "Royal Kludge Custom 136 Keycaps": 499.00,
    "GMK Alter": 1580.00,
    "GMK Ash": 1570.00,
    "Olivia PBT Double-Shot": 2395.00,
    "AKKO Chocolate PBT": 1899.00,
    "AKKO Pudding ASA set": 1008.00,
    "Piifox Rock and Roll ASA": 2695.00
}

total_price = 0.0  
selected_keycaps_model = None  
selected_switch_model = None
selected_model = None
keyboard_price = 0.0  # Define keyboard_price here

while True:
    step = 1  

    while step == 1:
        keyboard_layout = {
            "100%": {"models": ["Royal Kludge RK 100", "Glorious GMMK 100%", "AJAZZ AK992 RGB"], "switches": 100},
            "TKL": {"models": ["AJAZZ K870T PRO", "Tecware Phantom+", "Rakk Lam-ang pro"], "switches": 87},
            "60%": {"models": ["Womier WK61", "Leaven K620", "Redragon Fizz"], "switches": 61}
        }

        print("----KEYBOARD LAYOUT----")
        print("     100%/TKL/60%")
        user_input = input("Please choose a Layout: ").upper().strip()
        print("--------------------------------")

        if user_input not in keyboard_layout:
            print("INVALID INPUT PLEASE TRY AGAIN")
            print("--------------------------------")
        else:
            print(f"Here are some {user_input} Keyboards. Please Choose a Number")
            for idx, keyboard_model in enumerate(keyboard_layout[user_input]["models"], start=1):
                print(f"{idx}. {keyboard_model}")

            model_choice = input("ENTER THE NUMBER OF YOUR CHOSEN KEYBOARD: ")
            try:
                model_choice = int(model_choice)
                if 1 <= model_choice <= len(keyboard_layout[user_input]["models"]):
                    selected_model = keyboard_layout[user_input]["models"][model_choice - 1]
                    keyboard_price = keyboard_prices[selected_model]
                    print(f"You've selected {selected_model}.")
                    print("-----------------------------------------------------")
                    step = 2  

                else:
                    print("Invalid model choice. Please select a number within the range.")
            except ValueError:
                print("Invalid input. Please enter a number.")

    while step == 2:
        print("----SWITCH OPTIONS----")
        print("    Linear/Tactile/Clicky")
        switch_type = input("Please choose a switch type: ").capitalize().strip()
        print("-----------------------------------------------------")

        if switch_type in switch_options:
            print(f"Here are some {switch_type} switches. Please choose a number:")
            for idx, switch_model in enumerate(switch_options[switch_type], start=1):
                print(f"{idx}. {switch_model}")

            switch_model_choice = input("Enter the number of your chosen switch model: ")
            try:
                switch_model_choice = int(switch_model_choice)
                if 1 <= switch_model_choice <= len(switch_options[switch_type]):
                    selected_switch_model = switch_options[switch_type][switch_model_choice - 1]
                    switch_price = switch_prices[selected_switch_model]
                    print(f"You've chosen {selected_switch_model} switches.")
                    print(f"Now, the switches are set to {keyboard_layout[user_input]['switches']}.")
                    print("-----------------------------------------------------")
                    step = 3 

                else:
                    print("Invalid switch model choice. Please select a number within the range.")
            except ValueError:
                print("Invalid input. Please enter a number.")

    while step == 3:
        print("----KEYCAPS OPTION----")
        print("    OEM/CHERRY/ASA")
        keycap_type = input("Please Choose a Keycaps: ").upper().strip()
        print("--------------------------------")

        if keycap_type in keycaps_options:
            print(f"Here are some {keycap_type} keycaps. Please choose a number:")
            for idx, keycap_model in enumerate(keycaps_options[keycap_type], start=1):
                print(f"{idx}. {keycap_model}")

            keycaps_model_choice = input("Enter the number of your chosen keycaps model: ")
            try:
                keycaps_model_choice = int(keycaps_model_choice)
                if 1 <= keycaps_model_choice <= len(keycaps_options[keycap_type]):
                    selected_keycaps_model = keycaps_options[keycap_type][keycaps_model_choice - 1]
                    keycaps_price = keycaps_prices[selected_keycaps_model]
                    print(f"You've selected {selected_keycaps_model}.")
                    total_price += keyboard_price + (keyboard_layout[user_input]["switches"] * switch_price) + keycaps_price
                    print("--------------------------------")
                    step = 4  

                else:
                    print("Invalid keycaps model choice. Please select a number within the range.")
            except ValueError:
                print("Invalid input. Please enter a number.")

    if step == 4:
        print("----SUMMARY----")
        print(f"Selected Keyboard: {selected_model} - ₱{keyboard_price}")
        if selected_switch_model:
            print(f"Selected Switch: {selected_switch_model} - ₱{switch_price} per switch, {keyboard_layout[user_input]['switches']} switches (Total: ₱{switch_price * keyboard_layout[user_input]['switches']})")
        else:
            print("No switch selected.")
        if selected_keycaps_model:
            print(f"Selected Keycaps: {selected_keycaps_model} - ₱{keycaps_price}")
        else:
            print("No keycaps selected.")
        print(f"Total Price: ₱{total_price}")
        print("-----------------------------------------------------")
        print("\n")
