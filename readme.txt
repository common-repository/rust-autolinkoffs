RustAutoLinkoffs v1.0 Beta 2
-GNU GPL Licensed http://www.gnu.org/licenses/gpl.html
Jan 11 2004
----------
http://russ.innereyes.com/wordpress-plugins/

Description:
This plugin returns an unordered list of links drawn from the post itself.

Directions:
1) Upload "rust_autolinkoffs.php" to your /wp-content/plugins folder,
2) Activate the plugin.
3) Edit your "index.php" file and add the following tag within the Loop:

		<?php ShowRustAutoLinkoffs(); ?>

4) Add a "rustAutoLinkoffsPost" class to your stylesheet if you want.
5) Done!

Parameters:
	ShowRustAutoLinkoffs(true|false,$sTitle);
The first parameter can be set to TRUE or FALSE (1 or 0, respectively). If TRUE, links will open in a new window. Default is FALSE.
The second is a string value that contains the title you want to appear above the list. Default is empty.

Example:
	ShowRustAutoLinkoffs(FALSE,"<h4>Links in this story</h4>");

Usage:
1) Automatic! Any link you include in your post will be displayed by the plugin.
2) To disable the AutoLinkoff display for a particular post, add a custom field named "autolinkoff" with a value of "off" to the post.
3) Done!

Have fun!

russ@innereyes.com
