<?php
/*
Note: because this file was signed, everything originally placed before the name space line has been replaced... with this comment ;)
FILE_SIG=a2c45753580eb184802a4b20afaf2c3f
*/
namespace App\Http\Controllers;

use App\classofcreature_cardface;
use App\DURC\Controllers\classofcreature_cardfaceController as DURCParentController;
use Illuminate\Http\Request;

class classofcreature_cardfaceController extends DURCParentController
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
    public function create(){
        // enter your stuff here if you want...
	return(parent::create());
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
     * @param  \App\$classofcreature_cardface  $classofcreature_cardface
     * @return \Illuminate\Http\Response
     */
    public function show(classofcreature_cardface $classofcreature_cardface){
        // enter your stuff here if you want...
	return(parent::show($classofcreature_cardface));
    }

    /**
     * Show the form for editing the specified resource.
     * @param  \App\classofcreature_cardface  $classofcreature_cardface
     * @return \Illuminate\Http\Response
     */
    public function edit(classofcreature_cardface $classofcreature_cardface, $is_new = false){
        // enter your stuff here if you want...
	return(parent::edit($classofcreature_cardface));
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\classofcreature_cardface  $classofcreature_cardface
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, classofcreature_cardface $classofcreature_cardface){
        // enter your stuff here if you want...
	return(parent::update($request,$classofcreature_cardface));
    }

    /**
     * Remove the specified resource from storage.
     * @param  \App\classofcreature_cardface  $classofcreature_cardface
     * @return \Illuminate\Http\Response
     */
    public function destroy(classofcreature_cardface $classofcreature_cardface){
        // enter your stuff here if you want...
	return(parent::destroy($classofcreature_cardface));
    }

}
