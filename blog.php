
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
		 <?php 
													   $sql="SELECT * FROM blog
													        ORDER BY id   DESC ";
												if ($result = mysqli_query($conn, $sql)){
													while ($row=mysqli_fetch_assoc($result)) {
														echo  
													     '
                    <div class="blog-post">
                        <div class="row">
                            <div class="col-md-1">
                                
                            </div>

                            <div class="col-md-3">
                        <!-- Post content -->
                                <div class="post-content animateIn animated fadeIn" data-animate="fadeIn" style="opacity: 100;">
                                    <div class="td_module_10 td_module_wrap td-animation-stack">
                                        <div class="blog-img">
                                            <a href="blog-post.php?epr=post&id='.$row['id'].'" rel="bookmark" title="9 Most Beautiful Linux Distros You Need To Use (2018 Edition)">
                                                <img width="180" height="135" 
                                                    class="entry-thumb" 
                                                    src="upload/'.$row["img"].'" 
                                                    alt="beautiful linux distros" 
                                                    title="9 Most Beautiful Linux Distros You Need To Use (2018 Edition)">
                                            </a>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                            <div class="col-md-8">
                        <!-- Post content -->
                                <div class="post-content animateIn animated fadeIn" data-animate="fadeIn" style="opacity: 100;">
                                 
                                    <div class="item-details">
                                        <h3 class="entry-title td-module-title">
                                            <a href="blog-post.php?epr=post&id='.$row["id"].'" rel="bookmark" title="9 Most Beautiful Linux Distros You Need To Use (2018 Edition)">'.$row["name"].'
                                            </a>
                                        </h3>
                                        <div class="meta-info">
                                                        

                                            
                                            
                                            <span class="td-post-author-name">
                                                <a href="http://www.facebook.com/ayomideonibokun&quot;">
                                                    ayomide onibokun
                                                </a> 
                                                <span>-</span>
                                            </span> 
                                            <span class="td-post-date">
                                                <time class="entry-date updated td-module-date" datetime="2018-01-06T16:28:52+00:00">
                                                    January 6, 2018
                                                </time>
                                            </span> 
                                             
                                        </div>
                                        <div class="td-excerpt">
                                            Linux users have the liberty to enjoy an unparalleled freedom while choosing the Linux distributions as per their needs. Using different open source technologies,... 
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>';}}?>

                    
                            
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
        ?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        