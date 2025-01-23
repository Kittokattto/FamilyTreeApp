<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'tblMember';

    public function purchases()
    {
        return $this->hasMany(Purchase::class, 'MemberID');
    }

    public function referrals()
    {
        return $this->hasMany(Member::class, 'ParentID');
    }

    public function referralPurchases()
    {
        return $this->hasManyThrough(Purchase::class, Member::class, 'ParentID', 'MemberID', 'MemberID', 'MemberID');
    }
}