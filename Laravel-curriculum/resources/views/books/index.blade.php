
@extends('front.layouts.master')
@section('title', 'top')
@section('description', 'ユーザー一覧のdescriptionです')
@section('content')
    <h1>著書一覧ページです。</h1>
    <h2>著書一覧</h2>
    <ul>
@foreach($books as $book)
    <li>{{ $book->title }}</li>
@endforeach
    </ul>
@endsection