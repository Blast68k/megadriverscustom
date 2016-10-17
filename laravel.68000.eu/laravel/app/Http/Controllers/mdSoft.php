<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

//protected $imgpath = '';
//protected $imgpath_noway = '<img src="../resources/assets/img/covers_th/th_no_way.png"/>'; 
//protected $result = '';


class mdSoft extends Controller
{
    public function getDBentries(){
    	//$result = DB::table('md_soft')->get();
    	$result = DB::table('md_soft')->Paginate(20);

    	return view('md-soft', ['md_soft' => $result]);
    }

    public function show($title_en) {
        if(!$title_en) response('', 404);
    
        //$md_soft_details = DB::table('title_en', $title_en)->first();
        $result = $this->getDetails($title_en);
        return view('md-soft-details', ['md_soft_details' => $result]);
    }

    //Function to get the Details of a specific Game 
    public function getDetails($title_en){
    	DB::statement('SET NAMES utf8');
    	$result = DB::select('SELECT * FROM `md_soft` WHERE `title_en` = ?', [$title_en]);
        return $result;
    }
}
