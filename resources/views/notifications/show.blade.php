@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">{{ $notification->title }}</h4>
                    </div>
                    <div class="card-body">
                        <p class="lead">{{ $notification->message }}</p>
                        
                        <p class="text-muted">
                            <strong>Status:</strong> 
                            <span class="{{ $notification->is_read ? 'text-success' : 'text-danger' }}">
                                {{ $notification->is_read ? 'O\'qilgan' : 'O\'qilmagan' }}
                            </span>
                        </p>

                        <a href="{{ route('notifications.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Orqaga
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
