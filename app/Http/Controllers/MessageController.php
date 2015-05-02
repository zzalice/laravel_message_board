<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller {

	public function __construct(){
    $this -> middleware('auth');
	}

	public function store(Request $request){
		$name = $request->get('name');
	    $title = $request->get('title');
	    $content = $request->get('content');
	    Message::create(['name'=>$name, 'title'=>$title, 'content'=>$content]);
	    return redirect('home');
	} 

}
