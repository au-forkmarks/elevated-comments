<?php

/*
Plugin Name: Elevated Comments
Description: Identify & feature your best comments.
Author: Carl Alexander
Author URI: https://carlalexander.ca
License: GPL2
*/

// Setup class autoloader
require_once dirname(__FILE__) . '/src/CommentIQ/Autoloader.php';
CommentIQ_Autoloader::register();

// Load Comment IQ
$commentiq_plugin = new CommentIQ_Plugin(__FILE__);
add_action('plugins_loaded', array($commentiq_plugin, 'load'));
