<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- page start-->
        <section class="">

            <header class="panel-heading">
            <h2>RECEPTIONIST</h2>
                <div class="col-md-4 no-print pull-right"> 
                    <a data-toggle="modal" href="#myModal">
                        <div class="btn-group pull-right">
                           
                            <button id="" class="btn green btn-xs">
                                <i class="fa fa-plus-circle"></i>new
                            </button>
                        </div>
                    </a>
                </div>
            </header>
            <div class="panel-body">

                <div class="adv-table editable-table ">

                    <div class="space15"></div>
                    <table class="table table-striped table-hover table-bordered" id="editable-sample">
                        <thead>
                            <tr>
                               <th>NAME</th>
                               <th>DOB</th>
                               <th>AGE</th>
                               <th>GENDER</th>
                               <th>MOBILE</th>
                               <th>EMAIL</th>
                               <th>ID NO</th>
                               <th>BLOOD GROUP</th>
                               <th>OCUPATION</th>
                               <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                      <td>Patient name</td>
                      <td>1/02/1998</td>
                      <td>25</td>
                      <td>male</td>
                      <td>0756443322</td>
                      <td>patient@gmail.com</td>
                      <td>23456789</td>
                      <td>O</td>
                      <td>student</td>
                      <td><button id="" class="btn green btn-xs">
                                <i class="fa fa-plus-circle"></i>next of kin
                      </button>
                      <button id="" class="btn green btn-xs">
                                <i class="fa fa-plus-circle"></i>triage
                      </button></td>






                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!-- page end-->
    </section>
</section>
<!--main content end-->
<!--footer start-->




<!-- Add Patient Modal-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"> Register New Patient</h4>
            </div>
            <div class="modal-body row">
                <form role="form" action="patient/addNew" class="clearfix" method="post" enctype="multipart/form-data">

                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" name="name" id="exampleInputEmail1" value='' placeholder="">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" class="form-control" name="email" id="exampleInputEmail1" value='' placeholder="">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" class="form-control" name="password" id="exampleInputEmail1" placeholder="">
                    </div>



                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Address</label>
                        <input type="text" class="form-control" name="address" id="exampleInputEmail1" value='' placeholder="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="text" class="form-control" name="phone" id="exampleInputEmail1" value='' placeholder="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Sex</label>
                        <select class="form-control m-bot15" name="sex" value=''>

                            <option value="Male"> Male </option>
                            <option value="Female"> Female </option>
                            <option value="Others"> Others </option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label>DOB</label>
                        <input class="form-control form-control-inline input-medium default-date-picker" type="text" name="birthdate" value="" placeholder="" readonly="">      
                    </div>


                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Blood Group</label>
                        <select class="form-control m-bot15" name="bloodgroup" value=''>
                           
                                <option value="O">O</option>
                                <option value="A">A</option>
                                <option value="A+">A+</option>
                                <option value="B">B</option>
                                
                        </select>
                    </div>

                    <div class="form-group col-md-6">    
                        <label for="exampleInputEmail1">Doctor</label>
                        <select class="form-control js-example-basic-single"  name="doctor" value=''> 
                            <option value="">doctor name A </option>
                            <option value="">doctor name B </option>
                            <option value="">doctor name C </option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <input type="checkbox" name="sms" value="sms">send sms<br>
                    </div>


                    <section class="col-md-12">
                        <button type="submit" name="submit" class="btn btn-info pull-right">submit</button>
                    </section>
                </form>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- Add Patient Modal-->




<script src="common/js/codearistos.min.js"></script>


