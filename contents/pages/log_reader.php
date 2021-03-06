<div class="row logs-list" data-rows=<?= $menu_items[$logic]["count"] ?>>
    <div class="col s12">
        <h5><?= $menu_items[$logic]["title"] ?></h5>

        <?php foreach ($menu_items[$logic]["logs"] as $time => $log) { ?>
            <div class="card grey lighten-3">
                <div class="card-content">
                    <div class="card-body">
                        <span class="card-title"><?= $time ?></span>
                        <pre><?= implode($log, "<br>") ?></pre>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<div class="fixed-action-btn">
    <a class="btn-floating btn-large <?= $colors["default"] ?> darken-2">
        <i class="large material-icons">menu</i>
    </a>
    <ul>
        <li>
            <a class="btn-floating green darken-2 viewLink" href="file:///<?= $menu_items[$logic]['file'] ?>" target="_blank">
                <i class="material-icons tooltipped" data-position="left" data-delay="50" data-tooltip="Open this log file">visibility</i>
            </a>
        </li>
        <li>
            <a class="btn-floating red truncateLink" href="ajax.php?action=truncate&amp;logFile=<?= $menu_items[$logic]['file'] ?>">
                <i class="material-icons tooltipped" data-position="left" data-delay="50" data-tooltip="Truncate this log file">delete_sweep</i>
            </a>
        </li>
    </ul>
</div>
