@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profile') }}</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="mb-4">
                        <h4>{{ $user->name }}</h4>
                        <p class="text-muted">{{ $user->email }}</p>
                    </div>

                    <div class="mb-3">
                        <a href="{{ route('profile.edit') }}" class="btn btn-primary">
                            {{ __('Edit Profile') }}
                        </a>
                    </div>

                    <h5 class="mt-4">{{ __('Favorite Resources') }}</h5>
                    @if($favoriteResources->count() > 0)
                        <div class="list-group">
                            @foreach($favoriteResources as $resource)
                                <a href="{{ route('resources.show', $resource) }}" class="list-group-item list-group-item-action">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h6 class="mb-1">{{ $resource->title }}</h6>
                                        <small class="text-muted">{{ $resource->category->name }}</small>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    @else
                        <p class="text-muted">{{ __('No favorite resources yet.') }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection