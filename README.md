# Project Yeti
![Project Yeti WordPress Starter Theme based on Zurb Foundation](https://www.bybe.net/files/github/project-yeti-wordpress-starter-theme-based-on-zurb-foundation-6-big.png)
## A ZURB Foundation 6 WordPress Starter Theme
Project Yeti is a WordPress starter theme based on Zurb Foundation 6, coded by  [Simon Hayter](https://www.bybe.net/about/) from BYBE. Due to the fact this is a starter theme it is considered ideal for website designers and developers, if you want a full polished theme then this is not for you. [Foundation 6 has ONLY just been released](http://zurb.com/article/1416/foundation-6-is-here) and therefore minor issues should be expected.

If you want to say thank you, give feedback or have any issues then please visit the [Project Yeti Support Page](https://www.bybe.net/project-yeti/) on BYBE.net

### Licensing Agreements
Please beware that this WordPress template is Licensed under GNU GENERAL PUBLIC LICENSE and Foundation 6 by ZURB is licensed under the MIT license, you are welcome to fork, copy, modify, delete, share and even sell for profit but do ensure you keep the original licenses intact. If you fail to keep the licensing intact then you may feel the full wrath of the YETI MONSTER!

### Ways you can contribute to Project Yeti

I welcome all quality contributions to framework and I hope with all your help we can make Project a winning sucess story for providing the very best lightweight WordPress starter theme based on Foundation. Here's just a few ways how you can help:

- Star this Repository!
- Report bugs and issues
- Built a (QUALITY) site using Project Yeti? Share with us and we may add a link to this page!
- Sharing Project Yeti on social media sites such as Facebook, Tweeter and Google plus will help us gain more contributors!
- Pull requests are highly appericated and hope that many awesome people get in involved, please ensure that you fix or improve code, please don't create new issues. 

### DEMO
- Take a [look here](http://project-yeti.bybe.net/)

### WordPress sites based on Project Yeti!
Please hit me on Twitter [@SimonHayterUK](https://www.twitter.com/SimonHayterUK) with the URL so I can add your site to this page. Please only good sites, that look great! and does the Yeti Proud.

### CSS or JS on the Cloud
Project Yeti by default uses localhost stored JavaScripts and CSS files, to load these types of files from a content delivery network simply edit styles.php (lib/styles.php) and scripts.php (lib/scripts.php).

To use the latest jQuery simply edit styles.php and have it look something like this:

    <?php if( ! function_exists( 'py_scripts' ) ) {
        function py_scripts() {
            if (!is_admin()) {
                wp_deregister_script( 'jquery' );
                wp_register_script( 'jquery', 'https://code.jquery.com/jquery-2.1.4.min.js', array(), '2.1.4', false );
                wp_register_script( 'foundation-js', get_template_directory_uri() . '/js/foundation.js', array( 'jquery' ), '', true );
                wp_enqueue_script( 'jquery' );
                wp_enqueue_script( 'foundation-js' );
            }
        }
    }
    add_action( 'wp_enqueue_scripts', 'py_scripts' );
    ?>

### WordPress Theme Features to come...
- Hentry Disabled in favour of SCHEMA
- WP Icons Removed
- Font Awesome and more to follow!