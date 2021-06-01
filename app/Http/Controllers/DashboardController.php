<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Repositories\ProprieteRepository;

class DashboardController extends Controller
{
    protected $proprieteRepository;
    protected $nbrPerPage = 10;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ProprieteRepository $p)
    {
        $this->middleware('auth');
        $this->proprieteRepository = $p;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      
        $proprietes = $this->proprieteRepository->getPagination($this->nbrPerPage);
        $links = $proprietes->links('pagination::bootstrap-4');

        return view('dashboard.dashboard', compact('proprietes', 'links'));
    }
}
