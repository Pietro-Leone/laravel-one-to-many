@extends('layouts.app')
@section('content')

<div class="container">
    <h2 class="fs-4 text-lg my-4">
        {{ __('Profile') }}
    </h2>
    <div class="card p-4 mb-4 bg-dark shadow rounded-lg">

        @include('admin.profile.partials.update-profile-information-form')

    </div>

    <div class="card p-4 mb-4 bg-dark shadow rounded-lg">


        @include('admin.profile.partials.update-password-form')

    </div>

    <div class="card p-4 mb-4 bg-dark shadow rounded-lg">


        @include('admin.profile.partials.delete-user-form')

    </div>
</div>

@endsection
