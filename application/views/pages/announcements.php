<table id="announcements_table" class="table table-striped table-bordered datatables">
    <thead>
    <tr>
        <th class="sort-column">Date Posted</th>
        <th class="sort-column">Title</th>
        <th class="sort-column">Announcement</th>
    </tr>
    </thead>
    <?php
    if ((sizeof($jobs)) > 0) {
        foreach ($jobs as $announce):
            echo "<tr><td>" . $announce->date_posted . "</td>";
            echo "<td>" . $announce->title . "</td>";
            echo "<td>" . $announce->description . "</td>";
        endforeach;
    } else {
        echo count($jobs) . " results were found.";
    }
    ?>
</table>