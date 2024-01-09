<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    static $model = \App\Modules\User\Model::class;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login()
    {
        try {
            $check_auth_user = User::where('email', request()->email)->first();
            if ($check_auth_user && Hash::check(request()->password, $check_auth_user->password)) {
                DB::table('oauth_access_tokens')->where("user_id", $check_auth_user->id)->update(['revoked' => 1]);
                // auth()->login($check_auth_user, request()->remember);

                $data['access_token'] = $check_auth_user->createToken('accessToken')->accessToken;
                $data['user'] = $check_auth_user;
                return response()->json($data, 200);
            } else {
                return response()->json('user not found', 417);
            }
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}
