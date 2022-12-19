@extends('layouts.app')

@section('content')
<h3 class="border-bottom">お問合せ内容確認</h3>
<form method="POST" action="{{ route('contact.send') }}">
    @csrf
    <label for="email">メールアドレス</label>
    <p>{{ $inputs["email"] }}</p>
    <input type="hidden" name="email" value="{{ $inputs['email'] }}" readonly>

    <label for="contactDetail">お問合せ内容</label>
    <p>{!! nl2br(e($inputs['contactDetail'])) !!}</p>
    <input type="hidden" name="contactDetail" value="{{ $inputs['contactDetail'] }}" readonly>
    
    <button type="submit" name="action" value="back">入力内容修正</button>
    <button type="submit" name="action" value="submit">送信する</button>
</form>
@endsection