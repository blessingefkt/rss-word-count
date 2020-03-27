=== Rss Word Count ===

Requires at least: 4.5
Tested up to: 5.3.2
Requires PHP: 7.0
Stable tag: 0.1.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

== Description ==

Add word counts to blog RSS feeds.

```xml
<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0" ...>
<channel>
	<description>Just another WordPress site</description>
	...     
    <generator>https://wordpress.org/?v=5.3.2</generator>
	<blogInfo>
        <name>Sayla WP Plugins</name>
        <description>Just another WordPress site</description>
    </blogInfo>
	<item>
		<title>Hello world!</title>
		<link>https://saywp.test/?p=1</link>
				<comments>https://saywp.test/?p=1#comments</comments>
				<pubDate>Fri, 27 Mar 2020 04:07:34 +0000</pubDate>
		...
        <blogInfo>
            <name>Sayla WP Plugins</name>
            <description>Just another WordPress site</description>
                <contentCounts words="176" characters="1178">
                    <words>176</words>
                    <characters>1178</characters>
                </contentCounts> 
        </blogInfo>
	</item>
	</channel>
</rss>
```

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload `rss-word-count.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
