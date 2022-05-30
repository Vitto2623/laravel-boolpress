@extends('layouts.app')


@section('content')

        <div class="container-fluid d-flex justify-content-center align-items-center mt-5">
            <div class="row">
                <div class="col-12  mt-5">
                    <h1 id="title">Contact Us:</h1>
                    <form action="{{route('guest.store')}}" method="post" class="d-flex flex-column">
                        @csrf
                        @method('POST')

                        <div class="m-3">
                            <label for="guestName">Inserisci il tuo nome: </label>
                            <input type="text" name="guestName">
                        </div>

                        <div class="m-3">
                            <label for="mailMessage">Inserisci la tua email: </label>
                            <input type="text" name="mailMessage">
                        </div>

                        <div class="m-3 d-flex flex-column">
                            <label for="guestName">Inserisci un messaggio: </label>
                            <textarea name="guestMessage" cols="90" rows="20"></textarea>
                        </div>

                        <button class="btn btn-dark">Invia il Tuo Messaggio</button>
                    </form>
                </div>
            </div>
        </div>



@endsection