<form method="post" action="http://www.ipage.com/scripts/formemail.bml" id="contact_form" class="form-horizontal">
    <input type="hidden" name="subject" value="LCFJobs Contact Form">
    <input type="hidden" name="my_email" value="info@lcfjobs.com">
    <div class="form-group">
        <label class="control-label" for="firstname">First Name</label>
        <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name" required>
    </div>
    <div class="form-group">
        <label class="control-label" for="lastname">Last Name</label>
        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name" required>
    </div>
    <div class="form-group">
        <label class="control-label" for="email_input">Email address</label>
        <input type="email" class="form-control" name="email_input" id="email_input" placeholder="Email" required>
    </div>
    <div class="form-group">
        <label class="control-label" for="comment_input">Comment</label>
        <textarea type="text" class="form-control" name="comment_input" id="comment_input"
                  placeholder="Type your message here" rows="10" required></textarea>
    </div>
    <button type="submit" name="send_email" class="btn btn-block">Send</button>
</form>
