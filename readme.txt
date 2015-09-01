=== WP Super Simple Speed ===
Contributors: RSPublishing
Plugin URI: http://wp-superformance.com/
Donate link:  https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=TLS42C63EVL2A
Tags: cache, caching, page speed, google page speed, performance, gzip, compression, compress, minify, minification, boost, speed, gtmetrix, pingdom tools, yslow, hotlink protection, browser cache, mod_deflate, cache control, expires header, performance optimization, apache, htaccess, server load, remove query strings, Google CDN, keepalive, accept encoding header
Requires at least: 3.2.0
Tested up to: 4.3
Stable tag: 1.4.920

Super Simple Speed is a stable and powerful plugin that dramatically increases your page speed without any hassle (or clutter).

== Description ==

Super Simple Speed is a stable and powerful plugin that dramatically increases your WordPress page load speed and gives you a better performance score on the major speed testing services. Unlike most other similar plugins, WP Super Simple Speed is lightweight (less than 20kb in size), and has no clutter or unnecessary code or configs. Simple performance optimization without any hassle.

= Features =

	√ automatic hotlink protection to prevent bandwidth stealing/leeching
	√ GZIP compression (speeds up page load time and saves bandwith)
	√ loads jquery from google CDN (decreases latency | increases parallelism | better caching)
	√ includes Vary: Accept-Encoding Header (increase performance and score on various performance tools)
	√ disables auto-save on posts (lowers overhead on the server that can impact performance)
	√ automatically sets UTF-8 encoding for files being served as text/html or text/plain
	√ enables keepalive (allowing persistent connections) which saves on bandwith
	√ removes unnecessary clutter from wp head (rsd, version generator, and much more)
	√ dequeues extra fontAwesome stylesheets loaded to your theme by other plugins
	√ removes query strings from all static resources
	√ plugin is less than 20kb in size 
	√ no unnecessary code or clutter 
	√ one click activate/deactivate
	√ no configs or learning curve
	
= Premium Features = 

	√ EVERYTHING in free version plus
	
	√ full browser caching with mod_deflate for content compression, far-future-expires-headers and cache-control headers
	√ automatic HTML/JS/CSS optimization/minification
	√ automatic image lazy loading functionality
	
	√ and much, much more !

	√ no annual license renewals
	√ WooCommerce and EDD compatible
	√ ideal for shared-hosting environments
	√ most lightweight WordPress performance plugin (less than 50KB in size)
	
See all premium version features on [WP-Superformance](http://wp-superformance.com/)
	
= Backup =

Please make sure that you make a backup of your root .htaccess before installing this plugin (just for good practice).
	
= Need help with your page speed? =

Don't have the time to optimize your site for best page speed and performance? Bumping into conflicts when trying? OPTIPress can help. Visit us at [OPTIPress - The WP Page Speed and Performance Professionals](http://optipress.org/) to see what we can do for you.

The WP Super Simple Speed plugin is maintained by [WP-Superformance](http://wp-superformance.com/)

== Installation ==

1. Download the .zip file
2. Upload and extract the contents of the zip file to your wp-content/plugins/folder
3. Activate the plugin
4. Enjoy!

== Feedback, Questions, Help, Bug Reporting, and Suggestions ==

Just email us at: info@optipress.org / Email Subject : WP Super Simple Speed

== Upgrade Notice ==

= Version 1.4.920 = 

== Screenshots ==

none

== Frequently Asked Questions ==

= I am getting an invalid argument error. What is this? =

Disable the display_errors setting on your web hosting account. This is a PHP setting that makes it display potential errors and other such things. The (possible) reported issue is a "Warning" and not an actual error. 

The code actually works fine, it's just that when you have debugging turned on, you'll get this message.

Generally, live websites should not have error displays enabled in the first place. It's not a safe thing to do.

= WP Super Simple Speed doesn't load the latest jQuery from Google CDN. Can i change this? =

Correct! Loading the latest version of a hosted script is almost guaranteed to break your site in some way and even if it didn't break your site - the less version specific URLs supported by Google’s CDN sets a short term Expires header, so there wouldn’t be much point to load the latest version. This is stable!

= What if i need my autosave enabled? =

Simply open the inc-functions.php file and delete/uncomment line 78 - 82

= I updated your plugin and my site broke. What to do? =

If updating WP Super Simple Speed from an older version causes any issues with your site, then please head over to your admin dashboard > settings > permalinks and re-save your current permalink structure. This should resolve the 500 error. Hereafter, please contact our support immediately so we can resolve.


== Donations ==

https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=TLS42C63EVL2A

== Changelog ==

= 1.0 =

* first release version

= 1.1 =

* fixed undefined variable error in core file
* fixed invalid argument supplied for foreach in deque function

= 1.2 =

* added Vary: Accept-Encoding Header directive (increase site performance and score on various performance tools)

= 1.3 =

* added function to load libs from Google CDN (decreases latency | increases parallelism | better caching)
* automatically disables auto-save function to lower server overheads

= 1.3.1 =

* fixed url in readme

= 1.4.717 =

* general housekeeping

= 1.4.718 =

* removed footer_enqueue_scripts() function (conflicts with some js functions in responsive themes)
* fixed typo error

= 1.4.810 =

* modified deactivate feature (deactivate = will restore user's root .htaccess and only remove rules added by this plugin)
* modified core super-simple-speed.php file (removed unnecessary code and optimized directives)
* tested plugin compatibility with core version 4.2.4
* added link for plugin ratings and premium version

= 1.4.910 = 

* some minor modifications in readme file (includes keywords optimization)
* tested compatibility with core version 4.3

= 1.4.920 =

* removed unnecessary code from main file
* some modifications to readme file

