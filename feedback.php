<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="photo.css">
    <title>DreamSnap Studios - Feedback</title>
</head>
<body>

    <header>
        <nav>
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="book_session.html">Booking</a></li>
                <li><a href="feedback.html">Feedback</a></li>
                <li><a href="reviews.html">Customer Reviews</a></li>
            </ul>
        </nav>
    </header>

    <section id="feedback" class="feedback">
        <h2>Feedback Form</h2>

        <p>We appreciate your feedback! Please let us know how we did.</p>

        <form action="feedbackreview.php" method="post">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="rating">Rating:</label>
            <select id="rating" name="rating" required>
                <option value="5">5 - Excellent</option>
                <option value="4">4 - Very Good</option>
                <option value="3">3 - Good</option>
                <option value="2">2 - Fair</option>
                <option value="1">1 - Poor</option>
            </select>

            <label for="comments">Comments:</label>
            <textarea id="comments" name="comments" rows="4" required></textarea>
            <br>
            <br>

            <button type="submit" class="btn">Submit Feedback</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 DreamSnap Studios. All rights reserved.</p>
    </footer>

</body>
</html>
