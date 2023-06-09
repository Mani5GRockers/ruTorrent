<?php

class Utility
{	
	public static function quoteAndDeslashEachItem($item)
	{
		return('"'.addcslashes($item,"\\\'\"\n\r\t").'"'); 
	}

	public static function sortArrayTime( $a, $b )
	{
		return( ($a["time"] > $b["time"]) ? 1 : (($a["time"] < $b["time"]) ? -1 : 0) );
	}

	public static function getExternal($exe)
	{
		global $pathToExternals;
		return( (isset($pathToExternals[$exe]) && !empty($pathToExternals[$exe])) ? $pathToExternals[$exe] : $exe );
	}

	public static function getPHP()
	{
		return( self::getExternal("php") );
	}

	public static function str_starts_with($a, $b)
	{
		return function_exists('str_starts_with')
			? str_starts_with($a, $b)
			: substr($a, 0, strlen($b)) === $b;
	}

	public static function str_ends_with($a, $b)
	{
		return function_exists('str_ends_with')
			? str_ends_with($a, $b)
			: empty($b) || substr($a, -strlen($b)) === $b;
	}
}
