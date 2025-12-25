<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use App\Models\FundPdfModel;
use App\Models\NewpaperModel;
use App\Models\PartnetModel;
use App\Models\PortfiloModel;
use Illuminate\Http\Request;
use App\Models\SilderModel;
use App\Models\TeamsModel;
use App\Notifications\ContactNotify;

class ClientController extends Controller
{
    public function index() {

        $silderModel = SilderModel::orderBy('id','ASC')->get();
        return view('pages.index',compact('silderModel'));
    }
    public function vision()
    {
        return view('pages.vision');
    }
    public function login()
    {
        return view('admin.login');
    }
    public function teams()
    {
        $teamsModel = TeamsModel::orderBy('id','desc')->get();
        return view('pages.teams',compact('teamsModel'));
    }
    public function teamsview($id)
    {
        $teamsModel = TeamsModel::where('id',$id)->first();
        return view('pages.teamview',compact('teamsModel'));
    }
    public function ceqube()
    {
        return view('pages.ceqube');
    }
    public function venus()
    {
        return view('pages.venus');
    }
    public function investment()
    {
        return view('pages.investment');
    }
    public function sector()
    {
        return view('pages.sector');
    }
    public function policy()
    {
        return view('pages.policy');
    }
    public function disclaimer()
    {
        return view('pages.disclaimer');
    }
    public function termuse()
    {
        return view('pages.termuse');
    }
    public function newspaper()
    {
        $newspaper = NewpaperModel::orderBy('id','desc')->get();
        return view('pages.newspaper',compact('newspaper'));
    }
    public function partner()
    {
        $newspaper = PartnetModel::orderBy('id','desc')->get();
        return view('pages.partner',compact('newspaper'));
    }
    public function portfilo()
    {
        $newspaper = PortfiloModel::orderBy('id','desc')->get();
        return view('pages.portfilo',compact('newspaper'));
    }
    public function fundceqube()
    {
        $newspaper = FundPdfModel::where('type','1')->orderBy('id','desc')->get();
        return view('pages.fundceqube',compact('newspaper'));
    }
    public function fundvenus()
    {
        $newspaper = FundPdfModel::where('type','2')->orderBy('id','desc')->get();
        return view('pages.fundvenus',compact('newspaper'));
    }
    public function contactsave(Request $request) {

        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255|unique:contact,phone',
            'email' => 'required|email|max:255|unique:contact,email',
            'subject' => 'required|string',
            'message' => 'required|string',
            'txtfundtype' => 'required|string',
        ]);
        $contact=new ContactModel();
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->subject = $request->subject;   // IMPORTANT
        $contact->msg = $request->message;
        $contact->project = $request->txtfundtype;
        $contact->save();
         // Send notification (AFTER save)
        $contact->notify(new ContactNotify($contact->name));

         return response()->json([
            'status' => true,
            'message' =>'Well Contact you soon..!'
            
        ]);
    }
}
