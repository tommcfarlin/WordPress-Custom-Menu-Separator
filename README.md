# WordPress Custom Menu Separator

A simple plugin for adding a custom menu separator in the WordPress administration menu. The blog post associated with this plugin can be found [on my blog](http://tommcfarlin.com/wordpress-menu-separator).

## Default Menu Structure

By default, WordPress populates its administration menu with the following array. Note that the indexes of the array are reserved for default menu items and should not be used to insert custom menu items.

```php
Array
(
    [2] => Array
        (
            [0] => Dashboard
            [1] => read
            [2] => index.php
            [3] => 
            [4] => menu-top menu-top-first menu-icon-dashboard menu-top-last
            [5] => menu-dashboard
            [6] => div
        )

    [4] => Array
        (
            [0] => 
            [1] => read
            [2] => separator1
            [3] => 
            [4] => wp-menu-separator
        )

    [5] => Array
        (
            [0] => Posts
            [1] => edit_posts
            [2] => edit.php
            [3] => 
            [4] => open-if-no-js menu-top menu-icon-post menu-top-first
            [5] => menu-posts
            [6] => div
        )

    [10] => Array
        (
            [0] => Media
            [1] => upload_files
            [2] => upload.php
            [3] => 
            [4] => menu-top menu-icon-media
            [5] => menu-media
            [6] => div
        )

    [15] => Array
        (
            [0] => Links
            [1] => manage_links
            [2] => link-manager.php
            [3] => 
            [4] => menu-top menu-icon-links
            [5] => menu-links
            [6] => div
        )

    [20] => Array
        (
            [0] => Pages
            [1] => edit_pages
            [2] => edit.php?post_type=page
            [3] => 
            [4] => menu-top menu-icon-page
            [5] => menu-pages
            [6] => div
        )

    [25] => Array
        (
            [0] => Comments <span class='awaiting-mod count-0'><span class='pending-count'>0</span></span>
            [1] => edit_posts
            [2] => edit-comments.php
            [3] => 
            [4] => menu-top menu-icon-comments menu-top-last menu-top-last
            [5] => menu-comments
            [6] => div
        )

    [57] => Array
        (
            [0] => 
            [1] => read
            [2] => separator57
            [3] => 
            [4] => wp-menu-separator
        )

    [59] => Array
        (
            [0] => 
            [1] => read
            [2] => separator2
            [3] => 
            [4] => wp-menu-separator
        )

    [60] => Array
        (
            [0] => Appearance
            [1] => switch_themes
            [2] => themes.php
            [3] => 
            [4] => menu-top menu-icon-appearance menu-top-first
            [5] => menu-appearance
            [6] => div
        )

    [65] => Array
        (
            [0] => Plugins <span class='update-plugins count-0'><span class='plugin-count'>0</span></span>
            [1] => activate_plugins
            [2] => plugins.php
            [3] => 
            [4] => menu-top menu-icon-plugins
            [5] => menu-plugins
            [6] => div
        )

    [70] => Array
        (
            [0] => Users
            [1] => list_users
            [2] => users.php
            [3] => 
            [4] => menu-top menu-icon-users
            [5] => menu-users
            [6] => div
        )

    [75] => Array
        (
            [0] => Tools
            [1] => edit_posts
            [2] => tools.php
            [3] => 
            [4] => menu-top menu-icon-tools
            [5] => menu-tools
            [6] => div
        )

    [80] => Array
        (
            [0] => Settings
            [1] => manage_options
            [2] => options-general.php
            [3] => 
            [4] => menu-top menu-icon-settings menu-top-last
            [5] => menu-settings
            [6] => div
        )

)
```

## Installation

1. Download (or pull) the plugin
2. Install it using the WordPress Plugin's administration page or my dropping it into your `/plugins/` directory
3. Activate it on the Plugin's listing page

You should notice a new separator appear above the 'Settings' menu. This can be changed by editing Line 81 of `plugin.php`

## Changelog

_1.1 22 March 2013_
* Updating the hooks to play nicely with WordPress 3.5
