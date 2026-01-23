<?php

/**
 * GoDaddy Shared Hosting Configuration
 * 
 * This file provides helper functions for file uploads on shared hosting
 * where public_html is separate from the Laravel app folder.
 */

if (!function_exists('public_html_path')) {
    /**
     * Get the path to public_html folder on shared hosting
     * Falls back to public_path() on local development
     */
    function public_html_path($path = '')
    {
        // Check if we're on production (GoDaddy)
        // The cPanel structure is: /home/username/public_html/
        $publicHtmlPath = dirname(dirname(base_path())) . '/public_html';
        
        // If public_html exists, we're on production
        if (is_dir($publicHtmlPath)) {
            return $publicHtmlPath . ($path ? '/' . ltrim($path, '/') : '');
        }
        
        // Otherwise, fall back to standard public_path (local development)
        return public_path($path);
    }
}
