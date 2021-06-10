<?php

namespace App\Http\Controllers;

use App\Models\Icon;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
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
        $services = Service::all();
        return view('back.service.addService', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            "icon_id" =>["required"],
            "title" =>["required"],
            "text" =>["required"],
        ]);

        $service = new Service();
        $service->icon_id = $request->icon_id;
        $service->title = $request->title;
        $service->text = $request->text;
        $service->save();

        return redirect()->route('back.service')->with('success', 'Services enregistrés');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $icons = Icon::all();
        $services = Service::all();
        return view('back.service.editService', compact('service', 'services', 'icons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        request()->validate([
            "icon_id"=>["required"],
            "title"=>["required"],
            "text"=>["required"],
        ]);

        $service->icon_id = $request->icon_id;
        $service->title = $request->title;
        $service->text = $request->text;
        $service->save();
        return redirect()->route('back.service')->with('success', 'Modifications enregistrées');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('back.service')->with('success', 'Modifications enregistrées');
    }
}
