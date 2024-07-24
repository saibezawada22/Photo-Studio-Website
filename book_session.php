<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="photo.css">
    <title>DreamSnap Studios-Book</title>
</head>
<body>

    <header>
        <nav>
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="book_session.html">Booking</a></li>
                <li><a href="feedback.html">Feedback</a></li>
            </ul>
        </nav>
    </header>

    <section id="reservation" class="reservation">
        <form action="reservation-success.html" method="post">
            <h2>Session Booking</h2>

            <label for="date">Select Date:</label>
            <input type="date" id="date" name="date" required>

            <label for="services">Select Services:</label>
            <select id="services" name="services" required>
                <option value="Portrait Photography" data-price="100">Portrait Photography</option>
                <option value="Event Photography">Event Photography</option>
                <option value="Family Photography">Family Photography</option>
                <option value="Photo Editing and Retouching">Photo Editing and Retouching</option>
                <option value="Photography Workshops and Classes">Photography Workshops and Classes</option>
            </select>
            <br><br>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Your Phone Number:</label>
            <input type="tel" id="phone" name="phone" pattern="^\+91\d{10}$" placeholder="+91" required>

            <label for="whatsapp">Your WhatsApp Number:</label>
            <input type="tel" id="whatsapp" name="whatsapp" pattern="^\+91\d{10}$" placeholder="+91" required>

            <button type="submit" class="btn">Book Now</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 DreamSnap Studios. All rights reserved.</p>
    </footer>

</body>
</html>
