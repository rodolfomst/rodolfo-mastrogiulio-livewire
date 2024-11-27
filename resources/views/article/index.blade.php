<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h2>Tutti gli articoli</h2>
            </div>
        </div>
    </div>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
            <div class="col-12 col-md-3 m-2">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <p class="card-text">{{ $article->subtitle }}</p>
                        <a href="{{route('article.edit', $article)}}" class="btn btn-primary">Vai alla modifica</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>