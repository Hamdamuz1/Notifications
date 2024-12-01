@extends('layouts.app')

@section('content')
    <style>
        /* Matn dizayni */
        h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #0056b3;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .card-title {
            color: #2c3e50;
            font-weight: bold;
            font-size: 1.5rem;
            margin-bottom: 10px;
            line-height: 1.3;
        }

        .card-text {
            color: #7f8c8d;
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .text-muted {
            font-size: 0.9rem;
            color: #95a5a6;
        }

        /* Kartalarga hover effekti */
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
            border-radius: 12px;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        /* Tugmalarga nozik effekt */
        .btn {
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .btn-info:hover {
            background-color: #004085;
            color: white;
        }

        .btn-warning:hover {
            background-color: #e0a800;
            color: white;
        }

        .btn-danger:hover {
            background-color: #c82333;
            color: white;
        }

        /* Kartadagi matn va tasvir orasidagi bo'shliq */
        .card-body {
            padding: 20px;
        }
    </style>

    <div class="container mt-4">
        <h1 class="mb-4 text-center">Xabarnomalar Ro'yxati</h1>
        <div class="row">
            @foreach($notifications as $notification)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        @if($notification->image_url)
                            <img src="{{ asset('storage/' . $notification->image_url) }}" class="card-img-top" alt="Xabarnoma rasmi" style="height: 200px; object-fit: cover;">
                        @else
                            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Default rasm" style="height: 200px; object-fit: cover;">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $notification->title }}</h5>
                            <p class="card-text">{{ Str::limit($notification->message, 100) }}</p>
                            <p class="text-muted">Yaratilgan: {{ $notification->created_at->format('d-m-Y H:i') }}</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="{{ route('notifications.show', $notification->id) }}" class="btn btn-info btn-sm">
                                <i class="bi bi-eye"></i> Ko'rish
                            </a>
                            <a href="{{ route('notifications.edit', $notification->id) }}" class="btn btn-warning btn-sm">
                                <i class="bi bi-pencil"></i> Tahrirlash
                            </a>
                            <form action="{{ route('notifications.destroy', $notification->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('O\'chirishga ishonchingiz komilmi?')">
                                    <i class="bi bi-trash"></i> O'chirish
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
