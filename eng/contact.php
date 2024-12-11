<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/contact.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages contactPage">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_contact.jpg" alt=""></div>
        <div class="pageTitleBox">
          <div class="titleBox wow fadeInUp" data-wow-delay="0s">
            <h1 class="title">Contact</h1>
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
                <span itemprop="name">Contact</span>
                <meta itemprop="position" content="2">
              </li>
            </ul>
          </div>
        </div>

        <section>
          <div class="inquiry">
            <div class="container">
              <div class="listBox wow fadeInUp" data-wow-delay="0.2s">
                <div class="item">
                  <div class="titleF">Request a Quote</div>
                  <a href="products_detail.php">
                    <div class="pic"><img src="../images/in/p.jpg" alt=""></div>
                    <div class="infoBox">
                      <div class="title">Swiss type cnc lath <span>Diamond CSL series CSL25</span></div>
                    </div>
                    <div class="del"></div>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="container">
            <div class="topBox">
              <div class="pic wow fadeInLeft" data-wow-delay="0s"><img src="../images/in/contact.png" alt=""></div>
              <div class="infoBox wow fadeInLeft" data-wow-delay="0.2s">
                <div class="title">Company Information</div>
                <div class="info">
                  <ul>
                    <li class="address"><span>ADD :</span>No. 149-1, Zhusen Village, Tongluo Shiang, Miao-li County 366, Taiwan</li>
                    <li class="tel"><span>TEL :</span><a href="tel:+88637981220">+886-37-981220</a>, <a href="tel:+88637980599">980599</a></li>
                    <li class="fax"><span>FAX :</span>+886-37-985306</li>
                    <li class="mail"><span>E-Mail :</span><a href="mailto:polygim@ms69.hinet.net">polygim@ms69.hinet.net</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="bottomBox">
            <div class="infoBox wow fadeInUp" data-wow-delay="0.2s">
              <div class="title">Contact Us</div>
              <div class="notice">We appreciate your visit of our website. If you have any inquiry needs about our products, technology, or services, please contact us via the channel below.</div>
            </div>
            <form class="formBox">
              <ul>
                <li class="inputItem wow fadeInUp required">
                  <label for="type">Company</label>
                  <input type="text" class="inputControl" id="company">
                </li>
                <li class="inputItem wow fadeInUp required">
                  <label for="company">Name</label>
                  <input type="text" class="inputControl" id="name">
                </li>
                <li class="inputItem wow fadeInUp required">
                  <label for="email">E-Mail</label>
                  <input type="text" class="inputControl" id="email">
                </li>
                <li class="inputItem wow fadeInUp">
                  <label for="tel">Tel</label>
                  <input type="text" class="inputControl" id="tel">
                </li>
                <li class="inputItem full wow fadeInUp">
                  <label for="type">Address</label>
                  <input type="text" class="inputControl" id="address">
                </li>
                <li class="textareaItem full wow fadeInUp">
                  <label for="message">Message</label>
                  <textarea class="textareaControl" name="message" id="message" cols="30" rows="5"></textarea>
                </li>
                <li class="inputItem wow fadeInUp required">
                  <label for="password">Code</label>
                  <input type="password" class="inputControl" id="password">
                  <span class="checkImg"><img src="../images/check_img.jpg"></span>
                  <button class="reBtn"></button>
                </li>
              </ul>
              <div class="pageBtnBox wow fadeInUp">
                <button class="send" type="button" onclick="javascript:location.href='contact_ok.php'">Send Message</button>
              </div>
            </form>
          </div>
          <div class="map wow fadeInRight" data-wow-delay="0.2s"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3630.789219039565!2d120.76977407635351!3d24.49275907817121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3469077c07cffe61%3A0xb204421fc630759e!2z5a-M5qC86Jit56eR5oqA5pyJ6ZmQ5YWs5Y-4IFBPTFkgR0lN!5e0!3m2!1szh-TW!2sus!4v1727705077163!5m2!1szh-TW!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        </section>

      </div>


    </main>


    <?php include('include_footer.php'); ?>
  </div>
  <?php include('include_body_bottom.php'); ?>
</body>

</html>