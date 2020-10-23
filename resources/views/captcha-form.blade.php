@extends('layouts.app')

@section('content')
    <form action="{{ url('form') }}" method="POST">
        @csrf

        <input type="email" name="email"><br>
        <button type="submit">Submit</button>

        {{ no_captcha()->input('g-recaptcha-response') }}
    </form>
@endsection

@push('scripts')
    {{ no_captcha()->script() }}
    {{ no_captcha()->getApiScript() }}

    <script>
        grecaptcha.ready(() => {
            window.noCaptcha.render('login', (token) => {
                document.querySelector('#g-recaptcha-response').value = token;
            });
        });
    </script>
@endpush
