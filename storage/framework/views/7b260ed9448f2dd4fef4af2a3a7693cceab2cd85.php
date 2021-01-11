



<div class="form-group">
   <div class="col-sm-12">
    <div class="col-sm-2">
     <label class="pull-right-pro">Title</label>
     </div>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="title"   value="<?php echo e(old('title')?old('title'):$title); ?>" placeholder="" />
    <div class="text text-danger" id="titleErro"></div>
    <?php if($errors->has('title')): ?>
     <div class="text text-danger"><?php echo e($errors->first('title')); ?></div>
    <?php endif; ?>
     </div>
</div>
</div>

<div class="form-group">
<div class="col-sm-12">
    <div class="col-sm-2">
     <label class="pull-right-pro">Description</label>
     </div>

    <div class="col-sm-10">
      <textarea name="body" id="body" rows="25" style="height:500, "><?php echo e(old('body')?old('body'):$body); ?></textarea> 
    <div class="text text-danger" id="bodyErro"></div>
    <?php if($errors->has('body')): ?>
     <div class="text text-danger"><?php echo e($errors->first('body')); ?></div>
    <?php endif; ?>
     </div>
</div>
</div>

<div class="form-group">
<div class="col-sm-12">
    <div class="col-sm-2">
     <label class="pull-right-pro">Image</label>
     </div>

    <div class="col-sm-10">
      <input type="file" name="images"   />
    <div class="text text-danger" id="imagesErro"></div>
    <?php if($errors->has('images')): ?>
     <div class="text text-danger"><?php echo e($errors->first('images')); ?></div>
    <?php endif; ?>
     </div>
</div>
</div>





<div class="form-group">
<div class="col-sm-12">
    <div class="col-sm-2">
     <label class="pull-right-pro">Tags</label>
    </div>

    <div class="col-sm-10">
      <input type="text" class="form-control" name="tags"   value="<?php echo e(old('tags')?old('tags'):$tags); ?>" placeholder="" />
    <div class="text text-danger" id="tagsErro"></div>
    <?php if($errors->has('tags')): ?>
     <div class="text text-danger"><?php echo e($errors->first('tags')); ?></div>
    <?php endif; ?>
     </div>
</div>
</div>
<div class="form-group">
<div class="col-sm-12">
    <div class="col-sm-2">
     <label class="pull-right-pro">Focus Keywords</label>
    </div>

    <div class="col-sm-10">
      <input type="text" class="form-control" name="keywords"   value="<?php echo e(old('keywords')?old('keywords'):$keywords); ?>" placeholder="" />
    <div class="text text-danger" id="keywordsErro"></div>
    <?php if($errors->has('keywords')): ?>
     <div class="text text-danger"><?php echo e($errors->first('keywords')); ?></div>
    <?php endif; ?>
     </div>
</div>
</div>
<div class="form-group">

<div class="col-sm-12">
    <div class="col-sm-2">
     <label class="pull-right-pro">Meta Tag</label>
 </div>

    <div class="col-sm-10">
      <input type="text" class="form-control" name="meta_tag"   value="<?php echo e(old('meta_tag')?old('meta_tag'):$meta_tag); ?>" placeholder="" />
    <div class="text text-danger" id="meta_tagErro"></div>
    <?php if($errors->has('meta_tag')): ?>
     <div class="text text-danger"><?php echo e($errors->first('meta_tag')); ?></div>
    <?php endif; ?>
     </div>
</div>
</div>
<div class="form-group">
<div class="col-sm-12">
    <div class="col-sm-2">
     <label class="pull-right-pro">Meta Description</label>
 </div>

    <div class="col-sm-10">
      <input type="text" class="form-control" name="meta_description"   value="<?php echo e(old('meta_description')?old('meta_description'):$meta_description); ?>" placeholder="" />
    <div class="text text-danger" id="meta_descriptionErro"></div>
    <?php if($errors->has('meta_description')): ?>
     <div class="text text-danger"><?php echo e($errors->first('meta_description')); ?></div>
    <?php endif; ?>
     </div>
</div>
</div>
<div class="form-group">
<div class="col-sm-12">
    <div class="col-sm-2">
     <label class="pull-right-pro">Slug</label>
    </div>

     <div class="col-sm-10">
      <input type="text" class="form-control" name="slug"   value="<?php echo e(old('slug')?old('slug'):$slug); ?>" placeholder="Enter Slug" />
    <div class="text text-danger" id="slugErro"></div>
    <?php if($errors->has('slug')): ?>
     <div class="text text-danger"><?php echo e($errors->first('slug')); ?></div>
    <?php endif; ?>
     </div>
</div>
</div>

