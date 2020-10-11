<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class getApiCoronaController extends Controller
{
    public function index(Request $request){
        if($request->has('country')){
            $country = $request->country;
        } else {
            $country = 'Indonesia';
        }
        $host = 'covid-19-coronavirus-statistics.p.rapidapi.com';
        $key = '331e714831msh68ce90ddd936418p178ab5jsnd152245aaeba';

        $listData = $this->getAPI($host, $key, $country)['data']['covid19Stats'][0];
        $listCountry = $this->getAPI($host, $key, $country = '')['data']['covid19Stats'];

        $countryArray = [];
        foreach ($listCountry as $result){
            $countryArray[] = $result['country'];
        }

        $country = collect($countryArray)->unique();

        // return response()->json($listData);
        return view('report',[
            "listData" => $listData,
            "country" => $country,
        ]);

    }

    private function getAPI($host, $key, $country){
        return Http::withHeaders([
            'x-rapidapi-host' => $host,
            'x-rapidapi-key' => $key
        ])->get('https://covid-19-coronavirus-statistics.p.rapidapi.com/v1/stats', [
            "country" => $country,
        ]);
    }
}
