@extends("layouts.main")
@section("content")
    @include("layouts.nav")
    <h1 class="text-success">TUTTO PERFETTO!</h1>
    <a href="{{ route('faq_page') }}">VADO ALLE FAQ</a>
    <a href="{{ route('privacy_page') }}">VADO ALLA privacy</a>
    @include("layouts.footer")
@endsection
