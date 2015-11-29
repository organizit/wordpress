=== Plugin Name ===

Contributors: fcharlier
Tags: event, paperplan, gathering, friends
Requires at least: 4.0
Tested up to: 4.3
Stable tag: 4.3
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Add PaperPlan Button on your website

== Description ==

This plugin allows you to add PaperPlan Button on your website.
For each page of your website about event or venue, you can add the PaperPlan Button and provide the relevant content for gathering organization, such as title, date, place. Then, let PaperPlan help your user to gather with their friends to your events.

A few notes about the sections above:

*   "Contributors" is a comma separated list of wp.org/wp-plugins.org usernames
*   "Tags" is a comma separated list of tags that apply to the plugin
*   "Requires at least" is the lowest version that the plugin will work on
*   "Tested up to" is the highest version that you've *successfully used to test the plugin*. Note that it might work on
higher versions... this is just the highest one you've verified.
*   Stable tag should indicate the Subversion "tag" of the latest stable version, or "trunk," if you use `/trunk/` for
stable.

    Note that the `readme.txt` of the stable tag is the one that is considered the defining one for the plugin, so
if the `/trunk/readme.txt` file says that the stable tag is `4.3`, then it is `/tags/4.3/readme.txt` that'll be used
for displaying information about the plugin.  In this situation, the only thing considered from the trunk `readme.txt`
is the stable tag pointer.  Thus, if you develop in trunk, you can update the trunk `readme.txt` to reflect changes in
your in-development version, without having that information incorrectly disclosed about the current stable version
that lacks those changes -- as long as the trunk's `readme.txt` points to the correct stable tag.

    If no stable tag is provided, it is assumed that trunk is stable, but you should specify "trunk" if that's where
you put the stable version, in order to eliminate any doubt.

== Installation ==

1. Upload the content of `paper-plan-button` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Where to configure the information of my event?=

Go on the page tab in wordpress admin and select the page where you want to configure the information. All the fields to configure should be displayed in the bottom of the page editor.

= How do I add the button on my page? =

You just have to add the HTML tag on your page.
Ex.: <div class="paperplan-button" data-lang="fr" data-title="" data-width="100" data-height="22" data-theme="default"></div>
See our website for more informations.

== Screenshots ==

TODO

== Changelog ==

= 1.0 =
* create the plugin


`<?php code(); // goes in backticks ?>`