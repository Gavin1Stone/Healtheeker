# Healtheeker

Structure of IBS Healtheeker codebase
The codebase of IBS Healtheeker consists of around 1000 files and directories. At the root directory, there are some initial bootstrap files, such as index.pxp, wp-config.php, wp-load.php, wp-setting.php. The remaining files are divided into three distinct directories: wp-admin, wp-content and wp-includes.
Following is the top level of the codebase structure:
├── wp-admin
├── wp-content
├── wp-includes
├── index.php
├── wp-activate.php
├── wp-blog-header.php
├── wp-config.php
├── wp-load.php
├── wp-setting.php
├── wp-trackback.php
└── ...

1.	wp-content
The wp-content directory consists of the IBS Healtheeker files, including themes, plugins, and uploads. Following is the structure in wp-content directory:
├── languages
├── plugins
├── themes
├── upgrade
├── uploads
└── index.php
The languages folder holds the language files with all of the messages and labels can be used in the website. The plugins folder holds the plugin files. This project includes all the initial plugins and extra ones like popup-maker-wp, quiz-master-next and wpfront-scroll-top to support the functions. The themes folder holds all the downloaded themes and the relevant files. Uploads folder includes all the files for our project, especially the photos shown in the website.

2.	wp-admin
The wp-admin directory contains code to support the WordPress administration area. The main bootloader is wp-admin/admin.php. Other special files include admin-header.php, admin-footer.php and general POST handler admin-post.php. Following is the structure in wp-admin directory:
├── css
├── images
├── includes
├── js
├── maint
├── network
├── user
├── about.php
├── admin.php
├── admin-header.php
├── admin-footer.php
├── admin-post.php
└── ...
3.	wp-includes
The wp-includes directory includes the primary core for WordPress and other third-party libraries to achieve the functions such as the customised JavaScript files and css files. Many of the primary files are loaded as the application is bootstrapped.
Following is the structure of wp-includes directory:
├── assets
├── block-patterns
├── css
├── customize
├── fonts
├── ID3
├── images
├── js
├── rest-api
├── Text
├── widgets
├── admin-bar.php
├── atomlib.php
├── cache.php
├── class-json.php
└── ...
