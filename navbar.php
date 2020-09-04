      <div class="navbar navbar-fixed-top nav-wrapper">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="nav-collapse collapse">
					<ul class="nav">
					<li><a href="dashboard.php"></i>&nbsp;Home</a></li>
          <?php if(isset($_SESSION['role']) && ($_SESSION['role'] == 'admin')) {?>
            <?php include('dropdown.php');?>
            <li><a href="books.php">&nbsp;Books</a></li>
  					<li><a href="student.php"></i>&nbsp;Students</a></li>
          <?php } else {?>
              <li><a href="studentProfile.php"></i>&nbsp;Profile</a></li>
              <li><a href="student_book_borrowed.php"></i>&nbsp;Book Borrowed</a></li>
          <?php }?>
					</ul>
					 <div class="pull-right">
						<div class="admin"><a href="#logout" data-toggle="modal"></i>&nbsp;Logout</a></div>
                     </div>
                    </div>
                </div>
            </div>
        </div>
