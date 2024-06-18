@extends('admin/layout')

@section('container')



<div class="row">
    {{session('massage')}}
    <h2>Manage Coupon</h2>

    <div class="table-responsive m-b-40">

        <a href="{{ url('admin/coupon') }}">
            <button type="button" class="btn btn-success">Back</button>
        </a>
        <div class="col-lg-12">

            <div class="card">

                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center title-2">Manage Coupon</h3>
                    </div>
                    <hr>
                    <form action="{{ route('coupon.insert')}}" method="post" >
                        @csrf
                        <div class="form-group">
                            <label for="title" class="control-label mb-1">Coupon title</label>
                            <input id="title" name="title" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                            @if($errors->has('title'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('title') }}
                            </div>
                        @endif
                        </div>
                        <div class="form-group">
                            <label for="code" class="control-label mb-1">Coupon Code</label>
                            <input id="code" name="code" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                            @if($errors->has('code'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('code') }}
                            </div>
                        @endif
                        </div>
                        <div class="form-group">
                            <label for="value" class="control-label mb-1">Coupon value</label>
                            <input id="value" name="value" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                            @if($errors->has('value'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('value') }}
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
