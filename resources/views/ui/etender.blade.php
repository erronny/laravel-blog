@extends('ui.layouts.app')
@section('title', 'E-Tender | thedsolution')
@section('description', '')
@section('keywords', 'E-Tender | thedsolution')
@section('author', 'thedsolution')


@section('content')

<style>
fieldset {
    display: block;
    margin-inline-start: 2px;
    margin-inline-end: 2px;
    padding-block-start: 0.35em;
    padding-inline-start: 0.75em;
    padding-inline-end: 0.75em;
    padding-block-end: 0.625em;
    min-inline-size: min-content;
    border-width: 2px;
    border-style: groove;
    border-color: threedface;
    border-image: initial;
}
table {
    border-collapse: separate;
    white-space: normal;
    line-height: normal;
    font-weight: normal;
    font-size: medium;
    font-style: normal;
    color: -internal-quirk-inherit;
    text-align: start;
    border-spacing: 2px;
    
    font-variant: normal;
}



  .col-sm-3{
    border : 1px solid #ddd;
    padding: 10px;
    column-gap: 10px;
    
  }

 
</style>
<div class="">
  <div class="row">
<div class="col-sm-12">
@foreach ($etenders as $etender)

<div class="col-sm-6">

<fieldset>
	<legend style="background-color:#006699;color:white;">Tender Details:</legend>
	<table border="" align="center" class="sample1" width="100%" style="font-family:tahoma;font-size:12px;border-collapse:collapse;" cellspacing="3" cellpadding="3">
	
	<tbody><tr>
	    <td style="background-color:#E4E4E4;color:black;">Tender ID</td><td> {{$etender->tenderId}}</td>
	</tr>
	<tr>
		<td style="background-color:#E4E4E4;color:black;">Inviting Authority</td><td> {{$etender->InvitingAuthority}}</td>
	</tr>
	
	<tr>
		<td style="background-color:#E4E4E4;color:black;">Published Date</td><td> {{$etender->PublishedDate}}, From {{$etender->StartTime}}</td>
	</tr>
	<tr>
		<td style="background-color:#E4E4E4;color:black;">Bid Submission End Date</td><td> {{$etender->BidSubmissionEndDate}}, To {{$etender->EndTime}}</td>
	</tr>
	<tr>
		<td style="background-color:#E4E4E4;color:black;">Tender Value</td><td> {{$etender->TenderValue}}</td>
	</tr>
	
	
	
	<tr>
		<td style="background-color:#E4E4E4;color:black;">EMD Ammount</td><td> {{$etender->EMD_Ammount}}</td>
	</tr>
	
	
	
	
	<tr>
		<td style="background-color:#E4E4E4;color:black;">Tender Fee</td><td> {{$etender->TenderFee}}</td>
	</tr>
	<tr>
		<td style="background-color:#E4E4E4;color:black;">Work Description</td><td> {{$etender->WorkDescription}}</td>
	</tr>
	<tr>
		<td style="background-color:#E4E4E4;color:black;">Website</td><td><a href="{{$etender->Website}}" target="_blank"> Website</a></td>
	</tr>
	<tr>
		<td style="background-color:#E4E4E4;color:black;">Download NIT</td><td><a href="{{$etender->NIT}}" target="_blank"> NIT</a></td>
	</tr>
	<tr>
		<td style="background-color:#E4E4E4;color:black;">Download Schedule</td><td><a href="{{$etender->Schedule}}" target="_blank"> Schedule</a></td>
	</tr>
	<tr>
		<td style="background-color:#E4E4E4;color:black;">Download BOQ</td><td><a href="{{$etender->BOQ}}" target="_blank"> BOQ</a></td>
	</tr>
	<tr>
		<td style="background-color:#E4E4E4;color:black;">More Info</td><td> {{$etender->MoreInfo}}</td>
	</tr>
	
	</tbody></table>
	</fieldset>
</div>
@endforeach
</div>

</div>
</div>






@endsection