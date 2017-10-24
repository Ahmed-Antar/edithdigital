<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class coverletter extends Model
{

    protected $fillable = [
        'adress','num_tel','company_name','receiver','post','model'
    ];


    public function users(){
        return $this->belongsTo(User::class);
    }

}
