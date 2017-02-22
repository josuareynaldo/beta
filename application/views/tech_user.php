<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>css/font.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/jquery-ui.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Andada" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?php echo base_url() ?>css/search.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/header.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/jquery.dataTables.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--><!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url() ?>js/jquery-1.12.4.min.js">"></script>
    <script src="<?php echo base_url() ?>js/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>js/sorttable.js"></script>
    <script src="<?php echo base_url() ?>js/search.js"></script>
    <script src="<?php echo base_url() ?>js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>js/datatable.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>js/time.js"></script>
  </head>
  <body style="margin-top: 50px;">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
        <div class="header">
          &nbsp<p>Welcome, <?php echo $this->session->userdata('position').' ',$this->session->userdata('name') ?></p>
          &nbsp<span id="date_time"></span>
          <script type="text/javascript">window.onload = date_time('date_time');</script>
          <div class="right" style="float: right;">
             <a href="<?php echo base_url('user/edit_user/'.$this->session->userdata('id')) ?>" class="btn btn-success">Edit</a>
             <a href="<?php echo base_url('login/log_out') ?>" class="btn btn-primary">Logout</a> 
          </div>
          </h1>
        
       </div>

        <div class="col-xs-6 col-sm-12">
        <ul class="nav nav-pills" id="pills">
          <li class="active"><a data-toggle="pill" href="#product_database">Product</a></li>
          <li><a data-toggle="pill" href="#accessories">Accessories</a></li>
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Forms
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a data-toggle="pill" href="#form_service">Form Service</a></li>
                    <li><a data-toggle="pill" href="#owner_form">Owner Form</a></li>
                    <li><a data-toggle="pill" href="#form_exchange">Form Exchange</a></li>
                </ul>
          </li>
        </ul>
        </div>
        <div class="tab-content">
          <div id="product_database" class="tab-pane fade in active">
            <br>
             <div class="container">
             <div class="row">
             <div class="col-xs-12">
          <h1>Product</h1>
          <input type="text" class="form-control ui-widget" id="myInput" onkeyup="searchFunction()" placeholder="Search for product..">
          <div class="table-responsive">
          <table class="table table-bordered sortable" id="productTable">
            <thead>
              <tr>
                <th>Toggle</th>
                <th>No.</th>
                <th>Article Number</th>
                <th>Product Name</th>
                <th>Shipment Date</th>
                <th>Description</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <?php $i=1 ?>
              <?php foreach ($products as $product): ?>
                <tr class="clickable" data-toggle="collapse" id="row<?php echo $i ?>" data-target=".row<?php echo $i ?>">
                  <td><i class="glyphicon glyphicon-plus"></i></td>
                  <td><?php echo $i ?></td>
                  <td><?php echo $product->article_number ?></td>
                  <td><?php echo $product->product_name ?></td>
                  <td><?php echo $product->shipment_date ?></td>
                  <td><?php echo $product->description ?></td>
                  <td><?php echo $product->status ?></td>
                </tr>
  
                  <?php foreach ($childs as $key => $value): ?>
                    <?php if($product->article_number == $key): ?>
                      <tr class="collapse row<?php echo $i ?>">
                        <th>Serial Number</th>
                        <th>Part Name</th>
                        <th>Description</th>
                        <th>Type</th>
                        <th>Service Date</th>
                        <th>Installation Date</th>
    </tr>
                       <?php foreach ($value as $row):?>
                          <tr class="collapse row<?php echo $i ?>">
                            <td><?php echo $row->serial_number ?></td>
                            <td><?php echo $row->part_name ?></td>  
                            <td><?php echo $row->description ?></td>
                            <td><?php echo $row->type ?></td>
                            <td><?php echo $row->service_date ?></td>
                            <td><?php echo $row->date_install ?></td>
                          </tr>
                       <?php endforeach; ?>


                    <?php endif; ?>
                  <?php endforeach ?>
              <?php $i++ ?>
              <?php endforeach ?>
              
            </tbody>
          </table>
          </div>
          <br>
     
          </div>
          </div>
          </div>
          </div>

        <div id="accessories" class="tab-pane">
            <br>
             <div class="container">
             <div class="row">
             <div class="col-xs-12">
                <h1>Accessories</h1>
                <div class="form-group">
                    <label for="serial_number">Serial Number</label>
                    <input class="form-control ui-widget" id="serial_number" type="text" name="name" placholder="" required autocomplete="off">
                </div>
                 <div class="form-group">
                    <label for="part_name">Parts Name</label>
                    <input class="form-control ui-widget" id="part_name" type="text" name="name" placholder="" disabled="" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="article_number">Article Number</label>
                    <input class="form-control" id="article_number" type="text" name="article_number" placholder="" disabled="">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input class="form-control" id="description" type="text" name="description" placholder="" disabled="">
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <input class="form-control" id="type" type="text" name="type" placholder="" disabled="">
                </div>
                <div class="form-group">
                    <label for="service_date">Service Date</label>
                    <input class="form-control" id="service_date" type="text" name="service_date" placholder="" disabled="">
                </div>
                <div class="form-group">
                    <label for="date_install">Installation Date</label>
                    <input class="form-control" id="date_install" type="text" name="date_install" placholder="" disabled="">
                </div>
                <div class="form-group">
                  <label for="date_install">Parts Image</label>
                  <br>
                  <img id="img">
                </div>
                 <script type="text/javascript">
       
                    $(document).ready(function(){

                        $("#serial_number").autocomplete({
                            source: '<?php echo base_url()?>product/lookup_Acc',

                            focus: function(event, ui){
                                event.preventDefault();

                                $(this).val(ui.item.label);
                                $('#article_number').val(ui.item.value5);
                                $('#part_name').val(ui.item.value0);
                                $('#description').val(ui.item.value);
                                $('#type').val(ui.item.value1);
                                $('#service_date').val(ui.item.value2);
                                $('#date_install').val(ui.item.value3);
                                $('#img').attr("src",ui.item.value4);
                                $('#img').show();
                                return false;
                            },

                            select: function(event, ui){
                                event.preventDefault();

                                $(this).val(ui.item.label);
                                $('#article_number').val(ui.item.value5);
                                $('#part_name').val(ui.item.value0);
                                $('#description').val(ui.item.value);
                                $('#type').val(ui.item.value1);
                                $('#service_date').val(ui.item.value2);
                                $('#date_install').val(ui.item.value3);
                                var base_url = '<?php echo base_url();?>';
                                $('#img').attr("src",base_url+ui.item.value4);
                                $('#img').show();
                                return false;
                            }
                        });
                    });
                </script>
                <br>
                <br>
                
               
          </div>
          </div>
          </div>
          </div>



      <div id="form_service" class="tab-pane">
      <br>
          <div class="container">
          <div class="row">
          <div class="col-xs-12 col-sm-12">
          <h1>Form Service</h1>
             <!-- <input type="text" id="search1" onkeyup="searchFunctionUser()" placeholder="Search For Serial No" title="Type in a name"> -->
             <div class="table-responsive">
              <table class="table display table-bordered sortable" id="formTable">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Date Service</th>
                      <th>Serial No.</th>
                      <th>Status</th>
                      <th>Technician</th>
                      <th>Printer of Information</th>
                      <th>Hydraulic of Information</th>
                      <th>Problem</th>
                    </tr>
                  </thead>
                     <tbody>
                        <?php $i=1 ?>
                        <?php foreach ($form_services as $form_service): ?>
                          <tr>
                            <td><?php echo $i ?></td>
                            <td><?php echo $form_service->date_service ?></td>
                            <td><?php echo $form_service->serial_number ?></td>
                            <td><?php echo $form_service->status ?></td>
                            <td><?php echo $form_service->technician ?></td>
                            <td><button type="<?php echo base_url('form_tech/see_more'.$form_service->id) ?>" class="btn btn-success" data-toggle="modal" data-target="#poi">See more</button></td>
                            <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#hoi">See more</button></td>
                            <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#prs">See more</button></td>
                            <input type="hidden" name="id" value="<?php echo $form_service->id ?>">
                            <!-- <td><a href="<?php echo base_url('form_tech/delete_service/'.$form_service->id) ?>" class="btn btn-danger">Delete</a>
                            <a href="<?php echo base_url('form_tech/save_service/'.$form_service->id) ?>" class="btn btn-primary">Save</a>
                            </td> -->
                          </tr>
                        <?php $i++ ?>
                        <?php endforeach ?>
                      </tbody>
             </table>
             </div>
             </div>
             </div>
             </div>

              <a href="<?php echo base_url('form_tech/form_service') ?>" class="btn btn-info">Form Service</a>
      </div>

      <div id="poi" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Printer of Information</h4>
            </div>
            <div class="modal-body">
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Printer</th>
                    <th>Date Install</th>
                    <th>Ink No.</th>
                    <th>Solvent No.</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- <?php $i=1 ?> -->
                    <!-- <?php foreach ($form_services as $form_service): ?> -->
                  <tr>
                    <td><?php echo $form_service->printer ?></td>
                    <td><?php echo $form_service->date_install ?></td>
                    <td><?php echo $form_service->ink_number ?></td>
                    <td><?php echo $form_service->solvent_number ?></td> 
                   <!-- <?php $i++ ?> -->
                  <!-- <?php endforeach ?> -->

                  </tr>
                </tbody>
              </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="hoi" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Hydraulic of Information</h4>
            </div>
            <div class="modal-body">
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Visco Act</th>
                    <th>Pres. Act</th>
                    <th>Mb. Value</th>
                    <th>TMP</th>
                    <th>BO. Cur</th>
                    <th>BO. Ref</th>
                    <th>Date LS</th>
                    <th>Hour LS</th>
                    <th>Total Hour</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1 ?>
                    <?php foreach ($form_services as $form_service): ?>
                          <tr>
                            <td><?php echo $form_service->visco_act ?></td>
                            <td><?php echo $form_service->pres_act ?></td>
                            <td><?php echo $form_service->mb_value ?></td>
                            <td><?php echo $form_service->tmp ?></td>
                            <td><?php echo $form_service->bo_cur ?></td>
                            <td><?php echo $form_service->bo_ref ?></td>
                            <td><?php echo $form_service->date_ls ?></td>
                            <td><?php echo $form_service->hour_ls ?></td>
                            <td><?php echo $form_service->total_hour ?></td>
                          </tr>
                    <?php $i++ ?>
                  <?php endforeach ?>
                </tbody>
              </table>
              </div>
            </div>
          </div>
        </div>
      </div>      

      <div id="prs" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Problem</h4>
            </div>
            <div class="modal-body">
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Problem Description</th>
                    <th>Replace Part</th>
                    <th>Service Work</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1 ?>
                    <?php foreach ($form_services as $form_service): ?>
                          <tr>
                            <td><?php echo $form_service->problem ?></td>
                            <td><?php echo $form_service->replace_part ?></td>
                            <td><?php echo $form_service->service_work ?></td>
                    <?php $i++ ?>
                    <td>
                        <a href="<?php echo base_url('form_tech/save_service/'.$form_service->id) ?>" class="btn btn-primary">Save</a></td>
                  <?php endforeach ?>
                </tbody>
              </table>
              </div>
            </div>
          </div>
        </div>
      </div>   

 <div id="owner_form" class="tab-pane">
      <br>
          <div class="container">
          <div class="row">
          <div class="col-xs-12 col-sm-12">
          <h1>Owner Form</h1>
        <!--    <input type="text" id="search1" onkeyup="searchFunctionUser()" placeholder="Search For article No" title="Type in a name"> -->
        <div class="table-responsive">
              <table class="table display table-bordered sortable" id="formTable">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Serial No.</th>
                      <th>Article No.</th>
                      <th>Date of Installation</th>
                      <th>Industry</th>
                      <th>Material</th>
                      <th>Description</th>
                      <th>Ink No.</th>
                      <th>Solvent No.</th>
                      <th>Distributor</th>
                      <th>Date</th>
                      <th>Customer</th>
                      <th>Other</th>
                       </tr>
                  </thead>

                  <tbody>
                   <?php $i=1 ?>
                    <?php foreach ($owner_forms as $owner_form): ?>
                      <tr>
                        <td><?php echo  $i ?></td>
                        <td><?php echo $owner_form->serial_number ?></td>
                        <td><?php echo $owner_form->article_number ?></td>
                        <td><?php echo $owner_form->date_install ?></td>
                        <td><?php echo $owner_form->industry ?></td>
                        <td><?php echo $owner_form->material ?></td>
                        <td><?php echo $owner_form->description ?></td>
                        <td><?php echo $owner_form->ink_number ?></td>
                        <td><?php echo $owner_form->solvent_number ?></td>
                        <td><?php echo $owner_form->distributor ?></td>
                        <td><?php echo $owner_form->date ?></td>
                        <td><button type="<?php echo base_url('form_tech/button_see'.$owner_forms->id) ?>" class="btn btn-success" data-toggle="modal" data-target="#own">See more</button></td>
                         <td>
                        <a href="<?php echo base_url('form_tech/save_owner/'.$owner_form->id) ?>" class="btn btn-primary">Save</a>
                        </td>
                      </tr>
                    <?php $i++ ?>
                    <?php endforeach ?>
                    
                  </tbody>
                </table>
                </div>
                </div>
                </div>
                </div>

        <div id="own" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Customer Information</h4>
              </div>
            <div class="modal-body">
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                     <th>Company</th>
                      <th>Address</th>
                      <th>City</th>
                      <th>Zipcode</th>
                      <th>Contact</th>
                      <th>Telp</th>
                      <th>Fax</th>
                      <th>Email</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1 ?>
                    <?php foreach ($owner_forms as $owner_form): ?>
                  <tr>
                        <td><?php echo $owner_form->company ?></td>
                        <td><?php echo $owner_form->address ?></td>
                        <td><?php echo $owner_form->city ?></td>
                        <td><?php echo $owner_form->zipcode ?></td>
                        <td><?php echo $owner_form->contact ?></td>
                        <td><?php echo $owner_form->telp ?></td>
                        <td><?php echo $owner_form->fax ?></td>
                        <td><?php echo $owner_form->email ?></td>        
                  <?php $i++ ?>
                  <?php endforeach ?>

                  </tr>
                </tbody>
              </table>
              </div>
            </div>
          </div>
        </div>
      </div>
                
     <!-- <a href="<?php echo base_url('form_tech/owner_form') ?>" class="btn btn-info">Owner Form</a> -->
      </div>



      <div id="form_exchange" class="tab-pane">
      <br>
          <div class="container">
          <div class="row">
          <div class="col-xs-12 col-sm-12">
          <h1>Form Exchange</h1>
        <!--    <input type="text" id="search1" onkeyup="searchFunctionUser()" placeholder="Search For article No" title="Type in a name"> -->
        <div class="table-responsive">
              <table class="table display table-bordered sortable" id="formTable">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Article No.</th>
                      <th>Serial No.</th>
                      <th>Date Replace</th>
                      <th>Run Time</th>
                      <th>Description</th>
                      <th>Distributor</th>
                      <th>Technician</th>
                      <th>Customer</th>
                      <th>Date</th>
                      <th>Other</th>
                      <th>Action</th>
                       </tr>
                  </thead>

                  <tbody>
                   <?php $i=1 ?>
                    <?php foreach ($form_exchanges as $form_exchange): ?>
                      <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $form_exchange->article_number ?></td>
                        <td><?php echo $form_exchange->serial_number ?></td>
                        <td><?php echo $form_exchange->date_replace ?></td>
                        <td><?php echo $form_exchange->run_time ?></td>
                        <td><?php echo $form_exchange->description ?></td>
                        <td><?php echo $form_exchange->distributor ?></td> 
                        <td><?php echo $form_exchange->technician ?></td>
                        <td><?php echo $form_exchange->cust ?></td>
                        <td><?php echo $form_exchange->date ?></td> 
                        <td><button type="<?php echo base_url('form_tech/btn_see'.$form_exchanges->id) ?>" class="btn btn-success" data-toggle="modal" data-target="#exc">See more</button></td>
                         <td>
                        <a href="<?php echo base_url('form_tech/save_exchange/'.$form_exchange->id) ?>" class="btn btn-primary">Save</a>
                        </td>
                      </tr>
                    <?php $i++ ?>
                    <?php endforeach ?>
                    
                  </tbody>
                </table>
                </div>
                </div>
                </div>
                </div>

                  <div id="exc" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Other Information</h4>
              </div>
            <div class="modal-body">
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                     <th>No</th>
                     <th><a data-toggle="tooltip" title="Part of Stock ?">Part of Stock</a></th>
                      <th><a data-toggle="tooltip" title="Dismantled from a printer ?">Dismantled</a></th>
                      <th>Desc of Fault</th>
                      <th>Condition</th>
                      <th><a data-toggle="tooltip" title="Scrapping permitted if repair cost wouldn't be economic(otherwise redelivery unfree)">Scrapping</a></th>
                      <th><a data-toggle="tooltip" title="If No warranty / exchange part => herewith new order for this part">Warranty / Exch Part</a></th>
                      <th>Contact</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1 ?>
                    <?php foreach ($form_exchanges as $form_exchange): ?>
                      <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $form_exchange->stock ?></td>
                        <td><?php echo $form_exchange->dismantled ?></td>
                        <td><?php echo $form_exchange->descr ?></td>
                        <td><?php echo $form_exchange->cond ?></td>
                        <td><?php echo $form_exchange->scrapping ?></td>
                        <td><?php echo $form_exchange->warranty ?></td>
                        <td><?php echo $form_exchange->contact ?></td>
                      </tr>
                    <?php $i++ ?>
                    <?php endforeach ?>

                  </tr>
                </tbody>
              </table>
              </div>
            </div>
          </div>
        </div>
      </div>
            
     <!--  <a href="<?php echo base_url('form_tech/form_exchange') ?>" class="btn btn-info">Form Exchange</a> -->
      </div>

        </div>
         

          <script type="text/javascript" charset="utf-8">
                    $(document).ready(function() {
                     $('.display').DataTable();
                     $('#productTable').DataTable();
                   });
          </script>

          <script>
              function searchFunction() {
                // Declare variables 
                var input, filter, table, tr, td, i;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
                table = document.getElementById("productTable");
                tr = table.getElementsByTagName("tr");

                // Loop through all table rows, and hide those who don't match the search query
                for (i = 0; i < tr.length; i++) {
                  td = tr[i].getElementsByTagName("td")[3];
                  if (td) {
                    if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                      tr[i].style.display = "";
                    } else {
                      tr[i].style.display = "none";
                    }
                  } 
                }
              }
          </script>
          
        </div>
      </div>    
    </div>

    
  </body>
</html>