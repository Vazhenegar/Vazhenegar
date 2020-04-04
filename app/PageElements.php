<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageElements extends Model
{
    protected $fillable=[
        'page_name',
        'section_name',
        'section_title',
        'section_content1',
        'section_content2',
        'section_content3',
        'section_content4',
        'section_image',
        ];
}
