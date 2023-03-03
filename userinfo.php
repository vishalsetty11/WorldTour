<?php
$user=$_POST['user'];
$email=$_POST['email'];
$phno=$_POST['phno'];
$comment=$_POST['comment'];
$conn=new mysqli('localhost','root','','userdata');
if($conn->connect_error){
	die("Not Connected:".$conn->connect_error());
}
else
{
	$stmt=$conn->prepare("insert into userinfodata(user,email,phno,comment)values(?,?,?,?)");
	$stmt->bind_param("sssi",$user,$email,$phno,$comment);
	$stmt->execute();
	echo'<script>alert("Registration successful")</script>';
		/* echo'<div class="modal" tabindex="-1">
			<div class="modal-dialog">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Alert!</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<p>Registration successful.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
				</div>
			</div>
		</div>'; */

	$stmt->close();
	$conn->close();
}
?>