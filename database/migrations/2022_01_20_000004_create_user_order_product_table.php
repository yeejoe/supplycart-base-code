<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalAccessTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_order_product', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_order_id');
            $table->unsignedInteger('product_id');
            $table->timestamps();

            $table->index(["user_order_id"], "fk_user_orders1_idx");
            $table->index(["product_id"], "fk_products1_idx");

            $table->foreign("user_order_id", "fk_user_orders1_idx")->reference("id")->on("user_orders")->onDelete("no action")->onUpdate("no action");
            $table->foreign("product_id", "fk_products1_idx")->reference("id")->on("products")->onDelete("no action")->onUpdate("no action");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_access_tokens');
    }
}
