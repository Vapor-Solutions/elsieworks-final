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

    public static function maintenance_false()
    {
        $path = base_path('.env');

        if (file_exists($path)) {
            file_put_contents($path, str_replace(
                'MAINTENANCE_MODE=true',
                'MAINTENANCE_MODE=false',
                file_get_contents($path)
            ));

            // dd(file_get_contents($path));
        }
    }
    public static function maintenance_true()
    {
        $path = base_path('.env');

        if (file_exists($path)) {
            file_put_contents($path, str_replace(
                'MAINTENANCE_MODE=false',
                'MAINTENANCE_MODE=true',
                file_get_contents($path)
            ));
        }
    }
    public static function maintenance_end($timestamp)
    {
        $path = base_path('.env');

        if (file_exists($path)) {
            file_put_contents($path, str_replace(
                'MAINTENANCE_END='.env('MAINTENANCE_END'),
                'MAINTENANCE_END='.$timestamp,
                file_get_contents($path)
            ));
        }


    }
}
