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

        return view('shop.index', ['categories' => $categories, 'subcategories' => $categories]);
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
