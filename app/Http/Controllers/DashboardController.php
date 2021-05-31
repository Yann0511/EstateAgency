<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ProprieteRepository;

class DashboardController extends Controller
{
    protected $proprieteRepository;
    protected $nbrPerPage = 5;

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
        $proprietes = $this->proprieteRepository->getpagination($this->nbrPerPage);
        $links = $proprietes->setPath('')->render();

        return view('dashboard.dashboard', compact('proprietes', 'links'));
    }
}
