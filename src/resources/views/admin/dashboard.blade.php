@extends('admin.layout')

@section('title', 'ダッシュボード')

@section('content')
    <h1>管理ダッシュボード</h1>
    <p>管理画面へようこそ。</p>
    <a href="{{ route('admin.contacts.index') }}">問い合わせ一覧を見る</a>
@endsection
