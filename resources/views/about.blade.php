<!-- extends laouts.app 的時候傳參數red影響輸出的結果  -->
@extends('layouts.app', ['red'=>true]);

@section('page-title')
<section class="page-title">
    <h2>你好你好，在下張玉安</h2>
</section>
@endsection


@section('content')
<h2>關於我</h2>
<p>請參考github的公開資訊</p>
@endsection