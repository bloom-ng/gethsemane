<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use PDF;

class MemberExportController extends Controller
{
    
    public function index()
    {
        return view('member-export',['members' =>Member::with('title:id,name')->get()]);
    }

    public function createMemberPDF()
    {
        $members = Member::with('title:id,name')->get();
        view()->share('members',$members);
        $pdf = PDF::loadView('member-pdf', $members)->setPaper('A4','landscape');

        return $pdf->download('document.pdf');
    }
}
