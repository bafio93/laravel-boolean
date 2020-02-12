@extends("layouts.main")
@section("content")
    @include("layouts.nav")
    <section class="baf-faq-jumbo">
        <div class="container-fluid">
            <h1>Domande frequenti</h1>
            <p>Le nostre risposte a tutte le tue domande. Non trovi la risposta che stai cercando? <a href="{{ route('nolink_page') }}">Contattaci</a> e saremo felici di darti una mano.</p>
        </div>
    </section>
    <section class="baf-faq-box">
        <div class="container-fluid">
            <div class="row">
                <div class="col baf-faq-box-left">
                    <!-- Inizio a ciclare elementi dentro lista_faq_sinistra: -->
                    @foreach($lista_faq_sinistra as $coppia)
                    <div class="baf-questionbox">
                        <p>{{ $coppia["q"] }}<i class="fas fa-plus"></i></p>
                        <p class="baf-active">{!! $coppia["a"] !!}</p>
                    </div>
                    @endforeach
                </div>
                <div class="col baf-faq-box-right">
                    <!-- Inizio a ciclare elementi dentro lista_faq_destra: -->
                    @foreach($lista_faq_destra as $coppia)
                    <div class="baf-questionbox">
                        <p>{{ $coppia["q"] }}<i class="fas fa-plus"></i></p>
                        <p class="baf-active">{!! $coppia["a"] !!}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('app.js') }}" type="text/javascript"></script>
    @include("layouts.footer")
@endsection
