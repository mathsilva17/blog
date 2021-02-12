@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-8">


            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Título</th>
                        <th scope="col">Data de criação</th>
                        <th scope="col">Publicado por</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($articles as $article)
                        <tr>
                            <td>{{ $article->title  }}</td>
                            <td>{{ $article->created_at  }}</td>
                            <td>{{ $article->user->name  }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>


            <div class="card">
                <div class="card-header">{{ __('Novo Artigo') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <form action="{{ route('article.store') }}" method="post">       

                    @csrf    

                    <div class="mb-3">
                        <label for="title" class="form-label">Título</label>
                    <input class="form-control" id="title" name="title" required>
                    </div>

                    <div class="mb-3">
                        <label for="body" class="form-label">Conteúdo</label>
                        <textarea class="form-control" id="body" name="body" rows="3" required></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Publicar</button>
                
                </form> 

                </div>


            </div>


        </div>
    </div>
</div>
@endsection
