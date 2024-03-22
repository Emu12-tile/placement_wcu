<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\ModelhasRoles;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // $role = DB::table('roles')->get();
        // $user = User::create([
        //     'name' => 'required',

        //     'email' => 'required',
        //     'password' => 'required'
        // ]);

        // $user->assignRole('user');

        return view('auth.register');
    }
    public function index()
    {

        // $roles = DB::table('roles')->join('model_has_roles', 'model_has_roles.role_id', '=', 'roles.id')
        // ->join('users', 'users.id', '=', 'model_has_roles.model_id')->get('roles.name');

        // dd($roles);
        $users = User::with('roles')->get();
        $roles = Role::get('name');


        //  dd($roles);
        return view('users.index', compact('users', 'roles'));
    }

    public function changeStatus(Request $request)
    {
        // $item = DB::tables('model_has_roles')->select('role_id', 'id')
        //     ->where("model_id", $request->user)->take(100)->get();

        // $item = DB::tables('model_has_roles')->find($request->user);

        if ($request->ajax()) {
            $item =
                User::with('roles')->find($request->user);

            // $item = User::doesntHave('roles')->find($request->user);
            if ($item) {
                // $item->role->name = $request->name;
                // $item->store_status = $request->status;
                $item->roles()->detach();
                $item->assignRole($request->input('roles'));
                $item->update();

                return response()->json(array("success" => true));
            }
        }
    }
    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'regex:/(.*)@wcu.edu.et/i', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    public function destroy($id)
    {
        $user = User::find($id);


        $user->delete();
        return redirect('user')->with('status', '  deleted successfully');
    }
}
