
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" >
    <title>Sign up</title>
</head>
<body>

<header>
        <nav>
            <div class="logo"><a href="/">BusExpress</a></div>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="contactus">Contact us</a></li>
                <li><a href="">Our Services</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="signUp">Sign up</a></li>
                <li><a href="signIn">Sign in</a></li>
  
            </ul>
        </nav>
    </header>

<div class="contact-container">
        <h1>Sign up</h1>
        
        <form action = "" method="post" class="contact-form">
        
            
            <label for="name">Name:</label>
            <input type="name" id="name" name="name" required>

            <!-- <label for="last_name">Last Name:</label>
            <input type="last_name" id="last_name" name="last_name" required> -->

            <label for="other_names">Other Name:</label>
            <input type="other_names" id="other_names" name="other_names" required>

            <label for="date_of_birth">Date of birth:</label><br>
            <input type="date" id="date_of_birth" name="date_of_birth" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required> 

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>

            

            
            <input type="submit" value="Sign up" name="Submit">
        </form>
        
    </div>

    <footer>
        <p>&copy; 2023 busExpress. All rights reserved.</p>
    </footer>

</body>
</html>

