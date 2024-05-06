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
        Schema::create('project_forms', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->string('project_type');
             $table->string('project_name');
            $table->string('industry');
            $table->string('category');
            $table->string('products');
            $table->string('project_location');
            $table->string('project_cost');
            $table->string('project_layout');
            $table->string('existing_bank');
            $table->string('sponsors_equity');
            $table->string('project_debt');
            $table->string('loan_bank');
            $table->string('loan_status');
            $table->string('other_liabilities');
            $table->string('yearly_revenue');
            $table->string('yearly_income');
            $table->string('land');
            $table->string('civil_works');
            $table->string('machines');
            $table->string('mortage_assets');
            $table->string('other_assets');
            $table->string('company_name');
            $table->string('established_year');
            $table->string('legal_status');
            $table->string('incorporation_number');
            $table->string('directors');
            $table->string('share_authorized');
            $table->string('owners');
            $table->string('director_shares');
            $table->string('authorized_capital');
            $table->string('paidup_capital');
            $table->string('key_persons');
            $table->string('head_office_location');
            $table->string('major_client');
            $table->string('competitors');
            $table->string('yearly_turnover');
            $table->string('total_employess');
            $table->string('work_value');
            $table->string('company_logo');
            $table->string('project_picture');
            $table->string('land_picture');
            $table->string('owners_pictures');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_forms');
    }
};
