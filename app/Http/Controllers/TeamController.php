<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamRequest;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{

    public function index()
    {
        $teams = Team::all();

        return view('admin.admin.team.index')->with('teams', $teams);
    }


    public function create()
    {
        return view('admin.admin.team.create');
    }
    public function store(TeamRequest $team)
    {
        if ($team->has('img')) {

            $name = $team->file('img')->getClientOriginalName();
            $path = $team->file('img')->storeAs('Team', $name);
        }
        $team = Team::create([
            'img' => $path ?? null,
            'name' => $team->name,
            'lavozim' => $team->lavozim,
            'about' => $team->about,
        ]);
        return redirect()->route('team.index');
    }
    public function edit(Team $team)
    {
        return view('admin.admin.team.edit')->with(['team' => $team]);
    }
    public function update(TeamRequest $request, Team $team)
    {
        if ($request->hasFile('img')) {
            if (isset($team->img)) {
                Storage::delete($team->img);
                // storage papkadan ham ochirish qodi
                $team->img = $request->file('img')->store('Team');
                // storage papkadan ham ochirish qodi
            }
            $name = $request->file('img')->getClientOriginalName();
            $path = $request->file('img')->storeAs('Team', $name);
        }
        $team->update([
            'img' => $path ?? $team->img,
            'name' => $request->name,
            'lavozim' => $request->lavozim,
            'about' => $request->about,
        ]);
        return redirect()->route('team.index', ['Team' => $team->id]);
    }
    public function destroy(Team $team)
    {
        $team->delete();

        return redirect()->route('team.index');
    }
}
