<?php

// Environment
$_SERVER['APP_ENV'] = 'development';

// Error handling
require_once __DIR__ . '/core/error-handler.php';

// Business config (phone, email, hours, etc.)
require_once dirname(__DIR__) . '/includes/config.php';

// Core helpers (section, inc, asset, url, base_path)
require_once __DIR__ . '/helpers.php';
