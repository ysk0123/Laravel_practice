@extends('front.layouts.master')
@section('title', 'top')
@section('description', 'トップページのdescriptionです')
@section('content')
  <h1 class="page-name">トップページです。</h1>
  <h2 class="p-list_title">一覧ページ</h2>
  <ul class="p-list_content">
      <li><a href="{{ route('users.index') }}">ユーザー</a></li>
      <li><a href="{{ route('books.index') }}">著書</a></li>
    </div>
    
</ul>
@endsection