<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" >
    <title>Contact us</title>

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
        <h1>Contact Us</h1>
        
        <form action = "processes/sendMail.php" method="post" class="contact-form">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="message">Message:</label><br>
            <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>

            <input type="submit" value="Submit" name="Submit">
        </form>
        
    </div>

    <footer>
        <p>&copy; 2023 busExpress. All rights reserved.</p>
    </footer>

</body>
</html>

