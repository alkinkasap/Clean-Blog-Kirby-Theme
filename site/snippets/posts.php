
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <?php foreach(page('posts')->children()->visible() as $post): ?>
                <div class="post-preview">
                    <a href="post.html">
                <hr>
                        <h1 class="post-title">
                            <a href="<?php echo $post->url() ?>"><?php echo $post->title()->html() ?></a>
                        </h1>
                        <h4 class="post-subtitle">
                            <?php echo $post->text()->excerpt(60) ?>
                        </h4>
                        <p class="post-meta">Posted on <?php echo $post->date('d-m-Y') ?></p>
                    </a>
                </div>
                <?php endforeach ?>

                <!-- Pager 
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>-->
            </div>
        </div>
    </div>
    <hr>