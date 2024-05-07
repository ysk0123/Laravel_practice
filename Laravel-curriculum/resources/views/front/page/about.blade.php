@extends('front.layouts.master')
@section('title','about')
@section('description','aboutページのdescriptionです')
@section('content')  
  <h1 class="page-name">aboutページです。</h1>
  <h2 class="p-list_title">ユーザー一覧</h2>
  <ul>
    @foreach ($users as $user)
    <li class="p-user_list">
      <p>{{ $user->name }}</p>
      @if ($user->company)
        <p>所属企業：{{ $user->company->company_name }}</p>
      @endif
    </li>
    @endforeach
  </ul>    
@endsection

