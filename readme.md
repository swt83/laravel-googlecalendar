# Google Calendar for LaravelPHP #

The Google API is a nightmare, because it uses oAuth -- which I loathe.  I found this class on Github that uses an older method of authentication, and surprised that it works like a champ.  I build a simple wrapper for working w/ it.

## Usage ##

Just make static method calls, don't worry about authentication as the wrapper handles that for you.  Read over the class in ``vendor`` to see the available methods.  For the original file, and all credit a glory, checkout [Montania's Github Page](https://github.com/montania/Google-Calendar-API-PHP-Class).