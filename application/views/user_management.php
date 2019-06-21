<?php include( "layouts/head.php"); ?>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <?php include( "layouts/header.php"); ?>
    <?php include( "layouts/side_navbar.php"); ?>
    
    <div class="content-wrapper">

      <!-- Content Header (Page header) -->
      <section class="content-header">
        <?php echo heading('User Management', 1, 'class="title"') ?>
        <ol class="breadcrumb">
          <li><i class="fa fa-dashboard"></i>User Management</li>
          <!-- <li class="active"></li> -->
        </ol>
      </section>
      <div class="page-wrapper padding25">
        
        <!-- Main content -->
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive m-t-40">
                    <div class="form-group">
                      <table id="example24" class="text-center display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th></th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Is Blocked</th>
                          </tr>
                        </thead>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.content -->
        </div>
      </div>
    </div>  
    <!-- /.content-wrapper -->

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <?php echo form_button('','&times', ['class'=>'close', 'data-dismiss'=>'modal']) ?>
            <?php echo heading('User Details', 3, 'class="modal-title"') ?>
          </div>
          <div class="modal-body">
            <?php echo form_open('/') ?>
              <div class="form-group">
                <?php echo form_label('Category:', 'um_category') ?>
                <?php echo form_input(['name'=>'um_category', 'class'=>'form-control', 'id'=>'um_category','value'=>set_value('um_category'), 'readonly'=>'readonly']) ?>
                <?php echo form_error('um_category','<div class="text-danger">','</div>') ?>
              </div>

              <div class="form-group">
                <?php echo form_label('Title:', 'um_title') ?>
                <?php echo form_input(['name'=>'um_title', 'class'=>'form-control', 'id'=>'um_title','value'=>set_value('um_title'), 'readonly'=>'readonly']) ?>
                <?php echo form_error('um_title','<div class="text-danger">','</div>') ?>
              </div>

              <div class="form-group">
                <?php echo form_label('Price:', 'um_price') ?>
                <?php echo form_input(['name'=>'um_price', 'class'=>'form-control', 'id'=>'um_price','value'=>set_value('um_price'), 'readonly'=>'readonly']) ?>
                <?php echo form_error('um_price','<div class="text-danger">','</div>') ?>
              </div>

              <div class="form-group">
                <label for="desc">Description:</label>
                <?php echo form_textarea(['name' => 'textarea', 'rows' => '4', 'cols' => '85', 'class' => 'form-control', 'id'=>'desc', 'readonly' => 'readonly']) ?>
              </div>

              <div class="form-group">
                <?php echo form_label('Seller Location:', 'um_location') ?>
                <?php echo form_input(['name'=>'um_location', 'class'=>'form-control', 'id'=>'um_location','value'=>set_value('um_location'), 'readonly'=>'readonly']) ?>
                <?php echo form_error('um_location','<div class="text-danger">','</div>') ?>
              </div>

              <div class="form-group">
                <label for="contact_by">Contact By:</label>
                <div class="col-lg-12 col-md-12 col-xs-12 padding0">
                  <?php echo img(array('src'=>'assets/bower_components/images/call.png','class'=>'img-rounded', 'alt'=>'Call', 'width'=>'50px')); ?>
                  <?php echo img(array('src'=>'assets/bower_components/images/chat.png','class'=>'img-rounded', 'alt'=>'Chat', 'width'=>'50px')); ?>
                  <?php echo img(array('src'=>'assets/bower_components/images/mail.png','class'=>'img-rounded', 'alt'=>'Mail', 'width'=>'50px')); ?>
                  <?php echo img(array('src'=>'assets/bower_components/images/sms.png','class'=>'img-rounded', 'alt'=>'SMS', 'width'=>'50px')); ?>
                </div>
              </div>
              <div class="form-group">
                <label for="image_gallery">Image Gallery:</label>
                <div class="col-lg-12 col-md-12 col-xs-12 padding0">
                  <div class="col-lg-2 col-md-4 col-xs-6 thumb"> 
                    
                    <a class="thumbnail" href="#" data-image-id="0" data-image="<?php echo base_url()?>assets/bower_components/images/Large_imageGallery1.jpg" data-toggle="modal" data-target="#image-gallery">
                      <?php echo img(array('src'=>'assets/bower_components/images/imageGallery1.jpg','class'=>'img-thumbnail')); ?>
                    </a>
                  </div>
                  <div class="col-lg-2 col-md-4 col-xs-6 thumb"> 
                    <a class="thumbnail" href="#" data-image-id="1" data-image="<?php echo base_url()?>assets/bower_components/images/Large_imageGallery2.jpg" data-toggle="modal" data-target="#image-gallery">
                      <?php echo img(array('src'=>'assets/bower_components/images/imageGallery2.jpg','class'=>'img-thumbnail')); ?>
                    </a>
                  </div>
                  <div class="col-lg-2 col-md-4 col-xs-6 thumb"> 
                    <a class="thumbnail" href="#" data-image-id="2" data-image="<?php echo base_url()?>assets/bower_components/images/Large_imageGallery3.jpg" data-toggle="modal" data-target="#image-gallery">
                      <?php echo img(array('src'=>'assets/bower_components/images/imageGallery3.jpg','class'=>'img-thumbnail')); ?>
                    </a>
                  </div>
                  <div class="col-lg-2 col-md-4 col-xs-6 thumb"> 
                    <a class="thumbnail" href="#" data-image-id="3" data-image="<?php echo base_url()?>assets/bower_components/images/Large_imageGallery4.jpg" data-toggle="modal" data-target="#image-gallery">
                      <?php echo img(array('src'=>'assets/bower_components/images/imageGallery4.jpg','class'=>'img-thumbnail')); ?>
                    </a>
                  </div>
                  <div class="col-lg-2 col-md-4 col-xs-6 thumb"> 
                    <a class="thumbnail" href="#" data-image-id="4" data-image="<?php echo base_url()?>assets/bower_components/images/Large_imageGallery5.jpg" data-toggle="modal" data-target="#image-gallery">
                      <?php echo img(array('src'=>'assets/bower_components/images/imageGallery5.jpg','class'=>'img-thumbnail')); ?>
                    </a>
                  </div>
                </div>
              </div>
            <?php echo form_close() ?>
          </div>
          <div class="modal-footer">
            <?php echo form_button('','Close', ['class'=>'btn btn-default', 'data-dismiss'=>'modal']) ?>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <!-- <h4 class="modal-title" id="image-gallery-title"></h4> -->
          <?php echo form_button('','<span aria-hidden="true">×</span><span class="sr-only">Close</span>', ['class'=>'close', 'data-dismiss'=>'modal']) ?>
          </div>
          <div class="modal-body">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
              <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>

            <div class="carousel-inner">
              <div class="item active">
                <?php echo img(array('src'=>'assets/bower_components/images/Large_imageGallery1.jpg','class'=>'img-responsive col-md-12','id'=>'image-gallery-image')); ?>
              </div>

              <div class="item">
                <?php echo img(array('src'=>'assets/bower_components/images/Large_imageGallery2.jpg','class'=>'img-responsive col-md-12','id'=>'image-gallery-image')); ?>
              </div>
            
              <div class="item">
                <?php echo img(array('src'=>'assets/bower_components/images/Large_imageGallery3.jpg','class'=>'img-responsive col-md-12','id'=>'image-gallery-image')); ?>
              </div>

              <div class="item">
                <?php echo img(array('src'=>'assets/bower_components/images/Large_imageGallery4.jpg','class'=>'img-responsive col-md-12','id'=>'image-gallery-image')); ?>
              </div>

              <div class="item">
                <?php echo img(array('src'=>'assets/bower_components/images/Large_imageGallery5.jpg','class'=>'img-responsive col-md-12','id'=>'image-gallery-image')); ?>
              </div>
            </div>

            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php include( "layouts/javascripts.php"); ?>
<?php include( "layouts/footer.php"); ?>


