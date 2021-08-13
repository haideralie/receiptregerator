<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receipts extends Model
{
    protected $fillable = [
        'receipt_title', 'buyername', 'buyerfathername','buyeraddress','buyercontact','buyercnic','sellername','sellerfathername','sellercontact','sellercnic','plot_size','plot_totalprice','plot_tokenprice','block_location','plot_description','image','paymenttype','draftdetails','amountreceived','amountinwords','pendingamount','nextduedate'
    ];
}
