<?php

/**
 * A LaravelPHP package for working w/ Google Calendar.
 *
 * @package    GoogleCalendar
 * @author     Scott Travis <scott.w.travis@gmail.com>
 * @link       http://github.com/swt83/laravel-googlecalendar
 * @license    MIT License
 */

class GoogleCalendar
{
	public static function __callStatic($method, $args)
	{
		// includes
		require_once(__DIR__.'/../vendor/gcalendar.php');
	
		// load config
		$config = Config::get('googlecalendar'); // from application, not bundle
		
		// build object
		$object = new Google\GCalendar($config['email'], $config['password']);
		
		// authenticate
		$object->authenticate();
		
		// run method
		return call_user_func_array(array($object, self::camelize($method)), $args);
	}
	
	private static function camelize($word)
	{
		return preg_replace('/(^|_)(.)/e', "strtoupper('\\2')", strval($word));
	}
}