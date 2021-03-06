<?php

namespace App;

use Patient;
use Illuminate\Database\Eloquent\Model;

class SuspectCase extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sample_at', 'origin', 'age', 'gender', 'result_ifd', 'subtype',
        'epidemiological_week', 'epivigila', 'pscr_sars_cov_2', 'paho_flu',
        'status', 'observation', 'patient_id'
    ];

    public function Patient() {
        return $this->belongsTo('App\Patient');
    }

    public function logs() {
        return $this->morphMany('App\Log','model');
    }

    protected $dates = [
        'sample_at'
    ];
}
