@extends ('layouts.app')
@include ('partials.menuMesociclos')
@section('contenido')
    <div class="container">
        <div class="filtros">
        </div>
        <div class="documentos">
            <iframe width="400" height="400" src="{{asset('documentos/mesociclos/"$nombreDocumento"."$mime"')}}" frameborder="0"></iframe>
            <p>$nombreDocumento</p>
        </div>
    </div>
@endsection


