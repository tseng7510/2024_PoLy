<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/news.css">
</head>

<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages exhibitionsList">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_exhibitions.jpg" alt=""></div>
        <div class="pageTitleBox">
          <div class="titleBox wow fadeInUp" data-wow-delay="0s">
            <h1 class="title">Exhibitions</h1>
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
                <span itemprop="name">Exhibitions</span>
                <meta itemprop="position" content="3">
              </li>
            </ul>
          </div>
        </div>



        <section>
          <div class="container">

            <div class="contentBox">
              <div class="listBox">

                <?php for ($i = 0; $i < 6; $i++) { ?>
                  <div class="item wow fadeInUp" data-wow-delay="0s">
                    <a href="exhibitions_detail.php">
                      <div class="picBox">
                        <div class="pic"><img src="../images/index/n.jpg" alt=""></div>
                      </div>
                      <div class="infoBox">
                        <h2 class="title">IMTS 2024</h2>
                        <div class="description">
                          <p>Time:2024-09-09~2024-09-14</p>
                          <p>Place: McCormick Place, Chicago, IL</p>
                          <p>Booth No.: 338681</p>
                          <p>www.imts.com</p>
                        </div>
                        <div class="more">Learn more</div>
                      </div>
                    </a>
                  </div>
                <?php } ?>
              </div>

              <div class="pageBox wow fadeInUp" data-wow-delay="0.2s">
                <ul class="pagination">
                  <li class="controls"><a class="prev" href="#" title="Previous"></a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li class="active"><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li class="controls"><a class="next" href="#" title="Next"></a></li>
                </ul>
              </div>

            </div>
          </div>
        </section>

      </div>
    </main>


    <?php include('include_footer.php'); ?>

  </div>
  <?php include('include_body_bottom.php'); ?>
</body>

</html>