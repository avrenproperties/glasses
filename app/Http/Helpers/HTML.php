<?php

namespace App\Http\Helpers;


class HTML
{
	private const VERSION = '20180515';

	private static function setVersion(&$file, $extension = ''): void
	{
		$file = $file . '.' . $extension .'?v=' . self::VERSION;
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
}
