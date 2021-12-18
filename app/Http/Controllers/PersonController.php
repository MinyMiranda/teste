<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{

    public function index()
    {
        $persons = Person::all();
        return response()->json($persons);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'type' => 'required|string',
            'company_id' => 'required|string',
            'individual_id' => 'required|string'
        ]);

        $person = Person::create($request->all());
        return response()->json($person);
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}
