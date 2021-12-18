<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        return response()->json($companies);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'fantasy_name' => 'required|string',
            'cnpj' => 'required|string'
        ]);

        $companie = Company::create($request->all());
        return response()->json($companie);
    }

    public function update($id, Request $request)
    {
        $companie = Company::firstWhere('id', $id);
        $companie->update($request->all());
        return response()->json($companie->fresh());
    }

    public function delete($id)
    {
        $companie = Company::firstWhere('id', $id);
        return response()->json($companie->delete());
    }
}
