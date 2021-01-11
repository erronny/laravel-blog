@extends('layouts.master2')

@section('content')

<section class="pt-8 pt-md-11">
<div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md">
            
            <!-- Link -->
            <a href="{{URL ('/admin/dashboard')}}" class="font-weight-bold font-size-sm text-decoration-none mb-3">
              <i class="fe fe-arrow-left mr-3"></i> Back
            </a>

            

          </div>
          <div class="col-auto">
            
            <!-- Buttons -->
            
            <a href="{{URL ('/admin/posts/create')}}" class="btn btn-primary">
               Write post
            </a>

          </div>
        </div> <!-- / .row -->
      </div><!-- / .container -->
</section>
<div class="row">
          <div class="col-12">
            
            <!-- Divider -->
            <hr class=" border-gray-300">

          </div>
        </div> <!-- / .row -->
<section class="pt-6 pt-md-8">
      <div class="container pb-8 pb-md-11 border-bottom border-gray-300">
<div class="row">
          <div class="col-12">
            <div class="row">
          <div class="col-12 col-md-12">
           <!-- Table -->
            <div class="table-responsive mb-7 mb-md-9">
              <table class="table table-align-right">
                <thead>
                  <tr>
                    <th>
                      <span class="h6 text-uppercase font-weight-bold">
                        Title
                      </span>
                    </th>
                    <th>
                      <span class="h6 text-uppercase font-weight-bold">
                        Body
                      </span>
                    </th>
                    <th>
                      <span class="h6 text-uppercase font-weight-bold">
                        Tags
                      </span>
                    </th>
                    <th>
                      <span class="h6 text-uppercase font-weight-bold">
                        Published
                      </span>
                    </th>
                    <th>
                      <span class="h6 text-uppercase font-weight-bold">
                        Action
                      </span>
                    </th>
                    
                  </tr>
                </thead>
                <tbody>
                    @forelse ($posts as $post)
                                    <tr>
                                        <td><span style="font-size:18px;">{{ $post->title }}</span></td>
                                        <td><span style="font-size:18px;">{!! str_limit($post->body, 200) !!}</span></td>
                                        <td><span style="font-size:18px;">{{ $post->tags }}</span></td>
                                        
                                        
                                        
                                        <td><span style="font-size:18px;">{{ $post->published }}</span></td>
                                        <td>
                                            @if (Auth::user()->is_admin)
                                                @php
                                                    if($post->published == 'Yes') {
                                                        $label = 'Draft';
                                                    } else {
                                                        $label = 'Publish';
                                                    }
                                                @endphp
                                                <a href="{{ url("/admin/posts/{$post->id}/publish") }}" data-method="PUT" data-token="{{ csrf_token() }}" data-confirm="Are you sure?" class="btn btn-xs btn-warning">{{ $label }}</a>
                                            @endif
                                            <a href="{{ url("/admin/posts/{$post->id}") }}" class="btn btn-xs btn-success"><span class="fa fa-eye author-log-ic"></span>&nbsp;Show</a>
                                            <a href="{{ url("/admin/posts/{$post->id}/edit") }}" class="btn btn-xs btn-info"><span class="fa fa-edit author-log-ic"></span>&nbsp;Edit</a>
                                            <a href="{{ url("/admin/posts/{$post->id}/delete") }}" data-method="DELETE" data-token="{{ csrf_token() }}" data-confirm="Are you sure?" class="btn btn-xs btn-danger"><span class="fa fa-trash author-log-ic"></span>&nbsp;Delete</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">No post available.</td>
                                    </tr>
                                @endforelse
                  
                </tbody>
              </table>
            </div>
              
            
          </div>
          
        </div> <!-- / .row -->
            

          </div>
        </div> 
    </div>
</div>
    
                        

                        

                   
@endsection
