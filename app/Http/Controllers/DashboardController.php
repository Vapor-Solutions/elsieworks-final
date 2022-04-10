<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function change_about(Request $request)
    {
        $this->validate($request, [
            'about'=>'required|mimes:jpg'
        ]);

        $image = $request->file('about');
        $image->move('client/images/about', 'about-1.jpg');

        return redirect()->route('admin.dashboard');
    }
    public function change_shirley(Request $request)
    {
        $this->validate($request, [
            'shirley'=>'required|mimes:jpg'
        ]);

        $image = $request->file('shirley');
        $image->move('client/images/contact', 'contact1.jpg');

        return redirect()->route('admin.dashboard');
    }
    public function change_wambui(Request $request)
    {
        $this->validate($request, [
            'wambui'=>'required|mimes:jpg'
        ]);

        $image = $request->file('wambui');
        $image->move('client/images/contact', 'contact2.jpg');

        return redirect()->route('admin.dashboard');
    }
}
