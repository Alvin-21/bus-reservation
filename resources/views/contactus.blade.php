@include('layouts.header')
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

