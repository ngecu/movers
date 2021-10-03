<div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="./dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['username']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="./index.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           
          </li>
          <!-- <li class="nav-item">
            <a href="./membership.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Membership
              
              </p>
            </a>
          </li> -->

          <li class="nav-header">EMPLOYEES</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Loaders 
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./pages/loaders.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Loaders List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./pages/new_loader.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register New Loader</p>
                </a>
              </li>
             
            </ul>
            
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Farmers 
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./pages/farmers.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Farmer List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./pages/new_farmer.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register New Farmer</p>
                </a>
              </li>
             
            </ul>
            
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Drivers 
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./pages/drivers.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Drivers List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./pages/driver_offences.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Drivers Offenses</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./pages/new_driver.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register New Driver</p>
                </a>
              </li>
             
            </ul>
            
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Groups 
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./pages/groups.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Group List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./pages/new_group.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register New Group</p>
                </a>
              </li>
             
            </ul>
            
          </li>
          
          
 
          
          <li class="nav-header">TRANSPORT</li>
        
          <li class="nav-item">
            <a href="./pages/transport_orders.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Order Transport
              
              </p>
            </a>
          </li>

          <li class="nav-header">VEHICLES</li>
          <li class="nav-item">
            <a href="./pages/vehicles.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                All Vehicles
              
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./pages/new_vehicle.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                 Add Vehicle
              
              </p>
            </a>
          </li>
        
          <li class="nav-header">HR</li>
          <li class="nav-item">
            <a href="./pages/expenses.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Sales
              
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./pages/revenue.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Pay Slips
              
              </p>
            </a>

            <a href="./pages/revenue.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Taxes
              
              </p>
            </a>
          </li>

      
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>