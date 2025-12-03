<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;
    
    protected $table = 'job_list';
    
    protected $fillable = [
        'title',
        'company',
        'location',
        'description',
        'salary',
        'company_id',
    ];

    public function employer()
    {
        return $this->belongsTo(Employer::class, 'company_id');
    }
    
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'job_tag', 'job_listing_id', 'tag_id');
    }
}