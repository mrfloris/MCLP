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
- The FAQ page is an accordion design, collapsed by default. making it easier to navigate
- A status display of the server, is it online or offline? And how many are playing out of max allowed.
- And a custom 404 page to catch all the fails.
- Setup/ folder to help generate the config.php file.

## Installation
- Configure your webserver the way you want. https:// is required for the click to clipboard to work. But, who doesn't have https:// these days. You can use Let's Encrypt cert-bot fairly easily these days to set up your virtual host in Apache.
- But, then clone this repository, browse to yourwebsite.com/setup, fill out the form and click the submit button.
- The config.php it generates, upload it to the includes/ folder
- Delete the setup/ directory.
- Write your content on the indivual .php pages under /content/
- Update the logo.png to your own (max 500px wide) server logo, you can find it in /assets/
- Also update /content/default-info.php and default-faq.php to info.php and faq.php, as I won't be uploading my own to github.
- Upload the files, and go test.

## logo.png
- I recommend a max of 500px wide, you can obviously decide to use logo.jpg, but the default is logo.png
- It makes it 420px (hardcoded in includes/header.php), feel free to change this
- .gitignore has logo.png so I can keep using my own. 
- included is a default-logo.png under /assets/ just rename it to logo.png or upload your own logo.png

## info.php
- Rename /content/default-info.php to info.php and customize it. (I dont' want to share my live one)

## faq.php
- Rename /content/default-faq.php to faq.php and customize it. (I dont' want to share my live one)

## mc_status_cache.php
- Make sure your webserver can read/write this file in the directory. 
- If you notice caching doesn't work, you could chmod 664 or 755 the file after creating it. 
- And make sure the webserver that serves the files can write and read it, tail -F /var/log/apache/error.log can help, as well as chmod on the cache filename.
- It will work without this file, but you get a php warning internally each time, and not caching means if you have a busy site your servers gets potentially hammered. Not something you probably will enjoy.

## mod_rewrite
- Talking about configuring your webserver, besides installing php mod for Apache, make sure you install mod_rewrite mod so you can use .htaccess directives to help improve directory protections. There's no need for people to list directories like /includes/ or /content/, etc. And this way you can also handle the 404 not found page. 

## TODO
- Move from locally hosted jQuery and Bootstrap to a CDN so we have less files to maintain
- Move the 600s (10m) cache time to config.php

## Version
Version 0.4.0

## Screenshots
<img width="1249" alt="Screenshot- 2025-01-14 at 23 00 36" src="https://github.com/user-attachments/assets/68c2a97c-009c-42b2-aefc-aa972813b76a" />
More: https://github.com/user-attachments/files/18416664/MCLP-Screenshots.zip

