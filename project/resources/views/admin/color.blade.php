@extends('admin/layout')


@section('container')

@if(session('message'))
<div class="alert alert-success" role="alert">
    {{ session('message') }}
</div>
@endif
<div class="row">

    <h2>Color</h2>

    <div class="table-responsive m-b-40">

        <a href="color/manage_color">
            <button type="button" class="btn btn-success">Add Color</button>
        </a>

        <table class="table table-borderless table-data3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Color</th>

                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($data as $list)
                <tr>
                    <td>{{$list->id}}</td>
                    <td>{{$list->color}}</td>

                    <td>
                        <button type="button" class="btn btn-success">Success</button>
                        <a href="{{ url('admin/color/delete/' . $list->id) }}">
                            <button type="button" class="btn btn-danger">Delete</button>
                        </a>

                        <a href="{{ url('admin/color/manage_color/' . $list->id) }}">
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
