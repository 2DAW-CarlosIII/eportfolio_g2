<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CicloResource;
use App\Models\CicloFormativo;
use App\Models\FamiliaProfesional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CicloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $search = $request->input('q', $request->input('search'));

    $query = CicloFormativo::query();

    if (!empty($search)) {
        $query->where('nombre', 'like', '%' . $search . '%');
    }

    $sort  = $request->input('_sort', 'id');
    $order = $request->input('_order', 'asc');

    $perPage = (int) $request->input('perPage', $request->input('per_page', 10));
    if ($perPage <= 0) $perPage = 10;

    return CicloResource::collection(
        $query->orderBy($sort, $order)->paginate($perPage)
    );
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $parent_id)
    {
        Gate::authorize('create', CicloFormativo::class);

        $validatedData = $request->validate([
            'nombre' => ['required', 'string'],
            'codigo' => ['required', 'string', 'unique:ciclos_formativos,codigo'],
            'grado' => ['required', 'in:basico,medio,superior'],
        ]);

        $cicloData = json_decode($request->getContent(), true);

        $cicloData['familia_profesional_id'] = $parent_id;

        $ciclo = CicloFormativo::create($cicloData);

        return new CicloResource($ciclo);
    }

    /**
     * Display the specified resource.
     */
    public function show($parent_id, FamiliaProfesional $familiaProfesional, CicloFormativo $id)
    {
        return new CicloResource($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $parent_id, CicloFormativo $id)
    {
        Gate::authorize('update', $id);
        $cicloData = json_decode($request->getContent(), true);
        $id->update($cicloData);
        return new CicloResource($id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($parent_id, CicloFormativo $id)
    {
        Gate::authorize('delete', $id);
        try {
            $id->delete();
            return response()->json(['message' => 'CicloFormativo eliminado correctamente'], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 400);
        }
    }
}
