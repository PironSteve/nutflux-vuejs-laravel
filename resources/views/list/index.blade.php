@extends ('layout.app')

@section('content')
<div class="container">
<p>Display film index</p>

<table class="table">
    <tr>
        <th>not important!</th>
        <th>Subuser_ID</th>
        <th>List_id</th>
        <th>Film ID</th>
    </tr>
    <tbody>
        
        @foreach($lists as $list)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $list->subuser_id }}</td>
                <td>{{ $list->id }}</td>
                <td>{{ $list->film_id }}</td>
                <td></td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection