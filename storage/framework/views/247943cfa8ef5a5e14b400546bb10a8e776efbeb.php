





      <textarea name="body" id="body" rows="25" style="height:500, "><?php echo e(old('body')?old('body'):$body); ?></textarea> 
    <div class="text text-danger" id="bodyErro"></div>
    <?php if($errors->has('body')): ?>
     <div class="text text-danger"><?php echo e($errors->first('body')); ?></div>
    <?php endif; ?>
     












