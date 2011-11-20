<?php

ob_start();
include_once($_SERVER['DOCUMENT_ROOT'] . '/' . $_REQUEST['file']);
$content = ob_get_contents();
ob_end_clean();

ob_start();
include_once($_SERVER['DOCUMENT_ROOT'] . '/layouts/layout.php');
$template = ob_get_contents();
ob_end_clean();

$template = str_replace('{{content}}', $content, $template);

echo $template;