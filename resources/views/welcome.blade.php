@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{--ログインがされていなくてもここは共通で表示されるページ--}}
               <ul>
                <li><a href="#">投稿1</a></li>
                <li><a href="#">投稿2</a></li>
                <li><a href="#">投稿3</a></li>
                <li><a href="#">投稿4</a></li>
                <li><a href="#">投稿5</a></li>
               </ul>
            </div>
        </div>
    </div>
</div>
@endsection
