<?php
    include 'db.php';
    $epr="";
    $msg="";

    if (isset($_GET['epr'])) 
    $epr=$_GET['epr'];

if (isset($_GET['action'])) 
    $action=$_GET['action'];



    switch ($epr) {
        case 'blog':
            # code...
                $cat = 'blog';
            break;
        case 'udemy':
            # code...
                $cat = 'udemy';
            break;
        case 'program':
                $cat = 'program';
            # code...
            break;
        case 'hack':
            # code...
                $cat = 'hack';
            break;
        default:
            # code...
            break;
    }

    if(isset($_FILES['img'])){
      $errors= array();
      $file_name = $_FILES['img']['name'];
      $file_size =$_FILES['img']['size'];
      $file_tmp =$_FILES['img']['tmp_name'];
      $file_type=$_FILES['img']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['img']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"../upload/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }     if (empty($file_name)) {
        # code...
        $file_name = 'sticky-notes.jpg';
      }

}

if(isset($_POST['submit_post']))
    {
        $note = $_POST['editor1'];
        $name = $_POST['name'];
        
      
        $a_sql= "INSERT  INTO ".$cat."(info, img, name )
                VALUES('$note', '$file_name', '$name')";
        if(mysqli_query($conn, $a_sql))
            header("location: admin.php?epr=saved");
        else
            $msg='error:'.mysqli_error();
        
    }



        if($action=='update'){
            $id = $_POST['id'];
            $note = $_POST['editor1'];
            $name = $_POST['name'];
        
        $a_sql="UPDATE ".$cat." SET name='$name', img='$file_name',info='$note' WHERE id='$id'";
        if(mysqli_query($conn, $a_sql))
            header("location: admin.php");
        else
            $msg='error:'.mysqli_error();
        
    }

?>
<?php
  include 'include/header.php';

?> 
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
    <body class=" ">
        <?php
            include 'include/navbar.php';
        ?>
            <!--  SIDEBAR - END -->
            <!-- START CONTENT -->
            <section id="main-content" class=" ">
                <section class="wrapper" style='margin-top:60px;display:inline-block;width:100%;padding:15px 0 0 15px;'>

                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <div class="page-title">

                            <div class="pull-left">
                                <h1 class="title">Editors</h1>                            </div>


                        </div>
                    </div>
                    <div class="clearfix"></div>

                    
                    <div class="col-lg-12">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title pull-left"><?php   echo $msg;?></h2>
                                <div class="actions panel_actions pull-right">
                                    <i class="box_toggle fa fa-chevron-down"></i>
                                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                                    <i class="box_close fa fa-times"></i>
                                </div>
                            </header>
                            <div class="content-body">   
                                 <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">

                                    <?php 
                                        if ($action=='edit') 
                                        {

                                            # code...
                                            
                                                $id=$_GET['id'];
                                                $row="SELECT * FROM ".$cat." WHERE id='$id'";
                                                if ($result = mysqli_query($conn, $row)){
                                                $st_row=mysqli_fetch_assoc($result);
                                            }
                                            echo '
                                            <form method="post" enctype="multipart/form-data" action="editor.php?epr='.$cat.'&action=update">
                                            <input type="text" name="id" value="'.$st_row["id"].'">
                                            <input type="text" name="name" value="'.$st_row["name"].'">
                                      
                                             <textarea class="ckeditor" cols="80" id="editor1" name="editor1" rows="10">'.$st_row["info"].'
                                            </textarea>

                                                  <input type="file" name="img">
                                            <input type="submit" value="submit">
                                        </form>'?>

                                    <?php
                                        }else{
                                    echo'
                                        <form method="post" enctype="multipart/form-data" action="editor.php?epr='.$cat.'">
                                            <input type="text" name="name">
                                      
                                             <textarea class="ckeditor" cols="80" id="editor1" name="editor1" rows="10">
                                            </textarea>

                                                  <input type="file" name="img">
                                            <input type="submit" value="submit" name="submit_post">
                                        </form>';?>
                                       <?php
                                   }
                                       ?>

                                    </div>
                                </div>
                            </div>
                        </section></div>

                    


                </section>
            </section>
            <!-- END CONTENT -->
            <div class="page-chatapi hideit">

                <div class="search-bar">
                    <input type="text" placeholder="Search" class="form-control">
                </div>

                <div class="chat-wrapper">
                    <h4 class="group-head">Groups</h4>
                    <ul class="group-list list-unstyled">
                        <li class="group-row">
                            <div class="group-status available">
                                <i class="fa fa-circle"></i>
                            </div>
                            <div class="group-info">
                                <h4><a href="#">Work</a></h4>
                            </div>
                        </li>
                        <li class="group-row">
                            <div class="group-status away">
                                <i class="fa fa-circle"></i>
                            </div>
                            <div class="group-info">
                                <h4><a href="#">Friends</a></h4>
                            </div>
                        </li>

                    </ul>


                    <h4 class="group-head">Favourites</h4>
                    <ul class="contact-list">

                        <li class="user-row" id='chat_user_1' data-user-id='1'>
                            <div class="user-img">
                                <a href="#"><img src="../php/Package - 1.1/Ultra Admin HTML - ver 1.1/data/profile/avatar-1.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Clarine Vassar</a></h4>
                                <span class="status available" data-status="available"> Available</span>
                            </div>
                            <div class="user-status available">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_2' data-user-id='2'>
                            <div class="user-img">
                                <a href="#"><img src="../php/Package - 1.1/Ultra Admin HTML - ver 1.1/data/profile/avatar-2.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Brooks Latshaw</a></h4>
                                <span class="status away" data-status="away"> Away</span>
                            </div>
                            <div class="user-status away">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_3' data-user-id='3'>
                            <div class="user-img">
                                <a href="#"><img src="../php/Package - 1.1/Ultra Admin HTML - ver 1.1/data/profile/avatar-3.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Clementina Brodeur</a></h4>
                                <span class="status busy" data-status="busy"> Busy</span>
                            </div>
                            <div class="user-status busy">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>

                    </ul>


                    <h4 class="group-head">More Contacts</h4>
                    <ul class="contact-list">

                        <li class="user-row" id='chat_user_4' data-user-id='4'>
                            <div class="user-img">
                                <a href="#"><img src="../php/Package - 1.1/Ultra Admin HTML - ver 1.1/data/profile/avatar-4.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Carri Busey</a></h4>
                                <span class="status offline" data-status="offline"> Offline</span>
                            </div>
                            <div class="user-status offline">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_5' data-user-id='5'>
                            <div class="user-img">
                                <a href="#"><img src="../php/Package - 1.1/Ultra Admin HTML - ver 1.1/data/profile/avatar-5.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Melissa Dock</a></h4>
                                <span class="status offline" data-status="offline"> Offline</span>
                            </div>
                            <div class="user-status offline">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_6' data-user-id='6'>
                            <div class="user-img">
                                <a href="#"><img src="../php/Package - 1.1/Ultra Admin HTML - ver 1.1/data/profile/avatar-1.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Verdell Rea</a></h4>
                                <span class="status available" data-status="available"> Available</span>
                            </div>
                            <div class="user-status available">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_7' data-user-id='7'>
                            <div class="user-img">
                                <a href="#"><img src="../php/Package - 1.1/Ultra Admin HTML - ver 1.1/data/profile/avatar-2.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Linette Lheureux</a></h4>
                                <span class="status busy" data-status="busy"> Busy</span>
                            </div>
                            <div class="user-status busy">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_8' data-user-id='8'>
                            <div class="user-img">
                                <a href="#"><img src="../php/Package - 1.1/Ultra Admin HTML - ver 1.1/data/profile/avatar-3.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Araceli Boatright</a></h4>
                                <span class="status away" data-status="away"> Away</span>
                            </div>
                            <div class="user-status away">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_9' data-user-id='9'>
                            <div class="user-img">
                                <a href="#"><img src="../php/Package - 1.1/Ultra Admin HTML - ver 1.1/data/profile/avatar-4.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Clay Peskin</a></h4>
                                <span class="status busy" data-status="busy"> Busy</span>
                            </div>
                            <div class="user-status busy">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_10' data-user-id='10'>
                            <div class="user-img">
                                <a href="#"><img src="../php/Package - 1.1/Ultra Admin HTML - ver 1.1/data/profile/avatar-5.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Loni Tindall</a></h4>
                                <span class="status away" data-status="away"> Away</span>
                            </div>
                            <div class="user-status away">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_11' data-user-id='11'>
                            <div class="user-img">
                                <a href="#"><img src="../php/Package - 1.1/Ultra Admin HTML - ver 1.1/data/profile/avatar-1.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Tanisha Kimbro</a></h4>
                                <span class="status idle" data-status="idle"> Idle</span>
                            </div>
                            <div class="user-status idle">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_12' data-user-id='12'>
                            <div class="user-img">
                                <a href="#"><img src="../php/Package - 1.1/Ultra Admin HTML - ver 1.1/data/profile/avatar-2.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Jovita Tisdale</a></h4>
                                <span class="status idle" data-status="idle"> Idle</span>
                            </div>
                            <div class="user-status idle">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>


            <div class="chatapi-windows ">


            </div>    </div>
        <!-- END CONTAINER -->
        <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->
<?php
include 'include/script.php';
?>
        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
      

        <!-- Sidebar Graph - END --> 









        <!-- CORE JS FRAMEWORK - START --> 
        <script src="js/jquery-1.11.2.min.js" type="text/javascript"></script> 
        <script src="js/jquery.easing.min.js" type="text/javascript"></script> 
        <script src="../js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="plugins/pace/pace.min.js" type="text/javascript"></script>  
        <script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script> 
        <script src="plugins/viewport/viewportchecker.js" type="text/javascript"></script>  
        <!-- CORE JS FRAMEWORK - END --> 


        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <script src="plugins/bootstrap3-wysihtml5/js/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script><script src="plugins/ckeditor/ckeditor.js" type="text/javascript"></script><script src="plugins/uikit/js/uikit.min.js" type="text/javascript"></script><script src="plugins/uikit/vendor/codemirror/codemirror.js" type="text/javascript"></script><script src="plugins/uikit/vendor/codemirror/codemirror.js" type="text/javascript"></script><script src="plugins/uikit/vendor/codemirror/mode/markdown/markdown.js"></script><script src="plugins/uikit/vendor/codemirror/addon/mode/overlay.js"></script><script src="plugins/uikit/vendor/codemirror/mode/xml/xml.js"></script><script src="plugins/uikit/vendor/codemirror/mode/gfm/gfm.js"></script><script src="plugins/uikit/vendor/marked/marked.min.js" type="text/javascript"></script><script src="plugins/uikit/js/components/htmleditor.js" type="text/javascript"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE TEMPLATE JS - START --> 
        <script src="js/scripts.js" type="text/javascript"></script> 
        <!-- END CORE TEMPLATE JS - END --> 

        <!-- Sidebar Graph - START --> 
        <script src="plugins/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="js/chart-sparkline.js" type="text/javascript"></script>
        <!-- Sidebar Graph - END --> 







        <!-- General section box modal start -->
        <div class="modal" id="section-settings" tabindex="-1" role="dialog" aria-labelledby="ultraModal-Label" aria-hidden="true">
            <div class="modal-dialog animated bounceInDown">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Section Settings</h4>
                    </div>
                    <div class="modal-body">

                        Body goes here...

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        <button class="btn btn-success" type="button">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal end -->
    </body>
</html>




<script>

</script>



<script>

</script>

