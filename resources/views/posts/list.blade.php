@extends('layouts.app')

@section('page-title')
<section class="page-title">
    <h4>麵包屑</h4>
    <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/posts">Blog</a></li>
        <li>Blog Single</li>
    </ol>
</section> 
@endsection

@section('content')
<div class="page-content">    
    <div>
        <h2>這裡是Blog頁面</h2>
        {{-- 用loop的方式做出畫面 --}}
        @foreach ($posts as $key => $post )            
            第{{$key+1}}篇文章 : <a href="/posts/9487">點此查看</a><br>
        @endforeach
    </div>
    <div>側邊攔</div>
</div>
@endsection