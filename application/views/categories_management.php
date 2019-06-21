<?php include("layouts/head.php"); ?>

   <body class="hold-transition skin-blue sidebar-mini">
      <script>
         $(function () {
            $("#myModal_CM_EDIT_Button").on("show.bs.modal", function(e) {
                var link = $(e.relatedTarget);
                $(this).find(".modal-body").html("");
                $(this).find(".modal-body").load(link.attr("data-href"));
            });
         })
      </script>

      <div class="wrapper">
  
         <?php include("layouts/header.php"); ?> 
         <?php include("layouts/side_navbar.php"); ?>

         <div class="content-wrapper">

            <section class="content-header">
               <?php echo heading('Categories Management', 1, 'class="title"') ?>

               <ol class="breadcrumb">
                  <li><i class="fa fa-dashboard"></i> Categories Management</li>
                  <!-- <li class="Categories">Categories</li> -->
               </ol>
            </section>

            <div class="page-wrapper padding25">
              <div class="row page-titles">
                  <div class="col-md-10 align-self-center">
                    <?php if(isset($upload_error)) echo $upload_error ?>
                    <?php if( $feedback = $this->session->flashdata('feedback')): 
                        $feedback_class = $this->session->flashdata('feedback_class');
                        ?>
                        <div class="alert <?= $feedback_class ?>">
                           <?= $feedback ?>
                        </div>
                    <?php endif; ?>
                     <!-- <h3 class="text-primary">Event Management - Categories</h3> -->
                  </div>
                  <div class="col-md-2 text-right">
                     <?php echo form_button('','Add', ['class'=>'btn btn-success', 'data-toggle'=>'modal', 'data-target'=>'#myModal']) ?>
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
                                          <th>Category ID</th>
                                          <th>Category Name</th>
                                          <th>Is Available</th>
                                          <th>Edit</th>
                                          <th>Delete</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(count($categories)): ?>
                                    <?php foreach($categories as $category): ?>
                                       <tr>
                                          <td><?= $category->category_id ?></td>
                                          <td><?= $category->category_name ?></td>
                                          <td>
                                             <?php echo form_checkbox(array('name'=>'is_available', 'value'=>'1', 'id'=>'is_available', 'disabled'=>'disabled')) ?>
                                          </td>
                                          <td>
                                             <?php echo anchor("#",'Edit', ['class'=>'btn btn-primary', 'data-toggle'=>'modal', 'data-target'=>'#myModal_CM_EDIT_Button', 'data-href' => "categories_management/cm_edit_category/{$category->category_id}"]) ?>
                                          </td>
                                          <td>
                                             <?php echo anchor("categories_management/cm_delete_category/{$category->category_id}",'Delete', ['class'=>'btn btn-danger']) ?>
                                          </td>
                                       </tr>
                                       <?php endforeach; ?>
                                       <?php else: ?>
                                        <tr>
                                          <td colspan="5">
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
    
         <!-- Modal for Adding Category-->
         <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <?php echo form_button('','&times', ['class'=>'close', 'data-dismiss'=>'modal']) ?>
                     <?php echo heading('Add New Category', 3, 'class="modal-title"') ?>
                  </div>
                  <?php echo form_open_multipart('categories_management/cm_add_category'); ?>
                  <?php echo form_hidden('user_id', $this->session->userdata('user_id')); ?>
                     <div class="modal-body">
                        <div class="form-group">
                           <?php echo form_label('Category Name:', 'add_category_name'); ?>
                           <?php echo form_input(['name'=>'category_name', 'class'=>'form-control', 'id'=>'add_category_name', 'placeholder'=>'Category Name Here' ,'required'=>'required']) ?>
                           <?php echo form_error('add_category_name','<div class="text-danger">','</div>') ?>
                        </div>
                        <div class="form-group">
                          <?php echo form_label('Upload Profile Picture', 'upload_picture') ?>
                          <div class="input-group">
                            <span class="input-group-btn">
                                <span class="btn btn-default btn-file">
                                    Browse...<?php echo form_upload(['name'=>'userfile','id'=>'upload_picture', 'onchange'=>'readURL(this)']) ?>
                                </span>
                            </span>
                            <?php echo form_input(['class'=>'form-control', 'id'=>'upload_picture', 'placeholder'=>'Upload Profile Picture', 'readonly'=>'readonly']) ?>
                            <?php echo img(array('id'=>'img-upload')) ?>
                          </div>
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

         <!-- Modal For Edit Button -->
         <div class="modal fade" id="myModal_CM_EDIT_Button" role="dialog">
            <div class="modal-dialog">
               
               <!-- Modal content-->
               <div class="modal-content">
                  <?php echo form_open("categories_management/cm_update_category") ?>
                     <div class="modal-body"></div>
                     <div class="modal-footer">
                        <?php echo form_submit('submit', 'Update', ['class'=>'btn btn-success','id'=>'update']) ?>
                        <?php echo form_button('','Close', ['class'=>'btn btn-default', 'data-dismiss'=>'modal']) ?>
                     </div>
                  <?php echo form_close() ?>
               </div>
            </div>
         </div>
         <!--End of myModal2-->

<?php include("layouts/javascripts.php"); ?>
<?php include("layouts/footer.php"); ?>