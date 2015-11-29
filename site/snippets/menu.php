            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <?php foreach($pages->visible() as $p): ?>
                    <li>
                        <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
                    </li>
                    <?php endforeach ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>