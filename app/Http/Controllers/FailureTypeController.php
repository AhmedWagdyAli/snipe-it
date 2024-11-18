<?php

namespace App\Http\Controllers;

use App\Models\FailureType;
use Illuminate\Http\Request;

class FailureTypeController extends Controller
{
    public function index()
    {
        $failureTypes = FailureType::all();
        return view('failure_types.index', compact('failureTypes'));
    }

    public function create()
    {
        return view('failure_types.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        FailureType::create($request->all());
        return redirect()->route('failure_types.index');
    }

    public function edit(FailureType $failureType)
    {
        return view('failure_types.edit', compact('failureType'));
    }

    public function update(Request $request, FailureType $failureType)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $failureType->update($request->all());
        return redirect()->route('failure_types.index');
    }

    public function destroy(FailureType $failureType)
    {
        $failureType->delete();
        return redirect()->route('failure_types.index');
    }
}
