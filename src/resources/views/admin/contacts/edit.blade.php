@extends('admin.layout')

@section('title', '問い合わせ編集')

@section('content')
    <h1>問い合わせ編集</h1>
    <form action="{{ route('admin.contacts.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">名前</label>
        <input type="text" name="name" value="{{ $contact->name }}" required>

        <label for="email">メール</label>
        <input type="email" name="email" value="{{ $contact->email }}" required>

        <label for="message">メッセージ</label>
        <textarea name="message" required>{{ $contact->message }}</textarea>

        <button type="submit">更新</button>
    </form>
    <a href="{{ route('admin.contacts.index') }}">キャンセル</a>
@endsection
