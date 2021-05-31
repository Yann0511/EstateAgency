<?php

namespace App\Http\Controllers;

use App\Repositories\ProprieteRepository;
use App\Http\Requests\ProprieteRequest;
use Illuminate\Http\Request;

class ProprieteController extends Controller
{
    protected $proprieteRepository;
    protected $nbrPerPage = 4;

    public function __construct(ProprieteRepository $proprieteRepository)
    {
        $this->middleware('auth', ['except' => 'index']);
        $this->middleware('admin', ['only' => 'destroy']);

        $this->proprieteRepository = $proprieteRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $propriete = $this->proprieteRepository->getPaginate($this->nbrPerPage);
		$links = $propriete->setPath('')->render();

		return view('propriete.liste', compact('propriete', 'links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('propriete.add');
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
        $this->proprieteRepository->store($input);
        return redirect(route('propriete.index'));
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
        $this->proprieteRepository->destroy($id);

        return redirect()->back;
    }
}
