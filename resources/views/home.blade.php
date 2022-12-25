@extends('layouts.main')

@section('container')

@include('partials/banner')

{{-- Category section --}}
<div class="row shadow-sm p-3 rounded mb-3">
    <div class="col">
        @include('partials/category_slider')
    </div>
    <div class="col">
        @include('partials/top_up_form')
    </div>
</div>

<div class="row">
    <div class="col-md-2 mb-3">
        <div class="card" style="width: 11rem">
            <img src="https://images.tokopedia.net/img/cache/200-square/product-1/2020/12/31/2904329/2904329_f81f34f3-2dd9-4fb9-9fe6-ecb79c7bfae0.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>
</div>

@endsection