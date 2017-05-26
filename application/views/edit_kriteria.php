<?php $this->load->view("header") ?>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      
     <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo base_url()."index.php"; ?>/spk/index">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span> 
          </a>
        </li>
        
        <?php if($this->session->userdata('level') == '1'){
            ?>
        <li class="active treeview">
          <a href="<?php echo base_url()."index.php"; ?>/spk/index">
            <i class="fa fa-pie-chart"></i>
            <span>Komponen</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a class="active" href="<?php echo base_url()."index.php"; ?>/spk/kriteria"><i class="fa fa-circle-o"></i> Kriteria</a></li>
            <li><a href="<?php echo base_url()."index.php"; ?>/spk_alternatif/alternatif"><i class="fa fa-circle-o"></i> Alternatif</a></li>
            
          </ul>
        </li>
        <?php } else { ?>
          <li >
          <a  href="<?php echo base_url()."index.php"; ?>/spk_alternatif/alternatif">
            <i class="fa fa-user"></i> <span>Alternatif</span> 
          </a>
        </li>
     
        <?php }?>
        <li >
          <a href="<?php echo base_url()."index.php"; ?>/spk_alternatif/ranking">
            <i class="fa fa-trophy"></i> <span>Ranking</span> 
          </a>
        </li>
        </ul>
        
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        KRITERIA
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Kriteria</li>
      </ol>
    </section>


    <!-- Main content -->
    <section class="content">
      


      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-9 connectedSortable">
          
          
        	<div class="row">
		  <div class="col-xs-12 col-sm-12 col-md-8">
		  	<div class="page-header">
			  <h2 style="position: fixed; left: 44%">Ubah Tingkat Kepentingan</h2>
			</div>
			
			    <form style="position: fixed; top: 30%; left: 35%; width: 700px; " method="post" action="<?php echo base_url()."index.php/spk/edit_kriteria" ?>">
			    	<div class="form-group">
				    <table style="text-align: center" class="table table-striped ">
            <input type="hidden" name="id_kriteria"  value="<?php echo $id_kriteria; ?>" >
            <?php if ($id_kriteria=='1') { ?>
             
              <tr>
                    <td style="width: 150px"><label><?php echo $nama_kriteria; ?></label></td>
                    <td style="width: 230px"><select class="form-control" name="perbandingan_ket2">
                    <option  value='1'>sama penting dari</option>
                    <option  value='3'>cukup penting dari</option>
                    <option  value='0.3333333333333333'>tidak cukup penting dari (1/3)</option>
                    <option  value='5'>lebih penting dari</option>
                    <option  value='0.2'>tidak lebih penting dari (1/5)</option>
                    <option  value='7'>sangat lebih penting dari</option>
                    <option  value='0.1428571428571429'>tidak sangat lebih penting dari (1/7)</option>
                    <option  value='9'>mutlak lebih penting dari</option>
                    <option  value='0.1111111111111111'>tidak mutlak lebih penting dari (1/9)</option>
                          </select></td>
                    <td style="width: 150px"><label>Nilai IPK</label></td>
                    </tr>
              
            <?php } if ($id_kriteria=='1'|| $id_kriteria=='2') { ?>
              <tr>
                    <td style="width: 150px"><label><?php echo $nama_kriteria; ?></label></td>
                    <td style="width: 230px"><select class="form-control" name="perbandingan_ket3">
                    <option  value='1'>sama penting dari</option>
                    <option  value='3'>cukup penting dari</option>
                    <option  value='0.3333333333333333'>tidak cukup penting dari (1/3)</option>
                    <option  value='5'>lebih penting dari</option>
                    <option  value='0.2'>tidak lebih penting dari (1/5)</option>
                    <option  value='7'>sangat lebih penting dari</option>
                    <option  value='0.1428571428571429'>tidak sangat lebih penting dari (1/7)</option>
                    <option  value='9'>mutlak lebih penting dari</option>
                    <option  value='0.1111111111111111'>tidak mutlak lebih penting dari (1/9)</option>
                          </select></td>
                    <td style="width: 150px"><label>Usia</label></td>
                    </tr>
            <?php } if ($id_kriteria=='1'|| $id_kriteria=='2'|| $id_kriteria=='3' ) { ?>
              <tr>
                    <td style="width: 150px"><label><?php echo $nama_kriteria; ?></label></td>
                    <td style="width: 230px"><select class="form-control" name="perbandingan_ket4">
                    <option  value='1'>sama penting dari</option>
                    <option  value='3'>cukup penting dari</option>
                    <option  value='0.3333333333333333'>tidak cukup penting dari (1/3)</option>
                    <option  value='5'>lebih penting dari</option>
                    <option  value='0.2'>tidak lebih penting dari (1/5)</option>
                    <option  value='7'>sangat lebih penting dari</option>
                    <option  value='0.1428571428571429'>tidak sangat lebih penting dari (1/7)</option>
                    <option  value='9'>mutlak lebih penting dari</option>
                    <option  value='0.1111111111111111'>tidak mutlak lebih penting dari (1/9)</option>
                          </select></td>
                    <td style="width: 150px"><label>Komunikasi</label></td>
                    </tr>
              <?php } if ($id_kriteria=='1'|| $id_kriteria=='2'|| $id_kriteria=='3' || $id_kriteria=='4' ) { ?>
               <tr>
                    <td style="width: 150px"><label><?php echo $nama_kriteria; ?></label></td>
                    <td style="width: 230px"><select class="form-control" name="perbandingan_ket5">
                   <option  value='1'>sama penting dari</option>
                    <option  value='3'>cukup penting dari</option>
                    <option  value='0.3333333333333333'>tidak cukup penting dari (1/3)</option>
                    <option  value='5'>lebih penting dari</option>
                    <option  value='0.2'>tidak lebih penting dari (1/5)</option>
                    <option  value='7'>sangat lebih penting dari</option>
                    <option  value='0.1428571428571429'>tidak sangat lebih penting dari (1/7)</option>
                    <option  value='9'>mutlak lebih penting dari</option>
                    <option  value='0.1111111111111111'>tidak mutlak lebih penting dari (1/9)</option>
                          </select></td>
                    <td style="width: 150px"><label>Wawancara</label></td>
                    </tr>
              <?php } if ($id_kriteria=='1'|| $id_kriteria=='2'|| $id_kriteria=='3' || $id_kriteria=='4' || $id_kriteria=='5' ) { ?>
                   <tr>
                    <td style="width: 150px"><label><?php echo $nama_kriteria; ?></label></td>
                    <td style="width: 230px"><select class="form-control" name="perbandingan_ket6">
                    <option  value='1'>sama penting dari</option>
                    <option  value='3'>cukup penting dari</option>
                    <option  value='0.3333333333333333'>tidak cukup penting dari (1/3)</option>
                    <option  value='5'>lebih penting dari</option>
                    <option  value='0.2'>tidak lebih penting dari (1/5)</option>
                    <option  value='7'>sangat lebih penting dari</option>
                    <option  value='0.1428571428571429'>tidak sangat lebih penting dari (1/7)</option>
                    <option  value='9'>mutlak lebih penting dari</option>
                    <option  value='0.1111111111111111'>tidak mutlak lebih penting dari (1/9)</option>
                          </select></td>
                    <td style="width: 150px"><label>Tes Tulis</label></td>
                    </tr>

                 <?php }  ?>
                  
            </table>
				   
				  <button type="submit" class="btn btn-primary">Ubah</button>
				  <button type="button" onclick="location.href='<?php echo base_url()."index.php"; ?>/spk/kriteria'" class="btn btn-success">Kembali</button>
				</form>
			  
		  </div>
		  
		</div>

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>WWW.KIM-ARYA.16MB.COM</b>
    </div>
    <strong>Copyright &copy; 2017 <a href="#">KIM ARYA PRODUCTION</a>.</strong> All rights
    reserved.
  </footer>


</body>

<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url()."assets/";?>bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo base_url()."assets/";?>plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url()."assets/";?>plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url()."assets/";?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url()."assets/";?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url()."assets/";?>plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url()."assets/";?>plugins/daterangepicker/daterangepicker.js"></script>

<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url()."assets/";?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url()."assets/";?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()."assets/";?>plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()."assets/";?>dist/js/app.min.js"></script>
</html>
