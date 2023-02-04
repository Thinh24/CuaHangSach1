<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\BillDetail;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class BillDetailController extends Controller
{
    function viewBillDetails($id)
    {

        $billdetails = DB::table('bill_details')
            ->join('products', 'bill_details.id_products', '=', 'products.id')
            ->join('bills', 'bill_details.id_bill', '=', 'bills.id')
            ->select('bill_details.*', 'products.nameProduct', 'bills.id')
            ->get();
        $bills = Bill::find($id);

        return view('admin/bill/billdetail',
            ['billdetails' => $billdetails],
            ['bills' => $bills]
        );

    }
}
