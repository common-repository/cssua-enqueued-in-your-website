=== CSSUA enqueued in your Website ===
Contributors: themecafe
Tags: cssua, Browser OS and Device classes to HTML tag, avoid CSS hacks
Requires at least: 4.5.1
Tested up to: 4.6.1
Stable tag: 4.6.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin enqueues the cssua.js into the website which then adds all the Browser, OS and Device related classes to the HTML tag.

== Description ==

This plugin enqueues the cssua.js into the website which then adds all the Browser, OS and Device related classes to the HTML tag.

You can use these classes to apply css, specific to Browser, OS or Device.

For Example: if you want the font-size of H1 tag to be smaller in Chrome Browser then you can do it in the following way.

.ua-chrome h1{
    font-size: 20px;
}

Learn more about cssua.js at http://cssuseragent.org/. Thanks to author for building such a powerful javascript library.

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload the plugin files to the `/wp-content/plugins/cssuaews` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress
2. That's it. Now open the front end of you website and check the HTML tag. It should now have all the Browser, OS and Device related classes added to it.


== Frequently Asked Questions ==


== Screenshots ==

1. All the Browser, OS and Device related classes added to HTML tag

== Changelog ==

= 1.0 =
* Initial Release
* cssua.js - 2.1.31