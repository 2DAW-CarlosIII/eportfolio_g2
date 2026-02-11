<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CicloResource;
use App\Http\Resources\FamiliaProfesionalResource;
use App\Models\CicloFormativo;
use App\Models\FamiliaProfesional;
use Illuminate\Http\Request;

class FamiliaProfesionalController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('q', $request->input('search'));

        $query = FamiliaProfesional::query();

        if (!empty($search)) {
            $query->where('nombre', 'like', '%' . $search . '%');
        }

        $sort  = $request->input('_sort', 'id');
        $order = $request->input('_order', 'asc');

        $perPage = (int) $request->input('perPage', $request->input('per_page', 10));
        if ($perPage <= 0) $perPage = 10;

        return FamiliaProfesionalResource::collection(
            $query->orderBy($sort, $order)->paginate($perPage)
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => ['required', 'string'],
            'codigo' => ['required', 'string', 'unique:familias_profesionales,codigo'],
        ]);

        $familiaProfesional = json_decode($request->getContent(), true);

        $familiaProfesional = FamiliaProfesional::create($familiaProfesional);

        return new FamiliaProfesionalResource($familiaProfesional);
    }

    /**
     * Display the specified resource.
     */
    public function show(FamiliaProfesional $familiaProfesional)
    {
        return new FamiliaProfesionalResource($familiaProfesional);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FamiliaProfesional $familiaProfesional)
    {
        $familiaProfesionalData = json_decode($request->getContent(), true);
        $familiaProfesional->update($familiaProfesionalData);

        return new FamiliaProfesionalResource($familiaProfesional);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FamiliaProfesional $familiaProfesional)
    {
         try {
            $familiaProfesional->delete();
            return response()->json(['message' => 'FamiliaProfesional eliminado correctamente'], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 400);
        }
    }
}
