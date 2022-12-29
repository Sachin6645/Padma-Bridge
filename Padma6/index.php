<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();?>
</head>
<body>
    <!-- header part start -->
    <header class="container-fluid slider px-0">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <?php
      $cat = new WP_Query([
        'post_type'=>'post',
        'category_name'=>'slider'
      ]);
      ?>
  <div class="carousel-inner">
    <?php
    $x = 0;
    while($cat->have_posts()){$cat->the_post();
        $x++;
    ?>
    <div class="carousel-item <?=($x==1)?'active':''?>">
      <?php the_post_thumbnail();?>
    </div>
  <?php }?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </header>
    <!-- header part end -->
    <!-- logo part start -->
    <section class="container-fluid logo">
        <div class="row">
            <div class="col-sm-6">
                <?php the_custom_logo();?>
            </div>
            <div class="col-sm-6 text-end">
                <?php dynamic_sidebar('bdlogo');?>
            </div>
        </div>
    </section>
    <!-- logo part end -->
    <!-- menu part start -->
    <section class="container navbar-expand bg-light menu">
        <?php
        wp_nav_menu([
            'theme_location'=>'PM',
            'menu_class'=>'navbar-nav'
        ])
        ?>

    </section>
    <!-- menu part end -->
    <!-- hero part start -->
    <section class="container hero mt-4">
      <div class="row text-center">
        <?php dynamic_sidebar('htitle');?>
      </div>
      <div class="row mt-4">
        <div class="col-sm-4">
        <div class="card" style="width: 20rem;">
        <?php dynamic_sidebar('card1');?>
        </div>
        </div>
        <div class="col-sm-4">
        <div class="card" style="width: 20rem;">
        <?php dynamic_sidebar('card2');?>
        </div>
        </div>
        <div class="col-sm-4">
        <div class="card" style="width: 20rem;">
        <?php dynamic_sidebar('card3');?>
        </div>
        </div>
      </div>
    </section>
    <!-- hero part end -->
    <!-- news part start -->
    <section class="container news mt-4">
      <div class="row">
        <div class="col-sm-5">
          <?php dynamic_sidebar('img1');?>
        </div>
        <div class="col-sm-2">
        <?php dynamic_sidebar('text1');?>
        </div>
        <div class="col-sm-5">
        <?php dynamic_sidebar('img2');?>
        </div>
      </div>
      <div class="row">
       <div class="col-sm-3">
       <div class="card" style="width: 18rem;">
         <?php dynamic_sidebar('ncard1');?>
         </div>
       </div>
       <div class="col-sm-3">
       <div class="card" style="width: 18rem;">
         <?php dynamic_sidebar('ncard2');?>
         </div>
       </div>
       <div class="col-sm-3">
       <div class="card" style="width: 18rem;">
         <?php dynamic_sidebar('ncard3');?>
         </div>
       </div>
       <div class="col-sm-3">
       <div class="card" style="width: 18rem;">
         <?php dynamic_sidebar('ncard4');?>
         </div>
       </div>
      </div>
    </section>
    <!-- news part end -->
    <!-- others part start -->
    <section class="container others mt-4">
    <div class="row">
        <div class="col-sm-5">
          <?php dynamic_sidebar('img3');?>
        </div>
        <div class="col-sm-2">
        <?php dynamic_sidebar('text2');?>
        </div>
        <div class="col-sm-5">
        <?php dynamic_sidebar('img4');?>
        </div>
      </div>
    </section>
    <!-- others part end -->
    <!-- footer part start -->
    <footer class="container footer_main mt-4">
      <div class="row footer_top">
        <div class="col-sm-6 footer_left">
          <h6>CONTACT US</h6>
          <ul>
            <li>Address: Office of the Project Director Padma Multipurpose Bridge Project 
             4th floor, Setu Bhaban, New Airport Road, Banani, Dhaka-1212</li>
             <li>Telephone: +880 2 55040451</li>
             <li>Fax: +880 2 55040477</li>
             <li>Email: padmabridgeweb@gmail.com</li>
          </ul>
        </div>
        <div class="col-sm-6 footer_right">
          <h6>IMPORTANT LINKS</h6>
          <ul>
            <li>Prime Minister's Office</li>
            <li>PMIS</li>
            <li>Bangladesh Bridge Authority</li>
            <li>Bridges Division</li>
            <li>Roads and Highways Department</li>
            <li>Cabinet Division</li>
            <li>Ministry of Public Administration</li>
            <li>National Web Portal</li>
          </ul>
        </div>
      </div>
      <div class="row footer_bottom p-2">
       <div class="col-sm-6">
        <p>POWERED BY SOLUTION ART LTD</p>
       </div>
       <div class="col-sm-6 text-end">
        <p>COPYRIGHT © 2015. BANGLADESH BRIDGE AUTHORITY</p>
       </div>
      </div>
    </footer>
    <!-- footer part end -->
    <?php wp_footer();?>
</body>
</html>