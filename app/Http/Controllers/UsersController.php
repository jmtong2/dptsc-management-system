<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Trait\CustomJsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Symfony\Component\HttpFoundation\Response;

class UsersController extends Controller
{
    use CustomJsonResponse;

    /**
     * Display a listing of the resource.
     */
    public function index(){
        // return list of users
        if (\request()->is("api/*")){
            return $this->success(
                User::all(),
                'Users retrieved successfully'
            );
        }
        return view("pages.users.list", [
            "users" => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("pages.users.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate request
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => ['required',
                Password::min(8)
                    ->letters()
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
                    ->uncompromised(),
            ]
        ]);

        //create user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        //return response
        if (\request()->is("api/*")){
            return $this->success(
                $user,
                'User created successfully',
                Response::HTTP_CREATED
            );
        }

        return view("pages.users.list", [
            "users" => User::all()
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        // show user details
        return $this->success(
            $user,
            'User details retrieved successfully'
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //validate request
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email,'.$user->id,
        ]);

        //update user
        $user->update($request->all());

        //return response
        return $this->success(
            $user,
            'User updated successfully',
            Response::HTTP_OK
        );
    }

    //update password
    public function updatePassword(Request $request)
    {
        //validate request
        $request->validate([
            'current_password' => 'required',
            'new_password' => [
                'required',
                Password::min(8)
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
                    ->uncompromised(),
            ],
        ]);

        $user = $request->user();
//        dd($user->password);
//        dd($id);
//        $user = User::find($id)->get();

        //check current password
        if (!Hash::check($request->current_password, $user->password)) {
            return $this->error(
                'Current password does not match!',
                Response::HTTP_UNAUTHORIZED
            );
        }

        //update password
        $user->update([
            'password' => Hash::make($request->new_password)
        ]);

        //return response
        return $this->success(
            $user,
            'Password updated successfully',
            Response::HTTP_OK
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //delete user
        $user->delete();

        //return response
        return $this->success(
            null,
            'User deleted successfully',
            Response::HTTP_OK
        );
    }

    //register
    public function register(Request $request)
    {
        //validate request
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => [
                'required',
                Password::min(8)
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
                    ->uncompromised(),
            ],
        ]);

        //create user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password'=> Hash::make($request->password)
        ]);

        //return response
        return $this->success(
            $user,
            'User created successfully',
            Response::HTTP_CREATED
        );
    }

    /**
     * Login user and create token
     */
    public function login(Request $request)
    {
        //validate request
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);


        //check if user exists
        $user = User::where('email', $request->email)->first();

        //check password
        if (!$user || !Hash::check($request->password, $user->password)) {
            return $this->error(
                'Invalid email or password',
                Response::HTTP_UNAUTHORIZED
            );
        }

        //create token
        $token = $user->createToken('auth_token')->plainTextToken;

        //return response
        return $this->success(
            [
                'access_token' => $token,
                'token_type' => 'Bearer',
                'data' => $user
            ],
            'User logged in successfully',
            Response::HTTP_OK
        );
    }

    /**
     * Logout user (Revoke the token)
     */
    public function logout(Request $request)
    {
        //get user
        $user = $request->user();

        //revoke token
        $user->tokens()->where('id', $user->currentAccessToken()->id)->delete();

        //return response
        return $this->success(
            null,
            'User logged out successfully',
            Response::HTTP_OK
        );
    }

    /**
     * Logout user from all devices (Revoke all tokens)
     */
    public function logoutAll(Request $request)
    {
        //get user
        $user = $request->user();

        //revoke tokens
        $user->tokens()->delete();

        //return response
        return $this->success(
            null,
            'User logged out successfully from all devices',
            Response::HTTP_OK
        );
    }

    /**
     * Get authenticated user
     */
    public function user(Request $request)
    {
        //get user
        $user = $request->user();

        //return response
        return $this->success(
            $user,
            'User retrieved successfully',
            Response::HTTP_OK
        );
    }

}
