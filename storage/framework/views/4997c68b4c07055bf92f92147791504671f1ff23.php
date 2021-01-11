<?php $__env->startSection('content'); ?>
<div class="basic-form-area mg-tb-15">
 <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline12-list">
                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <div class="col-sm-6"><h1><?php echo e($page_title); ?></h1></div>
                                    <div class="col-sm-6 text text-right">
                                      <a href="<?php echo e(URL("admin/product")); ?>">List</a>
                                    </div>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="all-form-element-inner">
                                                

                                        <?php if(Request::segment(4)==='edit'): ?>
                                        <?php echo e(Form::model($product, array('route' => array('product.update', $product->id), 'method' => 'PUT','enctype'=>'multipart/form-data'))); ?>

                                        <?php  
                                            $name= $product->name;
                                            $publisher= $product->publisher;
                                            $author= $product->author;
                                            $city= $product->city;
                                            $long_des= $product->long_des;
                                            $short_des= $product->short_des;
                                            $selling_price= $product->selling_price;
                                            $purchase_price= $product->purchase_price;
                                        ?>
                                        <?php else: ?>
                                        <?php echo e(Form::open(array('url' => 'admin/product','enctype'=>'multipart/form-data'))); ?>


                                        <?php 
                                            
                                            $name= "";
                                            $publisher= "";
                                            $author= "";
                                            $short_des= "";
                                            $long_des= "";
                                            $image= "";
                                            $selling_price= "0";
                                            $purchase_price= "0";

                                        ?>
                                        <?php endif; ?>

                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Product Name</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="name" value="<?php echo e(old('name')?old('name'):$name); ?>" placeholder="Enter Registration Number" />
                                                                <?php if($errors->has('name')): ?>
                                                                  <div class="text text-danger"><?php echo e($errors->first('name')); ?></div>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Author</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" name="author" class="form-control" value="<?php echo e(old('author')?old('author'):$author); ?>" placeholder="Enter Author Name" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Publisher</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" name="publisher" class="form-control"  value="<?php echo e(old('publisher')?old('publisher'):$publisher); ?>" placeholder="Enter Publisher" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Selling Price</label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <input type="number" name="selling_price" class="form-control"  value="<?php echo e(old('selling_price')?old('selling_price'):$selling_price); ?>" required="" placeholder="Enter Selling Price" />
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Purchase Price</label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <input type="number" name="purchase_price" class="form-control"  value="<?php echo e(old('purchase_price')?old('purchase_price'):$purchase_price); ?>" placeholder="Enter Purchase Price" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Image </label>
                                                            </div>
                                                             <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro"> <img style="width: 50%;" src="<?php echo e(asset('assets/gallery.png')); ?>" id="imagePreview"> </label>
                                                            </div>
                                                           
                                                            <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                                                                <input type="file" id="files" name="file[]" multiple="" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                      <?php if(Request::segment(4)==='edit'): ?>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                          <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                              <label class="login2 pull-right pull-right-pro"></label>
                                                          </div>
                                                          <?php if(!empty($product->image)): ?>
                                                            <?php $__currentLoopData = $product->image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                              <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="text text-center">
                                                                   <?php if($value->IsDefault): ?>
                                                                    <i class="fa fa-check text text-success"></i>
                                                                  <?php else: ?>
                                                                    <i class="fa fa-remove text text-danger"></i>
                                                                  <?php endif; ?>
                                                                </div>
                                                                  <img style="width: 100px;height: 100px;" src="<?php echo e(asset('assets/img/product/'.$value->url)); ?>">
                                                                 
                                                              </div>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                          <?php endif; ?>
                                                            
                                                            

                                                        </div>
                                                    </div>
                                                    <?php endif; ?>

                                                      <div class="form-group-inner">
                                                    <div class="row">
                                                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                      <label class="login2 pull-right pull-right-pro">Short Description</label>
                                                      </div>
                                                      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <textarea placeholder="Short Description" name="short_des" class="form-control"><?php echo e(old('short_des')?old('short_des'):$short_des); ?></textarea>
                                                      </div>
                                                    </div>
                                                  </div>

                                                  <div class="form-group-inner">
                                                    <div class="row">
                                                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                      <label class="login2 pull-right pull-right-pro">Description</label>
                                                      </div>
                                                      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                         <textarea placeholder="Short Description"  id="summernote2" name="long_des" class="form-control"><?php echo e(old('long_des')?old('long_des'):$long_des); ?></textarea>
                                                         
                                                          
                                                        
                                                      </div>
                                                    </div>
                                                  </div>
               
                                                    <div class="form-group-inner">
                                                        <div class="login-btn-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3"></div>
                                                                <div class="col-lg-9">
                                                                    <div class="login-horizental cancel-wp pull-left">
                                                                        <button class="btn btn-white" type="submit">Cancel</button>
                                                                        <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Save Change</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('extrajs'); ?>
<style>
.imageThumb {
  max-height: 75px;
  border: 2px solid;
  padding: 1px;
  cursor: pointer;
}
.pip {
  display: inline-block;
  margin: 10px 10px 0 0;
}
.remove {
  display: block;
  background: #444;
  border: 1px solid black;
  color: white;
  text-align: center;
  cursor: pointer;
}
.remove:hover {
  background: white;
  color: black;
}
</style>
 <link rel="stylesheet" href="<?php echo e(asset('assets/css/form/all-type-forms.css')); ?>">
 <link rel="stylesheet" href="<?php echo e(asset('assets/css/summernote/summernote.css')); ?>  ">
    <script src="<?php echo e(asset('assets/js/summernote/summernote.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/summernote/summernote-active.js')); ?>"></script>
      <script type="text/javascript">



$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {

    $("#files").on("change", function(e) {
      console.log("change");
      var files = e.target.files,
      filesLength = files.length;
    
      for (var i = 0; i < filesLength; i++) {
        console.log("counter",i);
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<span class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove\">Remove image</span>" +
            "</span>").insertAfter("#files");

          $(".remove").click(function(){
            $(this).parent(".pip").remove();
          });
          
          // Old code here
          /*$("<img></img>", {
            class: "imageThumb",
            src: e.target.result,
            title: file.name + " | Click to remove"
          }).insertAfter("#files").click(function(){$(this).remove();});*/
          
        });
        fileReader.readAsDataURL(f);
      }
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});


  function readURL(input) {
  if (input.file && input.file[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#imagePreview').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}

$("#image").change(function() {
  readURL(this);
});
      </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>