@extends('layouts.app')


@include('layouts.other.nav')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@auth
    <form action="{{ route('addComment') }}" method="POST" class="mt-4">
        @csrf
        <input type="hidden" name="post_id" value="{{ $post->id }}">
        <div class="mb-3">
            <p class="fw-bold form-label">Оставить комментарий</p>
            <textarea name="content" class="form-control" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
        <a href="javascript:history.back();" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left"></i> Назад к посту
        </a>
    </form>
@else
    <p>Пожалуйста, <a href="{{ route('login') }}">войдите</a>, чтобы оставить комментарий.</p>
@endauth


