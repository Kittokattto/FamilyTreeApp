<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PurchaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('tblPurchase')->insert([
            ['BillNo' => 'INV001', 'MemberID' => 'A', 'SalesDate' => '2024-01-01', 'Amount' => 50],
            ['BillNo' => 'INV002', 'MemberID' => 'B', 'SalesDate' => '2024-01-02', 'Amount' => 100],
            ['BillNo' => 'INV003', 'MemberID' => 'C', 'SalesDate' => '2024-01-02', 'Amount' => 30],
            ['BillNo' => 'INV004', 'MemberID' => 'D', 'SalesDate' => '2024-01-03', 'Amount' => 100],
            ['BillNo' => 'INV005', 'MemberID' => 'E', 'SalesDate' => '2024-01-10', 'Amount' => 20],
            ['BillNo' => 'INV006', 'MemberID' => 'F', 'SalesDate' => '2024-01-20', 'Amount' => 50],
            ['BillNo' => 'INV007', 'MemberID' => 'E', 'SalesDate' => '2024-01-20', 'Amount' => 60],
            ['BillNo' => 'INV008', 'MemberID' => 'G', 'SalesDate' => '2024-02-03', 'Amount' => 45],
            ['BillNo' => 'INV009', 'MemberID' => 'H', 'SalesDate' => '2024-02-25', 'Amount' => 25],
            ['BillNo' => 'INV010', 'MemberID' => 'A', 'SalesDate' => '2024-02-28', 'Amount' => 50],
            ['BillNo' => 'INV011', 'MemberID' => 'I', 'SalesDate' => '2024-03-02', 'Amount' => 100],
            ['BillNo' => 'INV012', 'MemberID' => 'J', 'SalesDate' => '2024-03-04', 'Amount' => 125],
        ]);
    }
}