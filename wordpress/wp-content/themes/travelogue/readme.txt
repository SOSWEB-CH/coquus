Travelogue v2.7
----------------
 by Joshua Lyman
  www.podq.com
----------------



A Few Notes:
------------

	First of all, thank you very much for downloading Travelogue! I appreciate your support. It is an ongoing development, and though it stands at a full version number, there is always room to improve, and I have ideas already.
	The theme is fully compatible with WordPress 2.5 and higher (tested up to 2.7.1). Just drop it into your wp-content/themes folder, activate it on the Appearance page, and go! Good luck.
	Thanks so much to the countless other coders and such who helped/inspired me along the way. 


Changelog
---------
v2.7	- Replaced deprecated functions, fixed Search widget display.
	- Changed default image rotator script to rotatorm.php
v2.5	- Made the theme WP2.3+ compatible, or in large part, widgetized. 
	- A few deprecated functions were replaced with their more current counterparts.
	- Removed the Travelogue Options page - all is taken care of by built-in WP widgets.
	- Gravatar compatible.
	- A slight facelift.
	- Localized. Includes a rough French translation by yours truly (but will someone please check it!) Use the default.pot file to create other translations.


The Polaroid, Header, and Sidebar images:
-----------------------------------------

	This section used to be a great point of contention in the older versions of Travelogue, because so much manual editing was necessary. I still provide the Photoshop template for those who want to get adventurous, but you no longer have to open Photoshop to change anything. 
	The polaroid image involves truly easy-to-use random images this time around. Just pop your images into the "randimages" folder, sized to 202x187px, upload, and you are good to go! You can easily set the polaroid pictures to link to somewhere else (e.g., a post with a gallery in it, a full photo gallery, etc.) by editing the theme file header.php. Go to line 39 and change the # to the link to your gallery. Don't worry, it's not scary, go ahead, try it!
	If you experience problems with the rotator, try changing line 39 where it reads:
		<img src="<?php bloginfo('template_directory'); ?>/randimages/rotatorm.php"
			to
		<img src="<?php bloginfo('template_directory'); ?>/randimages/rotator.php"

	So much shorter than before, and so much nicer!

 
Valid XHTML?
------------

	Yes, I suppose this theme does validate as XHTML 1.0 Transitional. Not too hard to do. The older Travelogue didn't because it was doing crazy things with the sidebars, but we are all nice and compliant now! Enjoy!


Problems and Troubleshooting:
-----------------------------

	Since everyone needs a hand ocassionaly in this world, if you experience any problems, visit my site at www.podq.com. Chances are others have had the same difficulties you have. You can also contact me by email if browsing the site does not reveal any answers for you.
	The theme is released under the GPL, as well as the images included for the random photo polaroid. Credit for the images goes to me, the photographer, Joshua Lyman. Have fun!


Contact
-------

	Joshua Lyman
	www.podq.com
	uplink at podq dot com