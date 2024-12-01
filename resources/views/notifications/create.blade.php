@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4 text-center">Yangi Xabarnoma Qo'shish</h1>
        
        <form action="{{ route('notifications.store') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Sarlavha:</label>
                <input type="text" class="form-control" id="title" name="title" required>
                <div class="invalid-feedback">
                    Sarlavha kiritish majburiy!
                </div>
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Xabar matni:</label>
                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                <div class="invalid-feedback">
                    Xabar matnini kiritish majburiy!
                </div>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Rasm yuklash:</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>

            <button type="submit" class="btn btn-primary">Saqlash</button>
        </form>
    </div>
@endsection
