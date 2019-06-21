        <script>
          $(document).ready(function () {
            $("a.thumbnail").click(function(){
              slide_idx = parseInt($(this).attr("data-image-id"));
              $('#myCarousel').carousel(slide_idx);
            })
          });
        </script>              
        <div class="form-group">
          <?php echo form_label('Category:', 'category'); ?>                         
          <?php echo form_input(['name'=>'category', 'class'=>'form-control', 'id'=>'category','value'=>set_value('category',$am_details->category), 'readonly'=>'readonly']) ?>
          <?php echo form_error('category','<div class="text-danger">','</div>') ?>
        </div>

        <div class="form-group">
          <?php echo form_label('Title:', 'title'); ?>
          <?php echo form_input(['name'=>'title', 'class'=>'form-control', 'id'=>'title','value'=>set_value('title',$am_details->title), 'readonly'=>'readonly']) ?>
          <?php echo form_error('title','<div class="text-danger">','</div>') ?>
        </div>

        <div class="form-group">
          <?php echo form_label('Price:', 'price'); ?>
          <?php echo form_input(['name'=>'price', 'class'=>'form-control', 'id'=>'price', 'value'=>set_value('price', $am_details->price), 'readonly'=>'readonly']) ?>
          <?php echo form_error('price','<div class="text-danger">','</div>') ?>
        </div>

        <div class="form-group">
          <?php echo form_label('Description:', 'desc'); ?>
          <?php echo form_textarea(['name'=>'textarea', 'value'=>set_value('textarea',$am_details->description), 'rows'=>'4', 'cols'=>'85', 'class'=>'form-control', 'id'=>'desc', 'readonly'=>'readonly']) ?>
        </div>

        <div class="form-group">
          <?php echo form_label('Seller Location:', 'location'); ?>
          <?php echo form_input(['name'=>'location', 'class'=>'form-control', 'id'=>'location','value'=>set_value('location', $am_details->seller_location), 'readonly'=>'readonly']) ?>
          <?php echo form_error('location','<div class="text-danger">','</div>') ?>
        </div>

        <div class="form-group">
          <?php echo form_label('Contact By:', 'contact_by'); ?>
          <div class="col-lg-12 col-md-12 col-xs-12 padding0">
            <?php echo img(array('src'=>'assets/bower_components/images/call.png','class'=>'img-rounded', 'alt'=>'Call', 'width'=>'50px')); ?>
            <?php echo img(array('src'=>'assets/bower_components/images/chat.png','class'=>'img-rounded', 'alt'=>'Chat', 'width'=>'50px')); ?>
            <?php echo img(array('src'=>'assets/bower_components/images/mail.png','class'=>'img-rounded', 'alt'=>'Mail', 'width'=>'50px')); ?>
            <?php echo img(array('src'=>'assets/bower_components/images/sms.png','class'=>'img-rounded', 'alt'=>'SMS', 'width'=>'50px')); ?>
          </div>
        </div>
      <div class="form-group">
        <?php echo form_label('Image Gallery:', 'image_gallery'); ?>
        <div class="col-lg-12 col-md-12 col-xs-12 padding0">
          <?php for($i=1; $i<=$am_details->image_gallery; $i++){ ?>

            <div class="col-lg-2 col-md-4 col-xs-6 thumb">

              <a class="thumbnail" href="#" data-image-id="0" data-href="ads_management/am_show_image_gallery/<?=$am_details->image_gallery?>/<?=$i?>" data-image="<?php base_url()?>assets/bower_components/images/Large_imageGallery<?=$i?>.jpg" data-target="#image-gallery" data-toggle="modal">
              <?php echo img(array('src'=>"assets/bower_components/images/imageGallery{$i}.jpg",'class'=>'img-thumbnail')); ?>
              </a>
            </div>

          <?php } ?>
        </div>
      </div>