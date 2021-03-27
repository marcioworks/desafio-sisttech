@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($posts as $post)
                <div class="col-md-12" style="margin-bottom: 20px">
                    <div class="card">
                        <div class="card-horizontal">
                            <div class="img-square-wrapper">
                                <img class="imagem"  src="{{ Storage::url($post->imagem) }}" alt="Card image cap">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">{{ $post->titulo }}</h4>
                                <p class="card-text">
                                    {{ $post->texto }}
                                </p>
                                <div class="card-footer">
                                    <small class="text-muted">Publicado em:
                                        {{ date('Y-m-d', strtotime($post->criado_em)) }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
