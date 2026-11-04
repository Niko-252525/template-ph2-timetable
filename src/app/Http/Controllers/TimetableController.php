<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class TimetableController extends Controller
{
        public function index()
    {
        $monday = DB::select('
            SELECT * FROM courses
            WHERE day=1
            ORDER BY period ASC
        ');

        $required = DB::select('
            SELECT * FROM courses
            WHERE required=true
            ORDER BY code ASC
        ');

        return view('timetable', [
            'monday'   => $monday,
            'required' => $required,
        ]);
    }
}
