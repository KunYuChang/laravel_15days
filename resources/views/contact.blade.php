@extends('layouts.app');

@section('hero')
<h1>Contact 頁面</h1>
@endsection


@section('content')

<form action="#">
    <label for="name">姓名</label>
    <input type="text" id="name" name="name"><br>
    <label for="name">信箱</label>
    <input type="email" id="email" name="email"><br>
    <label for="contact">輸入內容</label>
    <textarea name="contact" id="contact" cols="30" rows="10"></textarea><br>
    <button>Submit</button>
</form>
@endsection