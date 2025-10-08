<?php
// Cookie name
$cookie_name = "offer";

// Check if the cookie already exists
if (!isset($_COOKIE[$cookie_name])) {
    // Cookie not set -> first visit -> show offer
    $offer_message = "Welcome! You get 10% off (valid for 10 minutes).";

    // Set cookie valid for 10 minutes
    setcookie($cookie_name, "shown", time() + (10 * 60));
} else {
    // Cookie exists -> offer expired or already seen
    $offer_message = "";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Limited Time Offer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 100px;
            background-color: #f5f5f5;
        }
        .offer {
            display: inline-block;
            padding: 20px 30px;
            background-color: #ff9800;
            color: white;
            font-size: 18px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
        }
    </style>
</head>
<body>
    <?php if ($offer_message != ""): ?>
        <div class="offer"><?php echo $offer_message; ?></div>
    <?php else: ?>
        <h3>Sorry! The 10% discount offer has expired.</h3>
    <?php endif; ?>
</body>
</html>
