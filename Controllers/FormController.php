<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Rules\FiveCharName;
use App\Rules\ImageOnly;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function submitForm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', new FiveCharName()],
            'file' => ['required', 'file', new ImageOnly(), 'max:1024'],
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        return 'Form submitted successfully!';
    }
}