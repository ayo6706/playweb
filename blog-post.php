<?php
session_start();
    include 'php/db.php';
        $epr="";
    $msg="";
    if (isset($_GET['epr'])) 
        $epr=$_GET['epr'];



    if($epr=='post')
        {
            $id=$_GET['id'];
            $sql="SELECT * FROM blog WHERE id='$id'";
        if ($result = mysqli_query($conn, $sql)){
            $row=mysqli_fetch_assoc($result);

            $_SESSION['id'] = $id;

        }}



 if($epr=='udemy')
        {
            $id=$_GET['id'];
            $sql="SELECT * FROM udemy WHERE id='$id'";
        if ($result = mysqli_query($conn, $sql)){
            $row=mysqli_fetch_assoc($result);

            $_SESSION['id'] = $id;

        }}
       


 if($epr=='program')
        {
            $id=$_GET['id'];
            $sql="SELECT * FROM program WHERE id='$id'";
        if ($result = mysqli_query($conn, $sql)){
            $row=mysqli_fetch_assoc($result);

            $_SESSION['id'] = $id;

        }}

 if($epr=='hack')
        {
            $id=$_GET['id'];
            $sql="SELECT * FROM hack WHERE id='$id'";
        if ($result = mysqli_query($conn, $sql)){
            $row=mysqli_fetch_assoc($result);

            $_SESSION['id'] = $id;

        }}
       
              
?>


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
        <h1 class="blog-title">
                                        <?php
                                            echo $row["name"];
                                        ?>
        </h1>
            <div class="row">
                <div class="col-md-8 main-container">
                    <!-- Post content -->
                    <div class="post-content animateIn animated fadeIn" data-animate="fadeIn" style="opacity: 100;">
                         <?php
                                            echo $row["info"];
                                        ?>
                        
                    </div>
                    <!-- Post details -->
                    <div class="post-details animateIn animated fadeIn" data-animate="fadeIn" style="opacity: 100;">
                        <ul class="tags-list">
                            <li><a data-toggle="tooltip" data-placement="top" data-original-title="6 Posts" href="#">from the church</a></li>
                            <li><a data-toggle="tooltip" data-placement="top" data-original-title="9 Posts" href="#">charity</a></li>
                            <li><a data-toggle="tooltip" data-placement="top" data-original-title="6 Posts" href="#">03/04/2018</a></li>
                            <li><a data-toggle="tooltip" data-placement="top" data-original-title="6 Posts" href="#">ayomide </a></li>
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
        ?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                