<?php
class FruitController extends Controller {
	public function index()
	{
		$fruits = Fruit::all();
		return view('fruits.index', compact('fruits'));
	}

	public function create()
	{
		return view('fruits.create');
	}
	
	public function store(Request $request)
	{
		$fruit = new Fruit();
		$fruit->name = $request->input('name');
		$fruit->color = $request->input('color');
		$fruit->save();
		
		return redirect()->route('fruits.index')->with('success', 'Fruit created successfully');
	}

	public function show($id)
	{
		$fruit = Fruit::find($id);
		return view('fruit.show', compact('fruit'));
	}
	
	public function edit($id)
	{
		$fruit = Fruit::find($id);
		return view('fruit.edit', compact('fruit'));
	}
	
	public function update(Request $request, $id)
	{
		$fruit = Fruit::find($id);
		$fruit->name = $request->input('name');
		$fruit->color = $request->input('color');
		$fruit->save();
		
		return redirect()->route('fruits.index')->with('success', 'Fruit updated successfully');
	}
	
	public function destroy($id)
	{
		$fruit = Fruit::find($id);
		$fruit->delete();
		
		return redirect()->route('fruits.index')->with('success', 'Fruit updated successfully');
	}
}
