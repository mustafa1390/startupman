@extends('user1.master')
@section('content')
        {{ $slot }} 
@endsection

@section('style')
    {{ $style ?? '' }}
@endsection

@section('script')
    {{ $script ?? '' }}
@endsection
