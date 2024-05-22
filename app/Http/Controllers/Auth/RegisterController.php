<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {       
        return view('auth.register');
    }

    public function register(Request $request)
    {       
        $this->validator($request->all())->validate();

        $user = $this->create($request->all());

        // Log the user in after registration
        auth()->login($user);

        // Redirect based on role
        if ($user->role == 'admin') {
            return redirect()->route('admindashboard');
        } elseif ($user->role == 'vendor') {
            return redirect()->route('admindashboard');
        } else {
            return redirect()->route('admindashboard');
        }
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'string', 'in:admin,vendor,user'],
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'],
        ]);
    }
    public function abcd(){
        echo 'fsfsdfsd';
        exit;
    }

    public function receiveData(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'role' => ['required', 'string', 'in:vendor,user'],
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Hash the password before storing it in the database
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'role' => $request->input('role'),
        ];

        // Create a new user record
        $user = User::create($data);

        if ($user->role == 'vendor') {
            $message = 'Vendor registered successfully';
        } else {
            $message = 'Uendor registered successfully';
        }

        return response()->json(['message' => $message, 'data' => $user], 201);
    }
}
