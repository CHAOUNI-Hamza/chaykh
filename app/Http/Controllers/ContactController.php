<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;
use App\Models\Contact;
use Notification;
use App\Notifications\ContactNotification;

class ContactController extends Controller
{
    public function index() {
        return view('contact', [
            'information' => Information::first(),
        ]);
    }

    public function created(Request $request) {

        $request->validate([
            'name' => 'required', 'email' => 'required|email', 'sujet' => 'required', 'message' => 'required'
        ]);

        $contact = new Contact();
        $contact->email = $request->email;
        $contact->name = $request->name;
        $contact->sujet = $request->sujet;
        $contact->message = $request->message;
        $contact->save();

        $offerData = [
            'name' => 'BOGO',
            'body' => 'You received an offer.',
            'thanks' => 'Thank you',
            'offerText' => 'Check out the offer',
            'offerUrl' => url('/'),
            'offer_id' => 007
        ];

        Notification::send($contact, new ContactNotification($contact));

        return redirect()->route('contact.index')->with('success', 'Thank you for contacting me!');

    }
}
