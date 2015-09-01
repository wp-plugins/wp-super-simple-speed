<?php

/*
Plugin Name: WP Super Simple Speed
Plugin URI: http://optipress.org/
Description: Super Simple Speed is a stable and powerful plugin that dramatically increases your page speed and performance without any hassle. Simply activate and enjoy - no configuration needed! Uses GZIP compression, leverages browser caching, includes automatic hotlink protection and much more. This plugin is also available in premium version which can be found on <a href="http://wp-superformance.com/">WP-Superformance.com</a>.  
Author: RSPublishing
Author URI: http://wp-superformance.com/
Version: 1.4.920
*/

/*
  Copyright 2015  Rynaldo Stoltz | WP Super Simple Speed (email : info@optipress.org)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 */
 
require_once('inc-functions.php');

function rate_wpsuperf($links, $file) {
	if ($file == plugin_basename(__FILE__)) {
		$rate_url = 'http://wordpress.org/support/view/plugin-reviews/' . basename(dirname(__FILE__)) . '?rate=5#postform';
		$wpsuperf_pro = 'http://wp-superformance.com/';
		$links[] = '<a href="' . $rate_url . '" target="_blank" title="Click here to rate and review this plugin on WordPress.org">Rate this plugin</a>';
		$links[] = '<a target="_blank" href="'. $wpsuperf_pro .'" title="Get Pro version today" style="padding:1px 3px;color:#fff;background:#feba12;border-radius:1px;">Go&nbsp;Pro</a>';
	}
	return $links;
}

add_filter('plugin_row_meta', 'rate_wpsuperf', 10, 2);

global $super_simple_speed;
global $hotlink;
global $hta1;
global $hta2;
global $hta3;
global $hta4;
global $hta5;
global $hta6;


$url = strtolower(get_bloginfo('url'));
$url = str_replace('https://','',$url);
$url = str_replace('http://','',$url);
$url = str_replace('www.','',$url);

$hotlink = "

# WP Super Simple Speed by WP-Superformance.com Starts

# Hotlink Protection Start

RewriteEngine on
RewriteCond %{HTTP_REFERER} !^$
RewriteCond %{HTTP_REFERER} !^http(s)?://(www\.)?".$url." [NC]
RewriteCond %{HTTP_REFERER} !^http(s)?://(www\.)?google.com [NC]
RewriteRule \.(jpg|jpeg|png|gif)$ - [NC,F,L]

";

	$hta1 .= '# GZIP Compression Start'."\r\n"."\r\n";
	$hta1 .= '<IfModule mod_deflate.c>'."\r\n";
	$hta1 .= 'AddOutputFilterByType DEFLATE text/plain'."\r\n";
	$hta1 .= 'AddOutputFilterByType DEFLATE text/html'."\r\n";
	$hta1 .= 'AddOutputFilterByType DEFLATE text/xml'."\r\n";
	$hta1 .= 'AddOutputFilterByType DEFLATE text/css'."\r\n";
	$hta1 .= 'AddOutputFilterByType DEFLATE application/xml'."\r\n";
	$hta1 .= 'AddOutputFilterByType DEFLATE application/xhtml+xml'."\r\n";
	$hta1 .= 'AddOutputFilterByType DEFLATE application/rss+xml'."\r\n";
	$hta1 .= 'AddOutputFilterByType DEFLATE application/javascript'."\r\n";
	$hta1 .= 'AddOutputFilterByType DEFLATE application/x-javascript'."\r\n";
	$hta1 .= 'AddOutputFilterByType DEFLATE application/x-httpd-php'."\r\n";
	$hta1 .= 'AddOutputFilterByType DEFLATE application/x-httpd-fastphp'."\r\n";
	$hta1 .= 'AddOutputFilterByType DEFLATE image/svg+xml'."\r\n";
	$hta1 .= 'BrowserMatch ^Mozilla/4 gzip-only-text/html'."\r\n";
	$hta1 .= 'BrowserMatch ^Mozilla/4\.0[678] no-gzip'."\r\n";
	$hta1 .= 'BrowserMatch \bMSI[E] !no-gzip !gzip-only-text/html'."\r\n";
	$hta1 .= 'Header append Vary User-Agent env=!dont-vary'."\r\n";
	$hta1 .= '</IfModule>'."\r\n"."\r\n";

	$hta2 .= '# Leverage Browser Caching Start'."\r\n"."\r\n";
	$hta2 .= '<IfModule mod_expires.c>'."\r\n";
	$hta2 .= 'ExpiresActive On'."\r\n";
	$hta2 .= 'ExpiresByType image/jpg "access 1 year"'."\r\n";
	$hta2 .= 'ExpiresByType image/jpeg "access 1 year"'."\r\n";
	$hta2 .= 'ExpiresByType image/gif "access 1 year"'."\r\n";
	$hta2 .= 'ExpiresByType image/png "access 1 year"'."\r\n";
	$hta2 .= 'ExpiresByType text/css "access 1 month"'."\r\n";
	$hta2 .= 'ExpiresByType text/html "access 1 month"'."\r\n";
	$hta2 .= 'ExpiresByType application/pdf "access 1 month"'."\r\n";
	$hta2 .= 'ExpiresByType text/x-javascript "access 1 month"'."\r\n";
	$hta2 .= 'ExpiresByType application/x-shockwave-flash "access 1 month"'."\r\n";
	$hta2 .= 'ExpiresByType image/x-icon "access 1 year"'."\r\n";
	$hta2 .= 'ExpiresDefault "access 1 month"'."\r\n";
	$hta2 .= '</IfModule>'."\r\n"."\r\n";
	
	$hta3 .= '# Caching of common files Start'."\r\n"."\r\n";
	$hta3 .= '<IfModule mod_headers.c>'."\r\n";
	$hta3 .= '<FilesMatch "\.(ico|pdf|flv|swf|js|css|gif|png|jpg|jpeg|ico|txt|html|htm)$">'."\r\n";
	$hta3 .= 'Header set Cache-Control "max-age=2592000, public"'."\r\n";
	$hta3 .= '</FilesMatch>'."\r\n";
	$hta3 .= '</IfModule>'."\r\n"."\r\n";

	$hta4 .= '# Enable Keepalive Start'."\r\n"."\r\n";
	$hta4 .= '<ifModule mod_headers.c>'."\r\n";
	$hta4 .= 'Header set Connection keep-alive'."\r\n";
	$hta4 .= '</ifModule>'."\r\n"."\r\n";
	
	$hta5 .= '# Use UTF-8 encoding Start'."\r\n"."\r\n";
	$hta5 .= 'AddDefaultCharset utf-8'."\r\n"."\r\n";
	
	$hta6 .= '# Enable Vary: Accept-Encoding Start'."\r\n"."\r\n";
	$hta6 .= '<IfModule mod_headers.c>'."\r\n";
	$hta6 .= '<FilesMatch "\.(js|css|xml|gz)$">'."\r\n";
	$hta6 .= 'Header append Vary: Accept-Encoding'."\r\n";
	$hta6 .= '</FilesMatch>'."\r\n";
	$hta6 .= '</IfModule>'."\r\n"."\r\n";

	$hta6 .= '# WP Super Simple Speed by WP-Superformance.com Ends'."\r\n"."\r\n";

$super_simple_speed = ABSPATH.'.htaccess';

function gear_5_activate() {
	global $super_simple_speed;
	global $hotlink;
	global $hta1;
	global $hta2;
	global $hta3;
	global $hta4;
	global $hta5;
	global $hta6;

	if (file_exists($super_simple_speed)) {

		$fh = fopen($super_simple_speed, 'r');
		$htaccess = fread($fh, filesize($super_simple_speed));
		fclose($fh);
  	}

	$fh = fopen($super_simple_speed, 'w') or die("can't open file");
	fwrite($fh, $htaccess.$hotlink);
	fwrite($fh, $hta1);
	fwrite($fh, $hta2);
	fwrite($fh, $hta3);
	fwrite($fh, $hta4);
	fwrite($fh, $hta5);
	fwrite($fh, $hta6);
	fclose($fh);
}

register_activation_hook( __FILE__, 'gear_5_activate' );

function gear_5_deactivate() {
	global $super_simple_speed;
	global $hotlink;
	global $hta1;
	global $hta2;
	global $hta3;
	global $hta4;
	global $hta5;
	global $hta6;

	if (file_exists($super_simple_speed)) {

		$fh = fopen($super_simple_speed, 'r');
		$htaccess = fread($fh, filesize($super_simple_speed));
		fclose($fh);

		$htaccess = str_replace($hotlink, "", $htaccess);
		$htaccess = str_replace($hta1, "",$htaccess);
		$htaccess = str_replace($hta2, "",$htaccess);
		$htaccess = str_replace($hta3, "",$htaccess);
		$htaccess = str_replace($hta4, "",$htaccess);
		$htaccess = str_replace($hta5, "",$htaccess);
		$htaccess = str_replace($hta6, "",$htaccess);

		$fh = fopen($super_simple_speed, 'w') or die("can't open file");
		fwrite($fh, $htaccess);
		fclose($fh);
	}
}

register_deactivation_hook( __FILE__, 'gear_5_deactivate' );

?>