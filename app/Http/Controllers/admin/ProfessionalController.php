<?php

namespace App\Http\Controllers\admin;

use App\Models\Profession;
use App\Models\Professional;
use App\Http\Requests\StoreProfessionalRequest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfessionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professional = Professional::get();
        return view('admin.users.index', compact('professional'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $professions = Profession::pluck('id','name');
      return view('admin.users.create', compact('professions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfessionalRequest $request)
    {
        $data = $request->all();
        Professional::create($data);
        return to_route('professional.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Professional $professional)
    {

        $pro = Profession::get();
        return view('admin.users.edit', compact('professional','pro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProfessionalRequest $request, Professional $professional)
    {
      $professional->name = $request->input('name');
      $professional->lastname = $request->input('lastname');
      $professional->email = $request->input('email');
      $professional->phone = $request->input('phone');
      $professional->city = $request->input('city');
      $professional->company = $request->input('company');
      $professional->experience = $request->input('experience');
      $professional->works = $request->input('works');
      $professional->description = $request->input('description');
      $professional->update();
      $professional->professions()->sync($request->profession_id);
      return back();
      //return to_route('professional.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Professional $professional)
    {
      $professional->delete();
      return to_route('professional.index');
    }
}
