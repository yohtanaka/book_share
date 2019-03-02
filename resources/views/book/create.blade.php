@extends('app')

@section('title', '本の登録')

@section('content')
<h1>おすすめの本を登録しよう</h1>
<form action="{{ route('book.store') }}" method="POST">
    @csrf
    <p>
        <span>タイトル：</span>
        <input type="text" name="title" id="title">
    </p>
    <p>
        <span>詳細：</span>
        <input type="textarea" name="description" id="description">
    </p>
    <p>
        <span>ジャンル：</span>
        <select name="genre" id="genre">
            <option value="0">漫画</option>
            <option value="1">小説</option>
        </select>
    </p>
    <input type="submit" value="登録">
</form>
@endsection
