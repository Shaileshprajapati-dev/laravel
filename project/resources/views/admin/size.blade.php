@extends('admin/layout')


@section('container')

@if(session('message'))
<div class="alert alert-success" role="alert">
    {{ session('message') }}
</div>
@endif
<div class="row">

    <h2>Size</h2>

    <div class="table-responsive m-b-40">

        <a href="size/manage_size">
            <button type="button" class="btn btn-success">Add Size</button>
        </a>

        <table class="table table-borderless table-data3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Size</th>
                    <th>Status</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($data as $list)
                <tr>
                    <td>{{$list->id}}</td>
                    <td>{{$list->size}}</td>
                    <td>{{$list->status}}</td>
                    <td>
                        <button type="button" class="btn btn-success">Success</button>
                        <a href="{{ url('admin/size/delete/' . $list->id) }}">
                            <button type="button" class="btn btn-danger">Delete</button>
                        </a>

                        <a href="{{ url('admin/size/manage_size/' . $list->id) }}">
                            <button type="button" class="btn btn-warning">Edit</button>
                        </a>
                    </td>
                </tr>
                @endforeach





            </tbody>
        </table>
    </div>
    </div>
@endsection
