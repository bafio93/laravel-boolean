@extends("layouts.main")
@section("content")
    @include("layouts.nav")
    <h1>PAGINA FAQ</h1>
    <a href="{{ route('home_page') }}">TORNA ALLA PAGINA DI INIZIO</a>
    @include("layouts.footer")
@endsection
