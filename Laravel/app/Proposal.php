<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
   protected $fillable= ['id', 'companyName', 'activityType', 'address', 'cnpj', 'stateRegistration', 'email', 'phone', 'qtdNFIn', 'qtdNFOut', 'qtdEmployes', 'typeTaxation', 'Comments' ];
   protected $table = 'proposals';
}
