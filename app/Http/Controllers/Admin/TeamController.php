<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateTeam;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    protected $repository;

    public function __construct(Team $team)
    {
        $this->repository = $team;

    }

    public function index()
    {
        $teams = $this->repository->latest()->paginate();

        return view('admin.pages.teams.index', compact('teams'));
    }

    public function create()
    {
        return view('admin.pages.teams.create');
    }

    public function store(StoreUpdateTeam $request)
    {
        $data = $request->all();

        if ($request->hasFile('image') && $request->image->isValid()) {
            $data['image'] = $request->image->store("teams");
        }

        $this->repository->create($data);

        return redirect()->route('teams.index')->with('message', 'Usuário criado com sucesso.');
    }

    public function show($id)
    {
        if (!$team = $this->repository->find($id)) {
            return redirect()->back();
        }

        return view('admin.pages.teams.show', compact('team'));
    }

    public function edit($id)
    {
        if (!$team = $this->repository->find($id)) {
            return redirect()->back();
        }

        return view('admin.pages.teams.edit', compact('team'));
    }

   
    public function update(StoreUpdateTeam $request, $id)
    {
        if (!$team = $this->repository->find($id)) {
            return redirect()->back();
        }
        $data = $request->all();


        if ($request->hasFile('image') && $request->image->isValid()) {

            if (Storage::exists($team->image)) {
                Storage::delete($team->image);
            }

            $data['image'] = $request->image->store("teams");
        }

        $team->update($data);

        return redirect()->route('teams.index')->with('message', 'Usuário editado com sucesso.');
    }

    public function destroy($id)
    {
        if (!$team = $this->repository->find($id)) {
            return redirect()->back();
        }

        $team->delete();

        return redirect()->route('teams.index')->with('error', 'Usuário excluído com sucesso.');
    }

    /**
     * Search results
     *
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $filters = $request->only('filter');

        $teams = $this->repository
                            ->where(function($query) use ($request) {
                                if ($request->filter) {
                                    $query->orWhere('name', 'LIKE', "%{$request->filter}%");
                                    $query->orWhere('email', $request->filter);
                                }
                            })
                            ->latest()
                            ->paginate();

        return view('admin.pages.teams.index', compact('teams', 'filters'));
    }
}
