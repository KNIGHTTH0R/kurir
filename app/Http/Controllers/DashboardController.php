<?php

namespace App\Http\Controllers;

use App\Libraries\LayoutManager;
use Illuminate\Http\Request;
use PluginHttpClient\Client;
use PluginHttpClient\TokenSession;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(LayoutManager $layoutManager, Client $client)
    {
        $userId = TokenSession::getInstance()->getUserID();
        $userType = TokenSession::getInstance()->getUserType();

        $items = json_decode($client->get(
            'items',
            array_filter([
                'includes' => 'customer,kurir',
                'filter' => in_array($userType, ['admin', 'kurir']) ? null : 'of' . ucfirst($userType) . ':' . $userId
            ])
        ), true);
        $layoutManager->setData('items', isset($items['data']) ? $items['data'] : []);
        return view('dashboard.index', $layoutManager->getData());
    }

    /**
     * @param Client $client
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function pickup(Request $request, Client $client)
    {
        $response = $client->put('items/' . $request->id, [
            'item' => [
                'status' => 'on_progress'
            ]
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
