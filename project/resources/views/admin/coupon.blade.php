@extends('admin/layout')


@section('container')

@if(session('message'))
<div class="alert alert-success" role="alert">
    {{ session('message') }}
</div>
@endif
<div class="row">

    <h2 class="m-2">Coupon</h2>

    <div class="table-responsive m-b-40">

        <a href="{{ url('coupon/manage_coupon') }}">
            <button type="button" class="btn btn-success m-2">Add Coupon</button>
        </a>

        <table class="table table-borderless table-data3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Code</th>
                    <th>Value</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($data as $list)
                <tr>
                    <td>{{$list->id}}</td>
                    <td>{{$list->title}}</td>
                    <td>{{$list->code}}</td>
                    <td>{{$list->value}}</td>
                    <td>
                        <button type="button" class="btn btn-success">Success</button>
                        <a href="{{ url('admin/coupon/delete/' . $list->id) }}">
                            <button type="button" class="btn btn-danger">Delete</button>
                        </a>

                        <a href="{{ url('admin/coupon/manage_coupon/' . $list->id) }}">
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
