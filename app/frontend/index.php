<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Restaurant Recommendation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Find Your Restaurant</h1>
        <form action="../backend/recommendation.php" method="POST">
            <label for="meal">Enter your favorite meal:</label>
            <input type="text" id="meal" name="meal" required>
            <button type="submit">Get Recommendation</button>
        </form>
        <div class="result">
            <!-- Recommendation result will appear here -->
        </div>
    </div>
    <script src="app.js"></script>
</body>
</html>
