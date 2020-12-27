<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_parameters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // $table->foreign('invoice_type_id')->references('id')->on('invoice_types');
            $table->string('invoice_prefix')->nullable();
            $table->bigInteger('range')->nullable();
            $table->string('invoice_gen_type')->nullable()->comment('manual/auto');
            $table->string('attachment_type')->nullable();
            $table->string('back_date_allow_type')->nullable()->comment('yes/no');
            $table->bigInteger('days')->default(0);
            $table->string('ref_no_type')->nullable()->comment('cradit/cash');
            $table->string('payment_type')->nullable();
            $table->string('product_show_type')->nullable()->comment('vendor/all');
            $table->string('vendor_invoice_type')->nullable();
            $table->string('invoice_des_type')->nullable();
            $table->string('invoice_reason_type')->nullable();
            $table->string('print_view')->nullable()->comment('full/pos');
            $table->tinyInteger('status')->comment('active =1 and inactive=2')->default(1);
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('invoice_parameters');
    }
}
