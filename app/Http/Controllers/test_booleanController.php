<?php
/*
Note: because this file was signed, everything originally placed before the name space line has been replaced... with this comment ;)
FILE_SIG=0d6ee641ac9250ff69c8cc161809540a
*/
namespace App\Http\Controllers;

use App\test_boolean;
use App\DURC\Controllers\test_booleanController as DURCParentController;
use Illuminate\Http\Request;

class test_booleanController extends DURCParentController
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
     * @param  \App\$test_boolean  $test_boolean
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, test_boolean $test_boolean){
        // enter your stuff here if you want...
	return(parent::show($request, $test_boolean));
    }

    /**
     * Show the form for editing the specified resource.
     * @param  \App\test_boolean  $test_boolean
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, test_boolean $test_boolean, $is_new = false){
        // enter your stuff here if you want...
	return(parent::edit($request, $test_boolean));
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\test_boolean  $test_boolean
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, test_boolean $test_boolean){
        // enter your stuff here if you want...
	return(parent::update($request,$test_boolean));
    }

    /**
     * Remove the specified resource from storage.
     * @param  \App\test_boolean  $test_boolean
     * @return \Illuminate\Http\Response
     */
    public function destroy(test_boolean $test_boolean){
        // enter your stuff here if you want...
	return(parent::destroy($test_boolean));
    }

}
