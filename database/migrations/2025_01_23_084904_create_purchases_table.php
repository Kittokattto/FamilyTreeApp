<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    public function up()
    {
        Schema::create('tblPurchase', function (Blueprint $table) {
            $table->string('BillNo');
            $table->string('MemberID')->nullable(); // Make sure this is a string and nullable
            $table->date('SalesDate');
            $table->decimal('Amount', 8, 2);
            $table->timestamps();
            
            // Foreign key constraint for MemberID
            $table->foreign('MemberID')->references('MemberID')->on('tblMember')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tblPurchase');
    }
};