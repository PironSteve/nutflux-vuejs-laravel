@extends ('layout.app')

@section('content')
<div class="container">
    <h2>{{$subuser->id}}</h2>
    <p>{{$subuser->user_id}}</p>
</div>

@endsection