<?php
// Variable
$multiplying = null;
$results = array();
$error = null;

// Check if form was submitted and input exists
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["multiplying"])) {
    $input = $_POST["multiplying"];

    // Validate input
    if (is_numeric($input)) {
        $multiplying = floatval($input); // Support both integer and float
        if ($multiplying >= 0) {
            // Calculate multiplication table manually
            $results[] = "$multiplying × 1 = " . ($multiplying * 1);
            $results[] = "$multiplying × 2 = " . ($multiplying * 2);
            $results[] = "$multiplying × 3 = " . ($multiplying * 3);
            $results[] = "$multiplying × 4 = " . ($multiplying * 4);
            $results[] = "$multiplying × 5 = " . ($multiplying * 5);
            $results[] = "$multiplying × 6 = " . ($multiplying * 6);
            $results[] = "$multiplying × 7 = " . ($multiplying * 7);
            $results[] = "$multiplying × 8 = " . ($multiplying * 8);
            $results[] = "$multiplying × 9 = " . ($multiplying * 9);
            $results[] = "$multiplying × 10 = " . ($multiplying * 10);
        } else {
            $error = "Por favor, insira um número positivo.";
        }
    } else {
        $error = "Por favor, insira um número válido.";
    }
}

// Display results or error
if (!empty($results)) {
    echo "<ul class='list-group'>";
    foreach ($results as $result) {
        echo "<li class='list-group-item'>$result</li>";
    }
    echo "</ul>";
} elseif ($error) {
    echo "<p class='text-danger'>$error</p>";
}
?>