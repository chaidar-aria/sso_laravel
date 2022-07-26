@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                    <div class="card-body">
                        <a href="http://app_sso1.main.test" class="text-sm text-gray-700 dark:text-gray-500 underline">SSO
                            APP 1</a>
                        <a href="http://app_sso2.main.test" class="text-sm text-gray-700 dark:text-gray-500 underline">SSO
                            APP 2</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
