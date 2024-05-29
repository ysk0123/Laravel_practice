@extends('front.layouts.master')
@section('title', '著書登録')
@section('description', '著書登録ページです')
@section('content')
<h1>著書登録ページです。</h1>

<h2 class="c-subtitle">著書登録</h2>

<form action="{{ route('books.store') }}" method="POST" class="p-book__form__wrapper">
    @csrf

    <div class="p-book__form">
        <label for="title" class="p-book__form__element">著書名</label>
        <input type="text" id="title" name="title" size="25" placeholder="タイトルを入力してください" required class="form-control">
    </div>

    <div class="p-book__form">
        <label for="author_id" class="p-book__form__element">著者名</label>
        <select id="author_id" name="author_id" placeholder="著者を入力してください" required class="form-control">
            @foreach($authors as $id => $name)
                <option value="{{ $id }}">{{ $name }}</option>
            @endforeach
        </select>
    </div>

    <div class="p-book__form">
        <label for="comment" class="p-book__form__element">コメント</label>
        <textarea id="comment" name="comment" rows="6" cols="25" placeholder="本文を入力してください" required class="form-control"></textarea>
    </div>

    <div class="p-book__submit">
        <button type="submit" class="btn btn-primary">投稿</button>
        <button type="submit" onclick="location.href='{{ route('books.index')}}'">キャンセル</button>
    </div>
</form>

@endsection