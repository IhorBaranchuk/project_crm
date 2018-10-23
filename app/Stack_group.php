<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 24.09.2018
 * Time: 15:27
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Stack_group extends Model
{
    protected $fillable = [
        'stack_id',
        'company_id',
        'comment',
    ];

    public function getQueueableRelations()
    {
        // TODO: Change the autogenerated stub
    }

    public function stacks()
    {
        return $this->belongsTo('App\Stack');
    }

    public function it_companies()
    {
        return $this->belongsToMany('App\It_company');
    }
}
