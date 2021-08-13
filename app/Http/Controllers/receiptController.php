<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Receipts;

class receiptController extends Controller
{
	function index() {


		$receipts_data = Receipts::all()->toArray();

		return view('admin.all-receipts',compact('receipts_data'));
	}
  




  function store(Request $request )
  {

   $receipt = new Receipts();

   $receipt->receipt_title = $request->rtitle;
   $receipt->buyername = $request->bname;
   $receipt->buyerfathername = $request->bfathername;
   $receipt->buyeraddress = $request->baddress;
   $receipt->buyercontact = $request->bcontact;
   $receipt->buyercnic = $request->bcnic;

   $receipt->sellername = $request->sname;
   $receipt->sellerfathername = $request->sfathername;
   $receipt->selleraddress = $request->saddress;
   $receipt->sellercontact = $request->scontact;
   $receipt->sellercnic = $request->scnic;



   $receipt->plot_size = $request->psize;
   $receipt->plot_totalprice = $request->ptotalprice;
   $receipt->plot_tokenprice = $request->ptokenprice;
   $receipt->block_location = $request->blocation;
   $receipt->plot_description = $request->pdescription;
   $receipt->image = "1";


   $receipt->paymenttype = $request->paytype;
   $receipt->draftdetails = $request->paydraft;
   $receipt->amountreceived = $request->payreceivedamount;
   $receipt->amountinwords = $request->payinwords;
   $receipt->pendingamount = $request->paypendingamount;
   $receipt->nextduedate = $request->paynextdate;


   $receipt->save();


   return view('admin.receipt');




  }



//deletefuction
  function delete($id) {


    $receipt = Receipts:: find($id);

    $receipt->delete();


    $receipts_data = Receipts::all()->toArray();

    return view('admin.all-receipts',compact('receipts_data'));
  


}

}