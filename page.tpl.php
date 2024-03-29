  <div id="page-wrapper"><div id="page">
    <div id="header">
      <div class="container_12" id="container">
        <div id="header-bg">
          <div class="grid_3" id="logo">
            <?php if ($logo): ?>
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
              </a>
            <?php endif; ?>
          </div><!-- fin logo -->
          <div id="navigation" class="grid_7">
            <?php if ($main_menu): ?>
              <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')))); ?>
            <?php endif; ?>
          </div> <!--navigation -->
          <div class="grid_2" id="search-box">
            <!-- <form action="#" method="post">
                <input id="search-box2" name="search-box" type="text" value="" />
            </form> -->
            <form action="#" method="get">
              <fieldset class="">
                <p><input type="submit" class="submit" value="Go"></p>
                <p><input type="text" class="text" name="s" value="" onfocus="if(this.value=='') this.value=''" onblur="if(this.value=='') this.value=''"></p>
              </fieldset>
            </form>
          </div><!-- fin search-box -->
          </div><!-- fin header-bg -->
        </div><!-- fin container -->
        <?php print render($page['header']); ?>
      </div><!-- fin de header -->
      <div class="clear"></div>
      <div id="content">
        <div id="content-top">
          <div class="container_12" id="container1">
            <div id="featured">
              <div id="slide">
                <div class="grid_5" id="content-top-left">
                  <h1>Portfolio Website Theme: Perfect for Anyone</h1>
                  <p class="first">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent ibero.Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.<br><br>
                  Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. </p>
                  <div id="botom-2"><a href="#">See Our Work</a></div>
                </div><!-- fin content-top-left -->
                <div class="grid_7"id="content-top-right">
                  <IMG SRC="images/image1.png">
                </div><!-- fin content-top-right -->
              </div><!--fin slide -->
                <a href=""><img src="dummy-images/imagen-slide1.jpg" /></a>
            </div><!--fin featured-->
          </div><!-- container1 -->
        </div><!-- fin content top -->
        <div class="clear"></div>
          <div class="container_12" id="container2">
            <div id="content-middle">
            <div class="grid_3" id="content-middle-block-1">
              <div class="content-middle-block">
                <h2 class="title">What I Can All Do</h2>
                <p class="block"><span class="second">Lorem ipsum dolor sit amet, omnis euismod indoctum mel.</span><br>Lorem ipsum dolor sit amet, omnis euismod indoctum mel ei, mel erat ancillae eloquent iam id. Movet facete sea cu, deleniti adipiscing id eum. Mel alia consul constituto ex, no his inani reformidans accommoda re. Et eos viderer appellantur, ferri inimicus an ius, ne inermis deseruisse ius.
                </p>
                <p class="read"><a href="#">Read More</a></p>
              </div>
            </div><!-- fin content-middle-block-1 -->
            <div class="grid_3" id="content-middle-block-2">
              <div class="content-middle-block">
                <h2 class="title">A Little Bit About Me</h2>
                <p class="block"><span class="second">Lorem ipsum dolor sit amet, omnis euismod indoctum mel.</span><br>Lorem ipsum dolor sit amet, omnis euismod indoctum mel ei, mel erat ancillae eloquent iam id. Movet facete sea cu, deleniti adipiscing id eum. Mel alia consul constituto ex, no his inani reformidans accommoda re. Et eos viderer appellantur, ferri inimicus an ius, ne inermis deseruisse ius.
                </p>
                <p class="read"><a href="#">Read More</a></p>
              </div>
            </div><!-- fin content-middle-block-2 -->
            <div class="grid_3" id="content-middle-block-3">
              <div class="content-middle-block">
                <h2 class="title">Folow Me On Twitter</h2>
                <p class="block"><span class="second">Lorem ipsum dolor sit amet, omnis euismod indoctum mel.</span><br>Lorem ipsum dolor sit amet, omnis euismod indoctum mel ei, mel erat ancillae eloquent iam id. Movet facete sea cu, deleniti adipiscing id eum. Mel alia consul constituto ex, no his inani reformidans accommoda re. Et eos viderer appellantur, ferri inimicus an ius, ne inermis deseruisse ius.
                </p>
                <p class="read"><a href="#">Read More</a></p>
              </div>
            </div><!-- fin content-middle-block-3 -->
            <div class="grid_3" id="content-middle-block-4">
              <div class="content-middle-block">
                <h2 class="title">Feel Free To Contact me</h2>
                <p class="block"><span class="second">Lorem ipsum dolor sit amet, omnis euismod indoctum mel.</span><br>Lorem ipsum dolor sit amet, omnis euismod indoctum mel ei, mel erat ancillae eloquent iam id. Movet facete sea cu, deleniti adipiscing id eum. Mel alia consul constituto ex, no his inani reformidans accommoda re. Et eos viderer appellantur, ferri inimicus an ius, ne inermis deseruisse ius.
                </p>
                <p class="read"><a href="#">Read More</a></p>
              </div>
            </div><!-- fin content-middle-block-4 -->
          </div> <!-- fin content-middle -->
        <div class="clear"></div>
        <div id="content-bottom">
          <div class="grid_12" id="recent-work-title">Recent Work</div>
          <div class="clear"></div>
          <div id="content-bottom-first">
            <div class="grid_3" id="content-bottom-first-1">
              <p class="third">
              <span class="title">Lorem ipsum dolor sit amet, omnis euismod indoctum mel.</span><br><br>
               Lorem ipsum dolor sit amet, omnis euismod indoctum mel ei, mel erat ancillae eloquent iam id. Movet facete sea cu, deleniti adipiscing id eum. Mel alia consul constituto ex, no his inani reformidans accommoda re. Et eos viderer appellantur, ferri inimicus an ius, ne inermis deseruisse ius.
              </p>
            </div>
              <div id="image1" class="grid_3"><a href="#"><img src="images/imagebk1.jpg"></a></div>
              <div id="image2" class="grid_3"><a href="#"><img src="images/imagebk2.jpg"></a></div>
              <div id="image3" class="grid_3"><a href="#"><img src="images/imagebk3.jpg"></a></div>
         </div><!-- fin content-bottom-first -->
          <div class="clear"></div>
          <div id="content-bottom-second">
              <div id="image4" class="grid_3 prefix_3"><a href="#"><img src="images/imagebk4.jpg"></a></div>
              <div id="image5" class="grid_3"><a href="#"><img src="images/imagebk5.jpg"></a></div>
              <div id="image6" class="grid_3"><a href="#"><img src="images/imagebk6.jpg"></a></div>
          </div> <!-- fin content-bottom-second -->
          <div class="clear"></div>
        </div> <!-- fin content-bottom -->
        </div><!-- fin content2 -->
      </div> <!-- fin de content -->
      <div id="footer">
      <div class="container_12" id="container3">
        <div id="footer-top">
          <div class="grid_3" id="footer-top-block-1">
            <h3 class="footer-title">About Portfolio</h3>
            <p class="first">Class aptent taciti sociosqu ad litora torquent per conubia nostra, persinioa inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor.<br><br>
            Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis.
            </p>
          </div><!-- footer-top-block-1 -->
          <div class="grid_3" id="footer-top-block-2">
            <h3 class="footer-title">About Portfolio</h3>
            <p class="first">Class aptent taciti sociosqu ad litora torquent per conubia nostra, persinioa inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor.<br><br>
            Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis.
            </p>
          </div><!-- footer-top-block-2 -->
          <div class="grid_3" id="footer-top-block-3">
            <h3 class="footer-title">About Portfolio</h3>
            <p class="first">Class aptent taciti sociosqu ad litora torquent per conubia nostra, persinioa inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor.<br><br>
            Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis.
            </p>
          </div><!-- footer-top-block-3 -->
          <div class="grid_3" id="footer-top-block-4">
            <h3 class="footer-title">About Portfolio</h3>
            <p class="first">Class aptent taciti sociosqu ad litora torquent per conubia nostra, persinioa inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor.<br><br>
            Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis.
            </p>
          </div><!-- footer-top-block-4 -->
          <div class="clear"></div>
        </div> <!-- fin footer-top -->
        <div id="footer-bottom">
          <div class="grid_2" id="footer-bottom-first">
            <a href="#"><img src="images/logo-footer.png"></a>
          </div>
          <div class="grid_4 alpha" id="footer-bottom-second">
              <a href="#">The Ultimate Portfolio Wordpress Theme On the Web</a>
              <a href="#">t: (888) 842 - 8356  e: info@bestpsdfreebies.com</a>
          </div>
          <div class="grid_3 prefix_3" id="footer-bottom-third">
              <a href="#">Copyright 2012. Powered by Wordpress</a>
              <a href="#">Portfolio Theme by Best PSD Freebies</a>
          </div>
          <div class="clear"></div>
        </div> <!-- fin footer-bottom -->
      </div><!-- fin de container3 -->
      </div> <!-- fin de footer -->
  </div></div> <!-- /#page, /#page-wrapper -->
