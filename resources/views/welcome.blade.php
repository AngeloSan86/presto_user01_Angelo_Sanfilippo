<x-layout>

<div class="container-fluid text-center bg-body-tertiary">
    <div class="row vh-100 justify-content-center align-items-center">
        <div class="cpl-12 col md-6">
            <h1>Presto.it</h1>
            <div class="my-3">
                @auth
                    <a class="btn btn-dark" href="{{ route('create.article') }}">Pubblica un articolo</a>
                @endauth
            </div>
        </div>
    </div>
</div>


</x-layout>