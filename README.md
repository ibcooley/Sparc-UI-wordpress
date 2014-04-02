== sparcwp ==
=========

Bootstrap-based Wordpress Starter Theme


This is a starter theme called `sparcwp`. It's a theme meant to help with content strategy for our wordpress based sites. It may eventually become a parent theme once it's fully realized, but for now, it's a very bare bones starting point for easy development. 

Most content layout is handled via the wordpress content editor. Hero sections on the front page and hero page template are handled by the Advanced Custom Field plugin.

Plugins that this theme uses
* [Bootstrap shortcodes](http://filipstefansson.com/bootstrap-3-shortcodes/).  This one is not essential but comes in handy if you don't want to use divs in the content editor. If you download via Wordpress, make sure it's the one by filip stefansson.
* [Advanced Custom Fields](http://www.advancedcustomfields.com/). Used in the hero template and the hero in header template. You'll need to create 2 custom field groups.

   hero_background_image [See screenshot](https://github.com/sparcedge/Sparc-UI-wordpress/blob/master/screenshots/hero-background.gif) for detailed set up info. 

   hero_content [See screenshot](https://github.com/sparcedge/Sparc-UI-wordpress/blob/master/screenshots/hero-content.gif) for detailed set up info. 


== Getting Started ==
---------------------

1. Download the theme from github, zip the sparcwp folder and install. 

2. Download plugins and install 

   [Bootstrap shortcodes](http://filipstefansson.com/bootstrap-3-shortcodes/).

   [Advanced Custom Fields](http://www.advancedcustomfields.com/). You can install this from the WP plugins area

3. Import dummycontent.xml file to import some content to get you started. 

4. Check to make sure the main menu is created.

5. Under "Appearance", from the customize tab - set main menu to be the 

6. Under "Appearance", from the header tab - add a custom logo. If you do not upload a logo, the site name will be the default logo.

7. Add footer blocks using the footer widget.



== Less ==
---------------------
The theme is referencing compiled css stylesheets. To update the styles, you'll update the less files.  The theme has grunt files included if you choose to use grunt for compiling.  You could also compile locally using whichever app you choose, however Less App currently does not support some bootstrap 3 mixins, which is why the grunt files are there.


# Questions?
Have questions, issues, comments? Contact:

* @shivika - Shivika Asthana

