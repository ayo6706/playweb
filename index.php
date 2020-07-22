<?php
include 'include/header.php';
include 'include/navbar.php';
?>
      

           
   
            <!--desktop-->
        
            
    <div id="tf-home" class="pc header-overlay">
  		<div class="header-container">
        <div class="overlay"> <!-- Overlay Color -->
          <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
                  <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

  				
                    <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="img/skill.jpg" alt="...">
                <div class="carousel-caption">
                  <div class="content-heading text-center  wow fadeInLeft"> <!-- Input Your Home Content Here -->
                    <h1>Websites / Branding / Interactiv</h1>
                    <p class="lead">We create beautiful, innovative and  effective handcrafted brands & website.</p>
                    <a href="#tf-works" class="scroll goto-btn text-uppercase wow fadeInLeft">
                          View Our Works
                    </a> <!-- Link to your portfolio section -->
                  </div><!-- End Input Your Home Content Here -->
                </div>
              </div>

              <div class="item">
                <img src="img/hire.jpg" alt="...">
                <div class="carousel-caption">
                  <div class="content-heading text-center  wow fadeInLeft"> <!-- Input Your Home Content Here -->
                    <h1>Quality / Affordability / Timely</h1>
                    <p class="lead">We create beautiful, innovative and  effective handcrafted brands & website.</p>
                    <a href="#tf-contact" class="scroll goto-btn text-uppercase">Hire Us Now</a> <!-- Link to your portfolio section -->
                  </div><!-- End Input Your Home Content Here -->
                </div>
              </div>

              <div class="item">
                <img src="img/home.jpg" alt="...">
                <div class="carousel-caption">
                  <div class="content-heading text-center  wow fadeInLeft"> <!-- Input Your Home Content Here -->
                    <h1>We Delivery Our Promise.</h1>
                    <p class="lead">We create beautiful, innovative and  effective handcrafted brands & website.</p>
                    <a href="#tf-about" class="scroll goto-btn text-uppercase">Learn More</a> <!-- Link to your portfolio section -->
                  </div><!-- End Input Your Home Content Here -->
                </div>
              </div>

            </div>
                     <!-- Left and right controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
  			</div>
      </div><!-- End Overlay Color -->
    </div>
	
	<!--desktop-->
	
	
	<!--android-->
	  <div class=" android slider_small header-overlay  wow fadeInLeft">
            
            
      <div class="container header-container">
  
        <div class="row">
                        
                       
                        
          <div class="header-text">
                            
            <!-- Title & Description -->
            <h4> Built with great love!</h4>

            <h2> A clean and modern looking reponsive</h2>
            <p> Built with great love A clean and modern looking reponsive Built with great love A clean and modern looking reponsive!!</p>
        
          </div>
                        <!-- Header buttons -->
          <a class="btn btn-blog header-btns wow fadeInLeft" href="#">Download</a>
           
        </div>
      </div>
    </div>     
  </header>
  
  
            <!--latest-->
  <div class="feature  wow fadeInLeft">
    <div class="col-md-12 text-center">
      <div id="tf-blog">
        <div class="container"> <!-- container -->
          <div class="section-header">
              <h2>Latest from the <span class="highlight"><strong>Blog</strong></span></h2>
              <h5><em>aim to bring more people into the world of computer</em></h5>
          </div>
        </div>

        <div id="blog-post wow fadeInLeft data-wow-duration=".5s" data-wow-delay="1s" class="gray-bg"> <!-- fullwidth gray background -->
          <div class="container"><!-- container -->

            <div class="row"> <!-- row -->
                                      
              <div class="col-md-4 col-sm-6"> <!-- Left content col 6 -->
                <div class="latest-head">
                  <h3>programming tutorials</h3>
                </div>
                <?php
                $sql="SELECT * FROM program
        ORDER BY id   DESC LIMIT 3";
    if ($result = mysqli_query($conn, $sql)){
      while ($row=mysqli_fetch_assoc($result)) {
        echo  '
                <div class="course panel-default sm:tw-p-2 tw-p-0 sm:tw-mb-4 tw-mb-2 xl:tw-h-full" width="100%">
                  <div class="panel-body tw-flex lato tw-h-full">
  
                    <div class="tw-text-center tw-truncate xl:tw-w-1/6 tw-w-1/4 xl:tw-min-w-1/6 tw-min-w-1/4">
                      <img src="img/pdf.png" class="prog-logo">

                    </div>
  
                    <div class=" tw-flex tw-leading-tight tw-w-5/6 sm:tw-ml-6 tw-ml-4 dav">
                      <div class="tw-flex-grow tw-pr-4">
                        <a href="blog-post.php?epr=program&id='.$row["id"].'" class="tw-text-grey-darker sm:tw-text-xl tw-text-xl hover:tw-text-blue lato">'.$row['name'].' </a>
          
                        <div class="sm:tw-leading-loose tw-leading-normal">          
                          <p class="tw-text-grey sm:tw-text-base tw-text-xs lato">
                            Ongoing Offer
                          </p>
          
                          <span class="tw-text-green sm:tw-border sm:tw-border-green sm:tw-text-green sm:tw-text-base tw-text-xs lato sm:tw-rounded sm:tw-px-2 sm:tw-py-1 ayo">
                            Verified
                          </span>                           
                          <span class="tw-text-orange  sm:tw-border sm:tw-border-orange  sm:tw-text-orange  sm:tw-text-base tw-text-xs lato sm:tw-rounded sm:tw-px-2 sm:tw-py-1 mide">
                            Featured
                          </span>           
                          <p class="tw-hidden tw-relative lg:tw-block tw-text-grey tw-cursor-pointer">
                            Details: <i class="details-caret-180710 fa fa-caret-right"></i>
                          </p>
                        </div>
                      </div>
  
        
                    </div>
  
                  </div>
                </div>';}}?>                        
                <div class="text-center">
                  <a href="program.php" class="btn btn-primary tf-btn color">Load More</a>
                </div>   
              </div><!-- end Left content col 6 -->
                          
              <div class="col-md-4 col-sm-6"> <!-- right content col 6 -->
                <div class="latest-head">
                  <h3>hacking tutorials</h3>
                </div>
                                     <?php  
      $sql="SELECT * FROM hack
        ORDER BY id   DESC LIMIT 3";
    if ($result = mysqli_query($conn, $sql)){
      while ($row=mysqli_fetch_assoc($result)) {
        echo '
                <div class="course panel-default sm:tw-p-2 tw-p-0 sm:tw-mb-4 tw-mb-2 xl:tw-h-full" width="100%">
                  <div class="panel-body tw-flex lato tw-h-full">
  
                    <div class="tw-text-center tw-truncate xl:tw-w-1/6 tw-w-1/4 xl:tw-min-w-1/6 tw-min-w-1/4">
                      <div class="tw-flex tw-flex-col tw-justify-around tw-text-orange tw-border-2 tw-border-orange-light tw-rounded tw-h-full tw-py-0 tw-px-1">
                        <div class="tw-border-b-2 tw-border-orange-lighter sm:tw-py-3 tw-py-1"> 
                          <div class="roboto-slab tw-font-bold tw-leading-tight tw-my-0">
                            <span class="tw-inline-block cdroboto-slab tw-text-orange sm:tw-text-5xl tw-text-4xl">
                              Hot
                            </span>
            
                            <br>

                            <span class="sm:tw-block tw-hidden">Deal</span>
                          </div>
                        </div>
  
                      </div>
                    </div>
                    <div class=" tw-flex tw-leading-tight tw-w-5/6 sm:tw-ml-6 tw-ml-4 dav">
                      <div class="tw-flex-grow tw-pr-4">
                        <a href="blog-post.php?epr=hack&id='.$row["id"].'" class="tw-text-grey-darker sm:tw-text-xl tw-text-xl hover:tw-text-blue lato">'.$row['name'].' </a>
          
                        <div class="sm:tw-leading-loose tw-leading-normal">          
                          <p class="tw-text-grey sm:tw-text-base tw-text-xs lato">
                            Ongoing Offer
                          </p>
          
                          <span class="tw-text-green sm:tw-border sm:tw-border-green sm:tw-text-green sm:tw-text-base tw-text-xs lato sm:tw-rounded sm:tw-px-2 sm:tw-py-1 ayo">
                            Verified
                          </span>                           
                          <span class="tw-text-orange  sm:tw-border sm:tw-border-orange  sm:tw-text-orange  sm:tw-text-base tw-text-xs lato sm:tw-rounded sm:tw-px-2 sm:tw-py-1 mide">
                            Featured
                          </span>           
                          <p class="tw-hidden tw-relative lg:tw-block tw-text-grey tw-cursor-pointer">
                            Details: <i class="details-caret-180710 fa fa-caret-right"></i>
                          </p>
                        </div>
                      </div>
  
        
                    </div>
  
                  </div>
                </div>';}}?>   
                <div class="text-center">
                  <a href="hack.php" class="btn btn-primary tf-btn color">Load More</a>
                </div>   
              </div><!-- end right content col 6 -->
              <div class="col-md-4 col-sm-6"> <!-- right content col 6 -->
                <div class="latest-head">
                  <h3>udemy courses</h3>
                </div>
                                     <?php  
      $sql="SELECT * FROM udemy
        ORDER BY id   DESC LIMIT 3";
    if ($result = mysqli_query($conn, $sql)){
      while ($row=mysqli_fetch_assoc($result)) {
        echo '
                <div class="course panel-default sm:tw-p-2 tw-p-0 sm:tw-mb-4 tw-mb-2 xl:tw-h-full" width="100%">
                  <div class="panel-body tw-flex lato tw-h-full">
  
                    <div class="tw-text-center tw-truncate xl:tw-w-1/6 tw-w-1/4 xl:tw-min-w-1/6 tw-min-w-1/4">
                      <img src="img/pdf.png" class="prog-logo">

                    </div>
  
                    <div class=" tw-flex tw-leading-tight tw-w-5/6 sm:tw-ml-6 tw-ml-4 dav">
                      <div class="tw-flex-grow tw-pr-4">
                        <a href="blog-post.php?epr=udemy&id='.$row["id"].'" class="tw-text-grey-darker sm:tw-text-xl tw-text-xl hover:tw-text-blue lato">'.$row['name'].' </a>
          
                        <div class="sm:tw-leading-loose tw-leading-normal">          
                          <p class="tw-text-grey sm:tw-text-base tw-text-xs lato">
                            Ongoing Offer
                          </p>
          
                          <span class="tw-text-green sm:tw-border sm:tw-border-green sm:tw-text-green sm:tw-text-base tw-text-xs lato sm:tw-rounded sm:tw-px-2 sm:tw-py-1 ayo">
                            Verified
                          </span>                           
                          <span class="tw-text-orange  sm:tw-border sm:tw-border-orange  sm:tw-text-orange  sm:tw-text-base tw-text-xs lato sm:tw-rounded sm:tw-px-2 sm:tw-py-1 mide">Featured
                          </span>           
                          <p class="tw-hidden tw-relative lg:tw-block tw-text-grey tw-cursor-pointer">
                              Details: 
                              <i class="details-caret-180710 fa fa-caret-right"></i>
                          </p>
                        </div>
                      </div>
  
        
                    </div>
  
                  </div>
                </div>';}}?>   
                <div class="text-center">
                  <a href="udemy.php" class="btn btn-primary tf-btn color">Load More</a>
                </div>   
              </div><!-- end right content col 6 -->

            </div><!-- end row -->

                                          
          </div><!-- end container -->
        </div> <!-- end fullwidth gray background -->
      </div>
                      
    </div>
              
  </div>              
      
  
            <!--end latest-->




                          <!--blog-->

  <div class="rw text-center wow " data-wow-duration="1s" data-wow-delay=".2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: bounceIn;">
    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 text-center">
      <h1>Blogs</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit onec molestie non sem vel condimentum.Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
    </div>
  </div>
                   

  <div class="container  wow fadeInLeft">
    <div class="ow">
      <?php  
      $sql="SELECT * FROM blog
        ORDER BY id   DESC LIMIT 3";
    if ($result = mysqli_query($conn, $sql)){
      while ($row=mysqli_fetch_assoc($result)) {
        echo '
      <div class="col-md-4 col-sm-4">
        <div class="td-block-span4">
          <div class="td_module_1 td_module_wrap td-animation-stack">
            <div class="td-module-image">
              <div class="td-module-thumb">
                <a href="blog-post.php?epr=post&id='.$row['id'].'" rel="bookmark" title="Linus Torvalds Latest Meltdown: “Is Intel Selling Sh*t And Never Willing To Fix Anything?”">
                  <img width="300" height="160" class="entry-thumb" src="upload/'.$row["img"].'"  alt="Linus Torvalds Angry INtel Meltdown bug" title="Linus Torvalds Latest Meltdown: “Is Intel Selling Sh*t And Never Willing To Fix Anything?”">
                </a>
              </div> 
              <a href="blog-post.php?epr=post&id='.$row['id'].'" class="td-post-category">
                News
              </a> 
            </div>
            <h3 class="entry-title td-module-title">
              <a href="blog-post.php?epr=post&id='.$row['id'].'">'.$row["name"].'</a>
            </h3>
            <div class="meta-info">
              <span class="td-post-author-name">
                <a href="#">
                  ayomide onibokun
                </a> 
                <span>-</span> 
              </span> 
              <span class="td-post-date">
                <time class="entry-date updated td-module-date" datetime="2018-01-05T13:46:20+00:00">
                  January 5, 2018
                </time>
              </span>  
            </div>
          </div>
        </div>
      </div>';}}?>
    
    </div>
        
        
  </div>
  <div class="btn btn-primary btn-blog">
    <a href="blog.php"> more</a>
	</div>

                <!--end blog-->
        

<!--
  <div class="rw text-center wow " data-wow-duration="1s" data-wow-delay=".2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: bounceIn;">
    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 text-center">
      <h1>Blogs</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit onec molestie non sem vel condimentum.Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
    </div>
  </div>
                   

  <div class="container  wow fadeInLeft">
    <div class="ow">
      <?php  /*
      $sql="SELECT * FROM udemy
        ORDER BY id   DESC LIMIT 3";
    if ($result = mysqli_query($conn, $sql)){
      while ($row=mysqli_fetch_assoc($result)) {
        echo '
      <div class="col-md-4 col-sm-4">
        <div class="td-block-span4">
          <div class="td_module_1 td_module_wrap td-animation-stack">
            <div class="td-module-image">
              <div class="td-module-thumb">
                <a href="blog-post.php?epr=post&id='.$row['id'].'" rel="bookmark" title="Linus Torvalds Latest Meltdown: “Is Intel Selling Sh*t And Never Willing To Fix Anything?”">
                  <img width="300" height="160" class="entry-thumb" src="img/me.jpg"  alt="Linus Torvalds Angry INtel Meltdown bug" title="Linus Torvalds Latest Meltdown: “Is Intel Selling Sh*t And Never Willing To Fix Anything?”">
                </a>
              </div> 
              <a href="blog-post.php?epr=post&id='.$row['id'].'" class="td-post-category">
                100% Offer
              </a> 
            </div>
            <h3 class="entry-title td-module-title">
              <a href="blog-post.php?epr=post&id='.$row['id'].'">'.$row["name"].'</a>
            </h3>
            <div class="meta-info">
              <span class="td-post-author-name">
                <a href="#">
                  ayomide onibokun
                </a> 
                <span>-</span> 
              </span> 
              <span class="td-post-date">
                <time class="entry-date updated td-module-date" datetime="2018-01-05T13:46:20+00:00">
                  January 5, 2018
                </time>
              </span>  
            </div>
          </div>
        </div>
      </div>';}}?>
    
    </div>
        
        
  </div>
  <div class="btn btn-primary btn-blog">
    <a href="blog.php"> more</a>
  </div>


  <div class="ow text-center wow " data-wow-duration="1s" data-wow-delay=".2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: bounceIn;">
    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 text-center">
      <h1>Blogs</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit onec molestie non sem vel condimentum.Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
    </div>
  </div>
                   

  <div class="container  wow fadeInLeft">
    <div class="ow">
      <?php  
      $sql="SELECT * FROM program
        ORDER BY id   DESC LIMIT 3";
    if ($result = mysqli_query($conn, $sql)){
      while ($row=mysqli_fetch_assoc($result)) {
        echo '
      <div class="col-md-4 col-sm-4">
        <div class="td-block-span4">
          <div class="td_module_1 td_module_wrap td-animation-stack">
            <div class="td-module-image">
              <div class="td-module-thumb">
                <a href="blog-post.php?epr=post&id='.$row['id'].'" rel="bookmark" title="Linus Torvalds Latest Meltdown: “Is Intel Selling Sh*t And Never Willing To Fix Anything?”">
                  <img width="300" height="160" class="entry-thumb" src="img/me.jpg"  alt="Linus Torvalds Angry INtel Meltdown bug" title="Linus Torvalds Latest Meltdown: “Is Intel Selling Sh*t And Never Willing To Fix Anything?”">
                </a>
              </div> 
              <a href="blog-post.php?epr=post&id='.$row['id'].'" class="td-post-category">
                News
              </a> 
            </div>
            <h3 class="entry-title td-module-title">
              <a href="blog-post.php?epr=post&id='.$row['id'].'">'.$row["name"].'</a>
            </h3>
            <div class="meta-info">
              <span class="td-post-author-name">
                <a href="#">
                  ayomide onibokun
                </a> 
                <span>-</span> 
              </span> 
              <span class="td-post-date">
                <time class="entry-date updated td-module-date" datetime="2018-01-05T13:46:20+00:00">
                  January 5, 2018
                </time>
              </span>  
            </div>
          </div>
        </div>
      </div>';}}?>
    
    </div>
        
        
  </div>
  <div class="btn btn-primary btn-blog">
    <a href="blog.php"> more</a>
  </div>




  <div class="ow text-center wow " data-wow-duration="1s" data-wow-delay=".2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: bounceIn;">
    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 text-center">
      <h1>Blogs</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit onec molestie non sem vel condimentum.Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
    </div>
  </div>
                   

  <div class="container  wow fadeInLeft">
    <div class="ow">
      <?php  
      $sql="SELECT * FROM hack
        ORDER BY id   DESC LIMIT 3";
    if ($result = mysqli_query($conn, $sql)){
      while ($row=mysqli_fetch_assoc($result)) {
        echo '
      <div class="col-md-4 col-sm-4">
        <div class="td-block-span4">
          <div class="td_module_1 td_module_wrap td-animation-stack">
            <div class="td-module-image">
              <div class="td-module-thumb">
                <a href="blog-post.php?epr=post&id='.$row['id'].'" rel="bookmark" title="Linus Torvalds Latest Meltdown: “Is Intel Selling Sh*t And Never Willing To Fix Anything?”">
                  <img width="300" height="160" class="entry-thumb" src="img/me.jpg"  alt="Linus Torvalds Angry INtel Meltdown bug" title="Linus Torvalds Latest Meltdown: “Is Intel Selling Sh*t And Never Willing To Fix Anything?”">
                </a>
              </div> 
              <a href="blog-post.php?epr=post&id='.$row['id'].'" class="td-post-category">
                News
              </a> 
            </div>
            <h3 class="entry-title td-module-title">
              <a href="blog-post.php?epr=post&id='.$row['id'].'">'.$row["name"].'</a>
            </h3>
            <div class="meta-info">
              <span class="td-post-author-name">
                <a href="#">
                  ayomide onibokun
                </a> 
                <span>-</span> 
              </span> 
              <span class="td-post-date">
                <time class="entry-date updated td-module-date" datetime="2018-01-05T13:46:20+00:00">
                  January 5, 2018
                </time>
              </span>  
            </div>
          </div>
        </div>
      </div>';}}*/?>
    
    </div>
        
        
  </div>
  <div class="btn btn-primary btn-blog">
    <a href="blog.php"> more</a>
  </div>
                  -->  <!--skills-->
  <div class="pc">        
    <div class=" text-center wow ro " data-wow-duration="1s" data-wow-delay=".2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: bounceIn;">
      <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 text-center">
        <h1>SKILLS</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit onec molestie non sem vel condimentum.Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
      </div>
    </div>

    <section id="skill-sec">
      <div class="overlay">
        <div class="container">
          <div class="row pad-top-bottom move-me">
            <div class="col-lg-2 col-md-2 col-sm-2 text-center wow bounceIn animated animated" data-wow-duration="1s" data-wow-delay=".2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: bounceIn;">
              <span class="chart" data-percent="85">
                <span class="percent">85</span>
                <canvas height="150" width="150"></canvas>
              </span>
                <h4>Web Desiqn</h4>
                <p>front-end & back-end</p>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 text-center wow bounceIn animated animated" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: bounceIn;">
              <span class="chart" data-percent="55">
                <span class="percent">55</span>
                <canvas height="150" width="150"></canvas>
              </span>
              <h4>Graphics Desiqn</h4>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 text-center  wow bounceIn animated animated" data-wow-duration="1s" data-wow-delay=".6s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.6s; animation-name: bounceIn;">
              <span class="chart" data-percent="70">
                <span class="percent">70</span>
                <canvas height="150" width="150"></canvas>
              </span>
              <h4>PHP </h4>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-2 text-center wow bounceIn animated animated" data-wow-duration="1s" data-wow-delay=".8s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.8s; animation-name: bounceIn;">
              <span class="chart" data-percent="65">
                <span class="percent">65</span>
                <canvas height="150" width="150"></canvas>
              </span>
              <h4>JAVA</h4>
            </div>
                                           

            <div class="col-lg-2 col-md-2 col-sm-2 text-center wow bounceIn animated animated" data-wow-duration="1s" data-wow-delay=".8s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.8s; animation-name: bounceIn;">
              <span class="chart" data-percent="40">
                <span class="percent">50</span>
                <canvas height="150" width="150"></canvas>
              </span>
              <h4>PYTHON</h4>
            </div>


            <div class="col-lg-2 col-md-2 col-sm-2 text-center wow bounceIn animated animated" data-wow-duration="1s" data-wow-delay=".8s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.8s; animation-name: bounceIn;">
              <span class="chart" data-percent="20">
                <span class="percent">20</span>
                <canvas height="150" width="150"></canvas>
              </span>
              <h4>C</h4>
            </div>

          </div>
        </div>
      </div>
    </section>

  </div>

                              <!--end skills-->
                              <!--pc-->

							  

  <section class="contact-us" id="CONTACT">
        
    <div class="container wow bounceIn" style="visibility: visible; animation-name: bounceIn;">
            
      <div class="row">

        <div class="col-md-10 col-md-offset-1">
                        
          <div class=" ow text-center wow " data-wow-duration="1s" data-wow-delay=".2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: bounceIn;">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 text-center contact-header">
              <h1>CONTACT US</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit onec molestie non sem vel condimentum.Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            </div>
          </div>

             
        </div>


      </div>
            
            
    </div>
            
    <div class="contact-us-form wow bounceIn" style="visibility: visible; animation-name: bounceIn;">
            
            
      <div class="container">
                
        <form action="php/form.php" method="post" class="form">
                    
          <div class="row">
                        
            <div class="col-md-4">
            
              <input name="name" type="text" class="form-control" placeholder="Name">
              <input name="email" type="email" class="form-control"  placeholder="Email">
              <input name="contact" type="text" class="form-control"  placeholder="Subject">
            
            </div>
            
            <div class="col-md-8">
                            
              <textarea name="form" class="form-control"  rows="25" cols="10" placeholder="Message Text...."></textarea>
                                
              <button type="submit" class="btn btn-default submit-btn form_submit">SEND</button>
                            
            </div>
                        
          </div>
                    
                    
        </form>
                
                
      </div>
            
            
    </div>
            
            
            
            
            
        
  </section>


  <div class="container pc">
    <div class="row">
      <h1 class="title">
            This is our awesome team
          <br>
          <small>We Present our team in an interesting way</small>
      </h1>
      <div class="col-sm-10 col-sm-offset-1">
        <div class="col-md-4 col-sm-6">
          <div class="card-container">
            <div class="card">
              <div class="front">
                <div class="cover">
                            
                </div>
                <div class="user">
                  <img class="img-circle" src="img/me.jpg"/>
                </div>
                <div class="content">
                  <div class="main">
                    <h3 class="name">Ayomide Onibokun</h3>
                    <p class="profession">CEO</p>
                    <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                  </div>
                  <div class="footer">
                    <i class="fa fa-mail-forward"></i> Auto Rotation
                  </div>
                </div>
              </div> <!-- end front panel -->
              <div class="back">
                <div class="header">
                  <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                </div>
                <div class="content">
                  <div class="main">
                    <h4 class="text-center">Job Description</h4>
                    <p class="text-center">
                      Web design, HTML5, CSS3, js, php, python, java and c.
                    </p>

                    <div class="stats-container">
                      <div class="stats">
                        <h4>235</h4>
                          <p>
                              Followers
                          </p>
                      </div>
                      <div class="stats">
                          <h4>114</h4>
                          <p>
                              Following
                          </p>
                      </div>
                      <div class="stats">
                        <h4>35</h4>
                        <p>
                            Projects
                        </p>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="footer">
                  <div class="social-links text-center">
                    <a href="http://www.facebook.com/ayomideonibokun" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                    <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                    <a href="http://twitter.com/ayomideonibokun" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
				            <a href="http://linkedin.com/in/ayomideonibokun" class="linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
				            <a href="http://instagram.com/ayomide_onibokun" class="instagram"><i class="fa fa-instagram fa-fw"></i></a>
				            <a href="http://youtube.com/ayomideonibokun" class="youtube"><i class="fa fa-youtube fa-fw"></i></a>
				
                  </div>
                </div>
              </div> <!-- end back panel -->
            </div> <!-- end card -->
          </div> <!-- end card-container -->
        
        </div>
		    <div class="col-md-4 col-sm-6">
          <div class="card-container">
            <div class="card">
              <div class="front">
                <div class="cover">
                           
                </div>
                <div class="user">
                  <img class="img-circle" src="img/me.jpg"/>
                </div>
                <div class="content">
                  <div class="main">
                    <h3 class="name">david onibokun</h3>
                    <p class="profession">CEO</p>
                    <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                  </div>
                  <div class="footer">
                    <i class="fa fa-mail-forward"></i> Auto Rotation
                  </div>
                </div>
              </div> <!-- end front panel -->
            <div class="back">
              <div class="header">
                <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
              </div>
              <div class="content">
                <div class="main">
                  <h4 class="text-center">Job Description</h4>
                  <p class="text-center">Web design, Adobe Photoshop, HTML5, CSS3, Corel and many others...</p>

                  <div class="stats-container">
                    <div class="stats">
                      <h4>235</h4>
                      <p>
                          Followers
                      </p>
                    </div>
                    <div class="stats">
                      <h4>114</h4>
                      <p>
                          Following
                      </p>
                    </div>
                    <div class="stats">
                      <h4>35</h4>
                      <p>
                          Projects
                      </p>
                    </div>
                  </div>

                </div>
              </div>
            <div class="footer">
              <div class="social-links text-center">
                <a href="http://www.facebook.com/ayomideonibokun" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                <a href="http://twitter.com/ayomideonibokun" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
								<a href="http://linkedin.com/in/ayomideonibokun" class="linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
								<a href="http://instagram.com/ayomide_onibokun" class="instagram"><i class="fa fa-instagram fa-fw"></i></a>
								<a href="http://youtube.com/ayomideonibokun" class="youtube"><i class="fa fa-youtube fa-fw"></i></a>
              </div>
            </div>
            </div> <!-- end back panel -->
            </div> <!-- end card -->
          </div> <!-- end card-container -->
        
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="card-container">
            <div class="card">
              <div class="front">
                <div class="cover">
                           
                </div>
                <div class="user">
                  <img class="img-circle" src="img/me.jpg"/>
                </div>
                <div class="content">
                  <div class="main">
                    <h3 class="name">Ayomide onibokun</h3>
                    <p class="profession">CEO</p>
                    <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                  </div>
                  <div class="footer">
                    <i class="fa fa-mail-forward"></i> Auto Rotation
                  </div>
                </div>
              </div> <!-- end front panel -->
              <div class="back">
                <div class="header">
                  <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                </div>
                <div class="content">
                  <div class="main">
                    <h4 class="text-center">Job Description</h4>
                    <p class="text-center">Web design, Adobe Photoshop, HTML5, CSS3, Corel and many others...</p>

                    <div class="stats-container">
                      <div class="stats">
                        <h4>235</h4>
                        <p>
                           Followers
                        </p>
                      </div>
                      <div class="stats">
                        <h4>114</h4>
                        <p>
                          Following
                        </p>
                      </div>
                      <div class="stats">
                        <h4>35</h4>
                        <p>
                          Projects
                        </p>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="footer">
                  <div class="social-links text-center">
                    <a href="http://www.facebook.com/ayomideonibokun" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                    <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                    <a href="http://twitter.com/ayomideonibokun" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
      							<a href="http://linkedin.com/ayomideonibokun" class="linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
      							<a href="http://instagram.com/ayomideonibokun" class="instagram"><i class="fa fa-instagram fa-fw"></i></a>
      							<a href="http://youtube.com/ayomideonibokun" class="youtube"><i class="fa fa-youtube fa-fw"></i></a>
                  </div>
              </div>
              </div> <!-- end back panel -->
              </div> <!-- end card -->
            </div> <!-- end card-container -->
        
          </div>
        
        </div> <!-- end card -->
      </div> <!-- end card-container -->
    </div> <!-- end col sm 3 -->
 


		
		
		
		<!--android-->
        
            <div class="android">

                
                <div class="container">
                
                    <div class="row">
                        <h1 class="title">
                            This is our awesome team
                            <br>
                            <small>We Present our team in an interesting way</small>
                        </h1>
                        <div class="col-md-12 wow bounceInDown">
                        
                        
                            <div id="carousel-testimonial" class="carousel slide" data-ride="carousel">
                            
                            
                                <!-- indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-testimonial" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-testimonial" data-slide-to="1"></li>
                                    <li data-target="#carousel-testimonial" data-slide-to="2"></li>
                                </ol>
                                
                                
                                <!-- wrapper for slides -->
                                <div class="carousel-inner">
                                
                                
                                    <!-- item 01 -->
                                    <div class="item active text-center">
                                    
                                    
                                       <div class="card-container">
                <div class="card">
                    <div class="front">
                        <div class="cover">
                            
                        </div>
                        <div class="user">
                            <img class="img-circle" src="img/me.jpg"/>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h3 class="name">Ayomide Onibokun</h3>
                                <p class="profession">CEO</p>
                                <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                            </div>
                            <div class="footer">
                                <i class="fa fa-mail-forward"></i> Auto Rotation
                            </div>
                        </div>
                    </div> <!-- end front panel -->
                    <div class="back">
                        <div class="header">
                            <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h4 class="text-center">Job Description</h4>
                                <p class="text-center">Web design, HTML5, CSS3, js, php, python, java and c.</p>

                                <div class="stats-container">
                                    <div class="stats">
                                        <h4>235</h4>
                                        <p>
                                            Followers
                                        </p>
                                    </div>
                                    <div class="stats">
                                        <h4>114</h4>
                                        <p>
                                            Following
                                        </p>
                                    </div>
                                    <div class="stats">
                                        <h4>35</h4>
                                        <p>
                                            Projects
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="footer">
                            <div class="social-links text-center">
                                <a href="http://www.facebook.com/ayomideonibokun" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                                <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                                <a href="http://twitter.com/ayomideonibokun" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
								<a href="http://linkedin.com/in/ayomideonibokun" class="linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
								<a href="http://instagram.com/ayomide_onibokun" class="instagram"><i class="fa fa-instagram fa-fw"></i></a>
								<a href="http://youtube.com/ayomideonibokun" class="youtube"><i class="fa fa-youtube fa-fw"></i></a>
								
                            </div>
                        </div>
                    </div> <!-- end back panel -->
                </div> <!-- end card -->
                      </div>                  
                                    
                                    </div>
                                    
                                    <!-- item 02 -->
                                    <div class="item text-center">
                                    
                                    
								<div class="card-container">
                <div class="card">
                    <div class="front">
                        <div class="cover">
                            
                        </div>
                        <div class="user">
                            <img class="img-circle" src="img/me.jpg"/>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h3 class="name">Ayomide Onibokun</h3>
                                <p class="profession">CEO</p>
                                <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                            </div>
                            <div class="footer">
                                <i class="fa fa-mail-forward"></i> Auto Rotation
                            </div>
                        </div>
                    </div> <!-- end front panel -->
                    <div class="back">
                        <div class="header">
                            <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h4 class="text-center">Job Description</h4>
                                <p class="text-center">Web design, HTML5, CSS3, js, php, python, java and c.</p>

                                <div class="stats-container">
                                    <div class="stats">
                                        <h4>235</h4>
                                        <p>
                                            Followers
                                        </p>
                                    </div>
                                    <div class="stats">
                                        <h4>114</h4>
                                        <p>
                                            Following
                                        </p>
                                    </div>
                                    <div class="stats">
                                        <h4>35</h4>
                                        <p>
                                            Projects
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="footer">
                            <div class="social-links text-center">
                                <a href="http://www.facebook.com/ayomideonibokun" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                                <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                                <a href="http://twitter.com/ayomideonibokun" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
								<a href="http://linkedin.com/in/ayomideonibokun" class="linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
								<a href="http://instagram.com/ayomide_onibokun" class="instagram"><i class="fa fa-instagram fa-fw"></i></a>
								<a href="http://youtube.com/ayomideonibokun" class="youtube"><i class="fa fa-youtube fa-fw"></i></a>
								
                            </div>
                        </div>
                    </div> <!-- end back panel -->
                </div> <!-- end card -->
                </div>                    
                                    </div>
                                    
                                    
                                    <!-- item 03 -->
                                    <div class="item text-center">
                                    
                                    
                                         <div class="card-container">
                <div class="card">
                    <div class="front">
                        <div class="cover">
                            
                        </div>
                        <div class="user">
                            <img class="img-circle" src="img/me.jpg"/>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h3 class="name">Ayomide Onibokun</h3>
                                <p class="profession">CEO</p>
                                <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                            </div>
                            <div class="footer">
                                <i class="fa fa-mail-forward"></i> Auto Rotation
                            </div>
                        </div>
                    </div> <!-- end front panel -->
                    <div class="back">
                        <div class="header">
                            <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h4 class="text-center">Job Description</h4>
                                <p class="text-center">Web design, HTML5, CSS3, js, php, python, java and c.</p>

                                <div class="stats-container">
                                    <div class="stats">
                                        <h4>235</h4>
                                        <p>
                                            Followers
                                        </p>
                                    </div>
                                    <div class="stats">
                                        <h4>114</h4>
                                        <p>
                                            Following
                                        </p>
                                    </div>
                                    <div class="stats">
                                        <h4>35</h4>
                                        <p>
                                            Projects
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="footer">
                            <div class="social-links text-center">
                                <a href="http://www.facebook.com/ayomideonibokun" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                                <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                                <a href="http://twitter.com/ayomideonibokun" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
								<a href="http://linkedin.com/in/ayomideonibokun" class="linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
								<a href="http://instagram.com/ayomide_onibokun" class="instagram"><i class="fa fa-instagram fa-fw"></i></a>
								<a href="http://youtube.com/ayomideonibokun" class="youtube"><i class="fa fa-youtube fa-fw"></i></a>
								
                            </div>
                        </div>
                    </div> <!-- end back panel -->
                </div> <!-- end card -->
                
				</div>
				
				
				
                                        
                                    
                                    </div>
                                    
                                    
                                    
                                
                                </div>
                                
                                
                            </div>
                        
                        
                        
                        </div>
                    </div>
                    </div>
    </div>

        
        <?php
        include 'include/footer.php';
        ?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 