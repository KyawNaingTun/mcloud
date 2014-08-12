<?php include('include/_header.php'); ?>
<?php include('../include/_nav.php'); ?>
<div class="wrapper row-offcanvas row-offcanvas-left">
            <?php include('_left-sidebar.php'); ?>
  
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
               <br>
            <!-- Main content -->
                <section class="content">
                  <div class="row">
                    <div class="col-md-9">
                      <!-- Small boxes (Stat box) -->
                      <div class="row">
                        <div class="col-md-12" >
                            <ul class="timelines" data-spy="" data-offset-top="10">
                              <li>
                                <div class="timeline-panel">

                                  <form action="update.php" method="post" role="form" enctype="multipart/form-data" class="facebook-share-box">
                                    <div class="timeline-body">
                                      <div class="share-form">
                                        <ul class="post-types">
                                          <li class="post-type">
                                            <a class="status" id="shareType" href="#"><i class="icon icon-file"></i> Status</a>
                                          </li>
                                          <li class="post-type">
                                            <a class="photos" id="shareType" href="#"><i class="icon icon-camera"></i> Photos</a>
                                          </li>
                                          <li class="post-type">
                                            <a class="videos" id="shareType" href="#"><i class="icon icon-film"></i> Video</a>
                                          </li>
                                        </ul>
                                        <div class="share">
                                          <div class="arrow"></div>
                                          <div><textarea name="message" cols="40" rows="100" id="status_message" class="form-control message" style="height: 62px; overflow: hidden;" placeholder="What's on your mind ?"></textarea> </div>
                                          <div class="image hide">
                                            <input type="file" class="form-control" name="image" id="image" />
                                          </div>
                                          <div class="video hide">
                                            <input type="text" class="form-control" placeholder="Youtube or Vimeo video URL" id ="videoUrl" name="videoUrl" />
                                          </div>
                                          <div class="place hide">
                                            <input id="geocomplete" class="form-control" type="text" name="location" placeholder="Enter a location">
                                            <div class="map_canvas"></div>
                                            <input type="hidden" name="lat" />
                                            <input type="hidden" name="lng" />
                                          </div>
                                          <input type="hidden" name="shareType" class="shareType" value="status"/>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="timeline-footer clearfix">
                                      <div class="pull-right">
                                        <input type="submit" name="submit" value="Post" id="btn-share" class="btn bg-olive btn-flat" />
                                      </div>
                                    </div>
                                  </form>
                                </div>
                              </li>
                            </ul>  
                        </div>
                        <!-- <div class="col-md-4" >
                          <div class="well">
                            <h4>Blog Search</h4>
                            <div class="input-group">
                              <input type="text" class="form-control">
                              <span class="input-group-btn">
                                <button class="btn btn-primary" type="button">Go!</i></button>
                              </span>
                            </div><! /input-group -->
                          <!-- </div>/well       
                        </div> -->
                      </div><!-- end of row1-->

                      <!--  Main content and Main Posts -->
                      <div class="row">    
                            <div class="col-md-6">

                                <div class="col-md-12 portfolio-item post">
                                  <div class="row">
                                    <div class="user-panel">
                                        <div class="pull-left pf-image">
                                            <img src="img/avatar5.png" class="img-circle " alt="user image" />
                                        </div>
                                        <div class="pull-left info">
                                            <p>Kyaw Naing Tun</p>
                                            <p class="posted-time"><i class="fa fa-clock-o"></i> Posted on August 28, 2013 at 10:00 PM</p>
                                        </div>
                                    </div><!-- end of user-panel-->
                                  </div>
                                  <div class="row">
                                    <div class="col-md-12">
                                      <a href="portfolio-item.html"><img class="img-responsive" src="wall/img/w1.jpg"></a>
                                      <h3><a href="portfolio-item.html">Project Name</a></h3>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                                    </div>
                                  </div>
                                  <hr>
                                  <ul class="list-inline"><li><a href="#"><i class="glyphicon glyphicon-edit"></i>answer</a></li><li><a href="#"><i class="glyphicon glyphicon-comment"></i> 2 Comments</a></li><li><a href="#"><i class="glyphicon glyphicon-share"></i> 14 Shares</a></li></ul>
                                </div>

                                <div class="col-md-12 portfolio-item post">
                                      <div class="row">
                                          <div class="user-panel">
                                              <div class="pull-left pf-image">
                                                  <img src="img/avatar.png" class="img-circle" alt="user image" />
                                              </div>
                                              <div class="pull-left info">
                                                  <p>Dr.Jane</p>
                                                  <p class="posted-time"><i class="fa fa-clock-o"></i> Posted on August 28, 2013 at 10:00 PM</p>
                                              </div>
                                          </div><!-- end of user-panel-->
                                      </div>
                                      <div class="row">
                                          <div class="col-md-12">
                                              <h5><a href="portfolio-item.html">Project Name</a></h5>
                                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                                 
                                          </div>
                                      </div>
                                      <ul class="list-inline"><li><a href="#"><i class="glyphicon glyphicon-edit"></i>answer</a></li><li><a href="#"><i class="glyphicon glyphicon-comment"></i> 2 Comments</a></li><li><a href="#"><i class="glyphicon glyphicon-share"></i> 14 Shares</a></li></ul>
                                </div>


                                <div class="col-md-12 portfolio-item post">
                                  <div class="row">
                                    <div class="user-panel">
                                        <div class="pull-left pf-image">
                                            <img src="img/avatar04.png" class="img-circle" alt="user image" />
                                        </div>
                                        <div class="pull-left info">
                                            <p>Aung Zin Myo</p>
                                            <p class="posted-time"><i class="fa fa-clock-o"></i> Posted on August 28, 2013 at 10:00 PM</p>
                                        </div>
                                    </div><!-- end of user-panel-->
                                  </div>
                                  <div class="row">
                                    <div class="col-md-12">
                                      <a href="portfolio-item.html"><img class="img-responsive" src="wall/img/w3.jpg"></a>
                                      <h3><a href="portfolio-item.html">Project Name</a></h3>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                                    </div>
                                  </div>
                                  <ul class="list-inline"><li><a href="#"><i class="glyphicon glyphicon-edit"></i>answer</a></li><li><a href="#"><i class="glyphicon glyphicon-comment"></i> 2 Comments</a></li><li><a href="#"><i class="glyphicon glyphicon-share"></i> 14 Shares</a></li></ul>
                                </div>
                            </div>
                            <!-- end of column 1(one) -->
                            <!--  for colum-2 -->
                            <div class="col-md-6">
                                <div class="col-md-12 portfolio-item post">
                                  <div class="row">
                                    <div class="user-panel">
                                        <div class="pull-left pf-image">
                                            <img src="img/avatar3.png" class="img-circle" alt="user image" />
                                        </div>
                                        <div class="pull-left info">
                                            <p>Khant Khant</p>
                                            <p class="posted-time"><i class="fa fa-clock-o"></i> Posted on August 28, 2013 at 10:00 PM</p>
                                        </div>
                                    </div><!-- end of user-panel-->
                                    
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                          <h5><a href="portfolio-item.html">Project Name</a></h5>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                                      </div>
                                  </div>
                                    <ul class="list-inline"><li><a href="#"><i class="glyphicon glyphicon-edit"></i>answer</a></li><li><a href="#"><i class="glyphicon glyphicon-comment"></i> 2 Comments</a></li><li><a href="#"><i class="glyphicon glyphicon-share"></i> 14 Shares</a></li></ul>
                                </div>

                                <div class="col-md-12 portfolio-item post">
                                  <div class="row">
                                    <div class="user-panel">
                                        <div class="pull-left pf-image">
                                            <img src="img/user.jpg" class="img-circle" alt="user image" />
                                        </div>
                                        <div class="pull-left info">
                                            <p>Myat Noe</p>
                                            <p class="posted-time"><i class="fa fa-clock-o"></i> Posted on August 28, 2013 at 10:00 PM</p>
                                        </div>
                                    </div><!-- end of user-panel-->
                                  </div>
                                  <div class="row">
                                    <div class="col-md-12">
                                      <a href="portfolio-item.html"><img class="img-responsive" src="wall/img/w4.jpg"></a>
                                      <h3><a href="portfolio-item.html">Project Name</a></h3>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                                    </div>
                                  </div>
                                  <ul class="list-inline"><li><a href="#"><i class="glyphicon glyphicon-edit"></i>answer</a></li><li><a href="#"><i class="glyphicon glyphicon-comment"></i> 2 Comments</a></li><li><a href="#"><i class="glyphicon glyphicon-share"></i> 14 Shares</a></li></ul>
                                </div>

                                <div class="col-md-12 portfolio-item post">
                                  <div class="row">
                                    <div class="user-panel">
                                        <div class="pull-left pf-image">
                                            <img src="img/user2.jpg" class="img-circle" alt="user image" />
                                        </div>
                                        <div class="pull-left info">
                                            <p>SandyMyint Lwin</p>
                                            <p class="posted-time"><i class="fa fa-clock-o"></i> Posted on August 28, 2013 at 10:00 PM</p>
                                        </div>
                                    </div><!-- end of user-panel-->
                                  </div>
                                  <div class="row">
                                    <div class="col-md-12">
                                      <a href="portfolio-item.html"><img class="img-responsive" src="wall/img/w5.jpg"></a>
                                      <h3><a href="portfolio-item.html">Project Name</a></h3>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                                    </div>
                                  </div>
                                  <ul class="list-inline"><li><a href="#"><i class="glyphicon glyphicon-edit"></i>answer</a></li><li><a href="#"><i class="glyphicon glyphicon-comment"></i> 2 Comments</a></li><li><a href="#"><i class="glyphicon glyphicon-share"></i> 14 Shares</a></li></ul>
                                </div>
                            </div><!-- end 0f column-2-->
                      </div><!-- /.row-2 -->

                    </div><!-- end of div-col-md-9-->
                    <!-- End of user posts -->
                    <div class="col-lg-3">
                      <br>
                        <!--my chat box  -->
                      <!-- Chat box -->
                            <div class="box box-success">
                                <div class="box-header">
                                    <h3 class="box-title"><i class="fa fa-group"></i> Events</h3>
                                    <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
                                        <div class="btn-group" data-toggle="btn-toggle" >
                                            <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i></button>                                            
                                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body chat" id="chat-box">
                                    <!-- chat item -->
                                    <div class="item">
                                        <img src="img/avatar.png" alt="user image" class="online"/>
                                        <p class="message">
                                            <a href="#" class="name">
                                                <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2:15</small>
                                                Dr.LwinMoeAung
                                            </a>
                                            I would like to meet you to discuss the latest news about
                                            the arrival of the new theme.
                                        </p>
                                        <div class="">
                                            <div class="pull-right">
                                                <button class="btn bg-olive btn-flat"><i class="fa fa-plus-square"></i> Join</button>
                                            </div>
                                        </div><!-- /.join -->
                                    </div><!-- /.item -->
                                    <!-- chat item -->
                                    <div class="item">
                                        <img src="img/avatar2.png" alt="user image" class="offline"/>
                                        <p class="message">
                                            <a href="#" class="name">
                                                <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:15</small>
                                                Dr.မ်ိဳးသူ
                                            </a>
                                            I would like to meet you to discuss the latest news about
                                            the arrival of the new theme.
                                        </p>
                                        <div class="">
                                            <div class="pull-right">
                                                <button class="btn bg-olive btn-flat"><i class="fa fa-plus-square"></i> Join</button>
                                            </div>
                                        </div><!-- /.join -->
                                    </div><!-- /.item -->
                                    <!-- chat item -->
                                    <div class="item">
                                        <img src="img/avatar3.png" alt="user image" class="offline"/>
                                        <p class="message">
                                            <a href="#" class="name">
                                                <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:30</small>
                                                Susan Doe
                                            </a>
                                            I would like to meet you to discuss the latest news about
                                            the arrival of the new theme.
                                        </p>
                                        <div class="">
                                            <div class="pull-right">
                                                <button class="btn bg-olive btn-flat"><i class="fa fa-plus-square"></i> Join</button>
                                            </div>
                                        </div><!-- /.join -->
                                    </div><!-- /.item -->
                                </div><!-- /.chat -->
                                <div class="box-footer">
                                    
                                </div>
                            </div><!-- /.box (chat box) -->

                    </div> <!-- end of div-col-lg-3-->
                  </div><!-- end of row-->
                </section><!-- end of <section>(content)-->

<?php include('../include/_footer.php'); ?>