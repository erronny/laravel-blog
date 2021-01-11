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
            
            <a href="{{URL ('/admin/page_content_manager')}}" class="btn btn-primary">
               Content Manager
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
          <div class="col-12 col-md-7">
           <!-- Table -->
            <div class="table-responsive mb-7 mb-md-9">
              <table class="table table-align-right">
                <thead>
                  <tr>
                    <th>
                      <span class="h6 text-uppercase font-weight-bold">
                        Page
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
                @forelse ($pages as $page)
                  <tr>
                    <td>
                      
                      <a href="{{ url("admin/page_content_manager/".$page->id."/edit") }}" class="text-reset text-decoration-none">
                        <p class="mb-1">
                          {{ $page->name }}
                        </p>
                        <p class="font-size-sm text-muted mb-0">
                          {{ $page->title }}
                        </p>
                      </a>

                    </td>
                    <td>
                      
                       @php
                                                    if($page->is_published == 1) {
                                                        $label = 'Unpulish';
                                                        $key = 'active';
                                                    } else {
                                                        $label = 'Publish';
                                                        $key = 'deactive';
                                                        
                                                    }
                                                @endphp
                                                <a href="{{ url("admin/updatepages/".$page->id."/$key") }}" data-method="PUT" data-token="{{ csrf_token() }}" data-confirm="Are you sure?" class="btn btn-xs btn-warning">{{ $label }}</a>
                                            
                                            
                                            <a href="{{ url("admin/pages/".$page->id."/edit") }}" class="btn btn-xs btn-info"><span class="fa fa-edit author-log-ic"></span>&nbsp;Edit</a>
                                            <a href="{{ url("/admin/pages/{$page->id}/delete") }}" data-method="DELETE" data-token="{{ csrf_token() }}" data-confirm="Are you sure?" class="btn btn-xs btn-danger"><span class="fa fa-trash author-log-ic"></span>&nbsp;Delete</a>

                    </td>
                    
                  </tr>
               @empty
                                    <tr>
                                        <td colspan="5">No page available.</td>
                                    </tr>
                                @endforelse
                  
                </tbody>
              </table>
            </div>
              
            
          </div>
          <div class="col-12 col-md-5">
            <div class="">
            
            <div class="collapse d-lg-block" id="sidenavCollapse">
              <div class="">

                

                

                
                <h6 class="text-uppercase font-weight-bold">
                  <label class="pull-right-pro">Create Page<span class="required">*</span></label>
                </h6>

                <div class="panel-body">
                        {{ Form::open(array('url' => 'admin/pages','enctype'=>'multipart/form-data','autocomplete'=>"off")) }}

                            <?php 
                              $name      ="";
                              $url      ="";                                    
                              
                              
                              
                            
                            ?>

                            @include('pages._form')
                            <br>
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-8">
                                    <button type="submit" class="btn btn-primary">
                                        <span class="fa fa-floppy-o author-log-ic"></span>&nbsp;Create
                                    </button>
                                </div>
                            </div>

                        {{ Form::close() }}
                    </div>

                
              </div>
            </div>


          </div>
            
            

            

          </div>
        </div> <!-- / .row -->
            

          </div>
        </div> 
    </div>
</div>
@endsection