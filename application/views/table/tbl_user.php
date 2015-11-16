
    <table  id="sample-table2" class="table table-hover tablesorter" >
        <thead>
            <tr align="center">
                <th>Nº</th>
                <th>Fullname</th>
                <th>Gender</th>
                <th>User Name</th>
                <th>Password</th>
                <th>Visible</th>
                <th>Level</th>
                <th>Access Type</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $i=1;
            if(isset($us_dt)):
            foreach($us_dt as $k=>$v): ?>
            <tr align="center">
                <td><?=$i++;?></td>
                <td><?php echo $v['us_fullname']; ?></td>
                <td><?php echo $v['us_gender']; ?></td>
                <td><?php echo $v['us_name']; ?></td>
                <td>*****</td>
                <td><?php echo $v['us_status']==1 ? '<span class="fa fa-eye"></span>':'<span class="fa fa-eye-slash"></span>' ?></td>
                <td><?php echo $v['us_level']; ?></td>
                <td><?php echo $v['us_type']; ?></td>
                <td>  <a href="<?=base_url('user/edit_user/'.$v['us_id'])?>" id="edit"><span class="fa fa-edit" aria-hidden="true"></span> Edit</a></td>
            </tr>
            <?php endforeach;
                endif;
            ?>
        </tbody>
    </table>



    <script>

        $(function() {
            $('#sample-table2').tablesorter();
        });
    </script>

