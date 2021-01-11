<div class="col-sm-12">
<div class="col-sm-4">
    <label class="pull-right-pro">Page Name<span class="required">*</span></label></div>
    												<div class="col-sm-8">
                                                      <input type="text" class="form-control" name="name" id="name" value="<?php echo e(old('name')?old('name'):$name); ?>" placeholder="Enter Page Name.." />
                                                      <div class="text text-danger" id="nameErro"></div>
                                                        <?php if($errors->has('name')): ?>
                                                        <div class="text text-danger"><?php echo e($errors->first('name')); ?></div>
                                                      <?php endif; ?>
                                                  </div>
</div>


