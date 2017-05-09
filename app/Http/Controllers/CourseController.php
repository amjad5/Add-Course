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

<<<<<<< HEAD
        return view('welcome', ['categories' => $categories, 'subcategories' => $subcategories]);
=======
        return view('welcome', ['categories' => $categories, 'subcategories' => $categories]);
>>>>>>> 078f3a4353489e48fbe1f78d967325f8542d3be8
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
                'course' => $request->input('course'),
                ]);
                
            $category = new Category([
                'category' => $request->input('category'),
                ]);
                
            $subCategory = new SubCategory([
                'subcategory' => $request->input('subcategory'),
                ]);
                
            $section = new Section([
                'section' => $request->input('section'),
                ]);

            $lecture = new Lecture([
                'lecture' => $request->input('lecture'),
                ]);
                
            $course()->save();
            
            $course()->categories()->save($category);
            $course()->sections()->save($section);
            
            $subCategory()->save();
            $subCategory()->lectures()->save($lectures);
            
            
            
            return redirect()->route('/');
    }
}
