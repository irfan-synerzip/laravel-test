<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\RomanNumber;

class NumbersController extends Controller
{
    public function getinteger($roman_number)
    {
        return RomanNumber::roman2Int($roman_number);
    }
}
