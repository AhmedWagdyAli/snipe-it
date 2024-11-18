<?php

namespace App\Http\Controllers;

use App\Models\Priority;
use Illuminate\Http\Request;

class PriorityController extends Controller
{
    public function index()
    {
        $priorities = Priority::all();
        return view('priorities.index', compact('priorities'));
    }

    public function create()
    {
        return view('priorities.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Priority::create($request->all());
        return redirect()->route('priorities.index');
    }

    public function edit(Priority $priority)
    {
        return view('priorities.edit', compact('priority'));
    }

    public function update(Request $request, Priority $priority)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $priority->update($request->all());
        return redirect()->route('priorities.index');
    }

    public function destroy(Priority $priority)
    {
        $priority->delete();
        return redirect()->route('priorities.index');
    }
}
