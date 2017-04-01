<?php namespace App\Http\Controllers;

use App\Anggota;
use App\Hobi;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Redirect;

use Illuminate\Http\Request;

class HobiController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	
	public function __construct()
    {
        $this->middleware('auth', ['only' => [
            'create', 'store', 'edit', 'destroy'
        ]]);
    }
	 
	 protected $rules = [
		'hobi' => ['required', 'min:5'],
	];
		 
	public function index($id)
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id)
	{
		$anggota = Anggota::find($id);
		return view('hobi.create', compact('anggota'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($id, Request $request)
	{
	$this->validate($request, $this->rules);
	$input = Input::all();
	$anggota = Anggota::find($id);
	$input['anggota_id'] = $anggota->id;
	Hobi::create( $input );
 
	return Redirect::route('anggota.show', $anggota->id);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id, $idhobi)
	{
		$anggota = Anggota::find($id);
		$hobi = Hobi::find($idhobi);
		return view('hobi.show', compact('anggota', 'hobi'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id, $idhobi)
	{
		$anggota = Anggota::find($id);
		$hobi = Hobi::find($idhobi);
		return view('hobi.edit', compact('anggota','hobi'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, $idhobi)
	{
	$anggota = Anggota::find($id);
	$hobi = Hobi::find($idhobi);
	$input = array_except(Input::all(), '_method');
	$hobi->update($input);
 
	return Redirect::route('anggota.hobi.show', [$anggota->id, $hobi->id]);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id, $idhobi)
	{
	$anggota = Anggota::find($id);
	$hobi = Hobi::find($idhobi);
	$hobi->delete();
 
	return Redirect::route('anggota.show', $anggota->id);
	}

}
