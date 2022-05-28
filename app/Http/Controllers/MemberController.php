<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\{StoreMemberRequest};
use App\Models\{School, Member};

class MemberController extends Controller
{
    private $module_path = 'member.';

    public function index()
    {
        $members = Member::with('school')->get();
        return view($this->module_path.'index', compact('members'));
    }

    public function create()
    {
        $schools = School::all();
        return view($this->module_path.'create', compact('schools'));
    }

    public function store(StoreMemberRequest $request)
    {
        $data = Member::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'school_id' => $request->school_id,
        ]);
        return redirect()->route('member.index')->with('success', 'Member created successfully!');
    }
}
