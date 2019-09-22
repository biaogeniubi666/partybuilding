<?php

namespace App\Http\Controllers;

use App\Models\Air;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AirRequest;

class AirsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
		$airs = Air::paginate();
		return view('airs.index', compact('airs'));
	}

    public function show(Air $air)
    {
        return view('airs.show', compact('air'));
    }

	public function create(Air $air)
	{
		return view('airs.create_and_edit', compact('air'));
	}

	public function store(AirRequest $request)
	{
		$air = Air::create($request->all());
		return redirect()->route('airs.show', $air->id)->with('message', 'Created successfully.');
	}

	public function edit(Air $air)
	{
        $this->authorize('update', $air);
		return view('airs.create_and_edit', compact('air'));
	}

	public function update(AirRequest $request, Air $air)
	{
		$this->authorize('update', $air);
		$air->update($request->all());

		return redirect()->route('airs.show', $air->id)->with('message', 'Updated successfully.');
	}

	public function destroy(Air $air)
	{
		$this->authorize('destroy', $air);
		$air->delete();

		return redirect()->route('airs.index')->with('message', 'Deleted successfully.');
	}
}