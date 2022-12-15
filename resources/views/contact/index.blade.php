@extends('layouts.app')

@section('content')
<h3>お問合せフォーム</h3>
<form method="POST" action="{{ route('contact.confirm') }}">
    @csrf
    <label for="email">メールアドレス<input id="email" type="text" name="email" value="{{ old('email') }}"></label>
    <p class="error-message">
        @if ($errors->has('email'))
            {{ $errors->first('email') }}
        @endif
    </p>
    <label for="contactDetail">
        お問合せ内容
        <textarea id="contactDetail" name="contactDetail">{{ old('contactDetail') }}</textarea>
    </label>
    <p class="error-message">
        @if ($errors->has('contactDetail'))
            {{ $errors->first('contactDetail') }}
        @endif
    </p>
    <button type="submit">入力内容確認</button>
</form>
@endsection