@extends('layouts.app')

@section('content')
<h1 class="page-name">トップページです。</h1>
  <h2 class="p-list_title">一覧ページ</h2>
  <ul class="p-company_wrap">
    @foreach ($books as $book)
      <li>
        {{ $book->title }}
        (Author: {{ $book->author->name ?? UnKnown}})
      </li>
    @endforeach
  </ul>    
@endsection