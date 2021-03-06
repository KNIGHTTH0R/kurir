<?php

namespace App\Http\Controllers;

use App\Libraries\LayoutManager;
use Illuminate\Http\Request;
use PluginCommonKurir\Libraries\ApiClient;
use PluginHttpClient\Client;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(LayoutManager $layoutManager)
    {
        return view('login.index', $layoutManager->getData());
    }

    public function register(LayoutManager $layoutManager)
    {
        return view('register.index', $layoutManager->getData());
    }

    public function doRegister(Request $request, Client $client)
    {
        $response = $client->post('users', $request->all());
        return response(
            $response,
            $client->getStatusCode(),
            [
                'Content-Type' => 'application/json'
            ]
        );
    }

    public function auth(Client $client, Request $request)
    {
        $response = $client->post('auth/token/password', [
            'client_id' => ApiClient::CLIENT_ID,
            'secret_code' => ApiClient::SECRET_CODE,
            'email' => $request->email,
            'password' => $request->password,
        ]);


        return response(
            $response,
            $client->getStatusCode(),
            [
                'Content-Type' => 'application/json'
            ]
        );
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
     * @param Client $client
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client, $id)
    {
        $response = $client->get('users/' . $id);

        return response(
            $response,
            $client->getStatusCode(),
            [
                'Content-Type' => 'application/json'
            ]
        );
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
        //
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
