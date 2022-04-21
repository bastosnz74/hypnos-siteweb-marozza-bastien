
        <!--================Header Area =================-->
        <header class="header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.php"><img src="image/hypnose/Logo Hypnos.png" alt="" height="60px"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li> 
                            <!-- <li class="nav-item"><a class="nav-link" href="about.html">About us</a></li>
                            <li class="nav-item"><a class="nav-link" href="accomodation.html">Accomodation</a></li> -->
                            <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                          
                            <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                           
                            <?php
                             if(isset($_SESSION['userId']))
                             {
                                 if($_SESSION['userId']!=0 && $_SESSION['userId']!=null)
                                 {
                                     if($_SESSION['type']=='MANAGER')
                                     {
                                     ?>

                            <li class="nav-item submenu dropdown">
                                <a href="managerProfile"  class="nav-link dropdown-toggle "  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="bg-warning p-2 rounded"><?php echo $_SESSION['userName'];?></span></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="managerProfile.php">Suite</a></li>
                                    <li class="nav-item"><a class="nav-link" href="hotelView.php">Hotels</a></li>
                                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                                </ul>
                            </li> 
                           

                               
                            <?php
                                     } else if($_SESSION['type']=='ADMIN')
                                     {?>

                                     
                            <li class="nav-item submenu dropdown">
                                <a href="managerProfile"  class="nav-link dropdown-toggle "  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="bg-warning p-2 rounded"><?php echo $_SESSION['userName'];?></span></a>
                                <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="managerProfile.php">Profile</a></li>
                                <li class="nav-item"><a class="nav-link" href="reviews.php">Reviews</a></li>
                                    <li class="nav-item"><a class="nav-link" href="manager.php">Managers</a></li>
                                    <li class="nav-item"><a class="nav-link" href="users.php">Users</a></li>
                                    <li class="nav-item"><a class="nav-link" href="hotel.php">Hotels</a></li>
                                    <li class="nav-item"><a class="nav-link" href="managerProfile.php">Suite</a></li>
                                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                                </ul>
                            </li> 


                                    <?php 
                                    }else if($_SESSION['type']=='CUSTOMER')
                                    {?>

                                     <li class="nav-item submenu dropdown">
                                <a href="managerProfile"  class="nav-link dropdown-toggle "  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="bg-warning p-2 rounded"><?php echo $_SESSION['userName'];?></span></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="customerProfile.php">Profile</a></li>
                                    <li class="nav-item"><a class="nav-link" href="fastBooking.php">Fast Booking</a></li>
                                    <li class="nav-item"><a class="nav-link" href="customerBooking.php">Bookings</a></li>
                                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                                </ul>
                            </li> 


                                    <?php
                                    }
                                 }
                             }
                             else
                             {?>
                                         <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>

                             <?php
                             }
                            
                            
                            ?>
                        </ul>
                    </div> 
                </nav>
            </div>
        </header>
        <!--================Header Area =================-->
        