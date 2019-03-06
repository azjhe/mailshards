
<div class="row">
    <div class="col">
        <div class="card card-small mb-4">
            <div class="card-body p-0 pb-3">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Contact</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data['contacts']->result() as $row) : ?>

                            <tr>
                                <td><?php echo $row->name; ?></td>
                                <td><?php echo $row->email; ?></td>
                                <td><?php echo $row->address; ?></td>
                                <td><?php echo $row->contactno; ?></td>
                            </tr>

                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
