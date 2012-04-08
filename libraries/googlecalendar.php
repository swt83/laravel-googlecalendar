<?php

/**
 * A LaravelPHP package for working w/ Google Calendar.
 *
 * @package    GoogleCalendar
 * @author     Scott Travis <scott.w.travis@gmail.com>
 * @link       http://github.com/swt83
 * @license    MIT License
 */

class GoogleCalendar
{
	public static function __callStatic($method, $args)
	{
		// includes
		require_once(__DIR__.'/../vendor/gcalendar.class.php');
	
		// load config
		$config = Config::get('google-calendar::google');
		
		// build object
		$object = new GCalendar($config['email'], $config['password']);
		
		// authenticate
		$object->authenticate();
		
		// run method
		return call_user_func_array(array($object, $method), $args);
	}
}