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
$themeReplace['site_name'] = $_SERVER['HTTP_HOST'].' proxy';

// Proxy description text
$themeReplace['description'] = <<<OUT
   <p>Robin's proxy on Heroku. </br>
   	   May not work well with sites such as YouTube, but works fine for many others. This is especially useful to access content that are blocked by proxy servers. 
   </p>
OUT;
