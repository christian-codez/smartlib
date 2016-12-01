
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Dashboard</title>
 
  <?php $this->load->view("_partials/adminheader");?>
  
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?= adminPluginsPath("morris/morris.css") ?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?= adminPluginsPath("jvectormap/jquery-jvectormap-1.2.2.css") ?>">
  <!-- data tables css -->
  <link rel="stylesheet" href="<?= adminPluginsPath("datatables/dataTables.bootstrap.css") ?>">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php $this->load->view("_partials/headernav"); ?>
  
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
     <?php  $this->load->view("_partials/sidebarmenu");?>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?= $totalLibraries ?></h3>

              <p>Total Libraries</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>Total Searches/Day</p>
            </div>
            <div class="icon">
             <i class="ion ion-pie-graph"></i>
          </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Successful Searches</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Unsuccessful searches</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
              <li class="pull-left header"><i class="fa fa-bank"></i> Libraries</li>
            </ul>
            <div class="tab-content no-padding">
              <!-- Morris chart - Sales -->
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>S/N</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th colspan="3">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $count=1; ?>
                  <?php foreach($libraries as $lib):?>
                  
                    <tr>
                      <td><?= $count++ ?></td>
                      <td><a href="<?= $lib['url']?>" id="<?= $lib['id'] ?>"><?= $lib['library']?></a></td>
                      <td><?= $lib['address']?></td>
                      <td><?= $lib['x']?></td>
                      <td><?= $lib['y']?></td>
                      
                      <td><button class="btn btn-success btn-xs"><i class="fa fa-map-marker"></i></button></td>
                      <td><button class="btn btn-primary btn-xs edit"  data-toggle="modal" data-target=".myModal"><i class="fa fa-edit"></i></button></td>
                    </tr>
                  <?php endforeach; ?>
                 </tbody>
              </table>
            </div>
          </div>
          <!-- /.nav-tabs-custom -->
  <!-- Modal -->
  <div class="modal fade myModal"  role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
            
             <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit <span id="libname"> </span> Information</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php $data = array('class' => 'deleteform');   ?>
            <?php echo form_open('library/editlibrary',$data);?>
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Library...">
                  <input type="hidden" id="libraryId" name="id">
                </div>
                 <div class="form-group">
                  <label for="url">URL</label>
                  <input type="url" class="form-control" id="url" name="url" placeholder="Library URL...">
                </div>
                 <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" class="form-control" id="address" name="address" placeholder="Library Address...">
                </div>
                 <div class="form-group">
                  <label for="lat">Latitude</label>
                  <input type="text" class="form-control" id="lat" name="lat" placeholder="Library Lat...">
                </div>
                 <div class="form-group">
                  <label for="long">Longitude</label></label>
                  <input type="text" class="form-control" id="long" name="long" placeholder="Library Long...">
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Edit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
          
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

          <!-- Map box -->
          <div class="box box-solid bg-light-blue-gradient">
            <div class="box-header">
      
              <i class="fa fa-map-marker"></i>

              <h3 class="box-title">
                Library Name here
              </h3>
            </div>
            <div class="box-body">
              <div id="world-map" style="height: 250px; width: 100%;">Map here</div>
            </div>
            <!-- /.box-body-->
          </div>
          <!-- /.box -->

          <!-- solid sales graph -->
          <div class="box box-solid bg-teal-gradient">
            <div class="box-header">
              <i class="fa fa-users"></i>

              <h3 class="box-title">Visitors</h3>

            </div>
            <div class="box-body border-radius-none">
              <div class="chart" id="line-chart" style="height: 250px;"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </section>
        <!-- right col -->
        
       
      </div>
       <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                    <!-- TO DO List -->
          <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">Recent Activities</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="todo-list">
                <li>
                        <!-- drag handle -->
                            <span class="handle">
                              <i class="fa fa-ellipsis-v"></i>
                              <i class="fa fa-ellipsis-v"></i>
                            </span>
                        <!-- checkbox -->
                        <span>1</span>
                        <!-- todo text -->
                        <span class="text">Activity Description</span>
                        <!-- Emphasis label -->
                        <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                        <!-- General tools such as edit or delete-->
                        <div class="tools">
                          <i class="fa fa-edit"></i>
                          <i class="fa fa-trash-o"></i>
                        </div>
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix no-border">
              <button type="button" class="btn btn-default pull-right"><i class="fa fa-refresh"></i> Refresh</button>
            </div>
          </div>
          <!-- /.box -->
              
            </div>
            <div class="col-md-1"></div>
        </div>
      <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; <?= date("Y") ?> <a href="http://almsaeedstudio.com">Advanced Sofware Engineering Topics - Group 20</a>.</strong> All rights
    reserved.
  </footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.1.4 -->
<script src="<?= adminPluginsPath("jQuery/jQuery-2.1.4.min.js") ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.5 -->
<script src="<?= adminJsPath("bootstrap.min.js") ?>"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?= adminPluginsPath("morris/morris.min.js") ?>"></script>
<!-- Sparkline -->
<script src="<?= adminPluginsPath("sparkline/jquery.sparkline.min.js") ?>"></script>
<!-- jvectormap -->
<script src="<?= adminPluginsPath("jQuery/jQuery-2.1.4.min.js") ?>"></script>
<script src="<?= adminPluginsPath("jvectormap/jquery-jvectormap-world-mill-en.js") ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?= adminPluginsPath("knob/jquery.knob.js") ?>"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?= adminPluginsPath("bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js") ?>"></script>
<!-- data table js -->
<script src="<?= adminPluginsPath("datatables/jquery.dataTables.min.js") ?>"></script>
<script src="<?= adminPluginsPath("datatables/dataTables.bootstrap.min.js") ?>"></script>
<!-- Slimscroll -->
<script src="<?= adminPluginsPath("slimScroll/jquery.slimscroll.min.js") ?>"></script>
<!-- FastClick -->
<script src="<?= adminPluginsPath("fastclick/fastclick.js") ?>"></script>

<!-- AdminLTE App -->
<script src="<?= adminDistPath("js/app.min.js") ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= adminDistPath("js/pages/dashboard.js") ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= adminDistPath("js/demo.js") ?>"></script>
<script>
  $(function () {
   $("#example1").DataTable();
   
  });
</script>
<script type="text/javascript">
  
  $('.edit').click(function(){
    
    var library = $(this).closest('tr').children('td:eq(1)').text();
    $("#name").val(library);
    $("#libname").text(library);
    var address = $(this).closest('tr').children('td:eq(2)').text();
    $("#address").val(address);
    var url = $(this).closest('tr').children('td:eq(1)').find("a").attr("href");
    $("#url").val(url);
    var id = $(this).closest('tr').children('td:eq(1)').find("a").attr("id");
    $("#libraryId").val(id);
    var lat = $(this).closest('tr').children('td:eq(3)').text();
    $("#lat").val(lat);
    var long = $(this).closest('tr').children('td:eq(4)').text();
    $("#long").val(long);
    
    
  });
  
</script>
</body>
</html>
