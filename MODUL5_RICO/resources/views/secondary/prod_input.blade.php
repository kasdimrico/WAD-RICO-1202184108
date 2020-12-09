@extends('layouts.app')@section('title', 'Input Product')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h3>Input Product</h3>
    </div>
    <div class="row justify-content-center">
        <div class="col sm-5">
            <div class="card" style="color: green;">
                <div class="card-body">
                    <form action="{{ route('prod_store') }}" method="post" enctype="multipart/form-data">                        
                        @include('layouts.form_control')
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- {{ dd($products[0]->img_path) }} --}}
</div>
@stop
