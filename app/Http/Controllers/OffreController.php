<?php

namespace App\Http\Controllers;

use App\Repositories\OffreRepository;
use App\Http\Requests\OffreRequest;
use Illuminate\Http\Request;

class OffreController extends Controller
{
    protected $offreRepository;
    protected $nbrPerPage = 4;

    public function __construct(OffreRepository $offreRepository)
    {
        $this->middleware('agent')   ;

        $this->offreRepository = $offreRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offre = $this->offreRepository->getPaginate($this->nbrPerPage);
		$links = $offre->setPath('')->render();

		return view('offre.liste', compact('offre', 'links'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('offre.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = array_merge($request->all(), ['user_id' => $request->user()->id]);
        $this->offreRepository->store($input);
        return redirect(route('offre.index'));

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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->offreRepository->destroy($id);

        return redirect()->back;
    }
}
