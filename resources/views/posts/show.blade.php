@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View Post') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>{{$post->titulo}}</h2>

                    <p>Published At: {{date('Y-m-d', strtotime($post->criado_em))}}</p>
                    <br>
                    <div>
                        {{$post->texto}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
