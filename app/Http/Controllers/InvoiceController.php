<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\InvoiceItem;

class InvoiceController extends Controller
{

    public function get_all_invoice()
    {
        $invoices = Invoice::with(['customer'])->orderBy('id','DESC')->get();

        return response()->json([
            'invoices'  => $invoices
        ]);
    }
}
