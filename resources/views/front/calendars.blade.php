@extends('front.master-pages')
@section('content')
<?php $title="Our Events| Grace Community Bible Church"; ?>
<div style="min-height:124px"></div>
<div class="content">
    <div class="container">
     <iframe style="min-height:824px" src="{{url('/getevent')}}">Your browser isn't compatible</iframe>
    </div>
</div>
@endsection
