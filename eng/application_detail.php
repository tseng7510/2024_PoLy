<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/application.css">
</head>

<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages applicationDetail">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_application.jpg" alt=""></div>
        <div class="pageTitleBox">
          <div class="titleBox wow fadeInUp" data-wow-delay="0s">
            <div class="title">Applications</div>
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
                <span itemprop="name">Applications</span>
                <meta itemprop="position" content="2">
              </li>
            </ul>
          </div>
        </div>


        <section>
          <div class="container">
            <div class="contentBox">

              <div class="topBox">
                <div class="pic wow fadeInUp" data-wow-delay="0s"><img src="../images/in/app1.jpg" alt=""></div>
                <div class="infoBox wow fadeInUp" data-wow-delay="0.2s">
                  <h3 class="title">Punching, stamping, forming, and cutting</h3>
                  <div class="topTitle">Hydraulic Punch Press</div>
                  <div class="description">Shaping Metals and Rubbers with Precision Craftsmanship</div>
                  <div class="changePage wow fadeInUp" data-wow-delay="0.4s">
                    <a class="prev arrows" href="application_detail.php"><span>Thin plate shearing, shearthrough and/or half</span></a>
                    <a class="next arrows" href="application_detail.php"><span>Tubing enlarging and reducing</span></a>
                  </div>
                </div>
              </div>

              <div class="centerBox wow fadeInUp" data-wow-delay="0.2s">
                <div class="editor">
                  <ul class="list">
                    <li>In the manufacturing industry, hydraulic punch presses have always played a crucial role, especially in the processing of metal and rubber materials. These advanced machines can not only punch holes in workpieces but also cut them into various shapes, providing manufacturers with tremendous flexibility and efficiency.</li>
                    <li>The application range of hydraulic punch presses is extremely wide, covering almost all types of materials from metal sheets to rubber parts. Different materials require hydraulic punch presses with different tonnages to ensure optimal processing results. For example, thinner metal sheets or lighter rubber materials can be processed using punch presses with smaller tonnages, while thicker metals or tougher rubbers require machines with larger tonnages to complete the processing.</li>
                    <li>Among them, the rotary hydraulic punch press is a particularly efficient processing equipment. This type of punch press usually comes with a rotating worktable that can accommodate multiple workpieces and perform multiple processing steps simultaneously. This makes the rotary hydraulic punch press an essential component in high-capacity production lines, especially suitable for mass production scenarios.</li>
                    <li>Whether it’s a traditional punch press or a rotary one, they both possess high precision and reliability. During the manufacturing process, these machines can quickly and accurately complete the punching and cutting tasks of workpieces, ensuring product quality and consistency.</li>
                    <li>In summary, hydraulic punch presses are an indispensable part of modern manufacturing. Their versatility and efficiency enable manufacturers to produce high-quality products at a faster pace, meeting market demands for quality and delivery times. With continuous technological advancements, we can expect hydraulic punch presses to perform even more impressively in the future, bringing more innovation and development to the manufacturing industry.</li>
                  </ul>
                </div>
              </div>

              <div class="bottomBox">
                <div class="subTitle">Suitable Products</div>

                <div class="listBox">
                  <? for ($i = 0; $i < 8; $i++) { ?>
                    <div class="item wow fadeInUp" data-wow-delay="0s">
                      <a href="products_3.php">
                        <div class="picBox">
                          <div class="pic"><img src="../images/index/p1.png" alt=""></div>
                          <div class="infoBox">
                            <div class="more">more</div>
                            <div class="description">
                              Hydraulic Pressing Machine with low energy consumption, less consumable parts and low noise level. Hydraulic Pressing Machine with low energy consumption, less consumable parts and low noise level.
                            </div>
                          </div>
                        </div>
                        <h2 class="title">KSY-015H Hydraulic Pressing Machine</h2>
                      </a>
                    </div>
                  <? } ?>
                </div>
                <div class="arrowsBox"></div>
              </div>


            </div>
          </div>
        </section>

      </div>
    </main>

    <?php include('include_footer.php'); ?>

  </div>
  <?php include('include_body_bottom.php'); ?>
  <script>
    $(function() {
      $('.applicationDetail .bottomBox .listBox').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        speed: 900,
        infinite: true,
        appendArrows: $('.applicationDetail .bottomBox .arrowsBox'),
        responsive: [{
            breakpoint: 1000,
            settings: {
              slidesToShow: 3,
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 2,
            }
          },
          {
            breakpoint: 550,
            settings: {
              slidesToShow: 1,
            }
          }
        ]
      });
    })
  </script>
</body>

</html>