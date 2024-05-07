@extends('front.layouts.master')
@section('title', 'top')
@section('description', 'トップページのdescriptionです')
@section('content')
  <h1 class="page-name">トップページです。</h1>
  <h2 class="p-list_title">企業一覧</h2>
  <ul class="p-company_wrap">
    @foreach ($companies as $company)
    <div class="p-company_list">
      <li>{{ $company->company_name }}</li>
    </div>
      @endforeach
  </ul>    
@endsection