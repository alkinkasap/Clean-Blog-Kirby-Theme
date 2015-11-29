<?php snippet('header') ?>

<article>
    <div class="container project">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

        	<?php echo $page->text()->kirbytext() ?>

        	</div>

	    	<hr>

	    	<?php snippet('posts') ?>

	    	
        
        </div>
    </div>
</article>

<?php snippet('footer') ?>