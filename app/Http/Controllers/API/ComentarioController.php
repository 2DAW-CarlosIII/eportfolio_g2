<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ComentarioResource;
use App\Models\Comentario;
use App\Models\Evidencia;
use App\Models\Evidencias;
use App\Models\User;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request,Evidencia $evidencia,Comentario $comentario)
    {
            return ComentarioResource::collection(
            Comentario::where('evidencia_id',$evidencia->id)
            ->orderBy($request->_sort ?? 'id', $request->_order ?? 'asc')
            ->paginate($request->perPage));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Evidencia $evidencia,Comentario $comentario)
    {
        $comentarioData = json_decode($request->getContent(), true);

        $comentario = Comentario::create($comentarioData);

        return new ComentarioResource($comentario);
    }

    /**
     * Display the specified resource.
     */
    public function show(Evidencia $evidencia,Comentario $comentario)
    {
         return new ComentarioResource($comentario);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Evidencia $evidencia, Comentario $comentario)
    {
        $comentarioData = json_decode($request->getContent(), true);
        $comentario->update($comentarioData);

        return new ComentarioResource($comentario);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evidencia $evidencia, Comentario $comentario)
    {
         try {
            $comentario = Comentario::where('evidencia_id',$evidencia->id);
            $comentario->delete();
            return response()->json(null, 204);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 400);
        }
    }
}
