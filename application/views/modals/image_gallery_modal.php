<div id="myCarousel" class="carousel slide" data-ride="carousel">

  <ol class="carousel-indicators">
    <?php 
      for($i=1; $i<=$img_gallery; $i++){
        $active = ($i == $img_id) ? 'active' : ''; 
    ?>
      <li data-target="#myCarousel" data-slide-to="<?=$i-1?>" class="<?=$active?>"></li>
    <?php } ?>
  </ol>

  <div class="carousel-inner">
    <?php 
    
      for($i=1; $i<=$img_gallery; $i++){ 
        $active = ($i == $img_id) ? 'active' : '';
    ?>
    <div class="item <?=$active?>">
      <?php echo img(array('src'=>"assets/bower_components/images/Large_imageGallery{$i}.jpg",'class'=>'img-responsive col-md-12','id'=>'image-gallery-image')); ?>
    </div>
    <?php } ?>
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