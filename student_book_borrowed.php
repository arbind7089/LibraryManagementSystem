<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">
				<div class="span12">
						<div class="alert alert-danger"><strong>Books Borrowed</strong></div>
                            <table id="student">
                                <thead>
                                    <tr>
                                        <th style="margin-right:30px;">Book title</th>
                                        <th style="margin-right:30px;">Year Level</th>
                                        <th style="margin-right:30px;">Date Borrow</th>
                                        <th style="margin-right:30px;">Due Date</th>
                                        <th style="margin-right:30px;">Date Returned</th>
                                        <th style="margin-right:30px;">Fine</th>

                                    </tr>
                                </thead>
                                <tbody>

                                  <?php
$con = mysqli_connect('localhost','root','', 'lms')or die(mysqli_error());
                                  $user_query=mysqli_query($con, "select * from borrow
								LEFT JOIN member ON borrow.member_id = member.member_id
								LEFT JOIN borrowdetails ON borrow.borrow_id = borrowdetails.borrow_id
								LEFT JOIN book on borrowdetails.book_id =  book.book_id
								where borrowdetails.borrow_status = 'pending' AND borrow.member_id ='".$_SESSION['id']."' ORDER BY borrow.borrow_id DESC
								  ")or die(mysqli_error());
									while($row=mysqli_fetch_array($user_query)){
									$id=$row['borrow_id'];
									$book_id=$row['book_id'];
									$borrow_details_id=$row['borrow_details_id'];

									?>
									<tr class="del<?php echo $id ?>">


                                    <td><?php echo $row['book_title']; ?></td>
                                    <td><?php echo $row['year_level']; ?></td>
									<td><?php echo $row['date_borrow']; ?></td>
                                    <td><?php echo $row['due_date']; ?> </td>
									<td><?php echo $row['date_return']; ?> </td>
                  <td>Rs. <?php echo $row['fine']; ?> </td>

                                    </tr>
									<?php  }  ?>
                                </tbody>
                            </table>


			</div>

<script>
$(".uniform_on").change(function(){
    var max= 3;
    if( $(".uniform_on:checked").length == max ){

        $(".uniform_on").attr('disabled', 'disabled');
		         alert('3 Books are allowed per borrow');
        $(".uniform_on:checked").removeAttr('disabled');

    }else{

         $(".uniform_on").removeAttr('disabled');
    }
})
</script>
			</div>
		</div>
    </div>
<?php include('footer.php') ?>
