<?php

$contentCounts = function () {
	global $post;
	$content = get_post_field('post_content', $post->ID);
	$strippedContent = strip_tags($content);
	return [
		'words' => str_word_count($strippedContent),
		'length' => strlen($strippedContent)
	];
};

$addRssItemContentCounts = function () use ($contentCounts) {
	$counts = $contentCounts();
	echo sprintf(
		'<contentCounts words="%s" characters="%s"><words>%d</words><characters>%d</characters></contentCounts>' . PHP_EOL,
		$counts['words'],
		$counts['length'],
		$counts['words'],
		$counts['length']
	);
};


return [
	'rss2_item' => $addRssItemContentCounts,
	'rss_item' => $addRssItemContentCounts,
];
