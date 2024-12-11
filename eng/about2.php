<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/about.css">
</head>


<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages aboutPage2">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>


      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_about.jpg" alt=""></div>
        <div class="pageTitleBox">
          <div class="titleBox wow fadeInUp" data-wow-delay="0s">
            <h1 class="title">Certifications</h1>
          </div>
        </div>
      </div>

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
                <span itemprop="name">Company</span>
                <meta itemprop="position" content="2">
              </li>
              <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                <span itemprop="name">Certifications</span>
                <meta itemprop="position" content="3">
              </li>
            </ul>
          </div>
        </div>

        <section>
          <div class="block wow fadeInUp" data-wow-delay="0s">
            <div class="container">
              <div class="content">
                <div class="title">CE certificate</div>
                <div class="listBox">
                  <div class="item">
                    <div class="pic"><img src="../images/in/c1.jpg" alt=""></div>
                  </div>
                  <div class="item">
                    <div class="pic"><img src="../images/in/c2.jpg" alt=""></div>
                  </div>
                  <div class="item">
                    <div class="pic"><img src="../images/in/c3.jpg" alt=""></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="block wow fadeInUp" data-wow-delay="0s">
            <div class="container">
              <div class="content">
                <div class="title">Machinery safety information declaration</div>
                <div class="listBox">
                  <div class="item">
                    <div class="pic"><img src="../images/in/c4.jpg" alt=""></div>
                  </div>
                  <div class="item">
                    <div class="pic"><img src="../images/in/c5.jpg" alt=""></div>
                  </div>
                  <div class="item">
                    <div class="pic"><img src="../images/in/c6.jpg" alt=""></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="block wow fadeInUp" data-wow-delay="0s">
            <div class="container">
              <div class="content">
                <div class="title">Mechanical verification certificate</div>
                <div class="listBox">
                  <div class="item">
                    <div class="pic"><img src="../images/in/c7.jpg" alt=""></div>
                  </div>
                  <div class="item">
                    <div class="pic"><img src="../images/in/c8.jpg" alt=""></div>
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

  <script>
    $('.block01 .listBox').magnificPopup({
      delegate: 'a',
      type: 'image'
    });
  </script>
</body>

</html>