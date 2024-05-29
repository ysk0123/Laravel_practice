@extends('front.layouts.master')
@section('title', '$book->title')
@section('description', '著書の詳細ページです')
@section('content')
<h1>著書詳細ページです。</h1>
<a href="{{ route('books.edit',['book' => $book->id]) }}">編集</a>
<h2 class="c-subtitle">著書詳細</h2>
<div class="p-book_list">
  <ul>
    <li class="p-book__listItem">
      <p>{{ $book->title}}</p>
      <p>著者 : <a href="{{ route('users.show', $book->author->id)}}">{{ $book->author->name }}</a></p>
      <p>コメント : {{$book->comment}}</p>
    </li>
  </ul>
  <form action="{{ route('books.destroy', $book->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">削除</button>
    
  </form>
</div>
@endsection