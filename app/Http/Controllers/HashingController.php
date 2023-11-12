<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class HashingController extends Controller
{
    public function hashRange($start, $end)
    {
        $hashedRange = [];

        for ($i = $start; $i <= $end; $i++) {
            $number = (string)$i;
            $hash = Hash::make($number);

            // Agregar el número original y su hash al array
            $hashedRange[] = [
                'number' => $number,
                'hash' => $hash,
            ];
        }

        return response()->json(['hashed_range' => $hashedRange]);
    }
}
