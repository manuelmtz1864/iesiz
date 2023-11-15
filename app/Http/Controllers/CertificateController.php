<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certificate;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('alumnos.inicio');
        return Certificate::all();
    }

    /**
     * Muestra los alumnos que se van a titularse
     */
    public function alumnosTitulacion()
    {
        $alumnos = Certificate::all();
        return view('alumnos.titulacion', compact('alumnos'));
    }

    /**
     * Generates a QR code with the given data and returns it as a response.
     *
     * @return \Illuminate\Http\Response
     */
    public function generarCodigoQR($folio)
    {
        $alumno = Certificate::where('id_hash', $folio)->first();
        return view('alumnos.qrCode', compact('folio', 'alumno'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($idHash)
    {
        $certificate = Certificate::where('id_hash', $idHash)->first();

        if ($certificate) {
            return view('certificate', ['certificate' => $certificate]);
        } else {
            // Maneja el caso en el que no se encuentra el certificado con el id_hash proporcionado
            return 'error'; // Puedes personalizar esta vista de error
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
