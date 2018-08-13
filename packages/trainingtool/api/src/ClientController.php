<?php

namespace Trainingtool\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use JWTAuth;
use JWTAuthException;

class ClientController extends Controller
{
    public function index() {
    	$arr = ["msg" => "Welcome to Training tool API section"];
    	echo json_encode($arr); die;
    }

    /**
     * Function -disc : API funtion for register client admin for generate there institute 
     * @return json 
     */
    public function register(Request $request) {

    	try {

    	} catch(\Exception $ex) {

    		echo $ex->getMessage(); die;
    	}
    }

    /**
     * Function-disc :- API function for client login 
     * @return JSON
     */
    public function login(Request $request) {

    	$token = null;
    	$input = $request->all();

    	$username = $input['username'];
    	$password = $input['password'];

    	$credentials = ['username' => $username, 'password' => $password];

        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json([
                    'response' => 'error',
                    'message' => 'invalid_email_or_password',
                ]);
            }
        } catch (\JWTAuthException $e) {
            return response()->json([
                'response' => 'error',
                'message' => 'failed_to_create_token',
            ]);
        }
        return response()->json([
            'response' => 'success',
            'result' => [
                'token' => $token,
            ],
        ]);

    }
}
