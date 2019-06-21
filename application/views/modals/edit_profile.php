            <?php echo form_hidden('user_id', $admin_info->user_id) ?>
            <?php echo form_hidden('profile_img', $admin_info->profile_img) ?>
            <div class="form-group">
              <?php echo form_label('Name:', 'admin_profile_name') ?>
              <?php echo form_input(['name'=>'admin_name', 'class'=>'form-control', 'id'=>'admin_profile_name','value'=>set_value('admin_name',$admin_info->admin_name), 'readonly'=>'readonly']) ?>
              <?php echo form_error('admin_name','<div class="text-danger">','</div>') ?>
           </div>

           <div class="form-group">
              <?php echo form_label('Email:', 'admin_profile_email') ?>
              <?php echo form_input(['name'=>'email', 'class'=>'form-control', 'id'=>'admin_profile_email','value'=>set_value('email',$admin_info->email), 'readonly'=>'readonly']) ?>
              <?php echo form_error('email','<div class="text-danger">','</div>') ?>
           </div>

           <div class="form-group npass">
              <?php echo form_label('New Password:', 'npass') ?>
              <?php echo form_input(['name'=>'new_password', 'class'=>'form-control', 'id'=>'npass', 'value'=>set_value('new_password',$admin_info->new_password), 'readonly'=>'readonly']) ?>
              <?php echo form_error('new_password','<div class="text-danger">','</div>') ?>
           </div>

            <div class="form-group cpass">
              <?php echo form_label('Confirm Password:', 'cpass') ?>
              <?php echo form_input(['name'=>'confirm_password', 'class'=>'form-control', 'id'=>'cpass', 'value'=>set_value('confirm_password',$admin_info->confirm_password), 'readonly'=>'readonly']) ?>
              <?php echo form_error('confirm_password','<div class="text-danger">','</div>') ?>
           </div>

            <div class="form-group">
              <?php echo form_label('Upload Profile Picture', 'upload_picture') ?>
              <div class="input-group">
                <span class="input-group-btn">
                  <span class="btn btn-default btn-file">
                    Browse...<?php echo form_upload(['name'=>'userfile', 'id'=>'upload_picture', 'onchange'=>'readURL(this)', 'class'=>'Edit_Upload', 'disabled'=>'disabled']) ?>
                  </span>
                </span>
                <?php echo form_input(['class'=>'form-control readonly', 'id'=>'upload_picture', 'placeholder'=>"{$admin_info->profile_img}", 'readonly'=>'readonly']) ?>
                <?php echo img(array('id'=>'img-upload')) ?>
                <?php if(isset($upload_error)) echo $upload_error ?>
              </div>
            </div>