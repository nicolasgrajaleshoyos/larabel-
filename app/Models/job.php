<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;
    
    protected $table = 'job_list';//para que los datos se puedan modificar 
    protected $fillable = [
        'title',
        'company',
        'location',
        'description',
        'salary',
    ];

    public function employer()
    {
        return $this->belongsTo(Employer::class,'company_id');
    }
}