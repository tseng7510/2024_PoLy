<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/products.css">
</head>

<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages productsList">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>
      <div class="mainBox">

        <div class="breadcrumbBox">
          <div class="container">
            <ul class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
              <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                <a href="index.php" title="index" itemprop="item">
                  <span itemprop="name">Home</span>
                </a>
                <meta itemprop="position" content="1">
              </li>
              <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                <span itemprop="name">Products</span>
                <meta itemprop="position" content="2">
              </li>
            </ul>
          </div>
        </div>

        <section>
          <div class="contentBox">
            <div class="container wow fadeInUp" data-wow-delay="0s">
              <h1 class="blockTitle">PRODUCTS CATEGORY</h1>
            </div>

            <div class="container">
              <div class="products wow fadeInUp" data-wow-delay="0.2s">
                <div class="listBox">
                  <div class="item">
                    <a href="products_2.php">
                      <div class="info">
                        <h2 class="title">Swiss Type CNC Lathe</h2>
                        <div class="more">Learn more</div>
                      </div>
                      <div class="pic"><img src="../images/index/p1.jpg" alt=""></div>
                    </a>
                  </div>
                  <div class="item">
                    <a href="products_2.php">
                      <div class="info">
                        <h2 class="title">CNC Lathe</h2>
                        <div class="more">Learn more</div>
                      </div>
                      <div class="pic"><img src="../images/index/p2.jpg" alt=""></div>
                    </a>
                  </div>
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

  <!-- <script>
    $('.contentBox .listBox').slick({
      slidesToShow: 2,
      slidesToScroll: 1,
      arrows: false,
      dots: false,
      speed: 900,
      infinite: false,
      appendArrows: $('.contentBox .products'),
      responsive: [{
        breakpoint: 1000,
        settings: {
          slidesToShow: 1,
        }
      }]
    });
  </script> -->
</body>

</html>