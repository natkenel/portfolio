<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="blue modal-title">Contact Me</h4>
			</div>
			<div class="modal-body">
				<form method="post" id="myForm" action="email.php">
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<div id='Fname_error' class='error'>Please enter your First name.</div>
							<input type="text" name="Fname" id='Fname' class="form-control" placeholder="First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<div id='Lname_error' class='error'>Please enter your last name.</div>
							<input type='text' name='Lname' id='Lname' class="form-control" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<div id='email_error' class='error'>Please enter a valid E-mail address.</div>
							<input type='text' name='email' id='email' class="form-control" placeholder="E-mai" onfocus="this.placeholder = ''" onblur="this.placeholder = 'E-mail'">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<div id='message_error' class='error'>Please enter your message.</div>
							<textarea name='message' id='message' class="form-control" rows="8" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
							<div id='success' class='success'>Thank you. I will contacty you soon.</div>
							<div id='mail_fail' class='error'>Sorry, there was an issue connecting to the server. Try again later.</div>
							<input type='submit' id='send_message' class="cstm-button" value="Send">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>