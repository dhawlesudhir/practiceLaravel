<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Customer;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->tinyText('homeNumner')->comment('house number or name');
            $table->tinyText('apartmentName');
            $table->tinyText('landMark');
            $table->tinyText('areaName');
            $table->tinyText('city');
            $table->tinyText('state');
            $table->tinyText('pincode');
            $table->tinyText('county');
            $table->tinyText('additionalInformation');
            $table->foreignIdFor(Customer::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
