<div class="col-md-4 col-sm-6 col-xs-12">
    <article class="material-card Red">

        <?php echo '<'.$titleTag.'>';?>


                <span>{{{title}}}</span>
                <strong>
                    <i class="fa fa-fw fa-star"></i>
                    {{{subTitle}}}
                </strong>
        <?php echo '</'.$titleTag.'>';?>


        <div class="mc-content">
            <div class="img-container">
                <img class="img-responsive" src="{{{image}}}">
            </div>
            <div class="mc-description">
                {{{description}}}
            </div>
        </div>
        <a class="mc-btn-action">
            <i class="fa fa-bars"></i>
        </a>
        <div class="mc-footer">
            {{{footer}}}
        </div>
    </article>
</div>