<?php

namespace App\Http\Controllers;

use App\Models\TimetableEntry;
use Illuminate\Http\Request;

class TimetableEntryController extends Controller
{
    public function index()
    {
        $entries = TimetableEntry::orderBy('day')
            ->orderBy('period')
            ->get();

        return view('entries.index', ['entries' => $entries]);
    }

    public function create()
    {
        return view('entries.create');
    }

    public function store(Request $request)
    {
        TimetableEntry::create($request->only(['day', 'period', 'title', 'room']));

        return redirect('/entries');
    }
}