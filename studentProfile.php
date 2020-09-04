<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar.php'); ?>

    <div class="container">
		<div class="margin-top">
			<div class="row">
			<div class="span12">
                            <table id="student">
                                <tbody>

                                  <?php
								  $con = mysqli_connect('localhost','root','', 'lms')or die(mysqli_error());
								  $user_query=mysqli_query($con, "select * from member where member_id =".$_SESSION['id'])or die(mysqli_error());
									while($row=mysqli_fetch_array($user_query)){
									$id=$row['member_id'];  ?>
									<tr class="del<?php echo $id ?>">

                    <td>Username </td> <td><?php echo $row['username']; ?> </td></tr>
                    <tr>
                      <td>Name </td> <td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
                    </tr>
                    <tr>
                      <td>Gender </td> <td><?php echo $row['gender']; ?> </td>
                    </tr>
                    <tr>
                      <td>Address </td> <td><?php echo $row['address']; ?> </td>
                    </tr>
                    <tr>
                      <td>Contact </td> <td><?php echo $row['contact']; ?></td>
                    </tr>
                    <tr>
                      <td>Type </td> <td><?php echo $row['type']; ?></td>
                    </tr>
                    <tr>
                      <td>Year </td> <td><?php echo $row['year_level']; ?></td>
                    </tr>
                    <tr>
                      <td>Status </td> <td><?php echo $row['status']; ?></td>
                    </tr>
									<?php  }  ?>

                                </tbody>
                            </table>


			</div>
			</div>
		</div>
    </div>
<?php include('footer.php') ?>
