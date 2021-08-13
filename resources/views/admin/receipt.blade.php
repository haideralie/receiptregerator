  @extends('admin.master')

@section('content')  

<!-- <div class="col-sm-6"> -->
  <nav aria-label="breadcrumb">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> Generate Receipt</li>
            </ol>
         <!--  </div>/.col  -->


  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-10">
          <div class="col-sm-10">

            <h1 class="m-0 text-dark">Receipts</h1>
            

                    
                      <form action="{{ url('/receipt') }}" method="post" >
                       
                        @csrf 


                          <form>

                             <div class="form-group col-md-5">
                                <label for="exampleInputEmail1">Receipt Title</label>
                                <input type="text"name= "rtitle" class="form-control" placeholder="Enter Receipt Title">
                            </div>

                            <h3 class="m-0 text-dark">Buyer Details</h3>

                             <div class="form-row">
                           <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text"name= "bname" class="form-control" placeholder="Enter Name">
                            </div>

                            
                              <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Father Name</label>
                                <input type="text"name= "bfathername" class="form-control" placeholder="Enter Father Name ">
                            </div>

                          

                            
                              <div class="form-group col-md-10"> 
                                <label for="exampleInputEmail1">Address</label>
                                <input type="text"name= "baddress" class="form-control" placeholder="Enter Address">
                            </div>

                            
                              <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Contact</label>
                                <input type="text"name= "bcontact" class="form-control" placeholder="Enter Contact Number">
                            </div> 

                             <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">CNIC</label>
                                <input type="text"name= "bcnic" class="form-control" placeholder="Enter CNIC Number">
                            </div> 



                            <h3 class="m-0 text-dark">Seller Details</h3>

                             <div class="form-row">
                           <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text"name= "sname" class="form-control" placeholder="Enter Name">
                            </div>

                            
                              <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Father Name</label>
                                <input type="text"name= "sfathername" class="form-control" placeholder="Enter Father Name ">
                            </div>

                          

                            
                              <div class="form-group col-md-10"> 
                                <label for="exampleInputEmail1">Address</label>
                                <input type="text"name= "saddress" class="form-control" placeholder="Enter Address">
                            </div>

                            
                              <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Contact</label>
                                <input type="text"name= "scontact" class="form-control" placeholder="Enter Contact Number">
                            </div> 

                             <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">CNIC</label>
                                <input type="text"name= "scnic" class="form-control" placeholder="Enter CNIC Number">
                            </div> 




                         

                            <h3 class="m-0 text-dark">Plot Details</h3>

                            <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Plot Size</label>
                                <input type="text"name= "psize" class="form-control" placeholder="Enter Plot Size">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Plot Total Price</label>
                                <input type="text"name= "ptotalprice" class="form-control" placeholder="Enter Total Price">
                            </div>

                            <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Plot Token Price</label>
                                <input type="text"name= "ptokenprice" class="form-control" placeholder="Enter Token Price">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Block / Sector</label>
                                <input type="text"name= "blocation" class="form-control" placeholder="Enter Block Location">
                            </div>


                            <div class="form-group col-md-8">
                                <label for="exampleInputEmail1">Plot Description</label>
                                <textarea  name="pdescription" class="form-control">  </textarea>
                            </div>


                            <div class="form-row">

                            <h3 class="m-0 text-dark">Payment Details</h3>
                           


                            <div class="form-row">
                            <div class="form-group col-md-6 ">

                                <label for="exampleInputEmail1">Payment Type</label>
                                <input type="text"name= "paytype" class="form-control" placeholder="Enter Payment Type">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Draft Details</label>
                                <input type="text"name= "paydraft" class="form-control" placeholder="Enter Bank Draft Details">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Amount Received</label>
                                <input type="text"name= "payreceivedamount" class="form-control" placeholder="Enter Received Amount">
                            </div>

                            <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Amount In Words</label>
                                <input type="text"name= "payinwords" class="form-control" placeholder="Enter Amount In Words">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Pending Amount</label>
                                <input type="text"name= "paypendingamount" class="form-control" placeholder="Enter Pending Amount">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Next Amount Due Date</label>
                                <input type="text"name= "paynextdate" class="form-control" placeholder="Enter Next Due Date">
                            </div>

















                          <!-- <div class="form-group">
                                <label for="exampleInputEmail1">image</label>
                                <input type="text"name= "img" class="form-control" placeholder="Enter Receipt Title">
                            </div> 
                          -->
                            

                              <button type="submit" class="btn btn-primary">Submit</button>

                            </form>


        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @endsection