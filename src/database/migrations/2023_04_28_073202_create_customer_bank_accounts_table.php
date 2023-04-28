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
        Schema::create('customer_bank_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('accountNumber')->unique();
            $table->tinyText('accountHolderName');
            $table->tinyText('bankName');
            $table->tinyText('IFSC_code');
            $table->tinyText('accountType')->comment('personal/bussiness');
            $table->foreignIdFor(Customer::class)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_bank_accounts');
    }
};
