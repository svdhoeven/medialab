<form method="post" action="dashboard" class="sign-up-form">
    <div class="input_wrapper">
        <label for="firstName">
            Voornaam
        </label>
        <input type="text" name="firstName" id="firstName" placeholder="Voornaam" required/>
    </div>

    <div class="input_wrapper">
        <label for="lastName">
            Achternaam
        </label>
        <input type="text" name="lastName" id="lastName" placeholder="Achternaam" required/>
    </div>

    <div class="input_wrapper">
        <label for="password">
            Wachtwoord
        </label>
        <input type="password" name="password" id="password" placeholder="Wachtwoord"/>
    </div>

    <input type="submit" class="submit" name="signup_submit" value="Inschrijven"/>
</form>