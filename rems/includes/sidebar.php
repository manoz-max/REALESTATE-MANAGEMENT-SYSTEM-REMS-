<div class="col-xs-12 col-sm-12 col-md-4">
                        <div class="edit--profile-area">
  <ul class="edit--profile-links list-unstyled mb-0">
                            <?php if($_SESSION['ut']=='3'){?>
                          
                                <li style="color: white;"><a href="user-profile.php" class="active">Edit Profile</a></li>
                                <li style="color: white;"><a href="enquiry-status.php" class="active">Enquiry Status</a></li>
                                <li style="color: white;"><a href="change-password.php">Change Password</a></li>
                                <li style="color: white;"><a href="logout.php">Logout</a></li>
                            <?php } else{?>
   <li><a href="user-profile.php" class="active" style="color: #edca0c;">Edit Profile</a></li>
                                <li style="color: white;"><a href="change-password.php">Change Password</a></li>
                                <li style="color: white;"><a href="add-property.php">Add Property</a></li>
                                <li style="color: white;"><a href="my-properties.php">My Properties</a></li>
                                <li style="color: white;"><a href="enquiry.php">Received Enquiry</a></li>

                             
                                    <li><a href="ansenquiry.php">Answered Enquiries</a></li>
                                <li><a href="logout.php">Logout</a></li>

                            <?php } ?>
                            </ul>
                        </div>
                    </div>