<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class documentosController extends Controller
{
/*----------------------------------------------------------MOSTRAR VISTA DOCUMENTOS--------------------------------------------------
------------------------------------------------------------------------------------------------------------------------------------*/
    public function Documentos()
    {
        return view('documentos');
    }


/*----------------------------------------------------------SELECCIONAR TODOS LOS DOCUMENTOS------------------------------------------
------------------------------------------------------------------------------------------------------------------------------------*/
    public function seleccionarDocumentos()
    {
        $nombreDocumento = Documentos::select('name');
        return view('documentos')->with('documentos',$nombreDocumento);
    }

    public function seleccionarMime()
    {
        $mimeDocumento = Documentos::select('mime')->where(name,'LIKE', $nombreDocumento)->get();
        return view('documentos')->with('documentos',$nombreDocumento);
    }

/*----------------------------------------------------------SELECCIONAR DOCUMENTOS FECHA CONCRETA-------------------------------------
------------------------------------------------------------------------------------------------------------------------------------*/
    public function documentosFechaConcreta()
    {
        $nombreDocumento = Documentos::select('name')->where(create_at,'<=', $fechaConcreta)->get();;
        return view('documentos')->with('documentos',$nombreDocumento);
    }

    public function mimeFechaConcreta()
    {
        $mimeDocumento = Documentos::select('mime')->where(name,'LIKE', $nombreDocumento)->where(create_at,'<=', $fechaConcreta)->get();
        return view('documentos')->with('mimeDocumentos',$mimeDocumento);
    }

/*----------------------------------------------------------SELECCIONAR DOCUMENTOS RANGOS DE FECHA-------------------------------------
------------------------------------------------------------------------------------------------------------------------------------*/
    public function documentosRangoFechas()
    {
        $nombreDocumento = Documentos::select('name')->where(create_at,'<=', $fechaInicio)->where(create_at,'>=', $fechaFin)->get();;
        return view('documentos')->with('documentos',$nombreDocumento);
    }

    public function mimeRangoFechas()
    {
        $mimeDocumento = Documentos::select('mime')->where(name,'LIKE', $nombreDocumento)->where(create_at,'<=', $fechaConcreta)->where(create_at,'>=', $fechaFin)->get();
        return view('documentos')->with('mimeDocumentos',$mimeDocumento);
    }


}
