



<?php
include 'include/header.php';

include 'include/navbar.php';
?>



            <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  <div id="container" class="main-content">
        <!-- Page content -->
        <div class="container high-padding">
            <div class="row">
                <div class="col-md-8">
      <div class="program-head"> PROGRAMMING TUTORIALS </div>
        <?php 
           $sql="SELECT * FROM udemy";
    if ($result = mysqli_query($conn, $sql)){
      while ($row=mysqli_fetch_assoc($result)) {
        echo'<div class="panel panel-default sm:tw-p-2 tw-p-0 sm:tw-mb-4 tw-mb-2 xl:tw-h-full">
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
  
    <p class="sm:tw-text-xl tw-text-lg tw-font-light roboto-slab sm:tw-py-3 tw-py-1">Sale</p>
</div>

      </div>
  
      <div class=" tw-flex tw-leading-tight tw-w-5/6 sm:tw-ml-6 tw-ml-4 dav">
        <div class="tw-flex-grow tw-pr-4">
          <a href="https://couponcause.com/go/180710" class="tw-text-grey-darker sm:tw-text-xl tw-text-xl hover:tw-text-blue lato">'.$row["name"].'</a>
          
          <div class="sm:tw-leading-loose tw-leading-normal">          
            <p class="tw-text-grey sm:tw-text-base tw-text-xs lato">Ongoing Offer</p>
          
              <span class="tw-text-green sm:tw-border sm:tw-border-green sm:tw-text-green sm:tw-text-base tw-text-xs lato sm:tw-rounded sm:tw-px-2 sm:tw-py-1 ayo">Verified</span>                           <span class="tw-text-orange  sm:tw-border sm:tw-border-orange  sm:tw-text-orange  sm:tw-text-base tw-text-xs lato sm:tw-rounded sm:tw-px-2 sm:tw-py-1 mide">Featured</span>           
            <p class="tw-hidden tw-relative lg:tw-block tw-text-grey tw-cursor-pointer">
              Details: <i class="details-caret-180710 fa fa-caret-right"></i>
              </p>
          </div>
        </div>
  
        <div class="tw-hidden md:tw-flex tw-items-start tw-whitespace-no-wrap tw-min-w-1/4">
          <a href="#"  class="tw-relative tw-rounded tw-overflow-hidden tw-cursor-pointer tw-w-full lato">
      
    <div class="tw-bg-blue hover:tw-bg-blue-dark tw-text-center tw-text-white tw-py-2 tw-px-4">Get Offer</div>
  
  </a>


        </div>
      </div>
  
    </div>
  </div>
  
  ';}}
  ?>

                    
                            
                    <!-- Post details -->
                    <div class="post-details animateIn animated fadeIn" data-animate="fadeIn" style="opacity: 100;">
                        <ul class="tags-list">
                            <li><a data-toggle="tooltip" data-placement="top" data-original-title="6 Posts" href="#">from the church</a></li>
                            <li><a data-toggle="tooltip" data-placement="top" data-original-title="9 Posts" href="#">charity</a></li>
                            <li><a data-toggle="tooltip" data-placement="top" data-original-title="6 Posts" href="#">02/03/2018</a></li>
                            <li><a data-toggle="tooltip" data-placement="top" data-original-title="6 Posts" href="#">ayomide onibokun</a></li>
                        </ul>
                    </div>

        <?php
            echo'<div class="fb-like" data-href="$currentlink" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>';
        ?>
        <?php
       
        echo"<fb:comments href='$currentlink' data-numpost='10'>
            
        </fb:comments>
        ";
     ?>
        
                    <!-- Post footer -->
                    <div class="post-footer sharer animateIn animated fadeIn" data-animate="fadeIn" style="opacity: 100;">
                        <div class="share-this-post">

                            <div class="share-title">Spread the word via:</div>
                            <div class="share-via">
                                <div class="social">
                                <?php
                                echo'
                                    <a data-toggle="tooltip" data-placement="top" data-original-title="Share on LinkedIn" href="http://www.facebook.com/sharer/sharer.php?u='.$currentlink.'" target="_blank">
                                        <i class="fa fa-facebook"></i>

                                    </a>';?>
                                </div>
                                <div class="social">
                                    <?php
                                echo'
                                    <a data-toggle="tooltip" data-placement="top" data-original-title="Share on LinkedIn" href="http://www.twitter.com/sharer/sharer.php?u='.$currentlink.'" target="_blank">
                                        <i class="fa fa-twitter"></i>

                                    </a>';?>
                                </div>
                                <div class="social">
                                    <a data-toggle="tooltip" data-placement="top" data-original-title="Share on Google+" href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </div>
                                <div class="social">
                                    <a data-toggle="tooltip" data-placement="top" data-original-title="Share on LinkedIn" href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </div>
                                <div class="social">
                                    <a data-toggle="tooltip" data-placement="top" data-original-title="Share on whatsapp" href="#">
                                        <i class="fa fa-whatsapp"></i>
                                    </a>
                                </div>
                                <div class="social">
                                    <a data-toggle="tooltip" data-placement="top" data-original-title="Share on instagram" href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="btn btn-sm btn-primary btn-link">
                                <a href="guest/index.php">write on blog</a>
                            </div>
                </div>

               <?php

                include 'include/rightbar.php';
               ?>
        </div>
    </div>
<?php
        include 'include/footer.php';
        ?>                                                                                                                                                                                                                                                                                                                                                                                                                          