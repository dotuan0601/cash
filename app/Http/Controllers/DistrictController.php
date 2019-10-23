<?php

namespace App\Http\Controllers;

use App\District;
use Illuminate\Support\Facades\DB;

class DistrictController extends Controller
{
    public function searchByProvince($id)
    {
        if (!$id) {
            return json_encode([]);
        }

        return json_encode(DB::table('districts')->where('province_id', $id)->get());
    }
}
