@extends('front.layouts.master')
@section('title', $user->name)
@section('description', 'ユーザー詳細ページのdescriptionです')

@section('content')
    <h1>ユーザー詳細ページです。</h1>
    <h2>ユーザー詳細</h2>
    <p>{{ $user->name }}</p>
    <p>所属企業: {{ $user->company->company_name }}</p>
    <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('本当に削除しますか？')">削除</button>
    </form>
    <h2>著書一覧</h2>
    @if($user->books->isEmpty())
        <p>著書がありません</p>
    @else
        <ul>
            @foreach($user->books as $book)
                <li>
                    <a href="{{ route('books.show', ['book' => $book->id]) }}">{{ $book->title }}</a>
                    <p>コメント: {{ $book->comment }}</p>
                </li>
            @endforeach
        </ul>
    @endif
@endsection
