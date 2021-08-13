  @extends('admin.master');

@section('content');


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">All Receipts</h1>

               <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Receipt Title</th>
                    <th scope="col">Buyer Name</th>
                    <th scope="col">Buyer Fathername</th>
                    <th scope="col">Buyer Address</th>
                    <th scope="col">Buyer Contact</th>
                    <th scope="col">Buyer CNIC</th>


                    <th scope="col">Seller Name</th>
                    <th scope="col">Seller Fathername</th>
                    <th scope="col">Seller Address</th>
                    <th scope="col">Seller Contact</th>
                    <th scope="col">Seller CNIC</th>



                    <th scope="col">Plot Size</th>
                    <th scope="col">Plot Totalprice</th>
                    <th scope="col">Plot Tokenprice</th>
                    <th scope="col">Block Location</th>
                    <th scope="col">Plot Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>


                    <th scope="col">Payment Type</th>
                    <th scope="col">Draft Details</th>
                    <th scope="col">Amount Received</th>
                    <th scope="col">Amount In Words</th>
                    <th scope="col">Pending Amount</th>
                    <th scope="col">Next Due Date</th>
                    

                  </tr>
                </thead>
                <tbody>


                  @foreach($receipts_data as $receipts)

                  <tr>
                    
                    <td>{{ $receipts['receipt_title'] }}</td>
                    <td>{{ $receipts['buyername'] }}</td>
                    <td>{{ $receipts['buyerfathername'] }}</td>
                    <td>{{ $receipts['buyeraddress'] }}</td>
                    <td>{{ $receipts['buyercontact'] }}</td>
                    <td>{{ $receipts['buyercnic'] }}</td>



                    <td>{{ $receipts['sellername'] }}</td>
                    <td>{{ $receipts['sellerfathername'] }}</td>
                    <td>{{ $receipts['selleraddress'] }}</td>
                    <td>{{ $receipts['sellercontact'] }}</td>
                    <td>{{ $receipts['sellercnic'] }}</td>



                    <td>{{ $receipts['plot_size'] }}</td>
                    <td>{{ $receipts['plot_totalprice'] }}</td>
                    <td>{{ $receipts['plot_tokenprice'] }}</td>
                    <td>{{ $receipts['block_location'] }}</td>

                    <td>{{ $receipts['plot_description'] }}</td>
                    <td>{{ $receipts['image'] }}</td>


                     <td>{{ $receipts['paymenttype'] }}</td>
                    <td>{{ $receipts['draftdetails'] }}</td>
                    <td>{{ $receipts['amountreceived'] }}</td>
                    <td>{{ $receipts['amountinwords'] }}</td>
                    <td>{{ $receipts['pendingamount'] }}</td>
                    <td>{{ $receipts['nextduedate'] }}</td>





                    <td><a href="" class= "btn btn-primary" > Edit </a></td>
                    <td><a href="/delete/{{ $receipts ['id'] }}" class= "btn btn-danger" >Delete </a></td>
                  </tr> 

                  @endforeach
                
                </tbody>
              </table>     


                      


          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> Generate Receipt</li>
            </ol>
          </div><!-- /.col --> 
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @endsection