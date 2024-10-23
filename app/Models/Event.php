<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['name', 'description', 'start_date', 'end_date', 'venue_id', 'status', 'budget'];

    public function venue()
    {
        return $this->belongsTo(Venue::class);
    }

    public function sessions()
    {
        return $this->hasMany(Session::class);
    }

    public function attendees()
    {
        return $this->hasManyThrough(Attendee::class, Registration::class);
    }

    public function expenses()
    {
        return $this->hasMany(EventExpense::class);
    }

    public function revenue()
    {
        return $this->hasMany(EventRevenue::class);
    }

    public function marketingCampaigns()
    {
        return $this->hasMany(MarketingCampaign::class);
    }

    public function surveys()
    {
        return $this->hasMany(Survey::class);
    }
}
