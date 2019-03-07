<table class="table table-sm table-hover">
    <tbody>

        <?php if ($data['inboxData']->num_rows() > 0) : ?>
            <?php foreach ($data['inboxData']->result() as $row) : ?>
                    <tr style=" cursor:pointer; <?php echo ($row->isread == 0 ? 'font-weight:bold' : '');?>" onclick="readMessage(<?php echo $row->id;?>)">
                        <td><?php echo $row->name; ?></td>
                        <td><?php echo truncate_text($row->content); ?></td>
                        <td><?php echo $row->dateadded; ?></td>
                    </tr>
            <?php endforeach; ?>
        <?php endif; ?>

    </tbody>
</table>

<script>

function readMessage(id)
{
    window.location.href="<?php echo base_url('inbox/read/')?>" + id;
}

</script>
