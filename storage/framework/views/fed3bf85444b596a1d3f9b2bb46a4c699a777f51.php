<?php $__env->startSection('content'); ?>
<div class="basic-form-area mg-tb-15">
 <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline12-list">
                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <div class="col-sm-6"><h1><?php echo e($page_title); ?></h1></div>
                                    <div class="col-sm-6 text text-right">
                                      <a href="<?php echo e(URL("admin/tenders")); ?>">List</a>
                                    </div>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="all-form-element-inner">
                                                

                                        <?php if(Request::segment(4)==='edit'): ?>
                                        <?php echo e(Form::model($tender, array('route' => array('tenders.update', $tender->id), 'method' => 'PUT','enctype'=>'multipart/form-data'))); ?>

                                        <?php  
                                          
                                          
                                          $tenderId          = $tender->tenderId;
                                          $InvitingAuthority         = $tender->InvitingAuthority;
                                          $PublishedDate     = $tender->PublishedDate;
                                          
                                          $InvitingAuthority   = $tender->InvitingAuthority;
                                          $WorkDescription          = $tender->WorkDescription;
                                          $BidSubmissionEndDate             = $tender->BidSubmissionEndDate;
                                          $StartTime                          =$tender->StartTime;
                                          $EndTime                          =$tender->EndTime;

                                          $TenderValue            = $tender->TenderValue;
                                          $EMD_Ammount        = $tender->EMD_Ammount;
                                          $TenderFee    = $tender->TenderFee;
                                          $Website      = $tender->Website;

                                          $NIT            = $tender->NIT;
                                          $Schedule          = $tender->Schedule;
                                          $BOQ         = $tender->BOQ;
                                          $MoreInfo         = $tender->MoreInfo;
                                          
                                        ?>
                                        <?php else: ?>
                                        <?php echo e(Form::open(array('url' => 'admin/tenders','enctype'=>'multipart/form-data','autocomplete'=>"off"))); ?>


                                        <?php 
                                                                              
                                          
                                          $tenderId="";
                                          $InvitingAuthority="";
                                          $PublishedDate="";
                                          $BidSubmissionEndDate="";
                                          $StartTime ="";
                                          $EndTime ="";
                                          
                                          $TenderValue = '';
                                          $EMD_Ammount = "";
                                          $TenderFee = "";

                                          $Website="";
                                          $NIT ="";
                                          $Schedule ="";
                                          $BOQ ="";

                                          $MoreInfo ="";
                                          $WorkDescription = "";
                                          

                                        ?>
                                        <?php endif; ?>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                          
                                                          <div class="col-sm-6">
                                                                  <label class="pull-right-pro">Tender ID </label>
                                                                  <input type="text" class="form-control" autocomplete="off" name="tenderId" id="tenderId" value="<?php echo e(old('tenderId')?old('tenderId'):$tenderId); ?>" autocomplete="none" placeholder="Enter Tender Id" />
                                                                  <div class="text text-danger" id="tenderIdError"></div>
                                                                  <?php if($errors->has('tenderId')): ?>
                                                                    <div class="text text-danger"><?php echo e($errors->first('tenderId')); ?></div>
                                                                  <?php endif; ?>
                                                          </div>

                                                          

                                                          <div class="col-sm-6">
                                                                  <label class="pull-right-pro">Inviting Authority</label>
                                                                  <input type="text" class="form-control" name="InvitingAuthority" id="InvitingAuthority" value="<?php echo e(old('InvitingAuthority')?old('InvitingAuthority'):$InvitingAuthority); ?>" placeholder="Enter Authority Detail" />
                                                                  <?php if($errors->has('InvitingAuthority')): ?>
                                                                    <div class="text text-danger"><?php echo e($errors->first('InvitingAuthority')); ?></div>
                                                                  <?php endif; ?>
                                                          </div>
                                                        </br></br></br></br>
                                                          <div class="col-sm-6">
                                                                  <label class="pull-right-pro">Published Date</label>
                                                                  <input type="text" class="form-control" name="PublishedDate" value="<?php echo e(old('PublishedDate')?old('PublishedDate'):$PublishedDate); ?>" placeholder="Enter Published Date" />
                                                                  <?php if($errors->has('PublishedDate')): ?>
                                                                    <div class="text text-danger"><?php echo e($errors->first('PublishedDate')); ?></div>
                                                                  <?php endif; ?>
                                                          </div>

                                                         
                                                        
                                                          <div class="col-sm-6">
                                                                  <label class="pull-right-pro">Bid Submission End Date</label>
                                                                  <input type="text" autocomplete="off" class="form-control" name="BidSubmissionEndDate" value="<?php echo e(old('BidSubmissionEndDate')?old('BidSubmissionEndDate'):$BidSubmissionEndDate); ?>" placeholder="Enter Last Date" />
                                                                  <?php if($errors->has('BidSubmissionEndDate')): ?>
                                                                    <div class="text text-danger"><?php echo e($errors->first('BidSubmissionEndDate')); ?></div>
                                                                  <?php endif; ?>
                                                          </div> 
                                                          </br></br></br></br>
                                                          <div class="col-sm-6">
                                                                  <label class="pull-right-pro">Start Time</label>
                                                                  <input type="text" autocomplete="off" class="form-control" name="StartTime" value="<?php echo e(old('StartTime')?old('StartTime'):$StartTime); ?>" placeholder="Enter Start Time" />
                                                                  <?php if($errors->has('StartTime')): ?>
                                                                    <div class="text text-danger"><?php echo e($errors->first('StartTime')); ?></div>
                                                                  <?php endif; ?>
                                                          </div> 
                                                          <div class="col-sm-6">
                                                                  <label class="pull-right-pro">End Time</label>
                                                                  <input type="text" autocomplete="off" class="form-control" name="EndTime" value="<?php echo e(old('EndTime')?old('EndTime'):$EndTime); ?>" placeholder="Enter End Time" />
                                                                  <?php if($errors->has('EndTime')): ?>
                                                                    <div class="text text-danger"><?php echo e($errors->first('EndTime')); ?></div>
                                                                  <?php endif; ?>
                                                          </div> 
                                                          
                                                          </br></br></br></br>
                                                          <div class="col-sm-6">
                                                                  <label class="pull-right-pro">Tender Value</label>
                                                                  <input type="text" class="form-control" name="TenderValue" id="TenderValue" value="<?php echo e(old('TenderValue')?old('TenderValue'):$TenderValue); ?>" placeholder="Enter Tender Value" />
                                                                  <?php if($errors->has('TenderValue')): ?>
                                                                    <div class="text text-danger"><?php echo e($errors->first('TenderValue')); ?></div>
                                                                  <?php endif; ?>
                                                          </div>
                                                          <div class="col-sm-6">
                                                                  <label class="pull-right-pro">EMD Ammount</label>
                                                                  <input type="text" class="form-control" name="EMD_Ammount" value="<?php echo e(old('EMD_Ammount')?old('EMD_Ammount'):$EMD_Ammount); ?>" placeholder="Enter EMD Ammount" />
                                                                  <?php if($errors->has('EMD_Ammount')): ?>
                                                                    <div class="text text-danger"><?php echo e($errors->first('EMD_Ammount')); ?></div>
                                                                  <?php endif; ?>
                                                          </div>
                                                          </br></br></br></br>
                                                       

                                                          <div class="col-sm-6">
                                                                  <label class="pull-right-pro">Tender Fee</label>
                                                                  <input type="text" autocomplete="off" class="form-control" name="TenderFee" value="<?php echo e(old('TenderFee')?old('TenderFee'):$TenderFee); ?>" placeholder="Enter Tender Fee" />
                                                                  <?php if($errors->has('TenderFee')): ?>
                                                                    <div class="text text-danger"><?php echo e($errors->first('TenderFee')); ?></div>
                                                                  <?php endif; ?>
                                                          </div>

                                                           <div class="col-sm-6">
                                                                  <label class="pull-right-pro">Website</label>
                                                                  <input type="url" class="form-control" name="Website" value="<?php echo e(old('Website')?old('Website'):$Website); ?>" placeholder="Enter Website Url" />
                                                                  <?php if($errors->has('Website')): ?>
                                                                    <div class="text text-danger"><?php echo e($errors->first('Website')); ?></div>
                                                                  <?php endif; ?>
                                                          </div>
                                                          </br></br></br></br>
                                                          <div class="col-sm-6">
                                                                  <label class="pull-right-pro">Download NIT</label>
                                                                  <input type="url" class="form-control" name="NIT" id="NIT" value="<?php echo e(old('NIT')?old('NIT'):$NIT); ?>" placeholder="Enter NIT Url" />
                                                                  <?php if($errors->has('NIT')): ?>
                                                                    <div class="text text-danger"><?php echo e($errors->first('NIT')); ?></div>
                                                                  <?php endif; ?>
                                                          </div>
                                                        

                                                    
                                                         
                                                          <div class="col-sm-6">
                                                                  <label class="pull-right-pro">Download Schedule</label>
                                                                  <input type="url" class="form-control" name="Schedule" value="<?php echo e(old('Schedule')?old('Schedule'):$Schedule); ?>" placeholder="Enter Schedule Url" />
                                                                  <?php if($errors->has('Schedule')): ?>
                                                                    <div class="text text-danger"><?php echo e($errors->first('Schedule')); ?></div>
                                                                  <?php endif; ?>
                                                          </div>
                                                          </br></br></br></br>

                                                        
                                                            <div class="col-sm-6">
                                                                  <label class="pull-right-pro">Download BOQ</label>
                                                                  <input type="url" autocomplete="off" class="form-control" name="BOQ" value="<?php echo e(old('BOQ')?old('BOQ'):$BOQ); ?>" placeholder="Enter BOQ Url" />
                                                                  <?php if($errors->has('BOQ')): ?>
                                                                    <div class="text text-danger"><?php echo e($errors->first('BOQ')); ?></div>
                                                                  <?php endif; ?>
                                                          </div>
                                                          <div class="col-sm-6">
                                                                  <label class="pull-right-pro">More Info</label>
                                                                  <input type="text" autocomplete="off" class="form-control" name="MoreInfo" value="<?php echo e(old('MoreInfo')?old('MoreInfo'):$MoreInfo); ?>" placeholder="Enter Detail" />
                                                                  <?php if($errors->has('MoreInfo')): ?>
                                                                    <div class="text text-danger"><?php echo e($errors->first('MoreInfo')); ?></div>
                                                                  <?php endif; ?>
                                                          </div>

                                                          </div>
                                                    </div>

                                                          
                                                        

                                                    
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                          <div class="col-sm-12">
                                                                  <label class="pull-right-pro">Work Description</label>
                                                                  
                                                                  <textarea class="form-control" name="WorkDescription" placeholder="Enter Work Detail" ><?php echo e(old('WorkDescription')?old('WorkDescription'):$WorkDescription); ?></textarea>
                                                                  <?php if($errors->has('WorkDescription')): ?>
                                                                    <div class="text text-danger"><?php echo e($errors->first('WorkDescription')); ?></div>
                                                                  <?php endif; ?>
                                                          </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="login-btn-inner">
                                                            <div class="row">
                                                                <div class="col-lg-6"></div>
                                                                <div class="col-lg-6">
                                                                    <div class="login-horizental cancel-wp ">
                                                                        <!--<button class="btn btn-white" type="submit">Cancel</button>-->
                                                                        <button class="btn btn-sm btn-primary login-submit-cs pull-centre" type="submit">Save</button>
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

  

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>