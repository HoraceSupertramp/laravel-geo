<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::all();
        return view('countries.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('countries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $country = new Country();
        $country->name = $data['country'];
        $country->continent = $data['continent'];
        $country->region = $data['region'];
        $country->surface_area = $data['surface_area'];
        $country->population = $data['population'];
        $country->life_expectancy = $data['life_expectancy'];
        $country->local_name = $data['local_name'];
        $country->government_form = $data['government_form'];
        $country->save();

        return redirect()->route('countries.show', ['country' => $country]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        $cities = $country->cities()->get();
        $languages = $country->languages()->get();

        return view('countries.show', [
            'country' => $country,
            'cities' => $cities,
            'languages' => $languages,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        return view('countries.edit', compact('country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {
        $data = $request->all();

        $country->name = $data['country'];
        $country->continent = $data['continent'];
        $country->region = $data['region'];
        $country->surface_area = $data['surface_area'];
        $country->population = $data['population'];
        $country->life_expectancy = $data['life_expectancy'];
        $country->local_name = $data['local_name'];
        $country->government_form = $data['government_form'];
        $country->update();

        return redirect()->route('countries.show', ['country' => $country]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        //
    }
}
