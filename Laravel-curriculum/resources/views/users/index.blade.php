@extends('front.layouts.master')
@section('title', 'top')
@section('description', 'ユーザー一覧のdescriptionです')
@section('content')
    <h1>ユーザー一覧</h1>
    <ul>
@foreach($users as $user)
    <li>{{ $user->name }}</li>
@endforeach
</ul>
@endsection