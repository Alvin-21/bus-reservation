@include('layouts.header')

<div class="contact-container">
    <h1>Sign up</h1>

    <form action="" method="post" class="contact-form">


        <label for="name">Name:</label>
        <input type="name" id="name" name="name" required>

        <!-- <label for="last_name">Last Name:</label>
            <input type="last_name" id="last_name" name="last_name" required> -->

        <label for="other_names">Surname:</label>
        <input type="other_names" id="surname" name="surname" required>

        <label for="date_of_birth">Date of birth:</label><br>
        <input type="date" id="date_of_birth" name="date_of_birth" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>




        <input type="submit" value="Sign up" name="Submit">
    </form>

</div>

<footer>
    <p>&copy; 2023 busExpress. All rights reserved.</p>
</footer>

</body>
</html>

