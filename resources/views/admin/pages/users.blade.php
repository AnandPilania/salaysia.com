@extends("admin.admin_app")

@section("content")
<style>
.col-sm-6:nth-child(1) {
    width: 36% !important;
} 
table.dataTable thead .sorting_asc::after {
  content: "" !important;
}
table.dataTable thead .sorting_desc::after {
  content: "" !important;
}
</style>
<script src="{{ URL::asset('site_assets/js/jquery.min.js') }}"></script> 
<script>
$(document).ready(function(){
	$("#ckbCheckAll").click(function () {
        $(".checkBox").prop('checked', $(this).prop('checked'));
		
    });
});
</script>
@foreach(\App\UserPermissions::where('user_id',Auth::user()->id)->get() as $aes)
@if($aes->Users== 'yes')
				<!-- Page Header -->
                <div class="content bg-gray-lighter">
                    <div class="row items-push">
                        <div class="col-sm-7">
                            <h1 class="page-heading">
                                Users
                            </h1>
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li><a href="{{ URL::to('admin/dashboard') }}">Dashboard</a></li>
                                <li><a class="link-effect" href="">Users</a></li>
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
							  
							 <!--div class="form-groupform">
							  <select class="form-control" name="usertype">
								<option value="">User Type</option>
								<option value="University user">University user</option>
								<option value="Regular user">Regular user</option>
								<option value="Agent user">Agent user</option>
								<option value="Editor user">Editor user</option>
							  </select>
							</div-->								
                           
							
                            <a class="pull-right btn btn-primary push-5-r push-10" href="{{URL::to('admin/users/adduser')}}"><i class="fa fa-plus"></i> Add User</a>
                        </div>
                        <div class="block-content" id="buttonparent">
                            @if(Session::has('flash_message'))
                                <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    {{ Session::get('flash_message') }}
                                </div>
                            @endif
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
							{!! Form::open(array('url' => array('admin/users/export'))) !!}
							<div class="exportbutton">							
							 <button class="pull-left btn btn-primary push-5-r push-10"><i class="fa fa-download"></i> Export User</button>
							 </div>
                            <table class="table table-bordered table-striped users-dataTable-full">
                                <thead>
                                    <tr>
                                        <td><input type="checkbox" id="ckbCheckAll" name="userid" /></td>
                                        <th>First Name</th>
						                <th>Last Name</th>
						                <th>Email</th>
						                <th>Telephone/mobile</th> 

					                        <th>User Role</th> 	
@if(Auth::user()->user_role!='Editor user')	
                                                                <th>Permissions</th>
@endif
                                        <th class="text-center" style="width: 10%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach($allusers as $i => $users)
                                    <tr>
                                        <th><input type="checkbox" class="checkBox" name="userid[]"value="{{ $users->id }}" /></th>
                                        <td>{{ $users->first_name }}</td>
						                <td>{{ $users->last_name }}</td>
						                <td>{{ $users->email}}</td>
						                <td>{{ $users->mobile}}</td>
										<td style="color:green;">{{$users->user_role}}</td>
@if(Auth::user()->user_role!='Editor user')	
<td class="text-center"><?php if($users->user_role=='Editor user'){ ?><a href="{{ url('admin/users/permissions/'.$users->id) }}" class="btn btn-xs btn-default"  data-toggle="tooltip" title="Give Permissions "> <i class="fa fa-pencil"></i></a> <?php } ?>  </td>
@endif
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="{{ url('admin/users/adduser/'.$users->id) }}" class="btn btn-xs btn-default"  data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>

                                                 <a href="{{ url('admin/users/delete/'.$users->id) }}" class="btn btn-xs btn-default"  data-toggle="tooltip" title="Remove" onclick="return confirm('Are you sure? You will not be able to recover this.')"><i class="fa fa-times"></i></a>
                                            </div>
                                        
                                    </td>
                                        
                                    </tr>
                                   @endforeach
                                  
                                </tbody>
                            </table>
							{!! Form::close() !!}   
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