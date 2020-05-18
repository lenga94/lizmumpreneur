<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    //table
    protected $table = 'sent_emails';

    //primary key
    protected $primaryKey = 'id';

    //timestamps
    public $timestamps = true;

    protected $fillable = [
        'recipient_name',
        'recipient_email_address',
        'email_name',
        'email_body',
        'email_subject',
        'email_header',
    ];
}
