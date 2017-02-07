<?php 
$section = "photos";
include 'inc/header.php'; ?>

<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Next
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
	<div id="links">
        <div class="row">
            <div class="col-md-10 col-offset-2">
        	    <a href="img/poto/1.jpg" title="Production Photos by Rosemary Malecki" data-gallery>
        	        <img src="img/poto/tmb-1.jpg" alt="">
        	    </a>
        	    <a href="img/poto/2.jpg" title="Production Photos by Rosemary Malecki" data-gallery>
        	        <img src="img/poto/tmb-2.jpg" alt="">
        	    </a>
        	    <a href="img/poto/3.jpg" title="Production Photos by Rosemary Malecki" data-gallery>
        	        <img src="img/poto/tmb-3.jpg" alt="">
        	    </a>
                <a href="img/poto/4.jpg" title="Production Photos by Rosemary Malecki" data-gallery>
                    <img src="img/poto/tmb-4.jpg" alt="">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-offset-2">
                <a href="img/poto/5.jpg" title="Production Photos by Rosemary Malecki" data-gallery>
                    <img src="img/poto/tmb-5.jpg" alt="">
                </a>
                <a href="img/poto/6.jpg" title="Production Photos by Rosemary Malecki" data-gallery>
                    <img src="img/poto/tmb-6.jpg" alt="">
                </a>
                <a href="img/poto/7.jpg" title="Production Photos by Rosemary Malecki" data-gallery>
                    <img src="img/poto/tmb-7.jpg" alt="">
                </a>
                <a href="img/poto/8.jpg" title="Production Photos by Rosemary Malecki" data-gallery>
                    <img src="img/poto/tmb-8.jpg" alt="">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-offset-2">
                <a href="img/poto/9.jpg" title="Production Photos by Rosemary Malecki" data-gallery>
                    <img src="img/poto/tmb-9.jpg" alt="">
                </a>
                <a href="img/poto/10.jpg" title="Production Photos by Rosemary Malecki" data-gallery>
                    <img src="img/poto/tmb-10.jpg" alt="">
                </a>
                <a href="img/poto/11.jpg" title="Production Photos by Rosemary Malecki" data-gallery>
                    <img src="img/poto/tmb-11.jpg" alt="">
                </a>
                <a href="img/poto/12.jpg" title="Production Photos by Rosemary Malecki" data-gallery>
                    <img src="img/poto/tmb-12.jpg" alt="">
                </a>
            </div>
        </div>
	</div>
</div>
<?php include 'inc/footer.php'; ?>