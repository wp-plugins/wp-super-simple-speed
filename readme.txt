=== WP Super Simple Speed ===
Contributors: RSPublishing
Plugin URI: http://yooplugins.com
Donate link:  https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=TLS42C63EVL2A
Tags: gzip, compression, js, css, optimize, performance, boost, pagespeed, seo, gtmetrix, caching, compress, image, hotlink, protection, bandwith, speed, 
Requires at least: 3.2.0
Tested up to: 4.2.2
Stable tag: 1.2

Super Simple Speed is a stable and powerful plugin that dramatically increases your site speed without any hassle (or clutter).

== Description ==

Super Simple Speed is a stable and powerful plugin that dramatically increases your page load speed and gives you a better score on the major speed testing services. Unlike most other similar plugins, WP Super Simple Speed is lightweight (less than 20kb in size), and has no clutter or unnecessary code or configs. Simply, speed ! 

Super Simple Speed will switch your site to 5th gear without any hassle!

= How the plugin works =

Once activated, the plugin will automatically write several speed and optimization rules to your root .htaccess file (without altering or breaking any existing rules in your .htaccess).

= Features =

	√ automatic hotlink protection to prevent bandwith stealing/leeching
	√ http header expires - leverages browser caching (reduces http requests)
	√ gzip compression using mod deflate (speeds up page load time and saves bandwith by 70%)
	√ load jquery from google cdn (decreases latency | increases parallelism | better caching)
	√ includes Vary: Accept-Encoding Header (increase performance and score on various performance tools)
	√ disables auto-save on posts (lowers overhead on the server that can impact performance)
	√ automatically sets UTF-8 encoding for files being served as text/html or text/plain
	√ enables keepalive (allowing persistent connections) which saves on bandwith
	√ removes unnecessary clutter from wp head (rsd, version generator, and much more)
	√ dequeues extra fontAwesome stylesheets loaded to your theme by other plugins
	√ moves all enqueued javascript files to footer while keeping css in header
	√ removes query strings from all static resources
	√ plugin is less than 20kb in size 
	√ no unnecessary code or clutter 
	√ NO CONFIGURATION NEEDED
	√ NO LEARNING CURVE
	
	√ more awesome features coming soon
	
= Backup =

Please make sure that you make a backup of your root .htaccess before installing this plugin (just good practice).

= Uninstalling (important) =

Should you for any reason whatsoever decide to deactivate & uninstall this plugin - do keep in mind that doing so will result in your root .htaccess being wiped clean. When this happens, simply head over to your settings > permalink settings and re-save your current permalink structure (this will prevent your site from breaking). Alternatively, you can upload your backed up .htaccess file. Then again, there is no reason to deactivate and uninstall this plugin as it doesn't alter your current .htaccess settings - it simply adds to it !

= Users Upgrading from v1.2 - v1.3 =

Users that are upgrading from v1.2 to v1.3 should do the following AFTER updating:

* deactivate the plugin
* re-save your current permalink setting
* reactivate the plugin

While the update will give you the latest files - deactivating/reactivating the plugin will rewrite your .htaccess to include the new/tweaked rules. This does NOT apply to anyone downloading v1.3 upward. Moreover, we don't plan on adding/tweaking any .htaccess rules for upcoming updates so this is really just a once-off task for all users that are upgrading from v1.2 to v1.3. Shoot us an email if you need any help.

= See an invalid argument error? (important) =

Disable the display_errors setting on your web hosting account. This is a PHP setting that makes it display potential errors and other such things. The (possible) reported issue is a "Warning" and not an actual error. 

The code actually works fine, it's just that when you have debugging turned on, you'll get this message.

Generally, live websites should not have error displays enabled in the first place. It's not a safe thing to do.

= Feature Requests =

Send us an email here: rcstoltz@gmail.com or [find us here](http://wpemergencyroom/)

The WP Super Simple Speed plugin is maintained by [WP Emergency Room](http://wpemergencyroom.com/)

== Installation ==

1. Download the .zip file
2. Upload and extract the contents of the zip file to your wp-content/plugins/folder
3. Activate the plugin
4. Enjoy!

== Feedback, Questions, Help, Bug Reporting, and Suggestions ==

Just email us at: rcstoltz@gmail.com / Email Subject : WP Super Simple Speed

== Upgrade Notice ==

= Version 1.3 = 

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

Simply open the inc-functions.php file and delete/comment out line 77 - 81 (the following): 

`function disable_autosave() {
	wp_deregister_script('autosave');
}

add_action('wp_print_scripts','disable_autosave');'

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