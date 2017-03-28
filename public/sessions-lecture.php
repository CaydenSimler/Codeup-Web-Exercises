<?php 

// Sessions
	// server retains knowledge for a period of time about your connection
	// the controller handles session management

	// Example:
		//"keep me logged in" checkbox UI (creating a session)
		// gmail.com logs you in automatically
		// bank websites logging you out automatically (your session times out)
		// shopping cart
		// preferences (you looked at these items last time)
		// keep people authenticated or not


// login.php
	// php at the top checks to see if $_POST isn't empty
	// then checks to amke sure username and password are ok
	// $_SESSION['loggedin_in_user'] = ...
	// redirect to authrozed if logged in
	// check to see if the user is already logged in..

// authorized.php (access control)
	// add a check to see if the user is "logged in" already
	// if already logged in, show them authorized.php
	// if not already logged in, redirect to login.php
	// any link to logout, href="/logout.php"

// logout.php
	// clearSession()
	// informs the user that they are logged out
	// provied a link to login.php
	
// try navigating to authroized.php before logging in
// try navigated to authorized.php after logging out
// login and then try navigating to login.php. we want it to forward automatically to authorized.php



// start the session (or resume an existing one)
// this function must be called before trying to get or set any session data!
session_start();
var_dump($_SESSION);

if(isset($_GET['logout']) && $_GET['logout'] == 1) {
	clearSession();
}

// get the current session ID
$sessionId = session_id();

// initialize a view count variable
$viewCount = isset($_SESSION['view_count']) ? $_SESSION['view_count'] : 0;

// increment the counter
$viewCount++;

// finally, store the new value in the session
$_SESSION['view_count'] = $viewCount;



function clearSession()
{
    // clear $_SESSION array
    session_unset();

    // delete session data on the server
    session_destroy();

    // ensure client is sent a new session cookie
    session_regenerate_id();

    // start a new session - session_destroy() ended our previous session so
    // if we want to store any new data in $_SESSION we must start a new one
    session_start();
}



?>



<!DOCTYPE html>
<html>
<head>

    <title>Session Example</title>

</head>

<body>

    <ul>
        <li>Session ID: <?= $sessionId; ?></li>
        <li>View Count: <?= $viewCount; ?></li>
    </ul>

    <a href="sessions-lecture.php?logout=1">Logout</a>

</body>
</html>


