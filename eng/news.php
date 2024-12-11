<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/news.css">
</head>

<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages newsList">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_news.jpg" alt=""></div>
        <div class="pageTitleBox">
          <div class="titleBox wow fadeInUp" data-wow-delay="0s">
            <h1 class="title">News</h1>
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
                <span itemprop="name">News</span>
                <meta itemprop="position" content="3">
              </li>
            </ul>
          </div>
        </div>

        <section>
          <div class="container">

            <div class="contentBox">
              <div class="listBox">

                <? for ($i = 0; $i < 6; $i++) { ?>
                  <div class="item wow fadeInUp" data-wow-delay="0s">
                    <a href="news_detail.php">
                      <div class="picBox">
                        <div class="pic"><img src="../images/index/n.jpg" alt=""></div>
                        <time class="date">2024.08.13</time>
                      </div>
                      <div class="infoBox">
                        <h2 class="title">Po Ly Gim Machinery Company completed construction of new factory buildings and offices</h2>
                        <div class="description">At the beginning of 2008 Po Ly Gim Machinery Company completed construction of new factory buildings</div>
                        <div class="more">Learn more</div>
                      </div>
                    </a>
                  </div>
                <? } ?>
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