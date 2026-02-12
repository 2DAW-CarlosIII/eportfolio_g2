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
    public function index(Request $request,FamiliaProfesional $familiaProfesional)
    {

        return CicloResource::collection(
            CicloFormativo::when($request->search, function ($query) use ($request) {
                $query->where('nombre', 'like', '%' . $request->search . '%');
            })
            ->where('familia_profesional_id',$familiaProfesional->id)
            ->orderBy($request->_sort ?? 'id', $request->_order ?? 'asc')
                ->paginate($request->perPage)
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, FamiliaProfesional $familiaProfesional)
    {
        Gate::authorize('create', CicloFormativo::class);

        $cicloData = $request->validate([
            'nombre' => 'required|string|max:255',
            'codigo' => 'required|string|max:50|unique:ciclos_formativos,codigo',
            'grado' => 'required|in:basico,medio,superior',
            'descripcion' => 'nullable|string',
        ]);

        $cicloData['familia_profesional_id'] = $familiaProfesional->id;

        $ciclo = CicloFormativo::create($cicloData);

        return new CicloResource($ciclo);
    }

    /**
     * Display the specified resource.
     */
    public function show(FamiliaProfesional $familiaProfesional, CicloFormativo $ciclo)
    {
        return new CicloResource($ciclo);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FamiliaProfesional $familiaProfesional, CicloFormativo $ciclo)
    {
        Gate::authorize('update', $ciclo);
        $cicloData = json_decode($request->getContent(), true);
        $ciclo->update($cicloData);
        return new CicloResource($ciclo);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FamiliaProfesional $familiaProfesional, CicloFormativo $ciclo)
    {
        Gate::authorize('delete', $ciclo);
        try {
            $ciclo->delete();
            return response()->json([
                'message' => 'CicloFormativo eliminado correctamente'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 400);
        }
    }
}
