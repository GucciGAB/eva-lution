<?php
include "handlers/questionnaire_handler.php";

?>
<nav class="main-header">
    <div class="col-lg-12 mt-3">
        <div class="card card-outline card-success">
            <div class="card-header mt-4">
                <div class="card-tools">
                    <a class="btn btn-block btn-sm btn-default btn-flat border-primary new_academic"
                        href="manage_questionnaire_academic.php"><i class="fa fa-plus"></i> Add New</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="list">
                        <colgroup>
                            <col width="5%">
                            <col width="35%">
                            <col width="15%">
                            <col width="15%">
                            <col width="15%">
                            <col width="15%">
                        </colgroup>
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Academic Year</th>
                                <th>Semester</th>
                                <th>Questions</th>
                                <th>Ordered by</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($questions as $row): ?>
                                <tr>
                                    <th class="text-center"><?php echo $i++; ?></th>
                                    <td><b><?php echo htmlspecialchars($row['academic_id']); ?></b></td>
                                    <td><b><?php echo htmlspecialchars("semester"); ?></b></td>
                                    <td><b><?php echo htmlspecialchars($row['question']); ?></b></td>
                                    <td><b><?php echo htmlspecialchars($row['faculty_order_by']); ?></b></td>

                                    
                                    <td class="text-center">
                                        <button type="button"
                                            class="btn btn-default btn-sm btn-flat border-info wave-effect text-info dropdown-toggle"
                                            data-toggle="dropdown" aria-expanded="true">
                                            Action
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item"
                                                href="manage_questionnaire.php"">Edit</a>
                                            <div class="dropdown-divider"></div>
                                            <form method="post" action="student_list.php" style="display: inline;">
                                                <input type="hidden" name="delete_id"
                                                    value="<?php echo isset($row['student_id']) ? $row['student_id'] : ''; ?>">
                                                <button type="submit" class="dropdown-item"
                                                    onclick="return confirm('Are you sure you want to delete this student member?');">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</nav>