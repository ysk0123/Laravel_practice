@extends('front.layouts.master')
@section('title','top')
@section('description','トップページのdescriptionです')
@section('content')
  <h1 class="page-name">トップページです。</h1>
  <h2>企業一覧</h2>
  <ul>
    @foreach ($companies as $company)
      <li>{{ $company->name }}</li>
    @endforeach
  </ul>    
@endsection