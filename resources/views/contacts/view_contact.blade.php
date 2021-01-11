@extends('layouts.master')
@section('title', 'Admin ')
@section('description', '')
@section('keywords', '')
@section('author', '')
@section('content')


<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">contact view </h2>
                                <p class="pageheader-text"></p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">contact view</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>

<div class="container">
<h2>List of Visiters who contact</h2>
<p>Contact Details</p>            
<table class="table table-dark table-striped">
<tr>
<td>Id</td>
<td> Name</td>
<td>Email</td>
<td>Phone</td>
<td>Message</td>
</tr>
@foreach ($contact as $contact)
<tr>
<td>{{ $contact->id }}</td>
<td>{{ $contact->name }}</td>
<td>{{ $contact->email }}</td>
<td>{{ $contact->number }}</td>
<td>{{ $contact->message }}</td>
</tr>
@endforeach
</table>
</div>








@endsection