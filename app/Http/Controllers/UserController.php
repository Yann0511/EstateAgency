<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;

use App\Repositories\UserRepository;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

use League\CommonMark\Inline\Element\Image;

class UserController extends Controller
{

    protected $userRepository;

    protected $nbrPerPage = 15;

    public function __construct(UserRepository $userRepository)
	{
		$this->userRepository = $userRepository;
	}

	public function index()
	{

		$users = DB::table('users')->orderBy('id','asc')->where([['role', '!=', 'Admin']])->Paginate($this->nbrPerPage);
		$links = $users->links('pagination::bootstrap-4');

		return view('dashboard.users.index', compact('users', 'links'));
	}

	public function create()
	{
		return view('dashboard.users.create');
	}

	public function store(Request $request)
	{
		if(Auth::user()->role != "Admin")
        {
            return redirect()->route('user.edit', [Auth::user()->id]);
        }
		
		$this->validator($request->all());
		$user = $this->userRepository->store($request->all());

		return redirect('user')->withOk("L'utilisateur " . $user->name . " a été créé.");
	}

	public function show($id)
	{
		$user = $this->userRepository->getById($id);

		return view('dashboard.users.show',  compact('user'));
	}

	public function edit($id)
	{
		$user = $this->userRepository->getById($id);

		return view('dashboard.users.edit',  compact('user'));
	}

	public function update(Request $request, $id)
	{
		$this->validator($request->all());

		$this->userRepository->update($id, $request->all());
		
		return redirect('user')->withOk("L'utilisateur " . $request->input('name') . " a été modifié.");
	}

	public function destroy($id)
	{
		if(Auth::user()->role != "Admin")
        {
            return redirect()->route('user.edit', [Auth::user()->id]);
        }
		
		$this->userRepository->destroy($id);

		return redirect()->back();
	}

	public function update_avatar(Request $request)
	{
		$request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:6000',

        ]);

        $avatar = time().'.'.$request->avatar->getClientOriginalExtension(); 
		$request->avatar->move(public_path('avatars'), $avatar);
    	$folder = '/avatars/';
		$filename = $folder . $avatar;

    		$user = Auth::user();
    		$user->photo = $filename;
    		$user->save();

        return back()
            ->with('success','You have successfully upload image.');

    }

	protected function validator(array $data)
    {
        return Validator::make($data, [
            'role' => ['required', 'string', 'max:7'],
            'surname' =>['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users']
        ]);
    }
}