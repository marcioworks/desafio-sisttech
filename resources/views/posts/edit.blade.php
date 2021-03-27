@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Post') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('atualizar',['post'=>$post->id]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Titulo</label>
                            <input type="text" name="titulo" class="form-control" value="{{$post->title}}">
                        </div>

                        <div class="form-group">
                            <label for="">Texto</label>
                            <textarea name="texto" id="" cols="30" rows="10" class="form-control">{{$post->body}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Publicado em</label>
                            <input type="date" name="criado_em" class="form-control" value="{{ date('Y-m-d', strtotime($post->published_at)) }}">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
