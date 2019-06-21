    <?php include("layouts/head.php"); ?>

    <body class="hold-transition skin-blue sidebar-mini">
      <script>
        $(function () {
          $("#am_details_form").on("show.bs.modal", function(e) {
              var link = $(e.relatedTarget);
              $(this).find(".modal-body").html("");
              $(this).find(".modal-body").load(link.attr("data-href"));
          });

          $("#image-gallery").on("show.bs.modal", function(e) {
              var link = $(e.relatedTarget);
              $(this).find(".modal-body").html("");
              $(this).find(".modal-body").load(link.attr("data-href"));
          });
        });
      </script>

      <div class="wrapper">
         
        <?php include("layouts/header.php"); ?>
        <?php include("layouts/side_navbar.php"); ?>
         
         <div class="content-wrapper">
            <section class="content-header">

              <?php echo heading('Ads Management', 1, 'class="title"') ?>

               <ol class="breadcrumb">
                  <li><i class="fa fa-dashboard"></i> Ads Management</li>
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
                                 <table id="example23" class="text-center display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                      <tr>
                                        <th>ID</th>
                                        <th>User ID</th>
                                        <th>Category</th>
                                        <th>Title</th>
                                        <th>Price</th>
                                        <th>Is Active</th>
                                        <th>Is Featured</th>
                                        <th>Featured Date</th>
                                        <th>Details</th>
                                      </tr>
                                    </thead>

                                    <tbody>
                                      <?php if(count($ads)): ?>
                                        <?php foreach($ads as $ad): ?>
                                       <tr>
                                          <td><?= $ad->ads_id ?></td>
                                          <td><?= $ad->user_id ?></td>
                                          <td><?= $ad->category ?></td>
                                          <td><?= $ad->title ?></td>
                                          <td><?= $ad->price ?></td>
                                          <td>
                                            <?php echo form_checkbox('is_active', '1') ?>
                                          </td>
                                          <td>
                                            <?php echo form_checkbox('is_featured', '2') ?>
                                          </td>
                                          <td><?= $ad->feature_date ?></td>
                                          <td>
                                            <?php echo anchor("#",'<i class="fa fa-info-circle" aria-hidden="true"></i>', ['data-toggle'=>'modal', 'data-target'=>'#am_details_form', 'data-href' => "ads_management/am_show_details/{$ad->ads_id}"]) ?>
                                          </td>
                                       </tr>
                                       <?php endforeach; ?>
                                       <?php else: ?>
                                        <tr>
                                          <td>
                                            No Records Found.
                                          </td>
                                        </tr>
                                      <?php endif; ?>
                                    </tbody>
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
         <!-- /.content-wrapper -->

        <!-- Modal For showing Details-->
        <div class="modal fade" id="am_details_form" role="dialog">
           <div class="modal-dialog">
              <div class="modal-content">
                 <div class="modal-header">
                    <?php echo form_button('','&times', ['class'=>'close', 'data-dismiss'=>'modal']) ?>
                    <?php echo heading('Advertisment Details', 3, 'class="modal-title"') ?>
                 </div>
                <?php echo form_open('ads_management/am_show_details') ?>
                <div class="modal-body"></div>
                <?php echo form_close() ?>

                <div class="modal-footer">
                  <?php echo form_button('','Close', ['class'=>'btn btn-default', 'data-dismiss'=>'modal']) ?>
                </div>
              </div>
           </div>
        </div>

        <!-- Modal for Showing Image Gallery-->
        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <?php echo form_button('','<span aria-hidden="true">×</span><span class="sr-only">Close</span>', ['class'=>'close', 'data-dismiss'=>'modal']) ?>
              </div>
              <div class="modal-body"></div>
            </div>
          </div>
        </div>
        <!-- End of image-gallery Modal -->
        
      <?php include("layouts/javascripts.php"); ?>
      <?php include("layouts/footer.php"); ?>