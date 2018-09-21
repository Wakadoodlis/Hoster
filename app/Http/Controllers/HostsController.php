<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Host;
use DB;
use Goutte\Client;
use GuzzleHttp\Client as GuzzleClient;
use Symfony\Component\CssSelector\CssSelectorConverter;

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
      // CRAWLER prices
        $client = new Client;
        $crawler = $client->request('GET', 'https://hosting.review/best-web-hosting/');
        // $oldPrice = $crawler->filter('.old-price')->first()->text();
        // $salePrice = $crawler->filter('.sale-price')->first()->text();
        $prices = array();
        $oldPrices = $crawler->filter('.price-container');
        foreach ($oldPrices as $price) {
            $prices[] = $price->nodeValue;

        };
        // CRAWLER titles
        // $providers = array();
        // $class = $crawler->filterXPath('//td/a')->attr('title');
        // // var_dump($class);
        // $attributes = $crawler
        //     ->filterXpath('//td/a')
        //     ->extract(array('_text', 'title'));
        // foreach ($attributes as $atribute) {
        //     $providers[] = $atribute;

          
        // };


        return view('index', [
            // 'oldPrice' => $oldPrice,
            // 'salePrice' => $salePrice,
            'prices' => $prices,
            'hosts' => $hosts,

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
        //validaCIJA
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
        // $host->price = $request->input('price');
        $host->provider_url = $request->input('provider_url');

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
        $host = Host::find($id);
        return view('inc.show')->with('host', $host);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $host = Host::find($id);
        return view('inc.edit')->with('host', $host);
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
        //validation
        $this->validate($request, [
            'provider' => 'required',
            'product' => 'required',
            'plan' => 'required'
        ]);

        // create host
        $host = Host::find($id);
        $host->provider = $request->input('provider');
        $host->product = $request->input('product');
        $host->plan = $request->input('plan');
        $host->price = $request->input('price');
        $host->provider_url = $request->input('provider_url');
        $host->save();

        return redirect('/')->with('success', 'Host updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $host = Host::find($id);
        $host->delete();

        return redirect('/')->with('success', 'Host Removed');
    }
}
