<?php include('header.php'); ?>

<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Contact
                <hr>
            </h1>
        </div>
    </div>
    <!-- /.row -->

    <!-- Content Row -->
    <div class="row">
        <!-- Map Column -->
        <div class="col-md-8">
            <form name="sentMessage" id="contactForm" novalidate>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Full Name:</label>
                        <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Email Address:</label>
                        <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Message:</label>
                        <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                    </div>
                </div>
                <div id="success"></div>
                <!-- For success/fail messages -->
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
        </div>
        <!-- Contact Details Column -->
        <div class="col-md-4">
            <h3>Adresses</h3>
            <p>
                Yoff tonghor Dakar<br>800000<br>
            </p>
            <p><i class="fa fa-phone"></i>
                <abbr title="Phone">Tel</abbr>: (221) 77 299 68 38</p>
            <p><i class="fa fa-envelope-o"></i>
                <abbr title="Email">E</abbr>: <a href="mailto:name@example.com">contact@example.com</a>
            </p>
        </div>
    </div>
    <!-- /.row -->
    <hr>

</div>
<!-- /.container -->
<?php include('footer.php'); ?>
