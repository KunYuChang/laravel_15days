<!-- extends laouts.app 的時候傳參數red影響輸出的結果  -->
@extends('layouts.app', ['red'=>true]);

@section('page-title')
<section class="page-title">
    <ul>
        <li><a href="#">首頁</a></li>
        <li><a href="#">關於我們</a></li>
        <li class="active"><a href="#">聯絡我們</a></li>
    </ul>
</section>
@endsection


@section('content')
<h2>關於我</h2>
<p>請參考github的公開資訊</p>
@endsection