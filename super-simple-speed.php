<?php

/*
Plugin Name: WP Super Simple Speed
Plugin URI: http://yooplugins.com
Description: Super Simple Speed is a stable and powerful plugin that dramatically increases your site speed without any hassle. Simply activate and enjoy - no configuration needed ! Uses gzip compression, leverages browser cache, includes automatic hotlink protection, defers javascript and much more. Plugin is less than 10kb in size. 
Author: RSPublishing
Author URI: http://yooplugins.com
Version: 1.3
*/

/*
  Copyright 2015  Rynaldo Stoltz | WP Super Simple Speed (email : queries@wpemergencyroom.com)

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

global $super_simple_speed;
global $hotlink, $hta1, $hta2, $hta3, $hta4, $hta5, $hta6;

$url = strtolower(get_bloginfo('url'));
$url = str_replace('https://','',$url);
$url = str_replace('http://','',$url);
$url = str_replace('www.','',$url);

$hotlink = "

# WP Super Simple Speed by Rynaldo Stoltz Starts - http://wpemergencyroom.com/ #

# Hotlink Protection Start #

RewriteEngine on
RewriteCond %{HTTP_REFERER} !^$
RewriteCond %{HTTP_REFERER} !^http(s)?://(www\.)?".$url." [NC]
RewriteCond %{HTTP_REFERER} !^http(s)?://(www\.)?google.com [NC]
RewriteRule \.(jpg|jpeg|png|gif)$ - [NC,F,L]

# Hotlink Protection End #

";

	$hta1 .= '# GZip Compression Start #'."\r\n"."\r\n";
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
	$hta1 .= '# GZp Compression End #'."\r\n"."\r\n";

	$hta2 .= '# Leverage Browser Cache Start #'."\r\n"."\r\n";
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
	$hta2 .= '# Leverage Browser Cache End #'."\r\n"."\r\n";
	
	$hta3 .= '# Caching of common files Start #'."\r\n"."\r\n";
	$hta3 .= '<IfModule mod_headers.c>'."\r\n";
	$hta3 .= '<FilesMatch "\.(ico|pdf|flv|swf|js|css|gif|png|jpg|jpeg|ico|txt|html|htm)$">'."\r\n";
	$hta3 .= 'Header set Cache-Control "max-age=2592000, public"'."\r\n";
	$hta3 .= '</FilesMatch>'."\r\n";
	$hta3 .= '</IfModule>'."\r\n"."\r\n";
	$hta3 .= '# Caching of common files End #'."\r\n"."\r\n";

	$hta4 .= '# Enable Keepalive Start #'."\r\n"."\r\n";
	$hta4 .= '<ifModule mod_headers.c>'."\r\n";
	$hta4 .= 'Header set Connection keep-alive'."\r\n";
	$hta4 .= '</ifModule>'."\r\n"."\r\n";
	$hta4 .= '# Enable Keepalive end #'."\r\n"."\r\n";
	
	$hta5 .= '# Use UTF-8 encoding Start #'."\r\n"."\r\n";
	$hta5 .= 'AddDefaultCharset utf-8'."\r\n"."\r\n";
	$hta5 .= '# Use UTF-8 encoding End #'."\r\n"."\r\n";
	
	$hta6 .= '# Enable Vary: Accept-Encoding Start #'."\r\n"."\r\n";
	$hta6 .= '<IfModule mod_headers.c>'."\r\n";
	$hta6 .= '<FilesMatch "\.(js|css|xml|gz)$">'."\r\n";
	$hta6 .= 'Header append Vary: Accept-Encoding'."\r\n";
	$hta6 .= '</FilesMatch>'."\r\n";
	$hta6 .= '</IfModule>'."\r\n"."\r\n";
	$hta6 .= '# Enable Vary: Accept-Encoding end #'."\r\n"."\r\n";
	$hta6 .= '# WP Super Simple Speed by Rynaldo Stoltz Ends - http://wpemergencyroom.com/ #'."\r\n"."\r\n";

$super_simple_speed = ABSPATH.'.htaccess';

function gear_5_activate() {
	global $super_simple_speed;
	global $hotlink, $hta1, $hta2, $hta3, $hta4, $hta5, $hta6;

	if (file_exists($super_simple_speed)) {

		$fh = fopen($super_simple_speed, 'r');
		$htaccess = fread($fh, filesize($super_simple_speed));
		fclose($fh);
  	}

	$fh = fopen($super_simple_speed, 'w') or die("can't open file");
	fwrite($fh, $htaccess.$hotlink.$hta1.$hta2.$hta3.$hta4.$hta5.$hta6);
	fclose($fh);
}

register_activation_hook( __FILE__, 'gear_5_activate' );

function gear_5_deactivate() {
	global $super_simple_speed;
	global $hta1, $hta2, $hta3, $hta4, $hta5, $hta6;

	if (file_exists($super_simple_speed)) {

		$fh = fopen($super_simple_speed, 'r');
		$htaccess = fread($fh, filesize($super_simple_speed));
		fclose($fh);

		$htaccess = str_replace($hta1, $hta2, $hta3, $hta4, $hta5, $hta6, "",$htaccess);

		$fh = fopen($super_simple_speed, 'w') or die("can't open file");
		fwrite($fh);
		fclose($fh);
	}
}

register_deactivation_hook( __FILE__, 'gear_5_deactivate' );

?>