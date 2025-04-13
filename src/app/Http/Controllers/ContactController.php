<?php

namespace App\Http\Controllers;

use Illuminate\Http\Controllers;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Category;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function showForm()
    {
        $categories = Category::all();
        return view('contact.form',compact('categories'));
    }

    public function confirm(ContactRequest $request)
    {
        $input = $request->all();
        Session::put('contact_input',$input);

        $category = Category::find($input['category_id']);
        return view('contact.confirm',[
            'input' =>$input,
            'category' => $category
        ]);
    }

    public function store(Request $request)
    {
        $input = Session::get('contact_input');

        if(!$input){
            return redirect()->route('contact.form');
        }

        Contact::create([
            'last_name' => $input['last_name'],
            'first_name' => $input['first_name'],
            'gender' => $input['gender'],
            'email' => $input['email'],
            'tel' => $input['tel1'].$input['tel2'].$input['tel3'],
            'address' => $input['address'],
            'building' => $input['building'],
            'category_id' => $input['category_id'],
            'detail' => $input['detail'],
        ]);

        Session::forget('contact_input');

        return redirect() ->route('contact.thankyou');
    }

    public function back()
    {
        $input = Session::get('contact_input');
        $categories = Category::all();
        return view('contact.form',[
            'input' => $input,
            'categories' => $categories
        ]);
    }
}
