<?php

?>

<?php wp_footer(); ?>

 <!-- SIGN UP
    ==========================================================-->
    <section id="signup" data-type="background" data-speed="4">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 offset-sm-3">
                    <h2>Are you ready to take your coding skill to the <strong>next level</strong>?</h2>
                    <p><a href="#" class="btn btn-lg btn-block btn-success">Yes, sign me up!</a></p>
                </div>
            </div>
        </div>

    </section>

    <!-- FOOTER
    ==========================================================-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <p><a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="Bootstrap to WordPress"></a></p>
                </div>
                <div class="col-sm-6">
                    <nav>
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item"><a href="/">Home</a></li>
                            <li class="list-inline-item"><a href="/blog">Blog</a></li>
                            <li class="list-inline-item"><a href="">Resources</a></li>
                            <li class="list-inline-item"><a href="">Contact</a></li>
                            <li class="list-inline-item signup-link"><a href="">Sign up now</a></li>
                        </ul>
                    </nav>
                </div>
                    <div class="col-sm-3 float-sm-right">
                        <p>&copy; 2018 Andrea Jasper</p>
                    </div>
                </div>
            </div>
    </footer>

    <!-- MODAL
    ==========================================================-->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel"><i class="fas fa-envelope"></i> Subscribe to our Mailing List</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Simply enter your name and email! As a thank you for joining us, we're going to give you one of our best-selling courses, <em>for free!</em></p>
                        <form class="form-inline">
                            <label class="sr-only" for="subscribe-name">Your first name</label>
                            <input type="text" class="form-control mb-2 mr-sm-2" id="subscribe-name" placeholder="Your first name">
                        
                            <label class="sr-only" for="subscribe-email">and your email</label>
                            <input type="email" class="form-control mb-2 mr-sm-2" id="subscribe-email" placeholder="and your email">
                        
                            <button type="submit" class="btn btn-danger mb-2">Subscribe!</button>
                        </form>
                        <hr>
                        <p><small class="text-muted">By providing your email you consent to receiving occassional promotional emails &amp; newsletters. <br>No Spam. Just good stuff. We respect your privacty &amp; you may unsubscribe at any time.</small></p>
                </div>
            </div>
        </div>
    </div>

<!-- BOOTSTRAP CORE JAVASCRIPT
    ==========================================================-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

</body>
</html>
