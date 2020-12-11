@extends('administrador.masterpage')


@section('contenido')


    <!-- Page Content -->
    <div class="content">
        <div class="container mt-5">
          
            <div class="row justify-content-center">
                <div class="col-md-6 col-xl-5">
                    <div class="block block-rounded block-bordered">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Bienvenido a su aplicacion {{ auth()->user()->name }}</h3>
                        </div>
                        <div class="block-content">
                            <p>
                                hemos trabajado para que pueda gestionar las barberias de una manera sencilla y practica
                            </p>
                            <p>
                                
                                <strong>Wish you all the best and happy coding!</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
