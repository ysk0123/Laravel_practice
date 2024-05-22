@extends('front.layouts.master')
@section('title', $user->name)
@section('description', 'ユーザー詳細ページのdescriptionです')

@section('content')
<h1>ユーザー詳細ページです。</h1>
<h2 class="c-subtitle">ユーザー詳細</h2>
<div class="p-usersInfo__wrapper">
  <p>{{ $user->name }}</p>
  <p>所属企業: {{ $user->company->company_name }}</p>
  <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('本当に削除しますか？')">削除</button>
  </form>
</div>
<h2>著書一覧</h2>
<div class="p-user__list">
  @if($user->books->isEmpty())
  <p>著書がありません</p>
  @else
  <ul>
    @foreach($user->books as $book)
    <li class="p-user__listItem">
      <a href="{{ route('books.show', ['book' => $book->id]) }}">{{ $book->title }}</a>
      <p>コメント: {{ $book->comment }}</p>
    </li>
    @endforeach
  </ul>
</div>
@endif
@endsection