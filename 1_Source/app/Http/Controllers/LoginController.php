<?php

namespace App\Http\Controllers;

use Validator;
use App\Ticket;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = array();
        
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'code' => 'required|max:32',
                'password' => 'required|max:32',
            ]);
            
            $code = $request->input('code');
            $password = $request->input('password');
            if ($request->has('rememberFlg')) {
                $rememberFlg = $request->input('rememberFlg');
            }

            $ticket = Ticket::where('code', $code)
                    ->where('password', $password)
                    ->first();

            if ($ticket) {
                $data['code'] = $code;

                return view('login.success', $data);
            }else {
                return view('login', $data)->withErrors(array(
                    'login' => 'Code or password is wrong!'
                ));
            }
        }

        $data['action'] = url('login');
        return view('login', $data);
    }
}
