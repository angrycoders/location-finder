<?php namespace App\Http\Controllers;

class ContactController extends Controller{
	/*Contact controller
	| Controller for the contacts page of the application
	*/

	/**
	*
	* @return void
	*/

	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */

	public function index()
	{
		return view('contact');
	}
}