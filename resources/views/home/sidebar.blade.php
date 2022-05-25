@php
    $mainCategories = \App\Http\Controllers\HomeController::maincategorylist()
@endphp
<!-- catagory_area -->
<div class="catagory_area">
    <div class="container">
        <div class="row cat_search">

            @foreach($mainCategories as $rs)
            <div class="col-lg-4 ">
                <div class="single-input">
                    {{$rs->title}}
                </div>
                <hr>
                <ul class="list-links">
                    @if(count($rs->children))
                        @include('home.categorytree',['children'=> $rs->children])
                    @endif
                </ul>
            </div>
            @endforeach

        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="popular_search d-flex align-items-center">

                </div>
            </div>
        </div>
    </div>
</div>
<!--/ catagory_area -->
