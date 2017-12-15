<div class="col-md 12" style="text-align: center;">
    <h2> <?= $title ?> </h2>
</div>

<div class="row detail" style="text-align: center;margin-left: 140px; ">
    <div class="col-md-10 offset-1">
        <table class="table table-hover table-responsive table-striped table-bordered">
            <thead style="background-color: #365D67;">
            <tr>
                <th >
                    Employee Name
                </th>

                <th>
                    Employee NIC
                </th>
                <th>
                    Occupation
                </th>
                <th>
                </th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td>
                        <?php echo $user['employee_firstname'] ?>  <?php echo $user['employee_lastname'] ?>
                    </td>

                    <td>
                        <?php echo $user['employee_NIC'] ?>
                    </td>
                    <td>
                        <?php echo $user['employee_occupation'] ?>
                    </td>
                    <td>

                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>
</table>
