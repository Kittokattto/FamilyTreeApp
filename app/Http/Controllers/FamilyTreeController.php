<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\DB;

class FamilyTreeController extends Controller
{
    public function index()
    {
        $result  = Member::select(
            'MemberID',
            'Name',
            'TelM',
            'ParentID',
            'DateJoin',
            DB::raw('COALESCE((SELECT SUM(Amount) FROM tblPurchase WHERE MemberID = tblMember.MemberID), 0) AS TotalPersonalPurchase'),
            DB::raw('COALESCE((SELECT SUM(rp.Amount) FROM tblMember AS r JOIN tblPurchase AS rp ON r.MemberID = rp.MemberID WHERE r.ParentID = tblMember.MemberID), 0) AS TotalReferralPurchase'),
            DB::raw('COALESCE((SELECT SUM(Amount) FROM tblPurchase WHERE MemberID = tblMember.MemberID), 0) + COALESCE((SELECT SUM(rp.Amount) FROM tblMember AS r JOIN tblPurchase AS rp ON r.MemberID = rp.MemberID WHERE r.ParentID = tblMember.MemberID), 0) AS TotalGroupPurchase')
        )
        ->groupBy('MemberID', 'Name', 'TelM', 'ParentID', 'DateJoin')
        ->orderBy('MemberID')
        ->get();

        $members = $this->buildFamilyTree($result);
        return view('family_tree', compact('members'));
    }

    private function buildFamilyTree($members, $parentId = null)
    {
        $branch = [];
    
        foreach ($members as $member) {
            if ($member->ParentID == $parentId) {
                $children = $this->buildFamilyTree($members, $member->MemberID);
                $member->children = $children;
                $branch[] = $member;
            }
        }
    
        return $branch;
    }
}
