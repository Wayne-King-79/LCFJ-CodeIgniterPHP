<p id="button_paragraph">Use the buttons below to switch between map and table view.</p>
<div id="jobs_views_button" class="btn-group" data-toggle="buttons">
    <label class="btn btn-primary" id="map_button">
        <input id="map_input" type="checkbox" autocomplete="off" checked>Map
    </label>
    <label class="btn btn-primary" id="table_button">
        <input id="table_input" type="checkbox" autocomplete="off">Table
    </label>
</div>
<table id="job_table" class="table table-striped table-bordered datatables">
    <thead>
    <tr>
        <th class="sort-column">Date Posted</th>
        <th class="sort-column">City</th>
        <th class="sort-column">Company</th>
        <th class="sort-column">Job Description</th>
    </tr>
    </thead>
    <?php
    if ((sizeof($jobs)) > 0) {
        foreach ($jobs as $job):
            echo "<tr><td>" . $job->date . "</td>";
            echo "<td>" . $job->city . "</td>";
            echo "<td>" . $job->company . "</td>";
            echo "<td>" . $job->description . "</td></tr>";
        endforeach;
    } else {
        echo count($jobs) . " results were found.";
    }
    ?>
</table>

<?php echo $map['js']; ?>
<?php echo $map['html']; ?>
