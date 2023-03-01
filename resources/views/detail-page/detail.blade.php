@extends('detail-page.layouts.app')

@section('detail-content')
    @include('detail-page.partials.detail-content')
    @include('detail-page.partials.side-menu')
@endsection

@section('more')
    @include('detail-page.partials.more-porto')
@endsection

@section('recomended')
    @include('detail-page.partials.recomended-porto')
@endsection