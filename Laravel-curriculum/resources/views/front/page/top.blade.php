@extends('front.layouts.master')
@section('title', 'top')
@section('description', 'トップページのdescriptionです')
@section('content')
  <h1 class="page-name">トップページです。</h1>
  <h2 class="p-list_title">一覧ページ</h2>
  <ul class="p-company_wrap">
    <li><a href="{{ route('books.index') }}">ユーザー</a></li>
    <li><a href="{{ route('books.index') }}">書籍</a></li>
  </ul>    
@endsection