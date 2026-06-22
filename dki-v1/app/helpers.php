<?php

/**
 * Resolve a path relative to the project root (one level above /app)
 */
function base_path($path = '') {
    return dirname(__DIR__) . '/' . ltrim($path, '/');
}

/**
 * Include a page section from /sections/, with optional data
 */
function section($name, $data = []) {
    global $config;
    extract($data);
    include base_path("sections/{$name}.php");
}

/**
 * Include a shared partial from /includes/, with optional data
 */
function inc($name, $data = []) {
    global $config, $seo;
    extract($data, EXTR_SKIP);
    include base_path("includes/{$name}.php");
}

/**
 * Generate an asset URL
 */
function asset($path = '') {
    return '/assets/' . ltrim($path, '/');
}

/**
 * Generate a site URL
 */
function url($path = '') {
    return '/' . ltrim($path, '/');
}
