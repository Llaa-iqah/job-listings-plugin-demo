<?php
/*
Plugin Name: Job Listings Plugin
Description: A simple plugin to display job listings using a shortcode.
Version: 1.0
Author: Llaa-iqah
*/

if (!defined('ABSPATH')) {
 exit;
}

function jlp_display_jobs() {
 $jobs = array(
     array("title" => "Junior Web Developer", "location" => "Johannesburg", "type" => "Full-time"),
      array("title" => "Intern Software Engineer", "location" => "Durban", "type" => "Internship"),
       array("title" => "WordPress Assistant", "location" => "Remote", "type" => "Part-time"),
 );

$output = "<h2>Available Job Listings</h2><ul>";
foreach ($jobs as $job) {
$output .= "<li><strong>{$job['title']}</strong>- {$job['location']} ({$job['type']})</li>";
}
$output .= "</ul>";

return $output;
}
add_shortcode('job_listings', 'jlp_display_jobs');