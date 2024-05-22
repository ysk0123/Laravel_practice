@extends('front.layouts.master')
@section('title', 'top')
@section('description', 'ユーザー一覧のdescriptionです')
@section('content')
<h1>ユーザー一覧ページです。</h1>
<h2 class="c-subtitle">ユーザー一覧</h2>
<div class="p-user_list">
  <ul>
    @foreach($users as $user)
    <li class="p-user__listItem">
    <p><a href="{{ route('users.show', ['user' => $user->id]) }}">{{ $user->name }}</a></p>
    <p>所属企業: {{ $user->company->company_name }}</p>
    <p>著書数:{{ $user->books_count}}</p>
    </li>
  @endforeach
  </ul>
</div>
</ul>
@endsection