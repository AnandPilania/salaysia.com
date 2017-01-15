@extends("admin.admin_app")

@section("content")
 
  <!-- Page Header -->
                <div class="content bg-gray-lighter">
                    <div class="row items-push">
                        <div class="col-sm-7">
                            <h1 class="page-heading">
                                Menu
                            </h1>
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li><a href="{{ URL::to('admin/dashboard') }}">Dashboard</a></li>
                                <li><a class="link-effect" href="">Menu</a></li>
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
                            <a class="pull-right btn btn-primary push-5-r push-10" href="{{URL::to('admin/menu/add')}}"><i class="fa fa-plus"></i> Add Menu</a>
                        </div>
                        <div class="block-content">
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
                            <table class="table table-bordered table-striped cat-dataTable-full">
                                <thead>
                                    <tr>

                                        <th class="hidden-xs">Parent Menu</th>      
                                        <th class="hidden-xs">Order By</th>
                                        <th class="hidden-xs">Menu Name</th>      
                                        <th class="hidden-xs">Slug</th>      
                                        <th class="text-center" style="width: 10%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach($menu as $i => $location)
                                    <tr>
                                        <td class="font-w600">
									
								@if($location->parent_id==0)
									Main menu
							@else	@foreach(\App\MenuBar::where('id',$location->parent_id)->limit(1)->get() as $parent_title)
									{{ $parent_title->title }}
							@endforeach	
							@endif
										</td>
                                        <td class="font-w600">{{ $location->ordering }}</td>
                                        <td class="font-w600">{{ $location->title }}</td>
                                        <td class="font-w600">{{ $location->slug }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="{{ url('admin/menu/edit/'.$location->id) }}" class="btn btn-xs btn-default"  data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>

                                                 <a href="{{ url('admin/menu/delete/'.$location->id) }}" class="btn btn-xs btn-default"  data-toggle="tooltip" title="Remove" onclick="return confirm('Are you sure? You will not be able to recover this.')"><i class="fa fa-times"></i></a>
                                            </div>
                                        
                                    </td>
                                        
                                    </tr>
                                   @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END Dynamic Table Full -->

                    
                </div>
                <!-- END Page Content -->

@endsection