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
    <h2>這裡是Blog頁面</h2>
    <div>
        <a href="/posts/9487">查看此篇文章</a>
    </div>
    <div>側邊攔</div>
</div>
@endsection