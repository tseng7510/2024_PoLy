<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/news.css">
</head>

<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages videoList">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_video.jpg" alt=""></div>
        <div class="pageTitleBox">
          <div class="titleBox wow fadeInUp" data-wow-delay="0s">
            <h1 class="title">Video</h1>
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
                <span itemprop="name">Video</span>
                <meta itemprop="position" content="3">
              </li>
            </ul>
          </div>
        </div>

        <nav class="videoNav">
          <div class="container">
            <button class="mobileUse">Menu</button>
            <ul>
              <li><button>Company</button></li>
              <li><button>Swiss Type CNC Lathe</button></li>
              <li><button>CNC Lathe</button></li>
            </ul>
          </div>
        </nav>

        <section>

          <div class="contentBox" id="Company">
            <div class="titleBox">
              <div class="outer">
                <h2 class="title">Company</h2>
              </div>
            </div>
            <div class="outer">
              <div class="listBox">
                <div class="item">
                  <div class="videoContainer"><iframe width="560" height="315" src="https://www.youtube.com/embed/EA0o78yOugI?si=NSpk2OUBLlqVEpdK" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>
                  <h2 class="title">Company Profile</h2>
                </div>
              </div>
            </div>
          </div>

          <div class="contentBox" id="SwissTypeCNCLathe">
            <div class="titleBox">
              <div class="outer">
                <h2 class="title">Swiss Type CNC Lathe</h2>
              </div>
            </div>
            <div class="outer">
              <div class="listBox">
                <? for ($i = 0; $i < 4; $i++) { ?>
                  <div class="item">
                    <div class="videoContainer"><iframe width="560" height="315" src="https://www.youtube.com/embed/EA0o78yOugI?si=NSpk2OUBLlqVEpdK" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>
                    <h2 class="title">Company Profile</h2>
                  </div>
                <? } ?>
              </div>
            </div>
          </div>

          <div class="contentBox" id="CNCLathe">
            <div class="titleBox">
              <div class="outer">
                <h2 class="title">CNC Lathe</h2>
              </div>
            </div>
            <div class="outer">
              <div class="listBox">
                <? for ($i = 0; $i < 4; $i++) { ?>
                  <div class="item">
                    <div class="videoContainer"><iframe width="560" height="315" src="https://www.youtube.com/embed/EA0o78yOugI?si=NSpk2OUBLlqVEpdK" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>
                    <h2 class="title">Company Profile</h2>
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
    const box = document.querySelectorAll('.mainBox .contentBox');
    const videoBtn = document.querySelectorAll('.videoNav ul button');

    function scrollCheck() {

      box.forEach((item, index) => {
        const value = item.getBoundingClientRect();

        if (value.top < window.innerHeight / 2 && value.bottom > window.innerHeight / 2) {
          item.classList.add('active');
          videoBtn[index].classList.add('active');
        } else if (value.bottom < window.innerHeight / 2 || value.top > window.innerHeight / 2) {
          item.classList.remove('active');
          videoBtn[index].classList.remove('active');
        }
      })
    }
    window.addEventListener('load', scrollCheck);
    window.addEventListener('scroll', scrollCheck);

    videoBtn.forEach((item, index) => {
      item.addEventListener("click", () => {
        videoBtn.forEach((v, index) => {
          v.classList.remove("active");
        })
        item.classList.add("active");
        box[index].scrollIntoView({
          behavior: "smooth",
          block: "center"
        });
      })
    })

    $('.videoNav .mobileUse').on('click', function() {
      $('.videoNav ul').slideToggle('fast');
    })
    $(window).on('resize', function() {
      $('.videoNav ul').attr('style', '');
    })
  </script>
</body>

</html>