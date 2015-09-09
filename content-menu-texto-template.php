<?php $select = wp_side_comments_get_toc(get_the_content()); ?>
<div class="menu-topo-mc">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-sm">
                <?= $select ?>
            </div>
            <div class="col-md-3 mt-sm">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Busque na página">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </div>
            <div class="col-md-3 mt-sm">
                <div class="btn-group" role="group" aria-label="...">
                    <button type="button" class="btn btn-default"><i class="fa fa-chevron-left"></i></button>
                    <button type="button" class="btn btn-default" disabled="disabled" data-toggle="tooltip"
                            data-placement="bottom" title="Resultado da busca">0 de 0
                    </button>
                    <button type="button" class="btn btn-default"><i class="fa fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>