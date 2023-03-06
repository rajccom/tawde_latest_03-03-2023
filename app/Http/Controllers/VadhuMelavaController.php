<?php

namespace App\Http\Controllers;

//use App\Http\Requests\AboutUsRequest;
//use App\Models\AboutUs;
//use Notification;
//use App\Notifications\EmailNotification;
use App\User;

class VadhuMelavaController extends Controller
{
    /**
     * Spatie Permission
     */
    public function __construct()
    {
        //$this->middleware(['permission:show_contact_us_queries'])->only('index');
        $this->middleware(['permission:view_vadhu_melava_query'])->only('show');
        //$this->middleware(['permission:update_contact_us_query'])->only('update');
        //$this->middleware(['permission:delete_contact_us_query'])->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$contact_us_queries = ContactUs::latest()->paginate(10);
       // return view('admin.contact_us.index', compact('contact_us_queries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VadhuMelavaRequest $request)
    {
       // ContactUs::create($request->validated());
       // $users = User::where('user_type', 'admin')->get();
       // Notification::send($users, new EmailNotification($request->subject, $request->description));
        //flash(translate('Your query has been sent successfully'))->success();
        //return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function show(VadhuMelava $vadhuMelava, $id)
    {
        $vadhuMelava = VadhuMelava::findOrFail($id);
        return view('admin.vadhu_melava.view', compact('vadhuMelava'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */

    public function edit(VadhuMelava $vadhuMelava)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */

    public function update(VadhuMelavaRequest $request, $id)
    {
       // $contactUs = ContactUs::find($id);
       // $contactUs->update($request->validated());

       // Notification::route('mail', $contactUs->email)->notify(new EmailNotification($contactUs->subject, $contactUs->reply));
       // flash(translate('Reply has been sent successfully!'))->success();
       // return redirect()->route('contact-us.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function destroy(VadhuMelava $vadhuMelava, $id)
    {
       // $contactUs = ContactUs::findOrFail($id);
        //$contactUs->delete();
       // flash(translate('Data deleted successfully!'))->success();
       // return back();
    }

    /**
     * Display Contact us page
     */

    public function show_vadhu_melava_page()
    {
        return view('frontend.vadhu_melava');
    }
}
