@extends('front.layouts.master')
@section('title', '著書編集')
@section('description', '著書編集ページです')
@section('content')
<h1>著書編集ページです。</h1>

<h2 class="c-subtitle">著書編集</h2>

<form action="{{ route('books.store') }}" method="POST" class="p-book__form__wrapper">
    @csrf
    @method('POST')

    <div class="p-book__form">
        <label for="title" class="p-book__form__element">著書名</label>
        <input type="text" id="title" name="title" size="25" value="{{ $book->title}}">
    </div>

    <div class="p-book__form">
        <label for="author_id"class="p-book__form__element">著者名</label>
        <select id="author_id" name="author_id" class="form-control">
            @foreach($authors as $id => $name)
                <option value="{{ $id }}" {{ $book->author_id == $id ? 'selected' : '' }}>{{ $name }}</option>
            @endforeach
        </select>
    </div>

    <div class="p-book__form">
        <label for="comment"class="p-book__form__element">コメント</label>
        <textarea id="comment" name="comment" rows="6" cols="25" class="form-control">{{ $book->comment }}</textarea>
    </div>
    <div class="p-book__submit">
        <button type="submit">投稿</button>
        <button type="submit" onclick="location.href='{{ route('books.show', $book->id) }}'">キャンセル</button>
    </div>
</form>

@endsection