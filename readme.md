# Google Calendar for LaravelPHP #

This package is a Laravel wrapper for [Montania's Google Calendar Class](https://github.com/montania/Google-Calendar-API-PHP-Class).

## Install ##

Copy the ``config/google-sample.php`` file, rename to ``config/google.php``, and input your login credentials.

## Methods ##

* ``get_all_calendars()`` Get a list of all calendars viewable by the user.
* ``get_own_calendars()`` Get a list of all calendars owned by the user.
* ``create_calendar($title, $details, $timezone, $hidden, $color, $location)`` Create a new calendar.
* ``delete_calendar($handle)`` Delete a calendar.
* ``get_events($handle, $max, $from, $to)`` Get all events from a calendar.
* ``get_event($handle, $id, $etag)`` Get a single event from a calendar.
* ``get_event_by_id($handle, $event_id)``  Get a single event from a calendar.
* ``find_event($handle, $query, $max)`` Find an event.
* ``create_event($handle, $quick, $details, $title, $transparency, $status, $location, $start, $end)`` Create a new event.
* ``delete_event($handle, $id, $etag)`` Delete an event.
* ``update_event($handle, $id, $etag, $json)`` Update an event.

For more details, look in the ``vendor/gcalendar.php`` file to view the code.