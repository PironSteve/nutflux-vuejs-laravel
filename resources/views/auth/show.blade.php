@extends ('layout.app')

@section('content')
<div class="container">
    <h2>{{$user->id}}</h2>
    <p>{{$user->email}}</p>
</div>

@endsection