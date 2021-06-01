<?php

namespace App\Http\Controllers;

use App\Repositories\ProprieteRepository;
use App\Http\Requests\ProprieteRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProprieteController extends Controller
{
    protected $proprieteRepository;
    protected $nbrPerPage = 15;

    public function __construct(ProprieteRepository $proprieteRepository)
    {
        $this->middleware('auth');
        $this->proprieteRepository = $proprieteRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proprietes = DB::table('proprietes')->groupBy('user_id')->Paginate($this->nbrPerPage);
		$links = $proprietes->links('pagination::bootstrap-4');

		return view('dashboard.propriete.liste', compact('proprietes', 'links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.propriete.add');
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
