<?php
// Check if the cookie 'visits' exists
if (isset($_COOKIE['visits'])) {
    // Increment visit count
    $visits = $_COOKIE['visits'] + 1;
} else {
    // First visit
    $visits = 1;
}

// Set or update the cookie with new value (expires in 30 days)
setcookie('visits', $visits, time() + (30 * 24 * 60 * 60));

// Display message
if ($visits == 1) {
    echo "<h3>This is your first visit!</h3>";
} else {
    echo "<h3>You have visited this page $visits times.</h3>";
}
?>
