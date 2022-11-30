<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('platforms', function (Blueprint $table) {
            $table->string('name');
            $table->string('slug');
            $table->string('item_id');
            $table->boolean('featured');
            $table->enum('category',['eCommerce', 'ERP', 'PIM', 'POS', 'CRM', 'Marketing', 'AI', 'BI', 'Marketplaces', 'Channel', 'EDI', 'IT', 'Logistics', 'OMS', 'Ticket']);
            $table->string('logo');
            $table->string('logo_mini');
            $table->boolean('native_connector');
            $table->boolean('easy_to_map')->default(1);
            $table->string('unique_intro_text');
            $table->boolean('switch');
            $table->boolean('test');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('platforms');
    }
};
