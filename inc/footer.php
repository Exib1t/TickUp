    </div><!--content-->

    <footer class="l-siteFooter">
      <div class="b-siteFooter">

        <div class="b-siteFooter__side">

          <a href="mailto: info@tickup.se" class="b-siteFooter__link">info@tickup.se</a>

          <p class="b-siteFooter__position">TickUp AB c/o No 18 Centralplan 15 111 20 Stockholm SWEDEN</p>

          <div class="b-siteFooter__row">
            <div class="l-siteLogo">
                <?php
                $siteLogo__tag  = $isHomepage ? 'h1' : 'div';
                $siteLogo__link = $isHomepage ? '' : ' href="index.html"';
                ?>
                <<?php echo $siteLogo__tag; ?> class="b-siteLogo" itemscope itemtype="http://schema.org/Organization">
                <a class="b-siteLogo__link"<?php echo $siteLogo__link; ?> itemprop="url">
                  <img class="b-siteLogo__icon" src="assets/img/blocks/siteLogo/siteLogo.png" alt="<?php echo $siteName; ?>" title="<?php echo $siteName; ?>" itemprop="logo" />
                </a>
              </<?php echo $siteLogo__tag; ?>>
            </div>

            <address class="l-siteCopyright vcard" itemscope itemtype="http://schema.org/Organization">
              <div class="b-siteCopyright">© <?php echo date( 'Y' ); ?> <a rel="me" itemprop="name" class="b-siteCopyright__link fn n org url work" href="<?php echo "http://" . $_SERVER['HTTP_HOST']; ?>">TickUp AB</a>. |  Privacy policy</div>
            </address>

          </div>
        </div>

        <div class="b-siteFooter__side -img">
          <img src="../assets/img/blocks/siteFooter/map.png" alt="" class="b-siteFooter__img">
          <svg class="b-siteFooter__mark" id="SVGDoc" width="80" height="102" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:avocode="https://avocode.com/" viewBox="0 0 80 102"><defs></defs><desc>Generated with Avocode.</desc><g><g><title>Shape</title><path d="M36.5387,53.66797c-8.4339,-1.77124 -13.98291,-9.74292 -12.20758,-18.1582c1.77533,-8.41455 9.76556,-13.95068 18.20026,-12.17944c6.21484,1.32861 11.09729,5.979 12.20752,12.17944c1.55396,8.41455 -3.99512,16.60791 -12.20752,18.1582c-1.99756,0.44263 -3.99512,0.44263 -5.99268,0zM0,38.604c0,8.396 2.8891,16.396 8,23.07324l30.22247,39.49219c0.66669,0.8877 2.22247,1.10889 3.11084,0.44336l0.44421,-0.44336l30.22247,-39.49219c5.1109,-6.67725 8,-14.67725 8,-23.07324c0,-21.29883 -18,-38.604 -40,-38.604c-22,0 -40,17.30518 -40,38.604z" fill="#0cc060" fill-opacity="1"></path></g></g></svg>
        </div>
      </div>
    </footer>
  </div><!--wrapper-->

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-3.6.0.min.js"><\/script>')</script>

  <script src="assets/js/scripts.js?<?php echo filemtime( 'assets/js/scripts.js' ); ?>"></script>

  <!-- Global site tag (gtag.js) - Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXX-Y"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-XXXXX-Y');
  </script>

</body>
</html>
