<div style="" class="debugContainer">
    <div>{{{content}}}</div>
    <div style="clear:both"></div>

    <div class="debugContainer-content" onmouseover="$(this).css('z-index', 2000) ; $(this).find('> code').show()" onmouseout="$(this).css('z-index', 1000); $(this).find(' > code').hide()">
        <div class="debugContainer-caption" style="">{{{componentClassName}}}</div>
        <code style="">
            <div>Instance ID : {{{instanceID}}}</div>
            <div>Element ID : {{{elementID}}}</div>
            <pre>{{{variables}}}</pre>
            <textarea>
                {{{componentOutput}}}
            </textarea>
        </code>
    </div>'
</div>