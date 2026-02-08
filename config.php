<?php // Session Security

ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);


// Cookie Security
session_set_cookie_params([
    'lifetime' => 1800,
    'domain' => 'db',
    'path' => '/',
    'secure' => true,
    'httponly' => true
]);

session_start();

// session_regenerate_id(true); // regenerates the current session ID (We should do this in X-amount of time.)

if (!isset($_SESSION['last_regeration'])) {
    session_regenerate_id(true);
    $_SESSION['last_regeration'] = time();
} else {
    $interval = 60 * 30; // This is 30 minutes.

    if (time() - $_SESSION['last_regeneration'] >= $interval) {
        session_regenerate_id(true);
        $_SESSION['last_regeneration'] = time();
    }
}