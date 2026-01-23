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
use App\Notifications\AdminContactNotify;
use Illuminate\Support\Facades\Notification;

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
    public function funds()
    {
        $portfolio = PortfiloModel::orderBy('id','desc')->get();
        return view('pages.funds', compact('portfolio'));
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
            'email' => 'required|email|max:255',
            'subject' => 'required|string',
            'message' => 'required|string',
            'txtfundtype' => 'required|string',
        ]);
        
        $contact = new ContactModel();
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->msg = $request->message;
        $contact->project = $request->txtfundtype;
        $contact->save();
        
        // Send acknowledgement email to the user
        $contact->notify(new ContactNotify($contact->name));
        
        // Send notification email to admin (reporting@vardanfunds.com)
        Notification::route('mail', 'reporting@vardanfunds.com')
            ->notify(new AdminContactNotify($contact));

        return response()->json([
            'status' => true,
            'message' => 'We will contact you soon!'
        ]);
    }
}