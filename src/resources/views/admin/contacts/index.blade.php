@extends('admin.layout')

@section('title', '問い合わせ一覧')

@section('content')
    <h1>問い合わせ一覧</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>名前</th>
            <th>メール</th>
            <th>詳細</th>
        </tr>
        @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->id }}</td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td><a href="{{ route('admin.contacts.show', $contact->id) }}">詳細</a></td>
            </tr>
        @endforeach
    </table>
    {{ $contacts->links() }}
@endsection
