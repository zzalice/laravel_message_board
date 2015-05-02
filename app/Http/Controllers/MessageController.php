<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Message;	//

use Illuminate\Http\Request;

class MessageController extends Controller {

	public function __construct(){                                 
	    $this -> middleware('auth');	//check login
	}                                                                                                                                            
	public function store(Request $request){                                                                                                     
	    $title = $request->get('title');                                                                                                         
	    $content = $request->get('content');                                                                                                     
	    Message::create(['title'=>$title, 'content'=>$content]);      //"Message" is a class, "creat" is a function in "Message"                                                                          
	    return redirect('home');                                                                                                                    
	} 

}
