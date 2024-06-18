@extends('admin/layout')

@section('container')



<div class="row">
    {{session('massage')}}
    <h2>Manage Category</h2>

    <div class="table-responsive m-b-40">

        <a href="{{url('admin/category')}}">
            <button type="button" class="btn btn-success">Back</button>
        </a>
        <div class="col-lg-12">

            <div class="card">

                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center title-2">Manage Category</h3>
                    </div>
                    <hr>
                    <form action="{{route('category.insert')}}" method="post" >
                        @csrf
                        <div class="form-group">
                            <label for="category_name" class="control-label mb-1">Category Name</label>
                            <input id="category_name" name="category_name" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                            @if($errors->has('category_name'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('category_name') }}
                            </div>
                        @endif
                        </div>
                        <div class="form-group">
                            <label for="category_slug" class="control-label mb-1">Category Slug</label>
                            <input id="category_slug" name="category_slug" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                            @if($errors->has('category_slug'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('category_slug') }}
                            </div>
                        @endif
                        </div>

                        <div>
                            <button id="peyment-button" type="submit" class="btn btn-lg btn-info btn-block">
                               Summit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
