

 
<br><br><br>

 <div class="col-sm-12">
  <textarea  class="form-control" name="detail" id="detail" rows="25" cols="" value=""  /><?php echo e(old('detail')?old('detail'):$detail); ?></textarea>
  <div class="text text-danger" id="detailErro"></div>
   <?php if($errors->has('detail')): ?>
   <div class="text text-danger"><?php echo e($errors->first('detail')); ?></div>
  <?php endif; ?>
</div>





