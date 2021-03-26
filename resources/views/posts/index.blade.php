@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-12">
                <a href="{{ route('create') }}" class="btn btn-primary mb-2">Create Post</a>
                <br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Published At</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->titulo }}</td>
                            <td>{{ date('Y-m-d', strtotime($post->criado_em)) }}</td>
                            <td>
                            <a href="{{route('show',['post'=>$post->id]) }}" class="btn btn-primary">Show</a>
                            <a href="{{route('editar',['post'=>$post->id]) }}" class="btn btn-primary">Edit</a>
                            <form action="{{route('deletar',['post'=>$post->id]) }}" method="post" class="d-inline">
                                {{ csrf_field() }}
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
</div>
@endsection
