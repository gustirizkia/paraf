<?php

namespace App\Http\Controllers;

use App\Models\paraf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParafController extends Controller
{
    public function detaiL(Request $request, $uuid)
    {
        $data = paraf::where('uuid', $uuid)->first();
        if(!$data){
            return abort(404);
        }
        $user = DB::table('cms_users')->find($data->user_id);

        // dd($data->nomor);

        return view('admin.detail-paraf', [
            'data' => $data,
            'user' => $user
        ]);
    }
}
