<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/index.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="mainBox">


        <div class="banner">
          <div class="listBox">
            <div class="item">
              <div class="pic">
                <img src="../images/index/banner.jpg" alt="">
              </div>
            </div>
            <div class="item">
              <div class="pic">
                <img src="../images/index/banner.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="dotBox"></div>
        </div>

        <div class="top">
          <section class="productBox">
            <div class="container wow fadeInLeft" data-wow-delay="0s">
              <a href="products.php" class="more">VIEW MORE</a>
              <h2 class="blockTitle">PRODUCTS CATEGORY</h2>
            </div>

            <div class="products">
              <div class="listBox">
                <div class="item">
                  <a href="products_list.php">
                    <div class="info">
                      <h2 class="title">Swiss Type CNC Lathe</h2>
                     <div style="display:none"> <div class="more">Learn more</div></div>
                    </div>
                    <div class="pic"><img src="../images/index/p1.jpg" alt=""></div>
                  </a>
                </div>
                <div class="item">
                  <a href="products_list.php">
                    <div class="info">
                      <h2 class="title">CNC Lathe</h2>
                     <div style="display:none"> <div class="more">Learn more</div></div>
                    </div>
                    <div class="pic"><img src="../images/index/p2.jpg" alt=""></div>
                  </a>
                </div>
              </div>
            </div>
          </section>
          <section class="newsBox">
            <div class="container">
              <div class="topBox wow fadeInUp" data-wow-delay="0s">
                <h2 class="blockTitle">NEWS <span>&</span> EXHIBITIONS</h2>
                <a href="news.php" class="more">VIEW MORE</a>
              </div>
              <div class="listBox">
                <? for ($i = 0; $i < 2; $i++) { ?>
                  <div class="item wow fadeInRight" data-wow-delay="0.2s">
                    <a href="news_detail.php">
                      <div class="picBox">
                        <div class="pic"><img src="../images/index/n.jpg" alt=""></div>
                        <div class="tag">News</div>
                      </div>
                      <div class="infoBox">
                        <h3 class="title">EMO MILANO 2015</h3>
                        <div class="description">Po Ly Gim - EMO MILANO 2015 Exhibition</div>
                        <div class="more">Learn more</div>
                      </div>
                    </a>
                  </div>
                <? } ?>
              </div>
            </div>
          </section>
        </div>

        <div class="bottom">
          <section class="catalogueBox">
            <div class="container">
              <div class="topBox wow fadeInUp" data-wow-delay="0s">
                <a href="catalogue.php" class="more">VIEW MORE</a>
                <h2 class="blockTitle">CATALOGUE</h2>
              </div>
              <div class="picBox">
                <div class="pic"><img src="../images/index/c.jpg" alt=""></div>
              </div>
              <div class="side">
                <div class="listBox">

                  <div class="item" data-img="../images/index/c.jpg">
                    <div class="info">
                      <h3 class="title">25&32&42CSL series1</h3>
                      <div class="description">The lastset DIAMOND CSL series is the type long awaited by users who are in the field requiring back-face or second machining </div>
                    </div>
                    <button class="download"></button>
                  </div>
                  <div class="item" data-img="../images/index/c.jpg">
                    <div class="info">
                      <h3 class="title">25&32&42CSL series2</h3>
                      <div class="description">The lastset DIAMOND CSL series is the type long awaited by users who are in the field requiring back-face or second machining </div>
                    </div>
                    <button class="download"></button>
                  </div>
                  <div class="item" data-img="../images/index/c.jpg">
                    <div class="info">
                      <h3 class="title">25&32&42CSL series3</h3>
                      <div class="description">The lastset DIAMOND CSL series is the type long awaited by users who are in the field requiring back-face or second machining </div>
                    </div>
                    <button class="download"></button>
                  </div>


                </div>
                <div class="dotBox"></div>
              </div>
            </div>
          </section>

          <section class="worldwideBox">
            <div class="content">
              <div class="infoBox">
                <h2 class="blockTitle wow fadeInUp" data-wow-delay="0s">WORLDWIDE</h2>
                <div class="description wow fadeInUp" data-wow-delay="0.2s">You are welcomed to join us as our new partner in an area where we have not yet set up any sales networks. Please contact us. We are ready to receive your information and we look forward to hearing from you.</div>
                <a class="more wow fadeInUp" data-wow-delay="0.4s" href="worldwide.php">Learn more</a>
              </div>
              <div class="pic wow fadeInRight" data-wow-delay="0.4s"><img src="../images/index/w.png" alt=""></div>
            </div>
          </section>
        </div>

      </div>
    </main>


    <?php include('include_footer.php'); ?>

  </div>
  <?php include('include_body_bottom.php'); ?>
  <script type="text/javascript" src="../plugins/gsap.min.js"></script>

  <script>
    $(function() {
      $('.banner .listBox').slick({
        arrows: false,
        dots: true,
        speed: 900,
        autoplay: true,
        infinite: true,
        appendDots: $('.banner .dotBox'),
      });

      $('.productBox .listBox').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        speed: 900,
        infinite: false,
        appendArrows: $('.productBox .products'),
        responsive: [{
          breakpoint: 1000,
          settings: {
            slidesToShow: 1,
          }
        }]
      });

      $('.catalogueBox .listBox').slick({
        arrows: false,
        dots: true,
        speed: 900,
        infinite: false,
        fade: true,
        appendDots: $('.catalogueBox .dotBox'),
      });
    });

    $('.catalogueBox .listBox').on('init beforeChange', function(event, slick, currentSlide, nextSlide) {
      let imgSrc;
      if (currentSlide === undefined || currentSlide + 1 === slick.$slides.length) {
        imgSrc = slick.$slides[0].getAttribute('data-img')
      } else {
        imgSrc = slick.$slides[currentSlide + 1].getAttribute('data-img')
      }
      $('.catalogueBox .picBox img').attr('src', imgSrc)
    })
  </script>
</body>

</html>