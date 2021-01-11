@extends('layouts.master')


@section('content')
<div class="basic-form-area mg-tb-15">
 <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline12-list">
                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <div class="col-sm-6"><h1>{{$page_title}}</h1></div>
                                    <div class="col-sm-6 text text-right">
                                      <a href="{{ URL("admin/tenders")}}">List</a>
                                    </div>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="all-form-element-inner">
                                                

                                        @if(Request::segment(4)==='edit')
                                        {{ Form::model($tender, array('route' => array('tenders.update', $tender->id), 'method' => 'PUT','enctype'=>'multipart/form-data')) }}
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
                                          $department         = $tender->department;
                                          $trn         = $tender->trn;
                                          $location         = $tender->location;
                                          $product_category         = $tender->product_category;
                                          $keawords         = $tender->keawords;
                                          
                                        ?>
                                        @else
                                        {{ Form::open(array('url' => 'admin/tenders','enctype'=>'multipart/form-data','autocomplete'=>"off")) }}

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
                                          $department = "";
                                          $trn = "";
                                          $location = "";
                                          $product_category = "";
                                          $keawords = "";
                                          $WorkDescription = "";
                                          

                                        ?>
                                        @endif
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                          
                                                          <div class="col-sm-6">
                                                                  <label class="pull-right-pro">Tender ID </label>
                                                                  <input type="text" class="form-control" autocomplete="off" name="tenderId" id="tenderId" value="{{old('tenderId')?old('tenderId'):$tenderId}}" autocomplete="none" placeholder="Enter Tender Id" />
                                                                  <div class="text text-danger" id="tenderIdError"></div>
                                                                  @if($errors->has('tenderId'))
                                                                    <div class="text text-danger">{{ $errors->first('tenderId') }}</div>
                                                                  @endif
                                                          </div>

                                                          

                                                          <div class="col-sm-6">
                                                                  <label class="pull-right-pro">Inviting Authority</label>
                                                                  <input type="text" class="form-control" name="InvitingAuthority" id="InvitingAuthority" value="{{old('InvitingAuthority')?old('InvitingAuthority'):$InvitingAuthority}}" placeholder="Enter Authority Detail" />
                                                                  @if($errors->has('InvitingAuthority'))
                                                                    <div class="text text-danger">{{ $errors->first('InvitingAuthority') }}</div>
                                                                  @endif
                                                          </div>
                                                        </br></br></br></br>
                                                          <div class="col-sm-6">
                                                                  <label class="pull-right-pro">Published Date</label>
                                                                  <input type="text" class="form-control" name="PublishedDate" value="{{old('PublishedDate')?old('PublishedDate'):$PublishedDate}}" placeholder="Enter Published Date" />
                                                                  @if($errors->has('PublishedDate'))
                                                                    <div class="text text-danger">{{ $errors->first('PublishedDate') }}</div>
                                                                  @endif
                                                          </div>

                                                         
                                                        
                                                          <div class="col-sm-6">
                                                                  <label class="pull-right-pro">Bid Submission End Date</label>
                                                                  <input type="text" autocomplete="off" class="form-control" name="BidSubmissionEndDate" value="{{old('BidSubmissionEndDate')?old('BidSubmissionEndDate'):$BidSubmissionEndDate}}" placeholder="Enter Last Date" />
                                                                  @if($errors->has('BidSubmissionEndDate'))
                                                                    <div class="text text-danger">{{ $errors->first('BidSubmissionEndDate') }}</div>
                                                                  @endif
                                                          </div> 
                                                          </br></br></br></br>
                                                          <div class="col-sm-6">
                                                                  <label class="pull-right-pro">Start Time</label>
                                                                  <input type="text" autocomplete="off" class="form-control" name="StartTime" value="{{old('StartTime')?old('StartTime'):$StartTime}}" placeholder="Enter Start Time" />
                                                                  @if($errors->has('StartTime'))
                                                                    <div class="text text-danger">{{ $errors->first('StartTime') }}</div>
                                                                  @endif
                                                          </div> 
                                                          <div class="col-sm-6">
                                                                  <label class="pull-right-pro">End Time</label>
                                                                  <input type="text" autocomplete="off" class="form-control" name="EndTime" value="{{old('EndTime')?old('EndTime'):$EndTime}}" placeholder="Enter End Time" />
                                                                  @if($errors->has('EndTime'))
                                                                    <div class="text text-danger">{{ $errors->first('EndTime') }}</div>
                                                                  @endif
                                                          </div> 
                                                          
                                                          </br></br></br></br>
                                                          <div class="col-sm-6">
                                                                  <label class="pull-right-pro">Tender Value</label>
                                                                  <input type="text" class="form-control" name="TenderValue" id="TenderValue" value="{{old('TenderValue')?old('TenderValue'):$TenderValue}}" placeholder="Enter Tender Value" />
                                                                  @if($errors->has('TenderValue'))
                                                                    <div class="text text-danger">{{ $errors->first('TenderValue') }}</div>
                                                                  @endif
                                                          </div>
                                                          <div class="col-sm-6">
                                                                  <label class="pull-right-pro">EMD Ammount</label>
                                                                  <input type="text" class="form-control" name="EMD_Ammount" value="{{old('EMD_Ammount')?old('EMD_Ammount'):$EMD_Ammount}}" placeholder="Enter EMD Ammount" />
                                                                  @if($errors->has('EMD_Ammount'))
                                                                    <div class="text text-danger">{{ $errors->first('EMD_Ammount') }}</div>
                                                                  @endif
                                                          </div>
                                                          </br></br></br></br>
                                                       

                                                          <div class="col-sm-6">
                                                                  <label class="pull-right-pro">Tender Fee</label>
                                                                  <input type="text" autocomplete="off" class="form-control" name="TenderFee" value="{{old('TenderFee')?old('TenderFee'):$TenderFee}}" placeholder="Enter Tender Fee" />
                                                                  @if($errors->has('TenderFee'))
                                                                    <div class="text text-danger">{{ $errors->first('TenderFee') }}</div>
                                                                  @endif
                                                          </div>

                                                           <div class="col-sm-6">
                                                                  <label class="pull-right-pro">Website</label>
                                                                  <input type="url" class="form-control" name="Website" value="{{old('Website')?old('Website'):$Website}}" placeholder="Enter Website Url" />
                                                                  @if($errors->has('Website'))
                                                                    <div class="text text-danger">{{ $errors->first('Website') }}</div>
                                                                  @endif
                                                          </div>
                                                          </br></br></br></br>
                                                          <div class="col-sm-6">
                                                                  <label class="pull-right-pro">Download NIT</label>
                                                                  <input type="url" class="form-control" name="NIT" id="NIT" value="{{old('NIT')?old('NIT'):$NIT}}" placeholder="Enter NIT Url" />
                                                                  @if($errors->has('NIT'))
                                                                    <div class="text text-danger">{{ $errors->first('NIT') }}</div>
                                                                  @endif
                                                          </div>
                                                        

                                                    
                                                         
                                                          <div class="col-sm-6">
                                                                  <label class="pull-right-pro">Download Schedule</label>
                                                                  <input type="url" class="form-control" name="Schedule" value="{{old('Schedule')?old('Schedule'):$Schedule}}" placeholder="Enter Schedule Url" />
                                                                  @if($errors->has('Schedule'))
                                                                    <div class="text text-danger">{{ $errors->first('Schedule') }}</div>
                                                                  @endif
                                                          </div>
                                                          </br></br></br></br>

                                                        
                                                            <div class="col-sm-6">
                                                                  <label class="pull-right-pro">Download BOQ</label>
                                                                  <input type="url" autocomplete="off" class="form-control" name="BOQ" value="{{old('BOQ')?old('BOQ'):$BOQ}}" placeholder="Enter BOQ Url" />
                                                                  @if($errors->has('BOQ'))
                                                                    <div class="text text-danger">{{ $errors->first('BOQ') }}</div>
                                                                  @endif
                                                          </div>
                                                          <div class="col-sm-6">
                                                                  <label class="pull-right-pro">More Info</label>
                                                                  <input type="text" autocomplete="off" class="form-control" name="MoreInfo" value="{{old('MoreInfo')?old('MoreInfo'):$MoreInfo}}" placeholder="Enter Detail" />
                                                                  @if($errors->has('MoreInfo'))
                                                                    <div class="text text-danger">{{ $errors->first('MoreInfo') }}</div>
                                                                  @endif
                                                          </div>

                                                          

                                                          
                                                        

                                                    
                                                    
                                                          <div class="col-sm-6">
                                                                  <label class="pull-right-pro">Work Description</label>
                                                                  
                                                                  <input class="form-control" name="WorkDescription" value="{{old('WorkDescription')?old('WorkDescription'):$WorkDescription}}"placeholder="Enter Work Detail" />
                                                                  @if($errors->has('WorkDescription'))
                                                                    <div class="text text-danger">{{ $errors->first('WorkDescription') }}</div>
                                                                  @endif
                                                          </div>
                                                        
                                                    
                                                          <div class="col-sm-6">
                                                                  <label class="pull-right-pro">Department</label>
                                                                  
                                                                  <input class="form-control" name="department" value="{{old('department')?old('department'):$department}}"placeholder="Enter Department" />
                                                                  @if($errors->has('department'))
                                                                    <div class="text text-danger">{{ $errors->first('department') }}</div>
                                                                  @endif
                                                          </div>
                                                        
                                                          <div class="col-sm-6">
                                                                  <label class="pull-right-pro">Tender Reference Number</label>
                                                                  
                                                                  <input class="form-control" name="trn" value="{{old('trn')?old('trn'):$trn}}"placeholder="Enter Tender Referene Number" />
                                                                  @if($errors->has('trn'))
                                                                    <div class="text text-danger">{{ $errors->first('trn') }}</div>
                                                                  @endif
                                                          </div>
                                                       
                                                          <div class="col-sm-6">
                                                                  <label class="pull-right-pro">Location</label>
                                                                  
                                                                  <input class="form-control" name="location" value="{{old('location')?old('location'):$location}}"placeholder="Enter Location" />
                                                                  @if($errors->has('location'))
                                                                    <div class="text text-danger">{{ $errors->first('location') }}</div>
                                                                  @endif
                                                          </div>
                                                        
                                                          <div class="col-sm-6">
                                                                  <label class="pull-right-pro">Product Category</label>
                                                                  
                                                                  <input class="form-control" name="product_category" value="{{old('product_category')?old('product_category'):$product_category}}"placeholder="Enter product category" />
                                                                  @if($errors->has('product_category'))
                                                                    <div class="text text-danger">{{ $errors->first('product_category') }}</div>
                                                                  @endif
                                                          </div>
                                                        
                                                          <div class="col-sm-6">
                                                                  <label class="pull-right-pro">Keawords</label>
                                                                  
                                                                  <input class="form-control" name="keawords" value="{{old('keawords')?old('keawords'):$keawords}}"placeholder="Enter Keawords" />
                                                                  @if($errors->has('keawords'))
                                                                    <div class="text text-danger">{{ $errors->first('keawords') }}</div>
                                                                  @endif
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
@endsection
@section('extrajs')
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
 <link rel="stylesheet" href="{{ asset('assets/css/form/all-type-forms.css')}}">

  

@endsection