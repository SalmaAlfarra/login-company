<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Attachment\Entities\Appointment;
use Modules\Attachment\Entities\Archives;
use Modules\Attachment\Entities\Credit_Card;
use Modules\Option\Entities\Legal_Procedur;
use Modules\Option\Entities\Order;
use Modules\Option\Entities\PaymentMechanism;
use Modules\Places\Entities\Branch;
use Modules\Places\Entities\City;
use Modules\Places\Entities\Court;
use Modules\Places\Entities\Police_Office;
use Modules\Status\Entities\Account_Statment;
use Modules\Status\Entities\Bill;
use Modules\Status\Entities\Installment;
use Modules\Status\Entities\Issue;

class Customer extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'file_number',
        'file_classification',
        'full_name',
        'identification_number',
        'government_service_portal_password',
        'address',
        'city_id',
        'phone_id',
        'police_office_id',
        'court_id',
        'payment_mechanism_id',
        'works_id',
        'material_statuse_id',
        'salary_id',
    ];

    public function account_statment()
    {
        return $this->hasOne(Account_Statment::class);
    }

    public function archives()
    {
        return $this->hasOne(Archives::class);
    }

    public function installment()
    {
        return $this->hasOne(Installment::class);
    }

    public function order()
    {
        return $this->belongsToMany(Order::class);
    }

    public function legal_procedure()
    {
        return $this->belongsToMany(Legal_Procedur::class);
    }

    public function patron()
    {
        return $this->belongsToMany(Patron::class);
    }

    public function acquaintance()
    {
        return $this->belongsToMany(Acquaintance::class, 'acquaintances_customer');
    }

    public function issue()
    {
        return $this->hasMany(Issue::class);
    }

    public function credit_card()
    {
        return $this->hasMany(Credit_Card::class);
    }

    public function bill()
    {
        return $this->hasMany(Bill::class);
    }

    public function police_office()
    {
        return $this->belongsTo(Police_Office::class);
    }

    public function court()
    {
        return $this->belongsTo(Court::class);
    }

    public function appointment()
    {
        return $this->hasMany(Appointment::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function phone()
    {
        return $this->hasMany(Phone::class);
    }

    public function work()
    {
        return $this->belongsTo(Work::class);
    }

    public function material_status()
    {
        return $this->hasOne(Material_Status::class);
    }

    public function salary()
    {
        return $this->hasOne(Salary::class);
    }

    public function payment_mechanism()
    {
        return $this->belongsToMany(PaymentMechanism::class);
    }
}
