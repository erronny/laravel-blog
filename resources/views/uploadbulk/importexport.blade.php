@extends('layouts.master')


@section('content')
@if($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif
<div class="basic-form-area mg-tb-15">
 <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline12-list">

                                <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <div class="col-sm-6"><h1>{{$page_title}}</h1></div>
                                    <div class="col-sm-6 text text-right">
                                      <a href="{{ URL("admin/tenders")}}">Tenders List</a>
                                    </div>
                                </div>
                            </div>
	<div class="container">
    <div class="card bg-light mt-3">
        
        <div class="card-body">
            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import Tenders</button>
                <a class="btn btn-warning" href="{{ route('export') }}">Export Tenders</a>
            </form>
        </div>
    </div>
</div>
<br />
   <div class="panel panel-default">
    <div class="panel-heading">
     <h3 class="panel-title">Tenders</h3>
    </div>
    <div class="panel-body">
     <div class="table-responsive">
      <table class="table table-bordered table-striped">
       <tr>
        <th>Tenders Id</th>
        <th>Published Date</th>
        <th>Bid Submission End Date</th>
        <th>Start Time</th>
        <th>End Time</th>
        
        
       </tr>
       <!-- @foreach($data as $row)
       <tr>
        <td>{{ $row->tenderId }}</td>
        <td>{{ $row->PublishedDate }}</td>
        <td>{{ $row->BidSubmissionEndDate }}</td>
         <td>{{ $row->StartTime }}</td>
        <td>{{ $row->EndTime }}</td>
       </tr>
       @endforeach -->
      </table>
     </div>
    </div>
   </div>
  </div>
</div></div></div></div>
@endsection



