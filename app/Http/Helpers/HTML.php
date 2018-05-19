<?php

namespace App\Http\Helpers;


class HTML
{
	private const VERSION = '20180516';

	private static function setVersion(&$file, $extension = ''): void
	{
		$file = $file . '.' . $extension . '?v=' . self::VERSION;
	}

	public static function style(string $file): string
	{
		self::setVersion($file, 'css');

		return '<link rel="stylesheet" type="text/css" href="css/' . $file . '">';
	}

	public static function script(string $file): string
	{
		self::setVersion($file, 'js');

		return '<script src="js/' . $file . '"></script>';
	}

	public static function getRandomBanner()
	{
		$dir = 'images/banners';
		$banners = glob($dir . '/*.*');

		return $banners[array_rand($banners)];
	}
}
