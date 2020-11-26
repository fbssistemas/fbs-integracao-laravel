<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'persons';
    protected $fillable = [
        'group_id',
        'code',
        'company',
        'name',
        'cpf_cnpj',
        'rg_ie'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function types()
    {
        return $this->belongsToMany(PersonType::class, 'person_type');
    }

    public function hasType($type)
    {
        if (is_string($type)) {
            return $this->types->contains('name', $type);
        }

        if (is_array($type)) {
            foreach ($type as $t) {
                if ($this->roles->contains('name', $t)) {
                    return true;
                }
            }
            return false;
        }

        if ($type instanceof PersonType) {
            return $this->types->contains($type);
        }

        return $type->intersect($this->types)->count();
    }

    public function uids()
    {
        return $this->hasMany(SellerUid::class, 'seller_id');
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function sellerCompanies()
    {
        return $this->belongsToMany(Person::class, 'seller_company', 'seller_id', 'company_id');
    }

    public function hasSellerCompany($company)
    {
        if ($company instanceof Person) {
            return $this->sellerCompanies->contains($company);
        }

        return $company->intersect($this->sellerCompanies)->count();
    }

    public function sellerCustomers()
    {
        return $this->belongsToMany(Person::class, 'seller_customer', 'seller_id', 'customer_id');
    }

    public function hasSellerCustomer($customer)
    {
        if ($customer instanceof Person) {
            return $this->sellerCustomers->contains($customer);
        }

        return $customer->intersect($this->sellerCustomers)->count();
    }

    public function addresses()
    {
        return $this->hasMany(PersonAddress::class);
    }

    public function contacts()
    {
        return $this->hasMany(PersonContact::class);
    }

    public function commercialRoutes()
    {
        return $this->hasMany(CommercialRoute::class, 'seller_id');
    }

    public function commercialRoutesWithDailies($company)
    {
        return $this->commercialRoutes()->where([
            ['company_id', $company->id],
            ['started_at', '>=', Carbon::now()->startOfWeek()],
            ['ended_at', '<=', Carbon::now()->endOfWeek()]
        ])->with('dailies')->get();
    }

    public function companyParameters()
    {
        return $this->hasOne(CompanyParameter::class, 'company_id');
    }

    public function companyPrices()
    {
        return $this->belongsToMany(Price::class, 'company_price', 'company_id');
    }

    public function customerPrices()
    {
        return $this->belongsToMany(Price::class, 'customer_price', 'customer_id');
    }

    public function customerOrders()
    {
        return $this->hasMany(Order::class, 'customer_id');
    }

    public function companyPayments()
    {
        return $this->belongsToMany(Payment::class, 'company_payment', 'company_id');
    }

    public function companyInstallments()
    {
        return $this->belongsToMany(Installment::class, 'company_installment', 'company_id');
    }

    public function customerInstallments()
    {
        return $this->belongsToMany(Installment::class, 'customer_installment', 'customer_id');
    }

    public function customerFinancials()
    {
        return $this->hasMany(Financial::class, 'customer_id');
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function images()
    {
        return $this->belongsToMany(Image::class, 'company_image', 'company_id');
    }
}
