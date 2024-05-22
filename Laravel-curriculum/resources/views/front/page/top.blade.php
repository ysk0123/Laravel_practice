@extends('front.layouts.master')
@section('title', 'top')
@section('description', 'トップページのdescriptionです')
@section('content')
  <h1 class="page-name">トップページです。</h1>
  <h2 class="p-list__title">一覧ページ</h2>
  <div class="p-list__content">
    <ul>
      <li class="p-listItem"><a href="{{ route('users.index') }}">ユーザー</a></li>
      <li class="p-listItem"><a href="{{ route('books.index') }}">著書</a></li>
    </ul>
  </div>
@endsection