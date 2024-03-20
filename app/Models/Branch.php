<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'address',
        'contact',
        'email ',
        'opened_on'        
    ];



     /**
     * Get Form List 
     *
     * @Query <integer>,Request
    */
    public function getBranchList()
    {
       $branch = Branch::select('id','name','address','contact','email','opened_on');         
             
       return $branch;      
    }
}
