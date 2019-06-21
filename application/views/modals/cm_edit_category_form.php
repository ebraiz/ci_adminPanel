      <div class="form-group">
         <?php echo form_label('Category ID:', 'edit_category_id'); ?>
         <?php echo form_input(['name' =>'category_id', 'class'=>'form-control', 'id'=>'edit_category_id',
         'value'=>set_value('category_id', $edit_categories->category_id)]) ?>
         <?php echo form_error('category_id','<div class="text-danger">','</div>') ?>
      </div>
      <div class="form-group">
         <?php echo form_label('Category Name:', 'edit_category_name'); ?>
         <?php echo form_input([
            'name'=>'category_name', 
            'class'=>'form-control', 
            'id'=>'edit_category_name',
            'value'=>set_value('category_name', $edit_categories->category_name)]) ?>
         <?php echo form_error('category_name','<div class="text-danger">','</div>') ?>
      </div>
      <div class="form-group">
         <?php echo form_label('Is Available:', 'available'); ?>
         <?php echo form_checkbox(array('name'=>'is_available', 'value'=>'1', 'id'=>'is_available')) ?>
      </div>
   

