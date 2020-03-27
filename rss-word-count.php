<?php
/**
 * Plugin Name:     Rss Word Count
 * Plugin URI:      https://blessingeffect.com/
 * Description:     Add word counts to blog RSS feeds
 * Author:          Blessing Richardson at Sayla LLC
 * Author URI:      https://blessingeffect.com/
 * Text Domain:     sayla-rss-word-count
 * Version:         0.1.0
 *
 * @package         Rss_Word_Count
 */


define('SAYLA_RSS_WORD_COUNT_PREFIX', 'sayla-rss-word-count');
add_action('init', function () {
	$actions = require __DIR__ . '/actions.php';
	foreach ($actions as $hook => $callback) {
		add_action($hook, $callback);
	}
});
