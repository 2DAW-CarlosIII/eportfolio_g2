<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CicloResource;
use App\Http\Resources\FamiliaProfesionalResource;
use App\Models\CicloFormativo;
use App\Models\FamiliaProfesional;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FamiliaProfesionalController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = FamiliaProfesional::query();
        if($request->filled('q')) {
            $query->where('nombre', 'like', '%' .$request->q . '%');
        }

        return FamiliaProfesionalResource::collection(
            $query->orderBy($query->sort ?? 'id', $query->order ?? 'asc')
                ->paginate($query->per_page)
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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
