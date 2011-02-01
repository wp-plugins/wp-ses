=== Plugin Name ===
Contributors: SylvainDeaure
Donate link: http://wp-ses.com/donate.html
Tags: email,ses,amazon,webservice,delivrability,newsletter,autoresponder,mail,wp_mail,smtp,service
Requires at least: 3.0.0
Tested up to: 3.0.4
Stable tag: trunk

WP-SES redirects all outgoing WordPress emails through Amazon Simple Email Service (SES) for maximum email delivrability.

== Description ==

WP-SES redirects All outgoing WordPress emails through Amazon Simple Email Service (SES) instead of local wp_mail function.
This ensures high email delivrability, email trafic statistics and a powerful managed infrastructure.

This plugin is in BETA state, just as the Amazon SES service. However, it is still functionnal and I use it on several websites.

Current features are:

*	Ability to adjust WordPress Default Sender Email and Name
*	Validation of Amazon API Credentials
*	Request confirmation for sender Emails
*	Test message within Amazon Sandbox mode
*	Full integration as seamless replacement for wp_mail internal function
*	Dasboard panel with Quota and statistics
*	Ability to customize return path for delivery failure notifications

See full features at http://wp-ses.com/features.html

Roadmap

*	Graphical SES Statistics
*	Full featured Error management
*	Control of sending rate
*	Notice for volume limits
*	Bounce and blacklist management


You can read more about Amazon SES here : http://aws.amazon.com/ses/


== Installation ==

First, install like any other plugin:

1. Upload and activate the plugin
2. The setting are in settings / WP SES

Then, proceed to the settings:

1. Fill the email address and name to use as the sender for all emails
2. Fill in Amazon API credentials
3. Save changes (Important !)
4. Ask to add the email as a confirmed sender
5. Click on the link you got by email from Amazon SES
6. Refresh the plugin, send a test email
7. If ok, ask Amazon to go out of sandbox into production mode
7. Once in production mode, you can use the top button to activate the plugin.

== Frequently Asked Questions ==

= Where can I find support for the plugin ? =

Please use our main website http://wp-ses.com/faq.html for all support related questions.

= What are the pre-requisites ? =

*	A WP3+ Self hosted WordPress Blog
*	PHP5
*	An Amazon Web Service account
*	Validate your SES service

= Can you help me about... (an Amazon concern) =

We are not otherwise linked to Amazon or Amazon Services.
Please direct your specific Amazon questions to the Amazon support.

== Screenshots ==

1. the settings screen of WP-SES plugin.

== Changelog ==

= 0.2.2 =
Reference Language is now English.
WP SES est fourni avec les textes en Francais.

= 0.2.1 =
Added some functions

* SES Quota display
* SES Statistics
* Can set email return_path
* Full email test form
* Can partially de-activate plugin for intensive testing.

= 0.1.2 =
First public Beta release

* Functionnal version
* Internationnal Version
* fr_FR and en_US locales

= 0.1 =
* Proof of concept

== Upgrade Notice ==

= 0.2.2 =
All default strings are now in english.

= 0.2.1 =
Quota and statistics Integration

= 0.1.2 =
First public Beta release


