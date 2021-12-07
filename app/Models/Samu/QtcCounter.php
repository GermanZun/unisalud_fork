<?php

namespace App\Models\Samu;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QtcCounter extends Model
{
    use HasFactory;

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'counter',
        'date'
    ];

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = [
        'date',
    ];

    /**
    * The primary key associated with the table.
    *
    * @var string
    */
    protected $table = 'samu_qtc_counters';

    public static function getNext()
    {
        $counter = QtcCounter::whereDate('date',now())->first();
        if($counter) return $counter->counter + 1;
        else return 1;
    }

    public static function useNext()
    {
        $counter = QtcCounter::whereDate('date',now())->first();

        if($counter) 
        {
            $counter->counter += 1;
            $counter->save();
            return $counter;
        } 
        else 
        {
            $newCounter = QtcCounter::create([
                'date' => now(),
                'counter' => 1,
            ]);
            return $newCounter;
        }
    }
    
}
