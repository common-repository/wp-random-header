=== WP Random Header ===
Contributors: chmac
Donate link: http://www.callum-macdonald.com/code/donate/
Tags: header, images, random, rotate
Requires at least: 3.0
Tested up to: 3.2
Stable tag: 0.2.0

Randomly chooses a header image for compatible themes (like twentyten or twentyeleven). Header images are chosen from wp-content/header-images/ and are set via the theme_mod_header_image filter.

== Description ==

A simple plugin that uses randomly picks a header image from the files in wp-content/header-images. Install, activate, that's it.

Put only image files in wp-content/header-images. The plugin will choose any files from that directory, so other file types will mess things up.

The plugin only sets the image url, not the size, so all images should be the same size and the same size as the standard image header for your theme. That's 1000x288 for twentyeleven or 940x198 for twentyten.

The plugin does not deactivate the custom header image functions of any themes. So your theme might still allow you to set the image header, but this plugin will most likely override it.

= Support =

If you cannot make this plugin work, please try another. I'm not willing to provide support for this plugin. Please respect that decision and do not ask support questions of me. If you find a bug, or the plugin does something you think it shouldn't, please let me know in the comments here. Also, if you'd like to take over maintenance of this plugin and provide support, let me know. :-)

== Screenshots ==

Nothing to see, it's all invisible.

== Installation ==

As usual, nothing special required.

== Frequently Asked Questions ==

= I found a bug =

If you found a bug, please tell me here <http://www.callum-macdonald.com/code/wp-random-header/>

= Other questions =

I don't support this plugin. If you can't make it work, try another plugin. If it's broken, let me know as per above.

== Changelog ==

= 0.2.0 =
* Version bump to get the plugin relisted on wp.org.

= 0.2 =

* Store the url in WPRH_HEADER_IMAGE because WP 3.2 makes multiple calls.

= 0.1 =

* Initial release.

== Upgrade Notice ==

= 0.2.0 =
Version bump to get the plugin relisted on wp.org.

= 0.2 =

* Upgrade for WP 3.2 that slightly improves performance and fixes an obscure bug.

= 0.1 =

This is the first version, no reason to upgrade... :-)

== Support Questions ==

I don't support this plugin. If you can't make it work, try another plugin. If it's broken, let me know here <http://www.callum-macdonald.com/code/wp-random-header/>
