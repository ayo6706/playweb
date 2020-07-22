<div class="content-sidebar col-md-4">
                    <!-- Widget: Search for posts -->
                    <aside class="widget widget_search animateIn animated fadeIn" data-animate="fadeIn" style="opacity: 100;">
                        <h3 class="widget-title">Search ...</h3>
                        <form action="" method="post" class="search-form">
                            <label>
                                <input type="search" class="search-field form-control" placeholder="Search for posts" value="" name="search" title="Search for:">
                            </label>
                            <input type="submit" name="submit" value="Search"/>
                        </form>
                    </aside>
                
                    <!-- Widget: Text widget -->
                    <aside class="widget widget_text animateIn animated fadeIn" data-animate="fadeIn" style="opacity: 100;">
                        <h3 class="widget-title">facebook Widget</h3>
                        <div class="textwidget">
                            <div class="fb-page" data-href="https://www.facebook.com/ayomideonibokun/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/ayomideonibokun/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ayomideonibokun/">ayomide &quot;onibokun&quot;</a></blockquote></div>
                        </div>
                    </aside>
                    <!-- Widget: Categories -->
                     <!-- Widget: Text widget -->
                    <aside class="widget widget_text animateIn animated fadeIn" data-animate="fadeIn" style="opacity: 100;">
                        <h3 class="widget-title">Tweet Widget</h3>
                        <div class="textwidget">
                            <a class="twitter-timeline" height="300" data-width="313" href="https://twitter.com/ayomideonibokun?ref_src=twsrc%5Etfw">Tweets by rcfoui</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                    </aside>
                    <!-- Widget: Categories -->
                    <aside class="widget widget_categories animateIn animated fadeIn" data-animate="fadeIn" style="opacity: 100;">
                        <h3 class="widget-title">Categories</h3>
                        <ul class="">
                            <li class="cat-item">
                                <a href="#">Church (4)</a>
                            </li>
                            <li class="cat-item">
                                <a href="#">morning digest (3)</a>
                            </li>
                            <li class="cat-item">
                                <a href="#">sermons (7)</a>
                            </li>
                            <li class="cat-item">
                                <a href="#">open heavens (7)</a>
                            </li>
                        </ul>
                    </aside>
                    <!-- Widget: Social Media Widget -->
                    <aside class="widget widget_social_links animateIn animated fadeIn" data-animate="fadeIn" style="opacity: 100;">
                        <h3 class="widget-title">Follow Us</h3>
                        <div class="social_links">
                            <a href="http://facebook.com/RCFOUI" target="_blank" data-toggle="tooltip" data-placement="top" data-original-title="Facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#" target="_blank"  data-toggle="whatsapp" data-placement="top" data-original-title="whatsapp">
                                <i class="fa fa-whatsapp"></i>
                            </a>
                            
                            <a href="#" data-toggle="tooltip" data-placement="top" data-original-title="LinkedIn">
                                <i class="fa fa-linkedin"></i>
                            </a>
                            <a href="http://instagram.com/" target="_blank" data-toggle="tooltip" data-placement="top" data-original-title="Instagram">
                                <i class="fa fa-instagram"></i>
                            </a>
                            <a href="http://" target="_blank" data-toggle="tooltip" data-placement="top" data-original-title="Google+">
                                <i class="fa fa-google-plus"></i>
                            </a>
                            <a href="http://twitter.com/RCFOUI" target="_blank" data-toggle="tooltip" data-placement="top" data-original-title="Twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                            
                        </div>
                    </aside>
                    <!-- Widget: Recent posts with thumbnails -->
                    <aside class="widget widget_recent_entries_with_thumbnail animateIn animated fadeIn" data-animate="fadeIn" style="opacity: 100;">
                        <h3 class="widget-title">udemy courses</h3>
                        <ul>
                              <?php 
                   $sql="SELECT * FROM udemy
                        ORDER BY id   DESC LIMIT 4";
            if ($result = mysqli_query($conn, $sql)){
                while ($row=mysqli_fetch_assoc($result)) {
                    echo  
                     '
                            <li class="blog-post">
                                <div class="col-md-3 post-thumbnail">
                                    <a href="blog-post.php?epr=udemy&id='.$row['id'].'"><img class="img-rounded" alt="" src="img/me.jpg"></a>
                                </div>
                                <div class="col-md-9 post-details"><a href="blog-post.php?epr=udemy&id='.$row['id'].'">'.$row['name'].'!</a><span class="post-date">02/04/2018</span></div>
                            </li>';}}?>
                            
                        </ul>
                    </aside>
                    <!-- Widget: Recent posts with thumbnails -->
                    <aside class="widget widget_recent_entries_with_thumbnail animateIn animated fadeIn" data-animate="fadeIn" style="opacity: 100;">
                        <h3 class="widget-title">Recent Posts</h3>
                        <ul>
                              <?php 
                   $sql="SELECT * FROM blog
                        ORDER BY id   DESC LIMIT 4";
            if ($result = mysqli_query($conn, $sql)){
                while ($row=mysqli_fetch_assoc($result)) {
                    echo  
                     '
                            <li class="blog-post">
                                <div class="col-md-3 post-thumbnail">
                                    <a href="blog-post.php?epr=post&id='.$row['id'].'"><img class="img-rounded" alt="" src="upload/'.$row["img"].'"></a>
                                </div>
                                <div class="col-md-9 post-details"><a href="blog-post.php?epr=post&id='.$row['id'].'">'.$row['name'].'!</a><span class="post-date">02/04/2018</span></div>
                            </li>';}}?>
                            
                        </ul>
                    </aside>
                </div>
            </div>