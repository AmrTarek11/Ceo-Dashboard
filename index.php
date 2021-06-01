<?php include 'server.php';
$username=$_SESSION['username'];
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="css/fonts.css" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css/New Folder/main.css" rel="stylesheet">

</head>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">

      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

          <!-- Sidebar - Brand -->
          <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
              <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-tachometer-alt"></i>
              </div>
              <div class="sidebar-brand-text mx-3">
                <?php echo $_SESSION['username']; ?> Dashboard
              </div>
          </a>

          <!-- Divider -->
          <hr class="sidebar-divider my-0">

          <!-- Nav Item - Dashboard -->
          <li class="nav-item active">
              <a class="nav-link" href="index.php">
                  <i class="fas fa-home"></i>
                  <span>Home</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider">

          <!-- Heading -->
          <div class="sidebar-heading">
              CEO Tools
          </div>

          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                  aria-expanded="true" aria-controls="collapseTwo">
                  <i class="fas fa-tools"></i>
                  <span>Components</span>
              </a>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                      <h6 class="collapse-header">Custom Components:</h6>
                      <a class="collapse-item" href="employee.php">
                        <i class="fas fa-address-card"></i>
                        Add Employee
                      </a>
                      <a class="collapse-item" href="products.php">
                        <i class="fas fa-plus-circle"></i>
                        Add Products
                      </a>
                  </div>
              </div>
          </li>

          <!-- Nav Item - Tables -->
          <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTables"
                  aria-expanded="true" aria-controls="collapseTables">
                  <i class="fas fa-border-all"></i>
                  <span>Tables</span>
              </a>
              <div id="collapseTables" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                      <h6 class="collapse-header">Tables</h6>
                      <a class="collapse-item" href="tables.php">
                          <i class="fas fa-border-all"></i>
                          <span>Employees Tables</span>
                      </a>
                      <a class="collapse-item" href="ptables.php">
                          <i class="fab fa-product-hunt"></i>
                          <span>Products Tables</span>
                      </a>
                  </div>
              </div>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider">

          <!-- Heading -->
          <div class="sidebar-heading">
              Another Project Pages
          </div>

          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                  aria-expanded="true" aria-controls="collapsePages">
                  <i class="fas fa-fw fa-folder"></i>
                  <span>Pages</span>
              </a>
              <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                      <h6 class="collapse-header">Login Screens:</h6>
                      <a class="collapse-item" href="login.php">
                        <i class="fas fa-sign-in-alt"></i>
                        Login
                      </a>
                      <a class="collapse-item" href="register.php">
                        <i class="fas fa-user-plus"></i>
                        Register
                      </a>
                  </div>
              </div>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider">

          <!-- Heading -->
          <div class="sidebar-heading">
              Details Menu
          </div>

          <!-- Nav Item - Project details -->
          <li class="nav-item">
              <a class="nav-link" href="details.php">
                  <i class="fas fa-info-circle"></i>
                  <span>Project Details</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider d-none d-md-block">

          <!-- Sidebar Toggler (Sidebar) -->
          <div class="text-center d-none d-md-inline">
              <button class="rounded-circle border-0" id="sidebarToggle"></button>
          </div>

      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

          <!-- Main Content -->
          <div id="content">

              <!-- Topbar -->
              <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                  <!-- Sidebar Toggle (Topbar) -->
                  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                      <i class="fa fa-bars"></i>
                  </button>

                  <!-- Topbar Navbar -->
                  <ul class="navbar-nav ml-auto">

                      <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                      <li class="nav-item dropdown no-arrow d-sm-none">
                          <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-search fa-fw"></i>
                          </a>
                          <!-- Dropdown - Messages -->
                          <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                              aria-labelledby="searchDropdown">
                              <form class="form-inline mr-auto w-100 navbar-search">
                                  <div class="input-group">
                                      <input type="text" class="form-control bg-light border-0 small"
                                          placeholder="Search for..." aria-label="Search"
                                          aria-describedby="basic-addon2">
                                      <div class="input-group-append">
                                          <button class="btn btn-primary" type="button">
                                              <i class="fas fa-search fa-sm"></i>
                                          </button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </li>

                      <!-- Nav Item - Alerts -->
                      <li class="nav-item dropdown no-arrow mx-1">
                          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-bell fa-fw"></i>
                              <!-- Counter - Alerts -->
                              <span class="badge badge-danger badge-counter">3+</span>
                          </a>
                          <!-- Dropdown - Alerts -->
                          <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                              aria-labelledby="alertsDropdown">
                              <h6 class="dropdown-header">
                                  Alerts Center
                              </h6>
                              <a class="dropdown-item d-flex align-items-center" href="#">
                                  <div class="mr-3">
                                      <div class="icon-circle bg-primary">
                                          <i class="fas fa-file-alt text-white"></i>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="small text-gray-500">December 12, 2019</div>
                                      <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                  </div>
                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#">
                                  <div class="mr-3">
                                      <div class="icon-circle bg-success">
                                          <i class="fas fa-donate text-white"></i>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="small text-gray-500">December 7, 2019</div>
                                      $290.29 has been deposited into your account!
                                  </div>
                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#">
                                  <div class="mr-3">
                                      <div class="icon-circle bg-warning">
                                          <i class="fas fa-exclamation-triangle text-white"></i>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="small text-gray-500">December 2, 2019</div>
                                      Spending Alert: We've noticed unusually high spending for your account.
                                  </div>
                              </a>
                              <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                          </div>
                      </li>

                      <!-- Nav Item - Messages -->
                      <li class="nav-item dropdown no-arrow mx-1">
                          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-envelope fa-fw"></i>
                              <!-- Counter - Messages -->
                              <span class="badge badge-danger badge-counter">7</span>
                          </a>
                          <!-- Dropdown - Messages -->
                          <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                              aria-labelledby="messagesDropdown">
                              <h6 class="dropdown-header">
                                  Message Center
                              </h6>
                              <a class="dropdown-item d-flex align-items-center" href="#">
                                  <div class="dropdown-list-image mr-3">
                                      <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                          alt="...">
                                      <div class="status-indicator bg-success"></div>
                                  </div>
                                  <div class="font-weight-bold">
                                      <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                          problem I've been having.</div>
                                      <div class="small text-gray-500">Emily Fowler · 58m</div>
                                  </div>
                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#">
                                  <div class="dropdown-list-image mr-3">
                                      <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                          alt="...">
                                      <div class="status-indicator"></div>
                                  </div>
                                  <div>
                                      <div class="text-truncate">I have the photos that you ordered last month, how
                                          would you like them sent to you?</div>
                                      <div class="small text-gray-500">Jae Chun · 1d</div>
                                  </div>
                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#">
                                  <div class="dropdown-list-image mr-3">
                                      <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                          alt="...">
                                      <div class="status-indicator bg-warning"></div>
                                  </div>
                                  <div>
                                      <div class="text-truncate">Last month's report looks great, I am very happy with
                                          the progress so far, keep up the good work!</div>
                                      <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                  </div>
                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#">
                                  <div class="dropdown-list-image mr-3">
                                      <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                          alt="...">
                                      <div class="status-indicator bg-success"></div>
                                  </div>
                                  <div>
                                      <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                          told me that people say this to all dogs, even if they aren't good...</div>
                                      <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                  </div>
                              </a>
                              <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                          </div>
                      </li>

                      <div class="topbar-divider d-none d-sm-block"></div>

                      <!-- Nav Item - User Information -->
                      <li class="nav-item dropdown no-arrow">
                          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                <?php
                                echo $_SESSION['username'];
                                ?>
                              </span>
                              <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                          </a>
                          <!-- Dropdown - User Information -->
                          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                              aria-labelledby="userDropdown">
                              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                  Logout
                              </a>
                          </div>
                      </li>

                  </ul>

              </nav>
              <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Average) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Earnings (Average)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                              <?php
                                              $sql = "SELECT ROUND(AVG(CAST(revenue as float)), 2) as avg
                                                      FROM sales s
                                                      WHERE s.users_username='$username'";
                                              $result = $db -> query($sql);
                                              $row = $result->fetch_array(MYSQLI_ASSOC);
                                              if ($row['avg']==NULL) {
                                                echo '0 $';
                                              }else {
                                                echo '$ '.$row['avg'];
                                              }
                                              ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Annual) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Earnings (Annual)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                              <?php
                                              $sql = "SELECT SUM(revenue) as Earnings FROM sales s WHERE s.users_username='$username'";
                                              $result = $db -> query($sql);
                                              $row = $result->fetch_array(MYSQLI_ASSOC);
                                              if ($row['Earnings']==NULL) {
                                                echo '0 $';
                                              }else {
                                                echo '$ '.$row['Earnings'];
                                              }
                                              ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Total Salaries Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                              <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Salaries (monthly)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                              <?php
                                              $sql = "SELECT SUM(salary) AS s FROM employee e WHERE e.users_username='$username'";
                                              $result = $db -> query($sql);
                                              $row = $result -> fetch_array(MYSQLI_ASSOC);
                                              if ($row['s']==NULL) {
                                                echo '0 $';
                                              }else {
                                                echo $row['s'].' $';
                                              }
                                              ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                          <i class="fas fa-money-bill-wave fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Task Card -->
                        <?php
                        $sql = "SELECT ROUND(AVG(CAST(Percentage as float)), 2) AS avg
                                FROM projects p
                                WHERE p.users_username='$username'";
                        $result = $db -> query($sql,MYSQLI_USE_RESULT);
                        while ($row = $result -> fetch_assoc()) {
                          if ($row['avg']<=20 && $row['avg']>=0) {
                            $class='card border-left-danger shadow h-100 py-2';
                          }elseif ($row['avg']<=40 && $row['avg']>20) {
                            $class='card border-left-warning shadow h-100 py-2';
                          }
                          elseif ($row['avg']<=60 && $row['avg']>40) {
                            $class='card border-left-info shadow h-100 py-2';
                          }elseif ($row['avg']<=80 && $row['avg']>60) {
                            $class='card border-left-dark shadow h-100 py-2';
                          }
                          elseif ($row['avg']<=100 && $row['avg']>80) {
                            $class='card border-left-success shadow h-100 py-2';
                          }
                          echo "<div class='col-xl-3 col-md-6 mb-4'>";
                          echo "<div class='$class'>";
                        }
                        ?>
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                          <?php
                                          $sql = "SELECT ROUND(AVG(CAST(Percentage as float)), 2) AS avg
                                                  FROM projects p
                                                  WHERE p.users_username='$username'";
                                          $result = $db -> query($sql,MYSQLI_USE_RESULT);
                                          while ($row = $result -> fetch_assoc()) {
                                            if($row['avg']==NULL){
                                              $class='text-xs font-weight-bold text-danger text-uppercase mb-1';
                                              $class2='progress-bar bg-danger';
                                              $per='0%';
                                              $row['avg']=0;
                                            }
                                            elseif ($row['avg']<=20 && $row['avg']>=0) {
                                              $class='text-xs font-weight-bold text-danger text-uppercase mb-1';
                                              $class2='progress-bar bg-danger';
                                              $per=$row['avg'].'%';
                                            }elseif ($row['avg']<=40 && $row['avg']>20) {
                                              $class='text-xs font-weight-bold text-warning text-uppercase mb-1';
                                              $class2='progress-bar bg-warning';
                                              $per=$row['avg'].'%';
                                            }
                                            elseif ($row['avg']<=60 && $row['avg']>40) {
                                              $class='text-xs font-weight-bold text-info text-uppercase mb-1';
                                              $class2='progress-bar bg-info';
                                              $per=$row['avg'].'%';
                                            }elseif ($row['avg']<=80 && $row['avg']>60) {
                                              $class='text-xs font-weight-bold text-dark text-uppercase mb-1';
                                              $class2='progress-bar bg-dark';
                                              $per=$row['avg'].'%';
                                            }
                                            elseif ($row['avg']<=100 && $row['avg']>80) {
                                              $class='text-xs font-weight-bold text-success text-uppercase mb-1';
                                              $class2='progress-bar bg-success';
                                              $per=$row['avg'].'%';
                                            }


                                            echo "<div class='$class'>Tasks</div>";
                                            echo "<div class='row no-gutters align-items-center'>";
                                            echo "<div class='col-auto'>
                                                  <div class='h5 mb-0 mr-3 font-weight-bold text-gray-800'>".$row['avg'].'%'."</div>
                                                  </div>";
                                            echo "<div class='col'>";
                                            echo "<div class='progress progress-sm mr-2'>
                                                <div class='$class2' role='progressbar'
                                                    style='width:$per' aria-valuenow='50' aria-valuemin='0'
                                                    aria-valuemax='100'></div>
                                                </div>
                                            </div>";
                                          }
                                          ?>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Earnings Per Years</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>

                                    <script type="text/javascript" src="vendor/jquery/jquery.min.js"></script>
                                    <script type="text/javascript" src="vendor/chart.js/Chart.min.js"></script>
                                    <script>

                                        $(document).ready(function() {
                                            showGraph();
                                        });
                                        function showGraph()
                                        {
                                            {
                                                $.post("BarChart.php",
                                                function (data)
                                                {
                                                    console.log(data);
                                                     var year = [];
                                                     var revenue = [];

                                                    for (var i in data) {
                                                        year.push(data[i].year);
                                                        revenue.push(data[i].revenue);
                                                    }

                                                    var chartdata = {
                                                        labels: year,
                                                        datasets: [
                                                          {
                                                            label: "Earnings",
                                                            lineTension: 0.3,
                                                            backgroundColor: "rgba(78, 115, 223, 0.05)",
                                                            borderColor: "rgba(78, 115, 223, 1)",
                                                            pointRadius: 4,
                                                            pointBackgroundColor: "rgba(78, 115, 223, 1)",
                                                            pointBorderColor: "rgba(78, 115, 223, 1)",
                                                            pointHoverRadius: 8,
                                                            pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                                                            pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                                                            pointHitRadius: 10,
                                                            pointBorderWidth: 2,
                                                            data: revenue,
                                                          }
                                                        ],
                                                    };
                                                    var options = {
                                                      options: {
                                                        maintainAspectRatio: false,
                                                        layout: {
                                                          padding: {
                                                            left: 10,
                                                            right: 25,
                                                            top: 25,
                                                            bottom: 0
                                                          }
                                                        },
                                                        scales: {
                                                          xAxes: [{
                                                            time: {
                                                              unit: 'date'
                                                            },
                                                            gridLines: {
                                                              display: false,
                                                              drawBorder: false
                                                            },
                                                            ticks: {
                                                              maxTicksLimit: 7
                                                            }
                                                          }],
                                                          yAxes: [{
                                                            ticks: {
                                                              maxTicksLimit: 5,
                                                              padding: 10,
                                                              // Include a dollar sign in the ticks
                                                              callback: function(value, index, values) {
                                                                return '$' + number_format(value);
                                                              }
                                                            },
                                                            gridLines: {
                                                              color: "rgb(234, 236, 244)",
                                                              zeroLineColor: "rgb(234, 236, 244)",
                                                              drawBorder: false,
                                                              borderDash: [2],
                                                              zeroLineBorderDash: [2]
                                                            }
                                                          }],
                                                        },
                                                        legend: {
                                                          display: false
                                                        },
                                                        tooltips: {
                                                          backgroundColor: "rgb(255,255,255)",
                                                          bodyFontColor: "#858796",
                                                          titleMarginBottom: 10,
                                                          titleFontColor: '#6e707e',
                                                          titleFontSize: 14,
                                                          borderColor: '#dddfeb',
                                                          borderWidth: 1,
                                                          xPadding: 15,
                                                          yPadding: 15,
                                                          displayColors: false,
                                                          intersect: false,
                                                          mode: 'index',
                                                          caretPadding: 10,
                                                          callbacks: {
                                                            label: function(tooltipItem, chart) {
                                                              var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                                                              return datasetLabel + ': $' + number_format(tooltipItem.yLabel);
                                                            }
                                                          }
                                                        }
                                                      }
                                                    };

                                                    var graphTarget = $(".myAreaChart");

                                                    var barGraph = new Chart(myAreaChart, {
                                                        type: 'line',
                                                        data: chartdata,
                                                        options: options
                                                    });
                                                });
                                            }
                                        }
                                      </script>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> Facebook
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> WhatsApp
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-info"></i> Direct
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                        <!-- Project Card Example -->
                        <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                                </div>
                                <div class="card-body">
                                <?php
                                $sql = "SELECT * FROM `projects` WHERE users_username='$username'";
                                $result = $db -> query($sql,MYSQLI_USE_RESULT);
                                while ($row = $result -> fetch_assoc()) {
                                  echo "<h4 class='small font-weight-bold'>";
                                  echo $row['Name']. "<span class='float-right'>" . $row['Percentage'].' %' . "</span></h4>";
                                  echo "<div class='progress mb-4'>";
                                  if ($row['Percentage']<=20 && $row['Percentage']>=0) {
                                    $class='progress-bar bg-danger';
                                    $per=$row['Percentage'].'%';
                                  }elseif ($row['Percentage']<=40 && $row['Percentage']>20) {
                                    $class='progress-bar bg-warning';
                                    $per=$row['Percentage'].'%';
                                  }
                                  elseif ($row['Percentage']<=60 && $row['Percentage']>40) {
                                    $class='progress-bar';
                                    $per=$row['Percentage'].'%';
                                  }elseif ($row['Percentage']<=80 && $row['Percentage']>60) {
                                    $class='progress-bar bg-info';
                                    $per=$row['Percentage'].'%';
                                  }
                                  elseif ($row['Percentage']<=100 && $row['Percentage']>80) {
                                    $class='progress-bar bg-success';
                                    $per=$row['Percentage'].'%';
                                  }
                                  echo "<div class='$class' role='progressbar'
                                            style='width:$per' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100'>
                                        </div>
                                      </div>
                                    ";
                                }
                                ?>
                                </div>
                            </div>
                        </div>

                        <!-- Color Column -->
                        <div class="col-lg-6 mb-4">

                        <!-- Color Column -->
                        <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Color Map</h6>
                                </div>
                                <div class="card-body">
                                  <div class="col-lg-6 mb-4">
                                      <div class="card bg-danger text-white shadow">
                                          <div class="card-body">
                                              Danger
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-6 mb-4">
                                      <div class="card bg-warning text-white shadow">
                                          <div class="card-body">
                                              Warning
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-6 mb-4">
                                      <div class="card bg-primary text-white shadow">
                                          <div class="card-body">
                                              Primary
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-6 mb-4">
                                      <div class="card bg-info text-white shadow">
                                          <div class="card-body">
                                              Info
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-6 mb-4">
                                      <div class="card bg-success text-white shadow">
                                          <div class="card-body">
                                              Success
                                          </div>
                                      </div>
                                  </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; CEO Dashboard Project  </span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->
      <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/New/chart-area-demo.js"></script>
    <script src="js/demo/New/chart-pie-demo.js"></script>

</body>

</html>
