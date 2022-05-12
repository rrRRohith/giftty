<?php

namespace App\Repositories\Interfaces;

use App\Vendor;

interface VendorRepositoryInterface
{
    public function all();

    public function getByVendor(Vendor $vendor);
}