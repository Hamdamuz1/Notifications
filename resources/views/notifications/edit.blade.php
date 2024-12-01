@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-warning text-white">
                        <h4 class="mb-0">Xabarnomani Tahrirlash</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('notifications.update', $notification->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <!-- Sarlavha -->
                            <div class="mb-3">
                                <label for="title" class="form-label">Sarlavha:</label>
                                <input type="text" name="title" id="title" value="{{ old('title', $notification->title) }}" class="form-control" required>
                                @error('title')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Xabar matni -->
                            <div class="mb-3">
                                <label for="message" class="form-label">Xabar matni:</label>
                                <textarea name="message" id="message" class="form-control" rows="5" required>{{ old('message', $notification->message) }}</textarea>
                                @error('message')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Submit tugmasi -->
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-success">Yangilash</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
