@extends ('layout.app')

@section('content')

//show all lists that belong to this subuser
<div class="container">
    <h2>{{$film->title}}</h2>
    <p>{{$film->genre}}</p>
</div>

@endsection