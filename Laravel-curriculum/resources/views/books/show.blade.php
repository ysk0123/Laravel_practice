
@extends('front.layouts.master')
@section('title', '$book->title')
@section('description', '著書の詳細ページです')
@section('content')
    <h1>著書詳細ページです。</h1>
    <h2>著書詳細</h2>
    <ul>
        <li>{{ $book->title}}</li>
        <li>著者 : {{ $book->author->name }}</li>
        <li>コメント : {{$book->comment}}</li>
    </ul>
    <form action="{{ route('books.destroy', $book->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('本当に削除しますか？')">削除</button>

    </form>

@endsection