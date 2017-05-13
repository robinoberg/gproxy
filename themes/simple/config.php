<?php
/*******************************************************************
* Glype Proxy Script
* 
* This theme configuration file allows easy customization of the
* theme without editing the HTML templates.
*******************************************************************
* Theme: Simple
* Author: Glype
* Website: http://www.glype.com/
******************************************************************/

/*****************************************************************
* Themes can use "theme replacements". These are HTML tags of the format
* <!--[tag_name]--> in the template files. To automatically replace
* these placeholders with other text, use the $themeReplace array.
*  e.g.
* <!--[tag_name]--> will be replaced with the value of $themeReplace['tag_name']
******************************************************************/

// Website name
$themeReplace['site_name'] = $_SERVER['HTTP_HOST'].' Glype&reg; proxy';

// Proxy description text
$themeReplace['description'] = <<<OUT
   <p>Your very own proxy deployed on your Heroku account. </br> <h2><b><font color="red" >Please note that this proxy is not foolproof. Do not use this to do sensitive things where you do not want your identity compromised! </font></b></h2> 
   	   While this may not work with many sites (like Youtube), it works just fine for many others. This is especially useful for students inside college campus where many sites are blocked by their proxy servers. 
   </p>
OUT;
