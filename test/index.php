<?php

use GuzzleHttp\Client;
use PHPHive\SimpleUrl\FileRepository;
use PHPHive\SimpleUrl\Helpers\UrlValidator;
use PHPHive\SimpleUrl\UrlConverter;

require_once __DIR__ . '/../vendor/autoload.php';


$fileRepository = new FileRepository('db.json');
$urlValidator = new UrlValidator(new Client());
$converter = new UrlConverter(
	$fileRepository,
	$urlValidator,
	6
);


$code = $converter->encode('https://habr.com/ru/company/reksoft/blog/597049/');
echo $code . PHP_EOL;

$url = $converter->decode($code);
echo $url . PHP_EOL;
