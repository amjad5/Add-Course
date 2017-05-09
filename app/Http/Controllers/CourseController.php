<?php

namespace App\Http\Controllers;

/*use App\Cart;
use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use Stripe\Charge;
use Stripe\Stripe;
*/

class CourseController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        $subcategories = SubCategories::all();

        return view('welcome', ['categories' => $categories, 'subcategories' => $subcategories]);
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
