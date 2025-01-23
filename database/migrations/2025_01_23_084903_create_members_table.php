<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    public function up()
    {
        Schema::create('tblMember', function (Blueprint $table) {
            $table->string('MemberID')->primary(); // Make sure it's a string
            $table->string('Name');
            $table->date('DateJoin');
            $table->string('TelM');
            $table->string('ParentID')->nullable(); // Ensure this is nullable
            $table->timestamps();
            
            // Foreign key constraint for ParentID
            $table->foreign('ParentID')->references('MemberID')->on('tblMember')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tblMember');
    }
};
