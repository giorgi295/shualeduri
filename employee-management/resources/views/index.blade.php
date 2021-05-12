@extends("layouts.layout")
@section("content")
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>SURNAME</th>
            <th>ACTION</th>
        </tr>
    </thead>

    <tbody>
        @foreach($dball as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->Name}}</td>
                <td>{{$post->surname}}</td>
                <td>
                    <button type="submit"><a href="{{route('update', $post->id)}}">EDIT</a></button>
                </td>
                <td>
                    @if($post->is_hired == false)
                    <form action="{{route('hired', $post->id)}}" method="POST">
                        @csrf
                        <button type="submit">HIRE</button>
                    </form>
                    @else
                        <form action="{{route('hired', $post->id)}}" method="POST">
                            @csrf
                            <button type="submit">HIRED</button>
                        </form>
                    @endif
                </td>
                <td>
                    <form action="{{route('delete', $post->id)}}" method="POST">
                        @csrf{{method_field('delete')}}
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
    </tbody>
</table>

@endsection




