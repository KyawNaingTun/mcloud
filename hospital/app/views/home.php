<?php include('include/_header.php'); ?>
<?php include('include/_nav.php'); ?>

<div class="wrapper row-offcanvas row-offcanvas-left">
  <div class="container">
            <?php include('include/_left-sidebar.php'); ?>
  
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
               <br>
            <!-- Main content -->
                <section class="content">
                  <div class="row">
                    <div class="col-lg-8 col-md-12 col-xs-12 col-sm-12">
                      <!-- Small boxes (Stat box) -->
                      <div class="row">
                        <div class="col-md-12" >
                            <ul class="timelines" data-spy="" data-offset-top="10">
                              <li>
                                <div class="timeline-panel">

                                  <form ng-submit="submitPost()" class="facebook-share-box">
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
                                          <div><textarea name="content" cols="40" rows="100" id="" class="form-control message" style="height: 62px; overflow: hidden;" placeholder="What's on your mind ?" ng-model="postData.content"></textarea> </div>
                                          <div class="image hide">
                                            <input type="file" class="form-control" name="" id="" />
                                          </div>
                                          <div class="video hide">
                                            <input type="text" class="form-control" placeholder="Youtube or Vimeo video URL" id ="" name="videoUrl" />
                                          </div>
                                          <div class="place hide">
                                            <input id="" class="form-control" type="text" name="" placeholder="Enter a location">
                                            <div class="map_canvas"></div>
                                            <input type="hidden" name="lat" />
                                            <input type="hidden" name="lng" />
                                          </div>
                                          <input type="hidden" name="" class="shareType" value="status"/>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="timeline-footer clearfix">
                                      <div class="pull-right">
                                        <input type="submit" name="submit" value="Post" class="btn bg-olive btn-flat" />
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
                      <p class="text-center" ng-show="loading"><img src="img/loading.gif"></p>
                      <!--  Main content and Main Posts -->
                      <div class="row">    
                            <div class="col-md-12 col-lg-12 col-sm-12" >

                                <div class="col-md-12 portfolio-item post" ng-hide="loading" ng-repeat="post in posts">
                                  <div class="row">
                                    <div class="user-panel">
                                        <div class="pull-left pf-image">
                                            <img src="img/avatar5.png" class="img-circle " alt="user image" />
                                        </div>
                                        <div class="pull-left info">
                                            <p>{{ post.user_id }}</p>
                                            <p class="posted-time"><i class="fa fa-clock-o"></i> {{ post.created_at | date:'yyyy-MM-dd HH:mm:ss Z' }}</p>
                                        </div>
                                        <div class="pull-right box-tools">
                                        <!-- button with a dropdown -->
                                        <div class="btn-group">
                                            <a href="#" data-toggle="dropdown"><i class="fa fa-gear" ></i></a>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li><a href="#" ng-click="deletePost(post.id)">Delete</a></li>
                                                <li><a href="#" ng-click="textBtnForm.$show()" ng-hide="textBtnForm.$visible">Edit</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Hide</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- /. tools -->
                                    </div><!-- end of user-panel-->
                                    <!-- tools box -->
                                      
                                  </div>
                                  <div class="row">
                                    <div class="col-md-12">
                                      <a href="portfolio-item.html"></a>
                                      <h5><a href="portfolio-item.html">{{ post.title || "empty" }}</a></h5>
                                      <p editable-textarea="post.content" e-rows="7" e-cols="80" e-form="textBtnForm">{{ post.content | words:10:ignoreSpaces}}
                                        <a href="#" ng-click="changeLength(post.content)">see more</a>
                                      </p>
                                    </div>
                                  </div>

                                  <hr>
                                  <ul class="list-inline">
                                    <li><a href="#"><i class="glyphicon glyphicon-edit"></i>answer</a></li>
                                    <li><a href="#" ><i class="glyphicon glyphicon-comment"></i> 2 Comments</a></li>
                                    <li><a href="#"><i class="glyphicon glyphicon-share"></i> 14 Shares</a></li>
                                  </ul>
                                  <div class="row ">
                                    <div class="box box-success">
                                      <div class="box-body chat" id="chat-box">
                                        
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
                                            
                                        </div><!-- /.item -->
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
                                            
                                        </div><!-- /.item -->
                                      </div><!-- end of box-body chat-->
                                    </div><!--end of boxboxysuccess-->
                                  </div>
                                  <div class="row">
                                    <div class="col-md-12 col-lg-12 col-sm-12" >
                                      <div class="input-group input-group-sm comment-box">
                                          <input type="text" class="form-control" placeholder="write a comment">
                                          <span class="input-group-btn">
                                              <button class="btn bg-olive btn-flat" type="button">Send</button>
                                          </span>
                                      </div><!-- /input-group -->
                                    </div>
                                  </div>
                                </div>
                            </div>
                            
                      </div><!-- /.row-2 -->

                    </div><!-- end of div-col-md-9-->
                    <!-- End of user posts -->
                    <div class="col-lg-4 col-xs-12 col-md-12 col-sm-12">

                      <br>
                        <!--my chat box  -->
                      <!-- Chat box -->
                            <div class="box box-success">
                                <div class="box-header">
                                    <h5 class="box-title"><i class="fa fa-group"></i> Events</h5>
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
              </aside>
            </div><!-- end of container-->
<?php include('include/_footer.php'); ?>