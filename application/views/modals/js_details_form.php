                        <?php echo form_hidden('logo', "{$js_details->logo}"); ?>
                        <div class="form-group">
                           <?php echo form_label('ID:', 'jmmao_id'); ?>
                           <?php echo form_input(['name'=>'jmmao_id', 'class'=>'form-control', 'id'=>'jmmao_id', 'value'=>"{$js_details->jmmao_id}",'readonly'=>'readonly']) ?>
                           <?php echo form_error('jmmao_id','<div class="text-danger">','</div>') ?>
                        </div>

                        <div class="form-group">
                           <?php echo form_label('Name:', 'jmmao_name'); ?>
                           <?php echo form_input(['name'=>'name', 'class'=>'form-control', 'id'=>'jmmao_name','value'=>"{$js_details->name}",'readonly'=>'readonly']) ?>
                           <?php echo form_error('jmmao_name','<div class="text-danger">','</div>') ?>
                        </div>

                        <div class="form-group">
                           <?php echo form_label('Discount Percentage:', 'discount'); ?>
                           <?php echo form_input(['name'=>'dis_percentage', 'class'=>'form-control', 'id'=>'discount','value'=>"{$js_details->dis_percentage}",'readonly'=>'readonly']) ?>
                           <?php echo form_error('discount','<div class="text-danger">','</div>') ?>
                        </div>
                        <div class="row form-group">
                          <div class="col-md-6 col-xs-12 col-sm-12">
                              <?php echo form_label('From Avail:', 'from_avail'); ?>
                              <?php echo form_input(['type'=>'date', 'name'=>'from_avail', 'class'=>'form-control', 'id'=>'from_avail','value'=>"{$js_details->from_avail}",'readonly'=>'readonly']) ?>
                          </div>
                          <div class="col-md-6 col-xs-12 col-sm-12">
                              <?php echo form_label('To Avail:', 'to_avail'); ?>
                              <?php echo form_input(['type'=>'date', 'name'=>'to_avail', 'class'=>'form-control', 'id'=>'to_avail','value'=>"{$js_details->to_avail}",'readonly'=>'readonly']) ?>
                          </div>
                        </div>

                        <div class="form-group">
                          <?php echo form_label('Website:', 'website'); ?>
                          <?php echo form_input(['name'=>'website', 'class'=>'form-control', 'id'=>'website', 'value'=>"{$js_details->website}", 'readonly'=>'readonly']) ?>
                          <?php echo form_error('website','<div class="text-danger">','</div>') ?>
                        </div>

                        <div class="form-group">
                          <?php echo form_label('Upload Logo', 'upload_logo') ?>
                          <div class="input-group">
                             <span class="input-group-btn">
                               <span class="btn btn-default btn-file">
                                 Browse...<?php echo form_upload(['name'=>'userfile','id'=>'upload_logo', 'onchange'=>'readURL(this)', 'class'=>'Edit_Upload', 'disabled'=>'disabled']) ?>
                               </span>
                             </span>
                             <?php echo form_input(['class'=>'form-control readonly', 'id'=>'upload_logo', 'placeholder'=>"{$js_details->logo}", 'readonly'=>'readonly']) ?>
                             <?php echo img(array('id'=>'img-upload')) ?>
                          </div>
                        </div>

                        <div class="form-group">
                          <?php echo form_label('Available:', 'available'); ?>
                          <?php echo form_checkbox(['name'=>'is_active', 'value'=>'1', 'id'=>'available', 'readonly'=>'readonly']) ?>
                        </div>