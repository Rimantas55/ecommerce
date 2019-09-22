<?php

/**
 * Start Session if not already started
 */

if(!isset($_SESSION)) session_start();


// Load enviroment variable
require_once __DIR__ . '/../app/config/_env.php';