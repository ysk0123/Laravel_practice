
@extends('front.layouts.master')
@section('title', 'top')
@section('description', 'ユーザー一覧のdescriptionです')
@section('content')
    <h1>著書一覧ページです。</h1>
    <h2>著書一覧</h2>
    <ul>
@foreach($books as $book)
    <li>
        <a href="{{ route('books.show',$book->id) }}">{{ $book->title }}</a></li>
    <li>著書 : {{$book->author_id }}</li>
    <li>コメント : {{ $book->comment }}</li>
@endforeach
    </ul>
@endsection