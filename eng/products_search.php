<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/products.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages productsList2 search">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>


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
                <a href="products.php">
                  <span itemprop="name">Products</span>
                </a>
                <meta itemprop="position" content="2">
              </li>
              <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                <a href="products_2.php">
                  <span itemprop="name">Swiss Type CNC Lathe</span>
                </a>
                <meta itemprop="position" content="3">
              </li>
            </ul>
          </div>
        </div>

        <section>
          <div class="pageTitleBox">
            <div class="pic"><img src="../images/in/banner_products.jpg" alt=""></div>
            <div class="titleBox wow fadeInUp" data-wow-delay="0s">
              <div class="topResults">
                <div class="results">Keyword Search Results : <span>OOOO</span></div>
              </div>
            </div>
          </div>
          <div class="contentBox">
            <div class="container">
              <div class="listBox">
                <? for ($i = 0; $i < 12; $i++) { ?>
                  <div class="item wow fadeInUp" data-wow-delay="0s">
                    <a href="products_detail.php">
                      <div class="picBox">
                        <div class="pic"><img src="../images/in/p.jpg" alt=""></div>
                        <div class="more">Learn more</div>
                      </div>
                      <div class="info">
                        <h2 class="title">Diamond 32 Series</h2>
                      </div>
                    </a>
                  </div>
                <? } ?>
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
    $('.mainMenu > ul > li').eq(0).addClass('active');
  </script>
</body>

</html>