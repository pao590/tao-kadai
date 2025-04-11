@extends('admin.layout')

@section('title', '問い合わせ詳細')

@section('content')
    <h1>問い合わせ詳細</h1>
    <p><strong>名前:</strong> {{ $contact->name }}</p>
    <p><strong>メール:</strong> {{ $contact->email }}</p>
    <p><strong>メッセージ:</strong> {{ $contact->message }}</p>
    <a href="{{ route('admin.contacts.index') }}">一覧へ戻る</a>
@endsection
