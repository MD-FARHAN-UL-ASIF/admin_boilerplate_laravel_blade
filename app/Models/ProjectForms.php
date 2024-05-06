<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectForms extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'project_type',
        'project_name',
        'industry',
        'category',
        'products',
        'project_location',
        'project_cost',
        'project_layout',
        'existing_bank',
        'sponsors_equity',
        'project_debt',
        'loan_bank',
        'loan_status',
        'other_liabilities',
        'yearly_revenue',
        'yearly_income',
        'machines',
        'land',
        'civil_works',
        'mortage_assets',
        'other_assets',
        'company_name',
        'established_year',
        'legal_status',
        'incorporation_number',
        'directors',
        'share_authorized',
        'owners',
        'director_shares',
        'authorized_capital',
        'paidup_capital',
        'key_persons',
        'head_office_location',
        'major_client',
        'competitors',
        'yearly_turnover',
        'total_employess',
        'work_value',
    ];
}
