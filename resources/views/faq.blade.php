@extends('layouts.main')

@section('content-faq')
    <div class="boolean__faq__jumbo">
        <div class="container-fluid">
            <h1>Domande frequenti</h1>
            <p>Le nostre risposte a tutte le tue domande. Non trovi la risposta che stai cercando? <a href="https://www.boolean.careers/iscriviti">Contattaci</a> e saremo felici di darti una
                mano.</p>
        </div>
    </div>
    {{--dd($lista_faq_sx)--}}
    <div class="boolean__faq__body">
        <div class="container-fluid">
            <div class="row boolean__faq__body__cnt">
                <div class="col-xl-6 bg_light_blue">
                    <h2>Prima del corso</h2>
                    @forelse ($lista_faq_sx as $lista)
                        <div class="boolean__faq__body__question">
                                <h3>
                                    {{$lista["q"]}}
                                    <i class="fas fa-plus"></i>
                                </h3>
                                <p>
                                    {{!! $lista["a"] !!}}
                                </p>
                        </div>
                    @empty
                        <p>Non sono presenti domande</p>
                    @endforelse
                </div>

                <div class="col-xl-6 bg_blue">
                    <h2>Dopo il corso</h2>
                    @forelse ($lista_faq_dx as $lista)
                        <div class="boolean__faq__body__question">
                                <h3>
                                    {{$lista["q"]}}
                                    <i class="fas fa-plus"></i>
                                </h3>
                                <p>
                                    {{$lista["a"]}}
                                </p>
                        </div>
                    @empty
                        <p>Non sono presenti domande</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
