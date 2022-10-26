<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>


<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <div class="profile-userpic">
                <img src="data:image/png;base64,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" class="img-responsive" alt="">
            </div>
            <div class="profile-usertitle">
                <?php
$uid=$_SESSION['detsuid'];
$ret=mysqli_query($con,"select FullName from tbluser where ID='$uid'");
$row=mysqli_fetch_array($ret);
$name=$row['FullName'];

?>
                <div class="profile-usertitle-name"><?php echo $name; ?></div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        
        <ul class="nav menu">
            <li class="active"><a href="dashboard.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
            
            
           
            <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
                <em class="fa fa-navicon">&nbsp;</em>Expenses <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-1">
                    <li><a class="" href="add-expense.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> Add Expenses
                    </a></li>
                    <li><a class="" href="manage-expense.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> Manage Expenses
                    </a></li>
                    
                </ul>

            </li>
           
  <li class="parent "><a data-toggle="collapse" href="#sub-item-2">
                <em class="fa fa-navicon">&nbsp;</em>Expense Report <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-2">
                    <li><a class="" href="expense-datewise-reports.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> Daywise Expenses
                    </a></li>
                    <li><a class="" href="expense-monthwise-reports.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> Monthwise Expenses
                    </a></li>
                    <li><a class="" href="expense-yearwise-reports.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> Yearwise Expenses
                    </a></li>
                    
                </ul>
            </li>




            
            <li><a href="user-profile.php"><em class="fa fa-user">&nbsp;</em> Profile</a></li>
             <li><a href="change-password.php"><em class="fa fa-clone">&nbsp;</em> Change Password</a></li>
<li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>

        </ul>
		
    </div>