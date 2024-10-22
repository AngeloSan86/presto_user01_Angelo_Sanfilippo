<x-layout>
    @if( session()->has('message'))
        <div class="row justify-content-center">
            <div class="col-5 alert alert-success text-center-shadow-rounded">
                {{ session('message') }}
            </div>
        </div>
    @endif
    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-3">
                <div class="rounded shadow bg-body-secondary">
                    <h1 class="display-5 text-center pb-2">
                        Revisor Dashboard
                    </h1>
                </div>
            </div>
        </div>
        @if ($article_to_check)
            <div class="row justify-content-center pt-5">
                <div class="col-md-8">
                    <div class="row justify-content-center">

                        @if ($article_to_check->images->count())
                            @foreach ($article_to_check->images as $key => $image)
                                <div class="col-6 col-md-4 mb-4">
                                    <img src="{{ Storage::url($image->path) }}" class="img-fluid rounded shadow"
                                        alt="Immagine {{ $key + 1 }} dell'articolo '{{ $article_to_check->title }}'">
                                </div>
                            @endforeach
                        @else
                            @for ($i = 0; $i < 6; $i++)
                                <div class="col-6 col-md-4 mb-4 text-center">
                                    <img src="https://picsum.photos/300" alt="immagine segnaposto" class="img-fluid rounded shadow">
                                </div>
                            @endfor
                        @endif

                    </div>
                </div>
                <div class="col-md-4 ps-4 d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex pb-4 justify-content-around">
                            <form action="{{ route('reject', ['article' => $article_to_check]) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-danger py-2 px-5 fw-bold">Rifiuta</button>
                            </form>
                            <form action="{{ route('accept', ['article' => $article_to_check]) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-success py-2 px-5 fw-bold">Accetta</button>
                            </form>
                        </div>
                    </div>
                </div>      
            </div>
        @else
            <div class="row justify-content-center align-items-center height-custom text-center">
                <div class="col-12">
                    <h1 class="fst-italic display-4">
                        Nessun articolo da revisionare.
                    </h1>
                    <a href="{{ route('homepage') }}" class="mt-5 btn btn-success">Torna alla Home</a>
                </div>
            </div>
        @endif
    </div>
</x-layout>