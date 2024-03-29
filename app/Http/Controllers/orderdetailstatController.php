<?php
/*
Note: because this file was signed, everything originally placed before the name space line has been replaced... with this comment ;)
FILE_SIG=3ac34edfe15e17bf832f020e457fde73
*/
namespace App\Http\Controllers;

use App\orderdetailstat;
use App\DURC\Controllers\orderdetailstatController as DURCParentController;
use Illuminate\Http\Request;

class orderdetailstatController extends DURCParentController
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
     * @param  \App\$orderdetailstat  $orderdetailstat
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, orderdetailstat $orderdetailstat){
        // enter your stuff here if you want...
	return(parent::show($request, $orderdetailstat));
    }

    /**
     * Show the form for editing the specified resource.
     * @param  \App\orderdetailstat  $orderdetailstat
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, orderdetailstat $orderdetailstat, $is_new = false){
        // enter your stuff here if you want...
	return(parent::edit($request, $orderdetailstat));
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\orderdetailstat  $orderdetailstat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, orderdetailstat $orderdetailstat){
        // enter your stuff here if you want...
	return(parent::update($request,$orderdetailstat));
    }

    /**
     * Remove the specified resource from storage.
     * @param  \App\orderdetailstat  $orderdetailstat
     * @return \Illuminate\Http\Response
     */
    public function destroy(orderdetailstat $orderdetailstat){
        // enter your stuff here if you want...
	return(parent::destroy($orderdetailstat));
    }

}
