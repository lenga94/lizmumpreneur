<?php

namespace Modules\Website\Entities;

use Illuminate\Database\Eloquent\Model;

class ClientForUpdate extends Model
{
    //Table
    protected $table = 'clients_for_updates';

    //Primary key
    protected $primaryKey = 'id';

    //timestamps
    public $timestamps = true;


    protected $fillable = [
        'name',
        'email',
    ];
}
