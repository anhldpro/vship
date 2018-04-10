<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CorpInfo extends Model
{
    protected $table = 'corp_info';

    protected $fillable = array(
        'id',
        'account_id',
        'corp_name',
        'telephone',
        'website',
        'address',
        'tax_code',
        'buss_code',
        'info'
    );

    public function account(){
        return $this->belongsTo('App\Models\Account', 'account_id');
    }
}
