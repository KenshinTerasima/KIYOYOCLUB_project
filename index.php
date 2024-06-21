<?php get_header(); ?>

<main>

    <!--ーーーーーーーーーーー ファーストビュー ーーーーーーーーーーーーーーーーーーーーーーー-->
    <section class="main_page" id="top">

        <div class="logo">
            <img src="<?php echo get_template_directory_uri() ;?>/images/kiyoyoclub_logo.jpg" alt="バンドロゴ">
        </div>

        <div class="photos">
            <img src="<?php echo get_template_directory_uri() ;?>/images/firstview_nakaba.png" alt="" class="nakaba">
            <img src="<?php echo get_template_directory_uri() ;?>/images/firstview_sho.jpg" alt="" class="sho">
            <img src="<?php echo get_template_directory_uri() ;?>/images/firstview_sho2.jpg" alt="" class="bike_sho">
            <img src="<?php echo get_template_directory_uri() ;?>/images/firstview_kenshin.jpg" alt="" class="kenshin">
            <img src="<?php echo get_template_directory_uri() ;?>/images/firstview_shugo.jpg" alt="" class="shugo">
        </div>

        <div class="band_instagram">
            <a href="https://www.instagram.com/kiyoyoclub.official_/" target="_blank"><img src="<?php echo get_template_directory_uri() ;?>/images/kiyoyoclub_instagram.jpg" alt="バンドインスタ" ></a>
        </div>

    </section>

    <!-- ーーーーーーーーーーメンバー紹介ーーーーーーーーーーーーーーーーーーーーーーー -->
    <section class="member_page" id="member">

        <div class="title"> 
            <div class="title1">MEMBER</div>
            <div class="title2">MEMBER</div>
        </div>

        <div class="member_introduction">

            <div class="fade">

                <div class="nakaba_introduction">
                    <div class="rep">Dr.</div>
                    <div class="name">Nakaba Niwa</div>

                    <div class="Instagram">
                        <a href="https://www.instagram.com/28_nakaba/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram_icon.jpg" alt=""></a>
                        <a href="https://www.instagram.com/28_nakaba/" target='_blank'> <div class="user_name">28_nakaba</div></a>
                    </div>

                    <span></span>
                </div>

                <div class="sho_introduction">
                    <div class="rep">Bass.</div>
                    <div class="name">Sho Minagawa</div>

                    <div class="Instagram">
                        <a href="https://www.instagram.com/m_sho0310/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram_icon.jpg" alt=""></a>
                        <a href="https://www.instagram.com/m_sho0310/" target='_blank'><div class="user_name">m_sho0310</div></a>
                    </div>
                    <span></span>
                </div>

                <div class="kenshin_introduction">
                    <div class="rep">Gt.&Vo.</div>
                    <div class="name">Kenshin Terashima</div>

                    <div class="Instagram">
                        <a href="https://www.instagram.com/__t.kenshin.__/"  target='_blank'><img src="<?php echo get_template_directory_uri(); ?>/images/instagram_icon.jpg" alt=""></a>
                        <a href="https://www.instagram.com/__t.kenshin.__/" target='_blank'><div class="user_name">__t.kenshin__</div></a> 
                    </div>
                    <span></span>
                </div>

            </div>    
        </div>

    </section>

    <!-- --------------NEWS--------------------- -->
    <section class="news_page" id="news">

        <div class="title">
            <div class="title1">NEWS</div>
            <div class="title2">NEWS</div>
        </div>

        <div class="history">
            <div class="fade">
                <div class="update">
                    <span class="date">2023年6月</span>
                    <p>3人で初コピーバンドライブ (My hair is Bad) in 柳ケ瀬ants</p>
                </div>

                <div class="update">
                    <span class="date">2023年8月</span>
                    <p>喜洋洋club設立</p>
                </div>

                <div class="update">
                    <span class="date">2023年12月</span>
                    <p>2度目のコピーバンドライブ (ズーカラデル) in 柳ケ瀬ants</p>
                </div>
            </div>
        </div>

        <div class="title_photo">
            <div class="slide_photo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/member_kenshin1.jpg" alt="" class="childhood1">
                <img src="<?php echo get_template_directory_uri(); ?>/images/member_kenshin2.jpg" alt="" class="childhood2">
            </div>
        </div>

    </section>
</main>

<?php get_footer(); ?>
