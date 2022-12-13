@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <h3>じゃんけん</h3>
    <p>手を選ぶと自動でじゃんけんします。</p>
    <p>JQueryで実装しています。</p>
    <hr>
    <button id="gu" onclick="janken(0)" class="hand"><img src="{{ asset('img/gu.png') }}" alt="グー" id="gu_img"></button><!--
    --><button id="choki" onclick="janken(1)" class="hand"><img src="{{ asset('img/choki.png') }}" alt="チョキ" id="choki_img"></button><!--
    --><button id="pa" onclick="janken(2)" class="hand"><img src="{{ asset('img/pa.png') }}" alt="パー" id="pa_img"></button>
    <b id="vs" style="display:none">vs</b>
    <img src="" id="hand2">
    <hr>
    <h2 id="status"></h2>
    <div id="reload"></div>
</div>
@endsection
