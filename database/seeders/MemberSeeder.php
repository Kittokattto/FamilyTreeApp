<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    public function run()
    {
        DB::table('tblMember')->insert([
            ['MemberID' => 'A', 'Name' => 'Jacky', 'DateJoin' => '2024-01-01', 'TelM' => '0122123324', 'ParentID' => null],
            ['MemberID' => 'B', 'Name' => 'Nancy', 'DateJoin' => '2024-01-02', 'TelM' => '0122233324', 'ParentID' => 'A'],
            ['MemberID' => 'C', 'Name' => 'Jimmy', 'DateJoin' => '2024-01-02', 'TelM' => '0122123245', 'ParentID' => 'A'],
            ['MemberID' => 'D', 'Name' => 'Lily', 'DateJoin' => '2024-01-03', 'TelM' => '0152155328', 'ParentID' => 'B'],
            ['MemberID' => 'E', 'Name' => 'Linda', 'DateJoin' => '2024-01-10', 'TelM' => '0171231329', 'ParentID' => 'D'],
            ['MemberID' => 'F', 'Name' => 'Cindy', 'DateJoin' => '2024-01-20', 'TelM' => '0131232332', 'ParentID' => 'C'],
            ['MemberID' => 'G', 'Name' => 'Ali', 'DateJoin' => '2024-02-03', 'TelM' => '0101120022', 'ParentID' => 'E'],
            ['MemberID' => 'H', 'Name' => 'Andy', 'DateJoin' => '2024-02-25', 'TelM' => '0176654456', 'ParentID' => 'F'],
            ['MemberID' => 'I', 'Name' => 'Muthu', 'DateJoin' => '2024-03-02', 'TelM' => '0198890099', 'ParentID' => 'A'],
            ['MemberID' => 'J', 'Name' => 'Sammy', 'DateJoin' => '2024-03-04', 'TelM' => '0122239940', 'ParentID' => 'H'],
        ]);
    }
}