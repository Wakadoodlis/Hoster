<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Host;
use DB;
use Goutte\Client;
use GuzzleHttp\Client as GuzzleClient;

class HostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hosts = Host::all();

        $client = new Client;
        $crawler = $client->request('GET', 'https://hosting.review/best-web-hosting/');
        // $oldPrice = $crawler->filter('.old-price')->first()->text();
        // $salePrice = $crawler->filter('.sale-price')->first()->text();
        $prices = array();
        $oldPrices = $crawler->filter('.price-container');
        foreach ($oldPrices as $price) {
            $prices[] = $price->nodeValue;

        };

        $providers = array();
        $allProviders = $crawler->filter('td')->children('a');
        foreach ($allProviders as $provider) {
            $providers[] = $provider->nodeValue;
            var_dump($providers);
        }


        return view('index', [
            // 'oldPrice' => $oldPrice,
            // 'salePrice' => $salePrice,
            'prices' => $prices,
            'providers' => $providers,
            'hosts' => $hosts
        ]);

    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inc.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $this->validate($request, [
            'provider' => 'required',
            'product' => 'required',
            'plan' => 'required'
        ]);

        // create host
        $host = new Host;
        $host->provider = $request->input('provider');
        $host->product = $request->input('product');
        $host->plan = $request->input('plan');
        $host->save();

        return redirect('/')->with('success', 'New Host created');



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
