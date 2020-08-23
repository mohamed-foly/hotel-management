@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{__('Controls')}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="#"> <button class="btn btn-secondary"> @lang('add') </button> </a>
                    <a href="#"> <button class="btn btn-secondary"> @lang('receive') </button> </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
