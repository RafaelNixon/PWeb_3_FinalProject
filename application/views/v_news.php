<div class="container">
    <!-- <div class="row"> -->
    <div class="row news">
        <?php $index = 0;
        foreach($news as $n) { 
            $index++;?>

        <a draggable="false" href="#news_content_<?php echo $index; ?>" data-toggle="modal"
            data-target="#news_content_<?php echo $index; ?>">
            <div
                class="news-item col-lg-5 col-md-5 col-sm-12 col-xs-12 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1 row">
                <div class="news-title col-md-12 col-sm-12 col-xs-12">
                    <?php echo $n->news_title; ?>
                </div>
                <div class="news-date col-md-8 col-sm-8 col-xs-8">
                    <?php echo str_replace(" ", " | ", $n->news_published); ?>
                </div>
                <div class="news-content-mini col-md-12 col-sm-12 col-xs-12">
                    <img draggable="false" style="max-width: 100%;min-height:255px;object-fit: cover;"
                        src="<?php echo base_url('images'); ?>/<?php echo $n->news_img; ?>">
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <br>
                </div>
            </div>
        </a>

        <div id="news_content_<?php echo $index; ?>" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">
                            <?php echo $n->news_title; ?>
                        </h4>
                    </div>
                    <div class="modal-body">
                        <img draggable="false" style="max-width: 100%;min-height:255px;object-fit: cover;"
                            src="<?php echo base_url('images'); ?>/<?php echo $n->news_img; ?>">
                        <p>
                            <?php
                                echo str_replace("\n", "<br>", $n->news_content);
                            ?>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>

        <?php } ?>
    </div>
    <!-- </div> -->
</div>