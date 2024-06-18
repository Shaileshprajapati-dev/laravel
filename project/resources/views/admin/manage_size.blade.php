@extends('admin/layout')

@section('container')



<div class="row">
    {{session('massage')}}
    <h2>Manage Size</h2>

    <div class="table-responsive m-b-40">

        <a href="{{url('admin/size')}}">
            <button type="button" class="btn btn-success">Back</button>
        </a>
        <div class="col-lg-12">

            <div class="card">

                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center title-2">Manage Size</h3>
                    </div>
                    <hr>
                    <form action="{{route('size.insert')}}" method="post" >
                        @csrf
                        <div class="form-group">
                            <label for="size" class="control-label mb-1">Size</label>
                            <input id="size" name="size" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                            @if($errors->has('size'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('size') }}
                            </div>
                        @endif
                        </div>
                        <div class="form-group">
                            <label for="status" class="control-label mb-1">Status</label>
                            <input id="status" name="status" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                            @if($errors->has('status'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('status') }}
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
