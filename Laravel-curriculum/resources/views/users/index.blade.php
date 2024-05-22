@extends('front.layouts.master')
@section('title', 'top')
@section('description', 'ユーザー一覧のdescriptionです')
@section('content')
    <h1>ユーザー一覧</h1>
    <ul>
@foreach($users as $user)
    <li><a href="{{ route('users.show',['user' => $user->id]) }}">{{ $user->name }}</a></li>
    <li>所属企業: {{ $user->company->company_name }}</li>
    <li>著書数:{{ $user->books_count}}</li>
@endforeach
</ul>
@endsection