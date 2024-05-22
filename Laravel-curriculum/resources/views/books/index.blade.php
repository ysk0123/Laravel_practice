@extends('front.layouts.master')
@section('title', 'top')
@section('description', 'ユーザー一覧のdescriptionです')
@section('content')
<h1>著書一覧ページです。</h1>
<h2 class="c-subtitle">著書一覧</h2>
<div class="p-book__list">
  <ul>
    @foreach($books as $book)
    <li class="p-book__listItem">
    <a href="{{ route('books.show', $book->id) }}">{{ $book->title }}</a>
    <p>著書 : {{$book->author_id }}</p>
    <p>コメント : {{ $book->comment }}</p>
    </li>
  @endforeach
  </ul>
</div>
@endsection