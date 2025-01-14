# MCLP
Simple Landing Page for a Small Minecraft Server

## Introduction
- This is a simple single landing page written in PHP with some basic html/css/js to help create a simple landing page for your (small) Minecraft server. So you at least have something until you grow and need to expand. It's made to be dynamic and flexible and if you clone this repository your staff can also clone/pr your own instance to edit the content to your liking. Making management pretty easy to be honest.

## LAMP
- This is made for and tested on Ubuntu 20 linux distro, with Apache2 and PHP, at this point MySQL is not needed.

## Installation
- Configure your webserver the way you want. https:// is required for the click to clipboard to work. But, who doesn't have https:// these days. You can use Let's Encrypt cert-bot fairly easily these days to set up your virtual host in Apache.
- But, then clone this repository, make the appropriate changes, update default-config.php to config.php and edit the content to your server details. 
- Write your content on the indivual .php pages under /content/
- Update the logo.png to your own (max 500px wide) server logo, you can find it in /assets/
- Upload the files, and go test.

## config.php
- My .gitignore prevents uploading my own config.php by accident. You don't need my setup! 
- The includes/default-config.php exists, just rename it to config.php and edit it before going live.

## mc_status_cache.php
- Make sure your webserver can read/write this file in the directory. 
- If you notice caching doesn't work, you could chmod 664 or 755 the file after creating it. 
- And make sure the webserver that serves the files can write and read it, tail -F /var/log/apache/error.log can help, as well as chmod on the cache filename.
- It will work without this file, but you get a php warning internally each time, and not caching means if you have a busy site your servers gets potentially hammered. Not something you probably will enjoy.

## Version
Version 0.3.1
