<?php

$contentCounts = function () {
	global $post;
	$content = get_post_field('post_content', $post->ID);
	$strippedContent = strip_tags(strip_shortcodes($content));
	$counts = [
		'words' => str_word_count($strippedContent),
		'length' => strlen($strippedContent)
	];

	return apply_filters(SAYLA_RSS_WORD_COUNT_PREFIX . '/content-counts', $counts, $strippedContent);
};
$addRssHead = function ($extra = '', $space = "\t") use ($contentCounts) {
	echo sprintf(
		"%s<blogId>%s</blogId><blogName>%s</blogName><blogDescription>%s</blogDescription>%s" . PHP_EOL,
		$space,
		get_current_blog_id(),
		get_bloginfo('name'),
		get_bloginfo('description'),
		$extra
	);
};

$addRssHeadAction = function () use ($addRssHead) {
	$addRssHead();
};


$addRssItemAction = function () use ($contentCounts, $addRssHead) {
	$counts = $contentCounts();
	$addRssHead(
		sprintf(
			PHP_EOL . '<blogWordCount>%d</blogWordCount><blogCharCount>%d</blogCharCount>' . PHP_EOL,
			$counts['words'],
			$counts['length'],
			$counts['words'],
			$counts['length']
		),
		''
	);
};

$includeBlogMeta = filter_input(INPUT_GET, 'rssMeta', FILTER_SANITIZE_NUMBER_INT) === 1;
return $includeBlogMeta
	? [
		'rss2_item' => $addRssItemAction,
		'rss_item' => $addRssItemAction,
	]
	: [];
