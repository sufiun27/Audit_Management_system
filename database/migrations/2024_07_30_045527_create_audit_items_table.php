<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('audit_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('audit_subcategory_id');
            $table->foreign('audit_subcategory_id')->references('id')->on('audit_subcategories')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('audit_name');
            $table->date('audit_date');
            $table->string('hoplun_concern');
            $table->longText('document_details')->nullable();
            $table->string('document_link');
            $table->string('cap_nc_file');
            $table->string('response_file');
            $table->longText('audit_result')->nullable();
            $table->string('certificate_file');
            $table->date('remainder_date');
            $table->text('creation')->nullable();
            $table->longText('findings')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audit_items');
    }
};
