<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\{StoreSchoolRequest};
use App\Models\{School, Member};

class SchoolController extends Controller
{
    /**
     * Responsible for holding the folder name where the views of this controller exist in.
     * 
     * @var module_path
     */

    private $module_path = 'school.';

    /**
     * SchoolController constructor.
     * 
     */
    public function __construct()
    {

    }

    /**
     * This function helps in loading the list of schools.
     * 
     */
    public function index()
    {
        $schools = School::all();
        return view($this->module_path.'index', compact('schools'));
    }

    /**
     * Displays the form for creating a new school.
     * 
     */
    public function create()
    {
        return view($this->module_path.'create');
    }

    /**
     * Validates school by injecting the validation logic in this method
     * ... stores a new school and finally redirects the user to list of all schools.
     * 
     */
    public function store(StoreSchoolRequest $request)
    {
        $data = School::create([
            'name' => $request->name,
        ]);
        return redirect()->route('school.index')->with('success', 'School created successfully!');
    }

    /**
     * Displayes all the member in a selected school if there are no member in the selected school,
     * System redirects the user with an information that there are no users for that school.
     * 
     */
    public function members($id)
    {
        $members = Member::where('school_id', $id)->with('school')->get();
        if($members->count() <= 0){
            return redirect()->back()->with('info', 'Sorry, there are no member in the selected school');
        }
        return view($this->module_path.'members', compact('members'));
    }
}


// function getMessageText() {
//   return $('message').text;
// }

// document.body.innerHTML = '<div id="message">The message</div>';
// console.log(getMessageText());


// <!DOCTYPE html>
// <html>
//   <head>
//     <meta charset="utf-8">
//     <title>Paragraph editor</title>
//   </head>
//   <body>
//     <p contenteditable="true" spellcheck="true" lang="en" title="Click for editing" id="editor">  
//       Hello, I should be editable if you click on me!  
//     </p>  
//   </body>
// </html>