<?php
 session_start();
  if(isset($_SESSION['username']))
    {
        $username=$_SESSION['username'];
        
       
    }
    else
    {
        header("location:department_login.php");
    }
  $link = mysqli_connect("localhost","root","");
   mysqli_select_db($link,"obe system");
 include "header.php";
?>
        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Plain Page</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Plain Page</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                		<form name="form1" action="" method="post" class="col-lg-6">
		                               <table class="table table-bordered">
									     <tr>
										 <td>
										  									 <div class="container">
																		<!-- /*down here php code for selecting Departments name*/ -->
																		<?php

																		$query = "SELECT Dept_id FROM department_login WHERE username = '$username'";
																		
																		if(($res=mysqli_query($link, $query))==TRUE){
																		  $row = mysqli_fetch_array($res);
																		   $dept_id = $row["Dept_id"];
																		 
																		}
																		 
																		
																		?>

																		<div class="form-group">
																	SELECT Program
																	<select  class="form-control" name=program_id>
																	<?php
																	 $query1 = "SELECT * FROM program WHERE Dept_id = '$dept_id'";
																	 if($res=mysqli_query($link, $query1)){
																	while($row=mysqli_fetch_array($res)){?>
																	<option value=<?php echo $row["Prog_id"]; ?>>
																				<?php echo $row["Prog_name"]; echo "</option>"; }
																	 }?>
																				
																	</select>
																	
																	</div>
																		</div>
										 <td>
										 </tr>
										 <tr>
								   <td>
								    <input type = "submit" class="btn btn-default submit" name="submit1" value="Show PLOs" >
								    </td>
									</tr>
									 </form>
									   </table>
	                                   <?php  
									   
								if(isset($_POST["submit1"])){	   
                                      $programe_id= $_POST["program_id"];
                                         									  
	                                  $query = "SELECT * FROM plos WHERE Prog_id = '$programe_id'";
									 
                                      $res = mysqli_query($link, $query);
	                                   echo "<table class='table table-bordered'>";
	                                      echo "<tr>";
	                                     echo "<th>"; echo "Program ID";  echo "</th>";
	                                     echo "<th>"; echo "PLO name";  echo "</th>";
	                                     echo "<th>"; echo "Description";  echo "</th>";
	                                      echo "</tr>";
	                                       while($row=mysqli_fetch_array($res)){
		                                   echo "<tr>";
			                               echo "<td>"; echo $programe_id; echo "</td>";
			                               echo "<td>"; echo $row["P_name"]; echo "</td>";
			                                echo "<td>"; echo $row["Description"]; echo "</td>";
			                               echo "</tr>";
	                                         }
	                         echo "</table";
								}
?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

<?php
 include "footer.php";
?>