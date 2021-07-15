<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Contact</th>
                <th>Flat No:</th>
                <th>Title</th>
                <th>Discription</th>
                <th>Edit</th>
                <th>Delete</th>
                
               
            </tr>
        </thead>
        <tbody>
            <?php if(!empty($data)): ?>
            <?php foreach($data as $report): ?>
            <tr>
            <td><?php echo ucwords($report->name); ?></td>
            <td><?php echo $report->contact; ?></td>
            <td><?php echo $report->flat_no; ?></td>
            <td><?php echo ucwords($report->title); ?></td>
            <td><?php echo ucwords($report->description); ?></td>
            <td><a href="<?php echo BASEURL; ?>/profile/report_feedback/<?php echo $report->id; ?>" class="btn btn-warning">Feedback</a></td>
            <td><a href="<?php echo BASEURL; ?>/profile/status/<?php echo $report->id; ?>" class="btn btn-danger">Status</a></td>
            
            
            </tr>
            <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </tfoot>
    </table>