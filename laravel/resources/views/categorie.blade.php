
<nav class="navbar navbar-expend-lg bg-red">
    <ul>
        @foreach($categories as $category)
        @endforeach
            @foreach($cartes as $carte)
        <li class="nav-item"> <a href="{{route('viewCategory',['id'=>$category->id])}}">{{$carte->num_carte}}</a>
            </li>

@endforeach
</ul>
<ul>

</ul>
</nav>
