      <!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php wp_title(); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        
        <!-- Place favicon.ico in the root directory -->
    
        
        <?php wp_head(); ?>
        
    </head>
    <body>
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Add your site or application content here -->
        
        <header>
            <a id="logo" href="">Chris Percival</a>
            <span id="menu-icon" class="hidden">&#9776;</span>
        </header>
        
        <nav>
            <!--<ul id="topnav">
                <li><a href="http://localhost/localwp.com/">HOME</a></li>
                <li><a href="http://localhost/localwp.com/about/">ABOUT</a></li>
                <li><a href="http://localhost/localwp.com/portfolio/">PORTFOLIO</a></li>
                <li><a href="http://localhost/localwp.com/contact/">CONTACT</a></li>
                <li><a href="http://localhost/localwp.com/blog/">BLOG</a></li>
                <li><a class="close-menu" style="cursor:pointer;font-size:60px;">&times;</a></li>
                <li class="hidden">SPARE</li>
            </ul>
-->
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) );

               echo "<button>Email me</button>";

            ?>
            

        </nav>