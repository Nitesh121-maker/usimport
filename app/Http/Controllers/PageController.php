<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class PageController extends Controller
{
    function index() {
        return view('frontend.index');
    }
    function about() {
        return view('frontend.about');
    }
    function contact() {
        return view('frontend.contact');
    }
    function clients() {
        return view('frontend.ourclient');
    }
    function disclaimer() {
        return view('frontend.disclaimer');
    }
    function export() {
        return view('frontend.exportdata');
    }
    function import() {
        return view('frontend.importdata');
    }
    function faq() {
        return view('frontend.faq');
    }
    function tou() {
        return view('frontend.tou');
    }
    function privacypolicy() {
        return view('frontend.privacypolicy');
    }
    function searchlivedata() {
        return view('frontend.searchlivedata');
    }
    function livedataimport() {
        return view('frontend.livedata/search');
    }
    function productimport() {
        return view('frontend.import-data/product/index');
    }
    function searchpage() {
        return view('frontend.searchlivedata');
    }
    function usimportcompany() {
        return view('frontend.livedata/companyimport');
    }
 }
