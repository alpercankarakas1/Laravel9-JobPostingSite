@foreach($children as $subcategory)
    <ul class="list-links">
        @if(count($subcategory->children))
            <li>{{$subcategory->title}}</li>
            <ul class="list-links">
                @include('home.categorytree',['children'=>$subcategory->children])
            </ul>
            <hr>
        @else
            <li><a href="{{route('categoryjobs',['id'=>$subcategory->id,'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a></li>
        @endif
    </ul>
@endforeach
