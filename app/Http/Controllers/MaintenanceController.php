<?php

namespace App\Http\Controllers;

use App\Models\MaintenanceSubscriber;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    public function subscribe(Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
            'email'=>'required',
        ]);

        $sub = new MaintenanceSubscriber();
        $sub->name = $request->name;
        $sub->email = $request->email;
        $sub->save();



    }
}
