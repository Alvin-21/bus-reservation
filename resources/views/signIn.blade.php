<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" >
    <title>Sign in</title>
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
        <h1>Sign in</h1>
        
        <form action = "" method="post" class="contact-form">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>

            
            <input type="submit" value="Sign in" name="Submit"><a href="dashboard">Go to Dashboard</a>
        </form>
        
    </div>

    <footer>
        <p>&copy; 2023 busExpress. All rights reserved.</p>
    </footer>

</body>
</html>

