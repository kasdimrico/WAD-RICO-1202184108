@extends('layouts.app')@section('title', 'Order')

@section('content')
<div class="container-fluid text-center" style="padding:0 11.4em;">
    @if (!$products->isEmpty())
    <h3>Order</h3>
    <div class="row pt-4">
        @foreach ($products as $item)
        {{-- <div class="row-md-4"> --}}
        <div class="col-md-3 pb-4">
            <div class="card"
                style="width:17.5em;height:26.1em;">
                <div class="card-head pt-1">
                    <img src="{{ preg_match('/(http|ftp|mailto)/', $item->img_path) ? $item->img_path : asset('img').'/'.$item->img_path }}"
                        style="width: 17.2em; height:11em">
                </div>
                <div class="card-body d-flex flex-column">
                    <div class="row-md-3 text-center">
                        <h6><b><{{ $item->name }}/b></h6>
                    </div>
                    <div class="row px-2 text-center">
                        <p>{{ $item->description }}</p>
                    </div>
                    <div class="row mt-auto px-0 text-left">
                        <div class="col-md-12">
                            <b>${{ sprintf("%.2f",($item->price)) }}</b>
                        </div>
                        <div class="col-md-12 pt-1">
                            <a href="{{ route('prod_order', $item) }}"
                                class="btn{{ ($item->stock <= 0) ? '' : ' btn-secondary' }}" style="{{ ($item->stock <= 0) ? 'pointer-events: none;
                                cursor: default;' : '' }}">{{ ($item->stock <= 0) ? 'Out of stocks' : 'Order Now' }}</a>
                        </div>
                    </div>
                </div>
                {{-- </div> --}}
            </div>
        </div>
        @endforeach
    </div>
    <div class="row d-flex justify-content-center pt-4">
        <div>
            {{ $products->links() }}
        </div>
    </div>
    @else
    @include('layouts.empty_table')
    @endif
    {{-- {{ dd($products[0]->img_path) }} --}}
</div>
@stop
