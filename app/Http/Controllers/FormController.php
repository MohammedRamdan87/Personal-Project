<?php

namespace App\Http\Controllers;

use LDAP\Result;
use App\Rules\WordCount;
use Illuminate\Http\Request;
use App\Http\Requests\DataRequest;
use App\Http\Requests\ContactRequest;
use App\Rules\RowCount;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{

    function contact_data(Request $request) {
        $request->validate([
              'name' => 'required|min:2|max:100',
                 'email' => 'required|ends_with:@gmail.com',
                 'phone' => 'required',
                 'message' => ['required',new RowCount(30)],
                 'file' => 'required|mimes:pdf,doc,docx,png,jpg'
             ]);
        $imgname = rand(). time(). $request->file('file')->getClientOriginalName();
        $request->file('file')->move(public_path('uploads'),$imgname);
        return redirect()->back()->withSuccess('Send successfully');

}

}
