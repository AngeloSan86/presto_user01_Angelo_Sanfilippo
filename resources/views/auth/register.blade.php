<x-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1>{{ __('ui.registration') }}</h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center height custom">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{ route('register') }}" class="bg-body-tertiary shadow rounded p-5">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">{{ __('ui.textName') }}:</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>

                    <div class="mb-3">
                        <label for="registerEmail" class="form-label">{{ __('ui.textMail') }}:</label>
                        <input type="email" class="form-control" id="registerEmail" name="email">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">{{ __('ui.textPasswConf') }}:</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-dark">{{ __('ui.registration') }}</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-layout>