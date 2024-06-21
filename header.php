<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/kiyoyoclub_logo.jpg">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

    
    <title>喜洋洋club</title>
    <meta name="google-site-verification" content="khSC9JJ8AAsOQNor3R6EYGe843wz6GxBaBdm1hObeJY" />
    
    <?php wp_head(); ?>
</head>

<body>

    <header>
        <section class="header">
            <div id="navArea">
                <nav>
                    <div class="inner">
                        <ul>
                            <li><a href="#top">Home</a></li>
                            <li><a href="#member">MEMBER</a></li>
                            <li><a href="#news">NEWS</a></li>
                        </ul>
                    </div>
                </nav>
    
                <div class="toggle-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
    
                <div id="mask"></div>
            </div>
        </section>
    </header>