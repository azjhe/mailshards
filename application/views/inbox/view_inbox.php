<table class="table table-sm table-hover">
    <tbody>

        <?php foreach ($data['inboxData']->result() as $row) : ?>
                <tr <?php echo ($row->isread == 0 ? "style='font-weight:bold'" : "");?>>
                    <td><?php echo $row->subject; ?></a>
                    <td><?php echo truncate_text($row->content); ?></td>
                    <td><?php echo $row->dateadded; ?></td>
                </tr>
        <?php endforeach; ?>

    </tbody>
</table>
