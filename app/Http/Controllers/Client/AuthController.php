<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Admin\Client;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use function PHPUnit\Framework\isEmpty;

class AuthController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth:client');
    }

    public function login(){
        return view('client.login');
    }
    public function register(){
        return view('client.register');
    }

    public function dologin(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        $client = Arr::first(Client::where('email',$request->email)->select('status')->get());

        if(empty($client)){
            return redirect()->back()->with('error',"This Account Incorrect");
        }else {
            if($client->status == 0)
                return redirect()->back()->with('warning','Your Account Is Disabled By Admin');
        }
        if (Auth::guard('client')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('client.home');

        } else {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
    }


    public function doRegister(Request $request){
        $validator = Validator::make($request->all(),[
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required|email|unique:clients',
            'phone'      => 'required',
            'password'   => 'required'
        ]);
        if ($validator->fails())
            return redirect()->back()->with('error', $validator->errors());

        if($request->id)
            $client = Client::find($request->id);
        else
            $client = new Client();

        if ($request->hasFile('image')) :
            if($client->image)
                Storage::delete('public/' . $client->image);
            $client->image = substr($request->file('image')->store('public/client'), 7);
        endif;

        if ($request->password !== $request->confirm_password)
            return redirect()->back()->with('error','Your Password Confirm Invalid');

        $client->first_name = $request->first_name;
        $client->last_name  = $request->last_name;
        $client->email      = $request->email;
        $client->phone      = $request->phone;
//        $client->code       = rand(1111, 9999);
        $client->password   = Hash::make($request->password);
        $client->save();

        event(new Registered($client));

        return view('client.notice')->with(['success','Password Changed Successfully', 'client' => $client]);

    }

    public function reset(){
        return view('client.reset-password');
    }

    public function doReset(Request $request){
        $client = Client::findOrFail(auth()->user()->id);
        $validator = Validator::make($request->all(),[
            'email'                 => 'required|email',
            'old_pass'              => 'required',
            'password'              => 'required',
            'password_confirmation' => 'required',
        ]);
        if ($validator->fails())
            return redirect()->back()->with('error', $validator->errors());

        if($request->email !== $client->email)
            return redirect()->back()->with('error', 'Invalid Email');

        if(! Hash::check($request->old_pass,$client->password))
            return redirect()->back()->with('error', 'Old Password Incorrect');

        if ($request->password !== $request->password_confirmation)
            return redirect()->back()->with('error','Your Password Confirm Invalid');

        $client->password = Hash::make($request->password);

        $client->save();

        event(new Registered($client));

        return view('client.notice')->with(['success','Password Changed Successfully', 'client' => $client]);
    }
    public function destroy()
    {
        auth()->guard('client')->logout();
        return redirect()->route('get.login');
    }
    // Return Notice View
    public function getNotice(){
        return view('client.notice')->with(['client' => Client::find(6)]);
    }
    /*
     * The EmailVerificationRequest is a form request that is included with Laravel.
     * This request will automatically take care of validating the request's id and hash parameters.
     * */
    public function getverify(EmailVerificationRequest $request){
        /*
         * fulfill method on the request. This method will call the markEmailAsVerified method on the authenticated user
         *  and dispatch the Illuminate\Auth\Events\Verified event.
         * */
        $request->fulfill();
        /*
         * The markEmailAsVerified method is available to the default App\Models\User model
         *  via the Illuminate\Foundation\Auth\User base class.
         * */
        return redirect()->route('client.home');
    }
}
