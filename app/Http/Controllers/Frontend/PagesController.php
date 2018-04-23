<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Image;
use App\Project;
use App\ProjectView;
use App\About;
use App\Contact;
use Mail;

class PagesController extends Controller
{
  public function home() {
    return view('partials.home');
  }

  public function fotografie() {
    $images = Image::all();
    return view('partials.fotografie', compact('images'));
  }

  public function webdesign() {
    $projects = Project::all();
    return view('partials.webdesign', compact('projects'));
  }

  public function over() {
    $about = About::firstorFail();
    return view('partials.over', compact('about'));
  }

  public function contact() {
    $contact = Contact::firstorFail();
    return view('partials.contact', compact('contact'));
  }

  public function getcontact(Request $request) {
    $this->validate($request, [
         'name' => 'required',
         'email' => 'required|email',
         'textmessage' => 'min:10']);

     $data = array(
         'email' => $request->email,
         'name' => $request->name,
         'textmessage' => $request->textmessage
         );

     Mail::send('emails.contact', $data, function($message) use ($data){
         $message->from($data['email']);
         $message->to('yarnobachmann@gmail.com');
         $message->subject($data['name']);
     });

     Session::flash('success', 'Je email is gestuurd!');

     return redirect('/contact');
  }

  public function project($project_name) {



    $project_view = ProjectView::find($project_name);

    $project_id = ProjectView::find($project_name)->pluck('project_id');


    $project = Project::find($project_id);



    return view('partials.project', compact('project_view','project'));
  }
}
