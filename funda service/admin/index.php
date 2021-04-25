<?php
include('includes/header.php');
//include('includes/topbar.php');
include('includes/sidebar.php');
include('includes/footer.php');
?>


<!--WORKSPACE-->
<div style='width:82%' class="ml-auto p-2">

  <!--HEADER-->
  <header class='w-100 bg-light pl-2 pr-2 d-flex flex-wrap align-content-center justify-content-between' style='height:8vh'>
    <!--TITLE-->
    <div class="w-50 flex flex-wrap align-content-center">
      <strong>Dashboard</strong>
    </div>

    <!--OTHER MENU-->
    <div class='w-50 d-flex flex-wrap align-conten-center justify-content-end'>
      <!--DROPDOWN MENU-->
      <div class="dropdown mr-2">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> 
          Food Menu
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Banku</a>
          <a class="dropdown-item" href="#">Fufu</a>
          <a class="dropdown-item" href="#">Fried Yam</a>
          <a class="dropdown-item" href="#">Tuo Zaafi</a>
          <a class="dropdown-item" href="#">Rice</a>
          <a class="dropdown-item" href="#">Ampesi</a>
        </div>
      </div>

      <!--DATE CHANGE FORM-->
      <form class=""> 
        <div class="input-group">

          <div class="input-group-prepend">
            <span class="input-group-text">Date</span>
          </div>

          <input type="datetime-local" class='form-control' name="">

        </div>
    </form>
    </div>
  </header>

  <!--ENVIRONMENT-->
  <div class='w-100 pt-5'>
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h6>7</h6>

                <p>Total Daily Sales</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h6>24</h6>

                <p>Total Daily Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h6>24</h6>

                <p>Total Weekly Sales</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="container"></div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h6>23</h6>

                <p>Total Weekly Orders</p>
              </div>
              <div class="icon">
              <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h6>Banku And Tilapia</h6>

                <p>Fast moving food</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h6>Yam and palava sauce</h6>

                <p>Least moving sales</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
         <!-- /.row (main row) -->
    </div>
  </div>

</div>


<?php
include('includes/footer.php');
?>
  <footer class="main-footer">
    <strong>Copyright &copy; 2020-2021 <a href="http://Corner Inn">Corner Inn Eatery</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>