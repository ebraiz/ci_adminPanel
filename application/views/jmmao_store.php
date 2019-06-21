<?php include("layouts/head.php"); ?>

   <body class="hold-transition skin-blue sidebar-mini">
      <script>
         $(function () {
            $("#JS_Detail_Button").on("show.bs.modal", function(e) {
                var link = $(e.relatedTarget);
                $(this).find(".modal-body").html("");
                $(this).find(".modal-body").load(link.attr("data-href"));
            });

            $("#showImage").on("show.bs.modal", function(e) {
                var link = $(e.relatedTarget);
                $(this).find(".modal-dialog").html("");
                $(this).find(".modal-dialog").load(link.attr("data-href"));
            });
         })
      </script>

      <div class="wrapper">

         <?php include("layouts/header.php"); ?>
         <?php include("layouts/side_navbar.php"); ?>

         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <?php echo heading('JMMAO Store',1, 'class="title"') ?>
               <ol class="breadcrumb">
                  <li><i class="fa fa-dashboard"></i> JMMAO Store</li>
                  <!-- <li class="active"></li> -->
               </ol>
            </section>
            <div class="page-wrapper padding25">
               <div class="row page-titles">
                  <div class="col-md-10 align-self-center">
                     <?php if( $feedback = $this->session->flashdata('feedback')): 
                        $feedback_class = $this->session->flashdata('feedback_class');
                        ?>
                        <div class="alert <?= $feedback_class ?>">
                          <?= $feedback ?>
                        </div>
                     <?php endif; ?>
                     <!-- <h3 class="text-primary">Event Management - My Events</h3> -->
                  </div>
                  <div class="col-md-2 text-right">
                     <?php echo form_button('','Add', ['class'=>'btn btn-success', 'data-toggle'=>'modal', 'data-target'=>'#myModal_js_Add_button']) ?>
                  </div>
               </div>
               <!-- Main content -->
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-12">
                        <div class="card">
                           <div class="card-body">
                              <div class="table-responsive m-t-40">
                                 <table id="example23" class="text-center display nowrap table table-hover table-striped table-bordered"
                                    cellspacing="0" width="100%">
                                    <thead>
                                       <tr>
                                          <th>ID</th>
                                          <th>Name</th>
                                          <th>Logo</th>
                                          <th>Discount Percentage</th>
                                          <th>Available</th>
                                          <th>From Avail</th>
                                          <th>To Avail</th>
                                          <th>Details</th>
                                          <th>Delete</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php if(!empty($jmmao_stores)): ?>
                                       <?php foreach($jmmao_stores as $jmmao_store): ?>
                                       <tr>
                                          <td><?= $jmmao_store->jmmao_id ?></td>
                                          <td><?= $jmmao_store->name ?></td>
                                          <td>
                                             <a href="#" title="click on image for large view" data-toggle="modal" data-target="#showImage" data-href='jmmao_store/js_show_large_image/<?= $jmmao_store->jmmao_id ?>'>
                                                <?php echo img(array('id'=>'image-gallery-image', 'class'=>'img-responsive col-md-12', 'src'=>"{$jmmao_store->logo}", 'alt'=>'logo', 'style'=>'width:80px')); ?>
                                             </a>
                                          </td>
                                          <td><?= $jmmao_store->dis_percentage ?></td>
                                          <td>
                                            <?php echo form_checkbox(array('name'=>'available', 'value'=>'1', 'id'=>'available', 'disabled'=>'disabled')) ?>
                                          </td>
                                          <td><?= $jmmao_store->from_avail ?></td>
                                          <td><?= $jmmao_store->to_avail ?></td>
                                          <td>
                                             <?php echo anchor("#",'<i class="fa fa-info-circle" aria-hidden="true"></i>', ['data-toggle'=>'modal', 'data-target'=>'#JS_Detail_Button', 'data-href' => "jmmao_store/js_details_form/{$jmmao_store->jmmao_id}"]) ?>
                                          </td>
                                          <td>
                                             <?php echo anchor("jmmao_store/js_delete_details/{$jmmao_store->jmmao_id}",'Delete', ['class'=>'btn btn-danger']) ?>
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
         
        <!--Modal For Showing Large Image-->
        <div class="modal fade" id="showImage" role="dialog">
         <div class="modal-dialog modal-custom"></div>
        </div>

         <!-- Modal for JMMAO Store details-->
         <div class="modal fade" id="JS_Detail_Button" role="dialog">
            <div class="modal-dialog">

               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header">
                     <?php echo form_button('','&times', ['class'=>'close', 'data-dismiss'=>'modal']) ?>
                     <?php echo heading('JMMAO Store Details',3, 'class="modal-title"') ?>
                  </div>
                    <?php echo form_open_multipart('jmmao_store/js_details_update_form') ?>                      
                  <div class="modal-body"></div>
                  <div class="modal-footer">
                    <?php echo form_submit('submit', 'Save', ['class'=>'btn btn-success add-attr', 'id'=>'submit']) ?>
                    <?php echo form_button('','Edit', ['class'=>'btn btn-primary remove-attr']) ?>
                    <?php echo form_button('','Close', ['class'=>'btn btn-default', 'data-dismiss'=>'modal']) ?>
                  </div>
                  <?php echo form_close() ?>
               </div>
            </div>
         </div>

         <!-- Modal for Add Button -->
         <div class="modal fade" id="myModal_js_Add_button" role="dialog">
            <div class="modal-dialog">

               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header">
                     <?php echo form_button('','&times', ['class'=>'close', 'data-dismiss'=>'modal']) ?>
                     <?php echo heading('Add New Category',3, 'class="modal-title"') ?>
                  </div>
                  <div class="modal-body">
                    <?php echo form_open('jmmao_store/js_add_category') ?>
                      <div class="form-group">
                         <?php echo form_label('Category Name:', 'category_name'); ?>
                         <?php echo form_input(['name'=>'name', 'class'=>'form-control', 'id'=>'category_name', 'placeholder'=>'Category Name Here', 'required'=>'required']) ?>
                         <?php echo form_error('category_name','<div class="text-danger">','</div>') ?>
                      </div>
                  </div>
                  <div class="modal-footer">
                     <?php echo form_submit('submit', 'Submit', ['class'=>'btn btn-success','id'=>'submit']) ?>
                     <?php echo form_button('','Close', ['class'=>'btn btn-default', 'data-dismiss'=>'modal']) ?>
                  </div>
                  <?php echo form_close() ?>
               </div>
            </div>
         </div>

<?php include("layouts/javascripts.php"); ?>
<?php include("layouts/footer.php"); ?>