<?php

namespace App\Http\Controllers;

use App\Models\DayEntry;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DayEntryController extends Controller
{
    public function index()
    {
        $today = Carbon::today();
        $firstDayOfMonth = $today->copy()->firstOfMonth();
        $daysInMonth = $today->daysInMonth;
        $startingBlankDays = $firstDayOfMonth->dayOfWeek;

        $entries = auth()->user()->dayEntries()
            ->whereYear('date', $today->year)
            ->whereMonth('date', $today->month)
            ->get()
            ->keyBy(fn($entry) => $entry->date->format('Y-m-d'));

        return view('days.index', compact(
            'today',
            'daysInMonth',
            'startingBlankDays',
            'entries'
        ));
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|in:good,bad',
            'note' => 'nullable|string|max:255',
        ]);

        DayEntry::updateOrCreate(
            [
                'user_id' => auth()->id(),
                'date' => Carbon::today(),
            ],
            [
                'type' => $request->type,
                'note' => $request->note,
            ]
        );
        return back();
    }

    public function show($date)
    {
        $entry = auth()->user()->dayEntries()
            ->whereDate('date', $date)
            ->firstOrFail();

        return view('days.show', compact('entry'));
    }

    public function edit($date)
    {
        $entry = auth()->user()->dayEntries()
            ->whereDate('date', $date)
            ->firstOrNew(['date' => $date, 'user_id' => auth()->id()]);

        return view('days.edit', compact('entry', 'date'));
    }
    public function update(Request $request, $date)
    {
        $request->validate([
            'type' => 'required|in:good,bad',
            'note' => 'nullable|string|max:255',
        ]);

        DayEntry::updateOrCreate(
            [
                'user_id' => auth()->id(),
                'date' => $date,
            ],
            [
                'type' => $request->type,
                'note' => $request->note,
            ]
        );
        return redirect()->route('days.show', $date);
    }
}
