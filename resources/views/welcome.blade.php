<x-layout>

<div class="container-fluid text-center bg-body-tertiary">
    @if (session()->has('errorMessage'))
        <div class="alert alert-danger text-center shadow rounded w-50">
            {{ session('errorMessage') }}
        </div>
    @endif
    @if (session()->has('message'))
        <div class="alert alert-success text-center shadow rounded w-50">
            {{ session('message') }}
        </div>
    @endif
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