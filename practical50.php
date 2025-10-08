<?php
// If a theme button was clicked, set the cookie
if (isset($_GET['theme'])) {
    $theme = $_GET['theme'];
    // Store the theme preference for 30 days
    setcookie('theme', $theme, time() + (30 * 24 * 60 * 60));
    // Refresh the page to apply the theme instantly
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Check if cookie exists; if not, default to 'light'
$theme = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Theme Preference</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 80px;
            transition: background-color 0.4s, color 0.4s;
        }

        /* Light Mode Styles */
        body.light {
            background-color: #ffffff;
            color: #000000;
        }

        /* Dark Mode Styles */
        body.dark {
            background-color: #121212;
            color: #ffffff;
        }

        button {
            padding: 10px 20px;
            margin: 10px;
            font-size: 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        .light-btn {
            background-color: #f1f1f1;
            color: #000;
        }

        .dark-btn {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body class="<?php echo $theme; ?>">
    <h2>Theme Preference using Cookies</h2>

    <p>Current Theme: <strong><?php echo ucfirst($theme); ?> Mode</strong></p>

    <form method="get">
        <button class="light-btn" type="submit" name="theme" value="light">Light Mode</button>
        <button class="dark-btn" type="submit" name="theme" value="dark">Dark Mode</button>
    </form>
</body>
</html>
