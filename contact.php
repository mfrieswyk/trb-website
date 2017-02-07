<?php 
$section = "contact";
include 'inc/header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <h1>Contact</h1>
            <p>I&rsquo;d love to hear from you! Complete the form to send me an email.</p>
                <form method="POST" action="//formspree.io/trbindhoff@hotmail.com">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" type="text" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" type="email" name="_replyto" id="email">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" name="message" id="message"></textarea>
                    </div>
                    <input class="btn btn-default" type="submit" value="Send">
                </form>
        </div>
    </div>
</div>
<br>
<br>

<?php include 'inc/footer.php'; ?>