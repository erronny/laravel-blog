@extends('layouts.master')



@section('content')


<style>
    .panel-body{
        background-color:#CFE5F6;
        color:#264B68;
    }
    .panel-body2{
      background-color:#264B68;
      width: 520px;
      height:310px;
      


    }
  .panel-footer{
    background-color: #b3d4fc;

  }
    

.notice {
	height:100%;
  text-align: center;
  border-radius: 5px;
  background-color:#CFE5F6;
  
  color:#264B68;
  font-size: 15px;
}


</style>

<div class="container">
        <div class="row">
        	<div class="col-md-12">
            

            
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h2>
                            Update Page Content

                            <!-- <a href="{{ url('admin/pages') }}" class="btn btn-default pull-right"><span class="fa fa-chevron-circle-left author-log-ic"></span>&nbsp; Go Back</a> -->
                        </h2>
                    </div>

                    <div class="panel-body">
                        {{ Form::model($pagemanager, array('route' => array('address.update', $address->id), 'method' => 'PUT','enctype'=>'multipart/form-data')) }}
                            <?php
                              
                              
                              $detail           =$pagemanager->detail;
                              
                              
                            ?>


                            @include('pagemanager._form')
                            
                           
                    </div>
                    <div class="panel-footer">
                    <div class="form-group">
                                <div class="col-md-10 col-md-offset-10">
                                    <button type="submit" class="btn btn-primary">
                                        <span class="fa fa-floppy-o author-log-ic"></span>&nbsp;Update
                                    </button>
                                </div>
                            </div>
                    </div>

                        {{ Form::close() }}
                </div>
            </div>
            
        

        </div>
    </div>

@endsection