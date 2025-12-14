webapp/backend/recommendation.php
<?php
// Include database configuration
include '../../server/config/db_config.php';

// Get the meal input from the form
$meal = $_POST['meal'] ?? '';

if (!empty($meal)) {
    // Prepare SQL to find a restaurant matching the cuisine/meal
    $sql = "SELECT name, cuisine, rating FROM restaurants WHERE cuisine LIKE ? ORDER BY rating DESC LIMIT 1";
    $stmt = $conn->prepare($sql);
    $search = "%$meal%";
    $stmt->bind_param('s', $search);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "We recommend: " . $row['name'] . " (" . $row['cuisine'] . ") with rating: " . $row['rating'];
    } else {
        echo "No recommendations found for '$meal'.";
    }

    $stmt->close();
} else {
    echo "Please enter a meal to get a recommendation.";
}

$conn->close();
?>