== sparcwp ==
=========

Bootstrap-based Wordpress Starter Theme


This is a starter theme called `sparcwp`. It's a theme meant to help with content strategy for our wordpress based sites. It may eventually become a parent theme once it's fully realized, but for now, it's a very bare bones starting point for easy development. 

Most content layout is handled via the wordpress content editor. Hero sections on the front page and hero page template are handled by the Advanced Custom Field plugin.

Plugins that this theme uses
* [Bootstrap shortcodes](http://filipstefansson.com/bootstrap-3-shortcodes/).  This one is not essential but comes in handy if you don't want to use divs in the content editor. If you download via Wordpress, make sure it's the one by filip stefansson.
* [Advanced Custom Fields](http://www.advancedcustomfields.com/). Used in the hero template and the hero in header template. 

== Getting Started ==
---------------------

1. Download the theme from github and zip the sparcwp folder. 

2. Download plugins and install before you install the theme.

   [Bootstrap shortcodes](http://filipstefansson.com/bootstrap-3-shortcodes/).

   [Advanced Custom Fields](http://www.advancedcustomfields.com/). You can install this from the WP plugins area

3. Install sparcwp theme

4. Import 

   sparcwp-dummy.xml file to import content to get you started and 

   advanced-custom-field-export.xml to import advanced custom field plugin fields.

5. In the Menus tab, select Top Nav Menu and check the "main menu" box at the bottom.

6. From the Customize tab - set main menu to be the Top Nav menu. Ignore footer menu for now. Also set Static Front Page to be the "Home" page.

7. From the Header tab - add/change the custom logo if needed. If there is no logo image uploaded, the site name will be the default logo.

8. Add footer blocks using the footer widget.


== Less ==
---------------------
The theme is referencing a project and vendor compiled css stylesheet. To update the styles, you'll update the less files.  The theme has grunt files included if you choose to use grunt for compiling.  You could also compile locally using whichever app you choose, however Less App currently does not support some bootstrap 3 mixins, which is why the grunt files are there.


# Questions?
Have questions, issues, comments? Contact:

* @shivika - Shivika Asthana

