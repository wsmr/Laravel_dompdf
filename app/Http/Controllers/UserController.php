<?php

namespace App\Http\Controllers;
use PDF;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  /**
    * List all users
    * @return_view [description]
    */

  public function index(){
  //get all users
  //$users = $this->User->get();
  $users = User::all();
  return view('users.index', ['users' => $users]);
  }

  /**
    * Download PDF on Local Storage
    * @return_pdf [description]
    */
  public function downloadPDF(){
    //$users = $this->user->get();
    $users = User::all();
    // load view for pdf file
    $pdf = PDF::loadView('pdf.index', ['users' => $users]);
    return $pdf->download('users.pdf');
  }

  /**
     * View PDF on the browser
     * @return_pdf [description]
     */
  public function viewPDF(){
    //$users = $this->user->get();
    $users = User::all();
    $pdf = PDF::loadView('pdf.index', ['users' => $users]);
    return $pdf->setPaper('a4')->stream();
  }
}
