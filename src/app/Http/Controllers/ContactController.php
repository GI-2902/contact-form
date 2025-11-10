<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Contact;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {

        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = new Contact();
        $contact = $request->only(['name', 'email', 'tel', 'content']);
        //dd($contact);
        return view('confirm', compact('contact'));
    }

    public function store(ContactRequest $request)
    {

        //$array_contact = new Contact();
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->tel = $request->tel;
        $contact->content = $request->content;
        //$contact = collect($array_contact);
        //dd($contact);
        $contact->save();

        return view('thanks');
    }
}
