<?php

namespace App\Http\Controllers;

use App\Models\IdType;
use App\Trait\CustomJsonResponse;
use Illuminate\Http\Request;

class IdTypeController extends Controller
{
    use CustomJsonResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // list id types
        if (request()->is('api/*')){
            return $this->success(IdType::all(), 'Id types list');
        }

        return view('pages.id-types.list', [
            'idTypes' => IdType::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // add create id type view
        return view('pages.id-types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate request
        $request->validate([
            'type' => 'required|string|unique:id_types,type',
        ]);

        // create id type
        $idType = IdType::create([
            'type' => $request->type,
        ]);

        if (!$idType) {
            return $this->error('Id type not created');
        }
        // return success response
        if ($request->is("api/*")){
            return $this->success($idType, 'Id type created successfully');
        }

        return view("pages.id-types.list",[
            'idTypes' => IdType::all(),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(IdType $idType)
    {
        if (!$idType) {
            return $this->notFound('Id type not found');
        }

        // show id type details
        return $this->success($idType, 'Id type details');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(IdType $idType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, IdType $idType)
    {
        //validate request
        $request->validate([
            'type' => 'required|string|unique:id_types,type',
        ]);

        // update id type details
        $idType->update([
            'type' => $request->type,
        ]);

        // return success response
        return $this->success($idType, 'Id type updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(IdType $idType)
    {
        // delete id type
        $idType->delete();

        //confirm deletion
        if ($idType->trashed()) {
            return $this->success($idType, 'Id type deleted successfully');
        }else{
            return $this->error('Id type not deleted');
        }
    }
}
