<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class courseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        return view ('courses.index')->with ('courses', $courses);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   

        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
            $input = $request->all();
            Course::create($input);
            return redirect('courses')->with('flash_message', 'course created successfully' );
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):View
    {
        $course = Course::find($id);
        return view ('courses.show')->with('courses', $course);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):view
    {
        $course = Course::find($id);
        return view ('courses.edit')->with('courses', $course);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id):RedirectResponse
    {
        $input = $request->all();
        $course = Course::find($id);
        $course -> update($input);
        return redirect('courses')->with('flash_message', 'courses updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
