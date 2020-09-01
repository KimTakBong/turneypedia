<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Auth, Crypt, Validator, Redirect;

class UserController extends Controller
{
    function __construct(){
        $this->model = new User;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id=false)
    {
        $data['title']  = "TurneyPedia || Profile Account";
        // get me data
        $data['me']     = $this->model  ->where('id', Auth::user()->id)
                                        ->with('group')
                                        ->first();
        // dd($data['me']->toArray());

        return view('dashboard.profile', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input  = $request->all();
        $id     = Crypt::decrypt( $id );

        $rules = [];

        $validator = Validator::make( $input, $rules );
        if( $validator->passes() ){
            // Image
            if ( isset($input['avatar']) && $input['avatar'] ) {
                $file = $input['avatar'];
                $destinationPath = public_path().'/uploads/avatar/'.$id;
                $filename        = $file->getClientOriginalName();
                $upload_success  = $file->move($destinationPath, $filename);
                unset( $input['password_confirmation'] );
                $avatar = 'uploads/avatar/'.$id.'/'.$filename;
            } else {
                $avatar = null;
            }
            $update = $this->model->find( $id );
            $update->name           = (isset($input['name']))  ?$input['name']     :$update->name;
            $update->email          = (isset($input['email'])) ?$input['email']    :$update->email;
            $update->phone          = (isset($input['phone'])) ?$input['phone']    :$update->phone;
            $update->avatar         = (isset($avatar))         ?$avatar            :$update->avatar;
            if ( isset( $input['remove_avatar'] ) &&  $input['remove_avatar'] == 'true' ) {
                $update->avatar = null;
            }

            if ( isset( $input['password'] ) ) {
                if ( $input['password'] != null && $input['password'] == $input['retype_pass'] ) {
                      $update->password = \Hash::make($input['password']);
                } 
            }
            $update->save();

            return Redirect::back();
        } else {
            $messages = $validator->messages();

            return Redirect::back()
                    ->withInput( $input )
                    ->withErrors( $validator );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
