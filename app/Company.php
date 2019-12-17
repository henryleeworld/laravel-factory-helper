<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'companies';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'companies_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['companies_id'];

    public function users()
    {
        return $this->hasMany('App\User');
    }
}
