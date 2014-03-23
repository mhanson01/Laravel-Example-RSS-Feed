<?php

function create_tag_uri($object)
{
	$output[] = 'tag:';

	$output[] = 'example.com,';
	$output[] = $object->published_at->format('Y-m-d') . ':';
	$output[] = '/blog/' . $object->slug;

	return implode('', $output);
}
