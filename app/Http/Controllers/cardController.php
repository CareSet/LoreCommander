<?php
/*
Note: because this file was signed, everything originally placed before the name space line has been replaced... with this comment ;)
FILE_SIG=2f36d28b279a73e3336a44768fda768c
*/
namespace App\Http\Controllers;

use App\card;
use App\DURC\Controllers\cardController as DURCParentController;
use Illuminate\Http\Request;

class cardController extends DURCParentController
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        // enter your stuff here if you want...

	//anything you put into $this->view_data will be available in the view...
	//$this->view_data['how_cool_is_fred'] = 'very'
	//will mean that you can use {{how_cool_is_fred}} etc etc..
	//remember to look in /resources/views/DURC
	//to find the DURC generated views. Once you override those views..
	//DURC will not overwrite them anymore... same thing with this file.. you can change it and it will not
	//be overwritten by subsequent files...

	return(parent::index($request));
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){
        // enter your stuff here if you want...
	return(parent::create($request));
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        // enter your stuff here if you want...
	return(parent::store($request));
    }

    /**
     * Display the specified resource.
     * @param  \App\$card  $card
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, card $card){
        // enter your stuff here if you want...
	return(parent::show($request, $card));
    }

    /**
     * Show the form for editing the specified resource.
     * @param  \App\card  $card
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, card $card, $is_new = false){
        // enter your stuff here if you want...
	return(parent::edit($request, $card));
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\card  $card
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, card $card){
        // enter your stuff here if you want...
	return(parent::update($request,$card));
    }

    /**
     * Remove the specified resource from storage.
     * @param  \App\card  $card
     * @return \Illuminate\Http\Response
     */
    public function destroy(card $card){
        // enter your stuff here if you want...
	return(parent::destroy($card));
    }

}
