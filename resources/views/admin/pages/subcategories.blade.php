@extends("admin.admin_app")

@section("content")
                <!-- Page Header -->
                <div class="content bg-gray-lighter">
                    <div class="row items-push">
                        <div class="col-sm-7">
                            <h1 class="page-heading">
                               Level 
                            </h1>
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li><a href="{{ URL::to('admin/dashboard') }}">Dashboard</a></li>
                                <li><a class="link-effect" href="">Level</a></li>
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
                            <a class="pull-right btn btn-primary push-5-r push-10" href="{{URL::to('admin/subcategories/addsubcategory')}}"><i class="fa fa-plus"></i> Add Level</a>
                        </div>
                        <div class="block-content">
                            @if(Session::has('flash_message'))
                                <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    {{ Session::get('flash_message') }}
                                </div>
                            @endif
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
                            <table class="table table-bordered table-striped subcat-dataTable-full">
                                <thead>
                                    <tr>

                                        <th>Level</th>
                                         <th>Image</th> 
                                        <th>Description</th>
                                        <th class="hidden-xs"> Level Slug</th>      
                                        <th class="text-center" style="width: 10%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach($subcategories as $i => $subcategory)
                                    <tr>
                                        <td class="font-w600">{{ $subcategory->sub_category_name }}</td>
<td>
                                    @if(isset($subcategory->featured_image))
        <img src="{{ URL::asset('upload/listings/'.$subcategory->featured_image.'-s.jpg') }}" width="80" alt="featured">
                                    @endif
</td>
<td class="font-w600">{{ $subcategory->description }}</td>
                                        <td class="font-w600">{{ $subcategory->sub_category_slug }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="{{ url('admin/subcategories/addsubcategory/'.$subcategory->id) }}" class="btn btn-xs btn-default"  data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>

                                                 <a href="{{ url('admin/subcategories/delete/'.$subcategory->id) }}" class="btn btn-xs btn-default"  data-toggle="tooltip" title="Remove" onclick="return confirm('Are you sure? You will not be able to recover this.')"><i class="fa fa-times"></i></a>
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