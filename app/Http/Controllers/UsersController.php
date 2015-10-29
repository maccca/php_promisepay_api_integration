<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use PromisePay;

class UsersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = User::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $email = $request->input('email');
        $password = $request->input('password');
        $address_line1 = $request->input('address_line1');
        $state = $request->input('state');
        $city = $request->input('city');
        $zip = $request->input('zip');
        $country = $request->input('country');
        $dob = $request->input('dob');

        $repo = new PromisePay\UserRepository();
        $user = new PromisePay\DataObjects\User($arr = array(
            'id' => (string)mt_rand(),
            'email' => $email,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'address_line1' => $address_line1,
            'state' => $state,
            'city' => $city,
            'zip' => $zip,
            'country' => $country,
            'dob' => $dob
        ));

        $repo->createUser($user);

        return redirect('/');
    }

    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}