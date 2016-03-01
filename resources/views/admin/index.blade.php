@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1>{{$title}}</h1>
                <div class="row">
                    <div class="col-md-9">
                        <div class="table-responsive">
                            {!! $grid !!}
                        </div>
                    </div>
                    <div class="col-md-3">
                        {!! $filter !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop