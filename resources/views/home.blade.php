@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <h1>Artigos</h1>
            </div>


            @foreach($articles as $article)


                <div class="mt-8  overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2 ">
                        <div class="p-6">
                            <div class="card " style="width: 18rem;">
                                <div class="card-body">
                                    <h2 class="card-title ">{{ $article->title }}</h2>
                                    <h5 class="card-text">Publicado por {{ $article->user->name }}</h5>
                                    <p class="card-text">{{ $article->body }}</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach





        </div>
            
    </div>
</div>
@endsection
