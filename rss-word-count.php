<?php
/**
 * Plugin Name:     Rss Word Count
 * Plugin URI:      https://github.com/blessingefkt/rss-word-count
 * Description:     Add word counts to blog RSS feeds
 * Author:          Blessing Richardson at Sayla
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
