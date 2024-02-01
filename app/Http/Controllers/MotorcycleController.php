<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Motorcycle;
 
class MotorcycleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $motorcycle = Motorcycle::orderBy('created_at', 'DESC')->get();
  
        return view('motorcycle.index', compact('motorcycle'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('motorcycle.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Motorcycle::create($request->all());
 
        return redirect()->route('motorcycle')->with('success', 'motorcycle added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $motorcycle = Motorcycle::findOrFail($id);
  
        return view('motorcycle.show', compact('motorcycle'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $motorcycle = Motorcycle::findOrFail($id);
  
        return view('motorcycle.edit', compact('motorcycle'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $motorcycle = Motorcycle::findOrFail($id);
  
        $motorcycle->update($request->all());
  
        return redirect()->route('motorcycle')->with('success', 'motorcycle updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $motorcycle = Motorcycle::findOrFail($id);
  
        $motorcycle->delete();
  
        return redirect()->route('motorcycle')->with('success', 'motorcycle deleted successfully');
    }
}