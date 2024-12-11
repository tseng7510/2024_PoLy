<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/news.css">
</head>

<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages catalogueList">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_catalog.jpg" alt=""></div>
        <div class="pageTitleBox">
          <div class="titleBox wow fadeInUp" data-wow-delay="0s">
            <h1 class="title">Catalogue</h1>
          </div>
        </div>
      </div>

      <div class="mainBox">
        <div class="breadcrumbBox">
          <div class="container">
            <ul class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
              <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                <a href="index.php">
                  <span itemprop="name">Home</span>
                </a>
                <meta itemprop="position" content="1">
              </li>
              <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                <span itemprop="name">Media</span>
                <meta itemprop="position" content="2">
              </li>
              <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                <span itemprop="name">Catalogue</span>
                <meta itemprop="position" content="3">
              </li>
            </ul>
          </div>
        </div>



        <section>

          <div class="contentBox block1" id="SwissTypeCNCLathe">
            <div class="titleBox">
              <div class="outer">
                <h2 class="title">Swiss Type CNC Lathe</h2>
              </div>
            </div>
            <div class="outer">
              <div class="side">
                <div class="swiper swiper2">
                  <div class="swiper-wrapper">

                    <? for ($i = 0; $i < 12; $i++) { ?>
                      <div class="swiper-slide">
                        <div class="picBox">
                          <div class="pic"><img src="../images/in/c.jpg" alt=""></div>
                        </div>
                        <div class="infoBox">
                          <div class="info">
                            <h3 class="title">25&32&42CSL series</h3>
                            <div class="description">The lastset DIAMOND CSL series is the type long awaited by users who are in the field requiring back-face or second machining </div>
                          </div>
                          <button class="download"></button>
                        </div>
                      </div>
                    <? } ?>
                  </div>
                  <div class="control">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                  </div>
                </div>
              </div>
              <div class="box">
                <div class="swiper swiper1">
                  <div class="swiper-wrapper">
                    <? for ($i = 0; $i < 12; $i++) { ?>
                      <div class="swiper-slide">
                        <div class="pic"><img src="../images/in/c.jpg" alt=""></div>
                      </div>
                    <? } ?>
                  </div>
                </div>
                <div class="control">
                  <div class="swiper-button-prev"></div>
                  <div class="swiper-pagination"></div>
                  <div class="swiper-button-next"></div>
                </div>
              </div>
            </div>
          </div>


          <div class="contentBox block2" id="CNCLathe">
            <div class="titleBox">
              <div class="outer">
                <h2 class="title">CNC Lathe</h2>
              </div>
            </div>
            <div class="outer">
              <div class="side">

                <div class="swiper swiper2">
                  <div class="swiper-wrapper">

                    <? for ($i = 0; $i < 12; $i++) { ?>
                      <div class="swiper-slide">
                        <div class="picBox">
                          <div class="pic"><img src="../images/in/c.jpg" alt=""></div>
                        </div>
                        <div class="infoBox">
                          <div class="info">
                            <h3 class="title">25&32&42CSL series</h3>
                            <div class="description">The lastset DIAMOND CSL series is the type long awaited by users who are in the field requiring back-face or second machining </div>
                          </div>
                          <button class="download"></button>
                        </div>
                      </div>
                    <? } ?>
                  </div>
                </div>

                <div class="control">
                  <div class="swiper-button-prev"></div>
                  <div class="swiper-button-next"></div>
                </div>
              </div>
              <div class="box">
                <div class="swiper swiper1">
                  <div class="swiper-wrapper">
                    <? for ($i = 0; $i < 12; $i++) { ?>
                      <div class="swiper-slide">
                        <div class="pic"><img src="../images/in/c.jpg" alt=""></div>
                      </div>
                    <? } ?>
                  </div>
                </div>
                <div class="control">
                  <div class="swiper-button-prev"></div>
                  <div class="swiper-pagination"></div>
                  <div class="swiper-button-next"></div>
                </div>
              </div>
            </div>
          </div>
        </section>

      </div>
    </main>


    <?php include('include_footer.php'); ?>

  </div>
  <?php include('include_body_bottom.php'); ?>
  <script src="../plugins/swiper-master/swiper-bundle.min.js"></script>
  <script>
    const swiper = new Swiper(".block1 .swiper1", {
      slidesPerView: 3,
      slidesPerGroup: 4,
      grid: {
        rows: 2
      },
      spaceBetween: 5,
      pagination: {
        el: ".block1 .swiper-pagination",
        clickable: true
      },
      navigation: {
        nextEl: '.block1 .box .swiper-button-next',
        prevEl: '.block1 .box .swiper-button-prev',
      },
      watchSlidesProgress: true,
      breakpoints: {
        1000: {
          slidesPerView: 4,
          grid: {
            rows: 2
          },
        },
      },
      updateOnWindowResize: true,
    });

    const swiper2 = new Swiper(".block1 .swiper2", {
      thumbs: {
        swiper: swiper,
      },
      navigation: {
        nextEl: '.block1 .side .swiper-button-next',
        prevEl: '.block1 .side .swiper-button-prev',
      },
    });

    const swiper3 = new Swiper(".block2 .swiper1", {
      slidesPerView: 4,
      slidesPerGroup: 4,
      grid: {
        rows: 2
      },
      spaceBetween: 5,
      pagination: {
        el: ".block2 .swiper-pagination",
        clickable: true
      },
      navigation: {
        nextEl: '.block2 .box .swiper-button-next',
        prevEl: '.block2 .box .swiper-button-prev',
      },
      watchSlidesProgress: true
    });

    const swiper4 = new Swiper(".block2 .swiper2", {
      thumbs: {
        swiper: swiper3
      },
      navigation: {
        nextEl: '.block2 .side .swiper-button-next',
        prevEl: '.block2 .side .swiper-button-prev',
      },
    });
  </script>
</body>

</html>