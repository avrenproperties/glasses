<?php

namespace App\Http\Helpers;


class HTML
{
	private const VERSION = '20180515';

	private static function setVersion(&$file): void
	{
		$file = $file . '?v=' . self::VERSION;
	}

	public static function style(string $file): string
	{
		self::setVersion($file);

		return '<link rel="stylesheet" type="text/css" href="css/' . $file . '.css">';
	}

	public static function script(string $file): string
	{
		self::setVersion($file);

		return '<script src="js/' . $file . '.js"></script>';
	}
}
