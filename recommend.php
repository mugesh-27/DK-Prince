<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recommendations - TV Show Recommendation</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <main>
        <h1>Get Recommendations</h1>
        <form action="recommend.php" method="post">
            <label for="genre">Preferred Genre:</label>
            <select id="genre" name="genre">
                <option value="Drama">Drama</option>
                <option value="Comedy">Comedy</option>
                <option value="Sci-Fi">Sci-Fi</option>
                <!-- Add more genres as needed -->
            </select>
            <button type="submit">Get Recommendations</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $genre = htmlspecialchars($_POST['genre']);
            // Example recommendation logic
            $recommendations = [
                'Drama' => ['Breaking Bad', 'The Crown'],
                'Comedy' => ['Brooklyn Nine-Nine', 'The Office'],
                'Sci-Fi' => ['Stranger Things', 'Black Mirror'],
                // Add more recommendations
            ];

            if (isset($recommendations[$genre])) {
                echo '<h2>Recommended Shows:</h2><ul>';
                foreach ($recommendations[$genre] as $show) {
                    echo "<li>$show</li>";
                }
                echo '</ul>';
            } else {
                echo '<p>No recommendations available for this genre.</p>';
            }
        }
        ?>
    </main>
    <?php include 'includes/footer.php'; ?>
    <script src="js/script.js"></script>
</body>
</html>
