@extends('layouts.master')
@section('content')

<style>
  .col-md-10{
    border : 5px solid #ddd;
    padding: 10px;
    column-gap: 10px;
    
  }
  .table-primary{
    text-align: center;
  }

  b{
    
    font-size:15px;
  }

  .classWithPad { margin:10px; padding:10px; }

  .table-primary{
    background-color: blue;
    color: yellow;
  }
</style>
@if(Auth::user()->role_id == Config::get('constants.VENDOR'))
     <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                
                                <div class="col-sm-6"><h1></h1></div>
                                <div class="col-sm-6 text text-right">
                                     
                                  <a class="btn btn-primary" href="{{ URL("admin/tenders")}}">Back</a>
                                  
                                </div>
                            </div>
                            <br/>
                        </div>
<div class="col-md-10">
<div class="classWithPad">
  <table class="table table-striped">
  <thead >
    <h1 class="table-primary"> E-tender: </h1>
  </thead>
  <tbody>
    <tr>
      <td><b>Tender ID</b></td>
      <td>{{$product->tenderId}}</td>
      
    </tr>
    <tr>
      <td><b>Inviting Authority</b></td>
      <td>{{$product->InvitingAuthority}}</td>
      
    </tr>
    <tr>
      <td><b>Published Date</b></td>
      <td>{{$product->PublishedDate}}</td>
      
    </tr>
    <tr>
      <td><b>Bid Submission End Date</b></td>
      <td>{{$product->BidSubmissionEndDate}}</td>
      
    </tr>
    <tr>
      <td><b>Tender Value</b></td>
      <td>{{$product->TenderValue}}</td>
      
    </tr>
    <tr>
      <td><b>EMD Ammount</b></td>
      <td>{{$product->EMD_Ammount}}</td>
      
    </tr>
    <tr>
      <td><b>Tender Fee</b></td>
      <td>{{$product->TenderFee}}</td>
      
    </tr>
    <tr>
      <td><b>Work Description</b></td>
      <td>{{$product->WorkDescription}}</td>
      
    </tr>
    <tr>
      <td><b>Website</b></td>
      <td>{{$product->Website}}</td>
      
    </tr>
    <tr>
      <td><b>Download NIT</b></td>
      <td>{{$product->NIT}}</td>
      
    </tr>
    <tr>
      <td><b>Download Schedule</b></td>
      <td>{{$product->Schedule}}</td>
      
    </tr>
    <tr>
      <td><b>Download BOQ</b></td>
      <td>{{$product->BOQ}}</td>
      
    </tr>
    <tr>
      <td><p>More Info</p></td>
      <td>{{$product->MoreInfo}}</td>
      
    </tr>
  </tbody>
</table>

</div>
</div>

@endif

@endsection
@section('extrajs')

@endsection