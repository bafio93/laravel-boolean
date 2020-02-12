@extends("layouts.main")
@section("content")
    @include("layouts.nav")
    <div class="baf-home">
        <!-- JUMBO: -->
        <section class="baf-home-jumbo">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="">DIVENTA<br><strong>SVILUPPATORE WEB</strong></h1>
                        <p>
                            <strong>Trasformiamo la tua passione in una carriera. Se non trovi lavoro, ti rimborsiamo.</strong>
                            <ul>
                                <li><strong>6 mesi</strong> di corso intensivo online in diretta</li>
                                <li><strong>Nessuna competenza</strong> di programmazione richiesta</li>
                                <li>Siamo certi del tuo successo, altrimenti <strong>ti rimborsiamo</strong></li>
                            </ul>
                        </p>
                    </div>
                    <div class="col">
                        <img src="https://www.boolean.careers/images/homepage/pc-black-gif.gif" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- DATA: -->
        <section class="baf-home-data">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-3 baf-card">
                        <h3>98%</h3>
                        <p>La percentuale dei nostri studenti che ora lavora come web developer, oltre la metà a tempo indeterminato.</p>
                    </div>
                    <div class="col-3 baf-card">
                        <h3>€ 23.000</h3>
                        <p>Lo stipendio medio lordo di partenza degli studenti assunti dalle nostre aziende partner.</p>
                    </div>
                    <div class="col-3 baf-card">
                        <h3>#1</h3>
                        <p>Siamo il primo istituto online in Italia per indice di gradimento e risultati conseguiti.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- SCHOOL -->
        <section class="baf-home-school">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h3 class="">Una vera scuola a casa tua</h3>
                        <p>
                            Le lezioni si svolgono tutti i giorni, dal lunedì al venerdì, in <strong>aula virtuale</strong>.
                            <ul>
                                <li><strong>Il mattino</strong> è maggiormente dedicato alla teoria con lezioni in diretta. Comodamente da casa tua, puoi interagire con i tuoi compagni e con il <strong><em>teacher</em></strong>, proprio come se fossi a scuola.</li>
                                <li><strong>Il pomeriggio</strong> è dedicato alle esercitazioni.<br>In qualsiasi momento puoi chiedere supporto ai <strong><em>tutor</em></strong> per risolvere gli esercizi che ti abbiamo assegnato. Alza la mano e siamo subito da te!</li>
                            </ul>
                        </p>
                    </div>
                    <div class="col">
                        <img src="https://www.boolean.careers/images/homepage/slack.gif" alt="">
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include("layouts.footer")
@endsection
