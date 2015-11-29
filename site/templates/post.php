<?php snippet('header-post') ?>



<!-- Post Content -->
    <article>
        <div class="container project">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                  <?php echo $page->text()->kirbytext() ?>




                    <hr>


                    <ul class="pager">
                      <?php if($next = $page->nextVisible()): ?>
                      <li class="next">
                          <a href="<?php echo $next->url() ?>">Previous Post &rarr;</a>
                      </li>
                    <?php endif ?>
                      <?php if($prev = $page->prevVisible()): ?>
                      <li class="prev">
                          <a href="<?php echo $prev->url() ?>">&larr; Next Posts</a>
                      </li>
                      <?php endif ?>
                    </ul>









                </div>
            </div>
        </div>




    </article>















<?php snippet('footer') ?>