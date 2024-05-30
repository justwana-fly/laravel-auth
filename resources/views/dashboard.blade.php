@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">
        {{ __('Dashboard') }}
    </h2>
@endsection

@section('content')
    <div class="container py-12">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm sm:rounded-lg">
                    <div class="card-header">
                        <h5 class="mb-0">{{ __('Dashboard') }}</h5>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">alex natia</h5>
                        <p class="card-text">prova@gmail.com</p>
                        <a href="#" class="btn btn-primary">Profile</a>
                        <a href="#" class="btn btn-secondary">Log Out</a>
                    </div>
                </div>
                <div class="alert alert-success mt-3" role="alert">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
@endsection
