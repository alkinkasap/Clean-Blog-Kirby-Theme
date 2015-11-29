
 <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="<?php echo $site->twitter() ?>">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $site->facebook() ?>">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $site->github() ?>">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <div class="copyright text-muted"><?php echo $site->copyright()->kirbytext() ?></div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <?php echo js("assets/js/jquery.js") ?>

    <!-- Bootstrap Core JavaScript -->
    <?php echo js("assets/js/bootstrap.min.js") ?>

    <!-- Custom Theme JavaScript -->
    <?php echo js("assets/js/clean-blog.min.js") ?>

</body>

</html>