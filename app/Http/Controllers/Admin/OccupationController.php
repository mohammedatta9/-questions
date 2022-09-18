<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Traits\JodaResource;
use Illuminate\Http\Request;

class OccupationController extends Controller
{
    use JodaResource;
    protected $rules = [
        'name' => 'required|string',
    ];

    public function query($query){
        return $query->paginate(10);
    }
}
