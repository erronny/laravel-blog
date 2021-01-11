<?php $__env->startSection('content'); ?>
<div class="basic-form-area mg-tb-15">
 <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline12-list">
                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <div class="col-sm-6"><h1>Products <span class="table-project-n">Create</span></h1></div>
                                    <div class="col-sm-6 text text-right">
                                      <a href="<?php echo e(URL("admin/language")); ?>">List</a>
                                    </div>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="all-form-element-inner">
                                                <form action="#">
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Product Name</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" />
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
                                                                <div class="file-upload-inner file-upload-inner-right ts-forms">
                                                                    <div class="input append-big-btn">
                                                                        <label class="icon-left" for="append-big-btn">
                                                                         <i class="fa fa-download"></i>
                                                                          </label>
                                                                        <div class="file-button">
                                                                            Browse
                                                                            <input id="image" type="file" onchange="document.getElementById('append-big-btn').value = this.value;">
                                                                        </div>
                                                                        <input type="text" id="append-big-btn" placeholder="no file selected">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                      <div class="form-group-inner">
                                                    <div class="row">
                                                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                      <label class="login2 pull-right pull-right-pro">Short Description</label>
                                                      </div>
                                                      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <textarea placeholder="Short Description" class="form-control"></textarea>
                                                      </div>
                                                    </div>
                                                  </div>

                                                  <div class="form-group-inner">
                                                    <div class="row">
                                                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                      <label class="login2 pull-right pull-right-pro">Description</label>
                                                      </div>
                                                      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                         <div id="summernote2">
                                                          <div class="note-editable panel-body" contenteditable="true" style="height: 200px;"></div>
                                                        </div>
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
 <link rel="stylesheet" href="<?php echo e(asset('assets/css/form/all-type-forms.css')); ?>">
 <link rel="stylesheet" href="<?php echo e(asset('assets/css/summernote/summernote.css')); ?>  ">
    <script src="<?php echo e(asset('assets/js/summernote/summernote.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/summernote/summernote-active.js')); ?>"></script>
      <script type="text/javascript">
        
  function readURL(input) {
  if (input.files && input.files[0]) {
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