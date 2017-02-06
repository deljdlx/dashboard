<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#complete-dialog">Open dialog</button>

<div id="complete-dialog" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">{{{title}}}</h4>
            </div>
            <div class="modal-body"> {{{content}}}</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">{{{closeButtonCaption}}}</button>
            </div>
        </div>
    </div>
</div>