<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Client;
use App\Models\Rental;
use Illuminate\Http\Request;

class RentalController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->authorizeResource(Rental::class, 'rental');
    }

    public function index()
    {
        
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        
    }

    public function edit(Rental $rental)
    {
        
    }

    public function update(Request $request, Rental $rental)
    {
        
    }
}
