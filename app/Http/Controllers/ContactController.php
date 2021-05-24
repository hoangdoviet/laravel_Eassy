<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Session;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::paginate(10);
        return view(
            'contact.index',
            ['contact' => $contact]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->address = $request->address;
        $contact->email = $request->email;
        $contact->content = $request->content;
        $is_insert = $contact->save();
        // Chuyển hướng về trang danh sách nếu thêm thành công
        if ($is_insert) {
            Session::flash('success', "Thêm mới $contact->name thành công: ! address: $contact->address || Mail: $contact->email || content: $contact->content");
        } else {
            Session::flash('error', 'Thêm thất bại!');
        }
        return redirect()->route('contact.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($contact)
    {
        $contact = Contact::find($contact);
        return view(
            'contact.edit',
            ['contact' => $contact]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);
        $contact->name = $request->name;
        $contact->address = $request->address;
        $contact->email = $request->email;
        $contact->content = $request->content;
        $is_update = $contact->save();
        if ($is_update) {
            Session::flash('success', "Cập nhật $contact->name thành công: ! address: $contact->address || Mail: $contact->email || content: $contact->content");
        } else {
            Session::flash('error', 'Cập nhật thất bại!');
        }
        return redirect()->route('contact.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::find($id);
        $is_delete = $contact->delete();
        if ($is_delete) {
            Session::flash('success', "Xóa $contact->name thành công: !");
        } else {
            Session::flash('error', 'Xóa thất bại!');
        }
        return redirect()->route('contact.index');
    }
    public function changeLanguage($language)
    {
        \Session::put('website_language', $language);

        return redirect()->back();
    }
}
