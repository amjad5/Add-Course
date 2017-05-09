<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;

class CourseController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        $subcategories = SubCategories::all();

        return view('welcome', ['categories' => $categories, 'subcategories' => $categories]);
    }
    
    public function postAddCourse(Request $request){
        $this->validate($request, [
            'category' => 'required',
            'subcategory' => 'required',
            'course' => 'course|required|unique:course',
            'section' => 'required',
            'lecture' => 'required',
            ''
            ]);
            
            $course = new Course([
                'category' => $request->input('category'),
                'subcategory' => $request->input('subcategory'),
                'course' => $request->input('course'),
                'section' => $request->input('section'),
                'lecture' => $request->input('section'),
                ]);
            $course->save();
            
            return redirect()->route('/');
    }
}
