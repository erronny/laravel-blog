<div class="col-sm-12">

    												<div class="col-sm-8">
                                                      <input type="text" class="form-control" name="name" id="name" value="<?php echo e(old('name')?old('name'):$name); ?>" placeholder="Enter Page Name.." />
                                                      <div class="text text-danger" id="nameErro"></div>
                                                        <?php if($errors->has('name')): ?>
                                                        <div class="text text-danger"><?php echo e($errors->first('name')); ?></div>
                                                      <?php endif; ?>
                                                  </div>
</div>
<br>
<div class="col-sm-12">

    												<div class="col-sm-8">
                                                      <input type="text" class="form-control" name="url" id="url" value="<?php echo e(old('url')?old('url'):$url); ?>" placeholder="Enter Page url.." />
                                                      <div class="text text-danger" id="urlErro"></div>
                                                        <?php if($errors->has('url')): ?>
                                                        <div class="text text-danger"><?php echo e($errors->first('url')); ?></div>
                                                      <?php endif; ?>
                                                  </div>
</div>


