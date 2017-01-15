@extends("admin.admin_app")

@section("content")
@foreach(\App\UserPermissions::where('user_id',Auth::user()->id)->get() as $aes)
@if($aes->Inqueries== 'yes')
<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
            Inqueries
            </h1>
        </div>
        <div class="col-sm-5 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li><a href="{{ URL::to('admin/dashboard') }}">Dashboard</a></li>
                <li><a class="link-effect" href="">Inqueries</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->
    
<!-- Page Content -->
<div class="content">
    <!-- Dynamic Table Full -->
    <div class="block">
        <div class="block-header">                            
          
                
            <div class="clearfix"></div>
               <a class="pull-right btn btn-primary push-5-r push-10" href="{{URL::to('admin/inquiries/export')}}"><i class="fa fa-download"></i> Export</a> 
            @if(Session::has('flash_message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                {{ Session::get('flash_message') }}
            </div>
            @endif
        </div>
        <div class="block-content">
            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
            <table class="table table-bordered table-striped listings-dataTable-full">
                <thead>
                    <tr>
                        <th class="text-center">Firstname</th>
                        <th class="text-center">lastname</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Mobile</th>
                        <th class="text-center">level</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach($Inquiries as $listing) 
                    <tr>
                        <td class="text-center font-w600">{{$listing->firstname}}</td>
                        <td class="text-center">{{$listing->lastname}}
                        </td>
                        <td class="text-center">
                            {{$listing->email}}
                        </td>
                          <td class="text-center">
                            {{$listing->mobile}}
                        </td>
                        <td class="text-center">
                            {{$listing->level}}
                        </td>  
                        <td>
                      <a href="{{ url('admin/inquiries/view/'.$listing->id) }}" class="btn btn-xs btn-default"  data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i> View Detail</a>
                      
                        </td>
                    </tr>

<?php /*
<!-----------modeldetail-------------------->
  <!-- Modal -->
  <div class="modal fade" id="inquires<?php echo $i; ?>" role="dialog">
    <div class="modal-dialog login-salaysia">
    
      <!-- Modal content-->
      <div class="modal-content body-model-login">
        <div class=" text-left">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3>Detial Of Applicant</h3>
		  <div class="row model-text-deco">
			<div class="col-sm-12">
			<p>FirstName:-<strong>{{$listing->firstname}}</strong></p>
                        <p>LastName:-<strong>{{$listing->lastname}}</strong></p>
                        <p>Mobile:-<strong>{{$listing->countryCode}}-{{$listing->mobile}}</strong></p>
                        <p>Email:-<strong>{{$listing->email}}</strong></p>
                        @foreach(\App\Listings::where('id',$listing->uni_id)->get() as $uni)
                        <p>Application for :-<strong>{{$uni->title}}</strong></p>
                        @endforeach
                        <p>Studylevel:-<strong>{{$listing->level}}</strong></p>
                        <p>Plan to Study:-<strong>{{$listing->monthRange}}</strong></p>
                        <p>Preffer Time To Speak:-<strong>{{$listing->timeOptionId}}</strong></p>
                       
			</div>

		  </div>
        </div>
        
      </div>
      
    </div>
  </div>
<!-----------end modellogin-------------------->
<?php  $i++ ; */ ?>
                    @endforeach
                        
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Dynamic Table Full -->
        
        
</div>
<!-- END Page Content -->
    


    
@else
<h1 style="color:red">You have not Sufficient permissions for access this page </h1> 
@endif  


@endforeach
        @endsection