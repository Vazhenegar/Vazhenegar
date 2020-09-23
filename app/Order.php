<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'RegisterDate', 'DeliveryDate', 'RelatedDepartment',
        'SourceLanguage', 'DestLanguage', 'TranslationField',
        'Amount', 'TotalPrice', 'PaidPrice', 'ResponsibleUserId',
        'status_id', 'Description',
    ];

}

