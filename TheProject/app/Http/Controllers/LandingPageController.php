<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller {

     function __construct() {
          $this->data['pageTitle'] = 'TheProject';
     }

     public function showLandingPage() {

          $this->data['someRandomText'] = 'Hello world this is the first text';
          return view('landingpage.index')->with($this->data);
     }

}
