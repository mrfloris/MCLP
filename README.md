# MCLP
Simple Landing Page for a Small Minecraft Server

## Introduction
- This is a simple single landing page written in PHP with some basic html/css/js to help create a simple landing page for your (small) Minecraft server. So you at least have something until you grow and need to expand. It's made to be dynamic and flexible and if you clone this repository your staff can also clone/pr your own instance to edit the content to your liking. Making management pretty easy to be honest.

## LAMP
- This is made for and tested on Ubuntu 20 linux distro, with Apache2 and PHP, at this point MySQL is not needed.

## Features
- Simple Single Landing Page to help you get a quick bit of content up for your (starting and/or small) Minecraft server.
- It all gets served through the main index.php file
- Has a logo at the top
- Easy to find server IP at the top, with an option to click to copy to clipboard.
- Uses bootstrap for simple page design, making it super easy to customize.
- Override a lot of the style css in a style.css file to match your personal style-guide (but dark mode by default).
- Simple top menu that updates the current page without reloading to another page, with an includes/quicknav.php file that's easy to edit. (Don't forget to update index.php to add/remove the loading of that page)
- EULA compliant footer to keep Mojang happy (we are not pretending to be .. disclaimer + server owner contact email)
- Content that you want to add or customize is in its own /content/ folder, so you don't have to worry much about accidentally breaking the fancy stuff that makes up the page. 
- Easy to edit header/footer in the /includes/ folder so you can quickly personalize your landing page.
- Global config.php file with variables that are used side-wide, so you can quickly make changes globally.
- Global config.php file with shorthand php for those variables, so you can copy paste them wherever you want basically (apply some common sense though).
- A great starting point for you to build out from. And your contributions can be offered here as a PR (pull request)for my consideration so it becomes merged into this project for all to enjoy. 
- A status display of the server, is it online or offline? And how many are playing out of max allowed.
- And a custom 404 page to catch all the fails.

## Installation
- Configure your webserver the way you want. https:// is required for the click to clipboard to work. But, who doesn't have https:// these days. You can use Let's Encrypt cert-bot fairly easily these days to set up your virtual host in Apache.
- But, then clone this repository, make the appropriate changes, update default-config.php to config.php and edit the content to your server details. 
- Write your content on the indivual .php pages under /content/
- Update the logo.png to your own (max 500px wide) server logo, you can find it in /assets/
- Upload the files, and go test.

## config.php
- My .gitignore prevents uploading my own config.php by accident. You don't need my setup! 
- The includes/default-config.php exists, just rename it to config.php and edit it before going live.

## logo.png
- I recommend a max of 500px wide, you can obviously decide to use logo.jpg, but the default is logo.png
- It makes it 420px (hardcoded in includes/header.php), feel free to change this
- .gitignore has logo.png so I can keep using my own. 
- included is a default-logo.png under /assets/ just rename it to logo.png or upload your own logo.png

## mc_status_cache.php
- Make sure your webserver can read/write this file in the directory. 
- If you notice caching doesn't work, you could chmod 664 or 755 the file after creating it. 
- And make sure the webserver that serves the files can write and read it, tail -F /var/log/apache/error.log can help, as well as chmod on the cache filename.
- It will work without this file, but you get a php warning internally each time, and not caching means if you have a busy site your servers gets potentially hammered. Not something you probably will enjoy.

## mod_rewrite
- Talking about configuring your webserver, besides installing php mod for Apache, make sure you install mod_rewrite mod so you can use .htaccess directives to help improve directory protections. There's no need for people to list directories like /includes/ or /content/, etc. And this way you can also handle the 404 not found page. 

## TODO
- Update home.php and/or info.php to include the variable for server_description
- Move from locally hosted jQuery and Bootstrap to a CDN so we have less files to maintain
- Move the 600s (10m) cache time to config.php

## Version
Version 0.3.1
