<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar.php'); ?>
<br/>

</br/>
    <div class="container">
		<div class="margin-top">
			<div class="row">
				<div class="span12">
						<div class="alert alert-danger"><strong>Borrowed Books</strong></div>
                            <table cellpadding="0" cellspacing="0" border="0" class="table" id="student">

                                <thead>
                                    <tr>
                                        <th>Book title</th>
                                        <th>Borrower</th>
                                        <th>Year Level</th>
                                        <th>Date Borrow</th>
                                        <th>Due Date</th>
                                        <th>Date Returned</th>
										<th>Borrow Status</th>
                    <th>Fine</th>
                    <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                  <?php
$con = mysqli_connect('localhost','root','', 'lms')or die(mysqli_error());
                                  $user_query=mysqli_query($con, "select * from borrow
								LEFT JOIN member ON borrow.member_id = member.member_id
								LEFT JOIN borrowdetails ON borrow.borrow_id = borrowdetails.borrow_id
								LEFT JOIN book on borrowdetails.book_id =  book.book_id
                WHERE borrowdetails.borrow_status !='returned'
								ORDER BY borrow.borrow_id DESC
								  ")or die(mysqli_error());
									while($row=mysqli_fetch_array($user_query)){
									$id=$row['borrow_id'];
									$book_id=$row['book_id'];
									$borrow_details_id=$row['borrow_details_id'];

									?>
									<tr class="del<?php echo $id ?>">


                                    <td><?php echo $row['book_title']; ?></td>
                                    <td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
                                    <td><?php echo $row['year_level']; ?></td>
									<td><?php echo $row['date_borrow']; ?></td>
                                    <td><?php echo $row['due_date']; ?> </td>
									<td><?php echo $row['date_return']; ?> </td>
                  <td><?php echo $row['borrow_status'];?></td>
									<td><?php if(isset($row['fine'])){ echo 'Rs. ';}; echo $row['fine'];?></td>
									<td> <a rel="tooltip"  title="Return" id="<?php echo $borrow_details_id; ?>" href="#delete_book<?php echo $borrow_details_id; ?>" data-toggle="modal"    class="btn-default">Return</a>
                                    <?php include('modal_return.php'); ?>
&nbsp;| &nbsp;
                                    <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>" href="#delete_student<?php echo $id; ?>" data-toggle="modal"    class="btn-default">
                                      Add Fine</a>
                                    <?php include('add_fine_modal.php'); ?>

</td>
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
