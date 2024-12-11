<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/about.css">
</head>


<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages aboutPage">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>


      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_about.jpg" alt=""></div>
        <div class="pageTitleBox">
          <div class="titleBox wow fadeInUp" data-wow-delay="0s">
            <h1 class="title">Company</h1>
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
            </ul>
          </div>
        </div>

        <section>
          <div class="block block1">
            <div class="content">
              <div class="pic wow fadeInLeft acBoxDown" data-wow-delay="0s"><img src="../images/in/a1.jpg" alt=""></div>
              <div class="infoBox wow fadeInUp" data-wow-delay="0.2s">
                <h2 class="title">CNC Lathe Manufacturer <span>Po Ly Gim</span> Profile</h2>
                <div class="subTitle">Rigidity．Accuracy．Speed．Stability</div>
                <div class="editor">Founded in 1978, Po Ly Gim Machinery Co., Ltd. has evolved into a leading CNC Lathe Manufacturer based in Taiwan. Originally focused on conventional lathes, we have continually innovated over the last four decades to stay ahead of industry trends.<br /><br />
                  Surviving the 1997 East Asian financial crisis, our President, Kua Chin-whei, spearheaded the R&D team towards the development of high-tech products. Abandoning traditional mechanical paradigms, we introduced groundbreaking Swiss-type CNC lathes. This technological leap cemented our reputation as a top CNC Lathe Manufacturer globally.<br /><br />
                  We take great pride in delivering high-quality products to our clients. Our steadfast growth is fueled by our dedicated team that continually designs new products tailored to customer needs. Beyond our top-notch products, we aim to impress our manufacturing industry clients with unmatched performance and a stellar company reputation.</div>
              </div>
              <div class="pic wow fadeInRight acBoxUp" data-wow-delay="0s"><img src="../images/in/a2.jpg" alt=""></div>
            </div>
          </div>

          <div class="block block2">
            <div class="content">
              <div class="title wow fadeInUp" data-wow-delay="0s">Who We Are</div>
              <div class="subTitle wow fadeInUp" data-wow-delay="0s">Top CNC Lathe Manufacturer</div>
              <div class="picBox">
                <div class="videoContainer">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/EA0o78yOugI?&autoplay=1&mute=1&loop=1&playlist=EA0o78yOugI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>

          <div class="block block3">
            <div class="container">
              <div class="content wow fadeInUp" data-wow-delay="0s">
                <div class="title">As a top CNC lathe manufacturer</div>
                <div class="subTitle">Reliable Quality, Trustworthy-Service, Innovation & Development</div>
                <div class="editor">Our operation concept “ Reliable Quality”, “Trustworthy- service ” and “Innovation & Development” provide all of our customers the best quality products and complete business service in every step of our production procedures.</div>
              </div>
            </div>
          </div>

          <div class="block block4">
            <div class="container wow fadeInUp" data-wow-delay="0s">
              <div class="title">Who We Are</div>
              <div class="subTitle">Top CNC Lathe Manufacturer</div>
            </div>
            <div class="listBox">
              <div class="item wow fadeInRight" data-wow-delay="0.2s">
                <div class="pic"><img src="../images/in/a5.jpg" alt=""></div>
                <div class="title">Smoothing</div>
                <div class="info">Smooth out score marks.</div>
              </div>
              <div class="item wow fadeInRight" data-wow-delay="0.4s">
                <div class="pic"><img src="../images/in/a6.jpg" alt=""></div>
                <div class="title">Inspection</div>
                <div class="info">Inspect concentricity between spindle and tailstock.</div>
              </div>
              <div class="item wow fadeInRight" data-wow-delay="0.6s">
                <div class="pic"><img src="../images/in/a7.jpg" alt=""></div>
                <div class="title">Accuracy Test</div>
                <div class="info">Test finished workpiece for accuracy.</div>
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