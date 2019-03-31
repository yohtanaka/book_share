@extends('app')

@section('title', '本の一覧')

@section('content')
<h1>本のリスト</h1>
<a href="{{ route('book.create') }}">新規登録</a>
<ul>
				@foreach ($books as $book)
						<li><a href="">{{ $book->title }}</a></li>
				@endforeach
</ul>
@endsection
