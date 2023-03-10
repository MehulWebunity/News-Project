@extends('layouts.header')

@section('content')
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1 class="admin-heading">All Categories</h1>
            </div>
            <div class="col-md-2">
                <a class="add-new" href="{{ url('admin/add-category') }}">add category</a>
            </div>
            @if (session('success'))
            <div class="myAlert-top alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ session('success') }}
            </div>
            @endif
            @if (session('delete'))
            <div class="myAlert-bottom alert alert-danger">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ session('delete') }}
            </div>
            @endif
            @if (session('update'))
                <div class="myAlert-top alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ session('update') }}
                </div>
            @endif
            <div class="col-md-12">
                <table class="content-table">
                    <thead>
                        <th>S.No.</th>
                        <th>Category Name</th>
                        <th>No. of Posts</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        @foreach ($catagory as $item)
                            <tr>
                                <td class='id'>{{ $item->cat_id }}</td>
                                <td>{{ $item->category_name }}</td>
                                <td>{{ $item->no_post }}</td>
                                <td class='edit'><a href='{{ url("admin/update-category/".$item->cat_id) }}'><i class='fa fa-edit'></i></a></td>
                                <td class='delete'><a href='{{ url("admin/delete-category/".$item->cat_id) }}'><i class='fa fa-trash-o'></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- <ul class='pagination admin-pagination'>
                    <li class="active"><a>1</a></li>
                    <li><a>2</a></li>
                    <li><a>3</a></li>
                </ul> -->
            </div>
        </div>
    </div>
</div>
@endsection
