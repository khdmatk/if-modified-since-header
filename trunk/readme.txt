=== If Modified Since HTTP Header ===
Contributors: isaumya
Plugin Name: If Modified Since HTTP Header
Plugin URI: https://www.isaumya.com/#/portfolio/if-modified-since-header-wordpress/
Donate link: http://donate.isaumya.com/
Tags: http, header, if-modified, seo, google
Author URI: https://www.isaumya.com
Author: Saumya Majumder (isaumya)
Requires at least: 3.8
Tested up to: 4.1
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A simple plugin to sent `304 If Modified Since HTTP Header` to the web crawlers, so that they only fetch your site when something has been updated.

== Description ==

As per Google Webmaster Guidelines, all website should have a `304 If Modified Since HTTP Header` so that crawlers can check when is the last time the page or post has been updated.
Generally if you do not pass `304 If Modified Since HTTP Header` through your HTTP header, crawlers will fetch your whole website and then compare the content of your site with the
already indexed content to check whether anything new has been updated on your website or not. But this process consumes a lot of your server resource and bandwidth.
If you check your server bandwidth log now, you will crearly understnat that how much of your bandwidth is getting drained by the web crawlers. That is why I recomment all of you to 
install this simple plugin to tell the web crawlers if anything new has been updated on your site, so that they can crawl only if there is something new, otherwise they will leave 
without draining your bandwidwidth and server resource. Also not only Google, every web crawlers starting with Bing, Yahoo and others use this `304 If Modified Since HTTP Header` to
identify if there is something new has been updated on the site. You can know more about it [here](http://www.feedthebot.com/ifmodified.html).

**Why do you need it**

This helps the search engines crawlers to understand whether they need to recrawl your page. If your page or post 
has been updated after the search engines has crawled it, then your page will sent a `304 Modified Header` and invite 
all the search engines to recrawl your page.

**What if you don't have it**

Every webmaster out there tries their best to climb the SEO ladder as much as possible to rank well in Search Engines. 
This small plugin will help you a lot to make sure search engines loves you.

**How to use it**

Well, this plugin is one of the most simple and easiest plug you have ever used (I Think). What you have to do is just 
download, install and activate the plugin, rest will be handled by the plugin itself. So, you don't have to worry about it.

**Check if it is working**

You can easily check whether your site is sending `304 If Modified Since HTTP Header` or not. 
Just visit [FeedtheBot Testing Tool](http://www.feedthebot.com/tools/if-modified/) and put your website URL to test.
You will see the result by yourself. A big green YES! :)

**Need Support**

Use the Plugin Support Forum on WordPress.

**Like the Plugin**
I'm really glad that you liked the plugin. Please help me to keep it updated by [__Donating Here__](http://donate.isaumya.com).


== Installation ==

1. Via the WordPress admin go to Plugins => Add New.
2. Enter 'If Modified Since Header' (without quotes) in the textbox and click the 'Search Plugins' button.
3. In the list of relevant Plugins click the 'Install' link for If Modified Since Header on the right hand side of the page.
4. Click the 'Install Now' button on the popup page.
5. Click 'Activate Plugin' to finish installation.
6. Enjoy `304 If Modified Since HTTP Header` on your site.

== Frequently Asked Questions ==

= Where can I test that it is working? =

You can easily check whether your site is sending `304 If Modified Since HTTP Header` or not. Just visit http://www.feedthebot.com/tools/if-modified/ and put your website URL to test.
You will see the result by yourself. A big green YES! :)

= Does this works with WordPress Multisite Network (WP MU)? =

Yes, it works fine with WordPress Multisite Networks. In fact I will suggest you to network activate this plugin as this is very important for your every single site.

== Screenshots ==

1. Screenshot of FeedTheBot If Modified Header Testing Tool.
2. Screenshot of HTTP Header Values.

== Changelog ==

= 1.0 =
* Initial Release.
