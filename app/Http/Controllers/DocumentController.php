<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    //
    public function send(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request->last . $request->first;
        $customer->email = $request->email;
        $customer->tel = $request->tel;
        $customer->content = $request->content;
        $customer->save();

        return view('document.thanks');
    }

}
