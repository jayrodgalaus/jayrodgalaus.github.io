<?php $completedTasks = $data; $usertype=$_SESSION['user']['usertype']; ?>
<div class="card shadow-sm bg-dark tab-card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-4">
                <?php if($usertype == 1 && !empty($completedTasks)): ?>
                    <?php foreach ($completedTasks as $a): ?>
                        <div class="card m-3">
                            <div class="card-body text-dark">
                                <h5><?=$a['title']?></h5>
                                <hr>
                                <span class="float-end text-success">$<?=$a['price']?></span>
                                <p class="active-desc"><?=$a['description']?></p>
                                <span class="text-muted fw-bold">Submitted by <?=$a['fullname']?> on <?=date("F j, Y, g:i a",strtotime($a['submitted_on']))?></span><br>
                                <span class=" fw-bold text-danger">
                                    <?= $a['paid'] == 0 ? "This task is completed. Please pay the developer!":"" ?>
                                </span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php elseif ($usertype == 2 && !empty($completedTasks)): ?>
                    <?php foreach ($completedTasks as $a): ?>
                        <div class="card m-3">
                            <div class="card-body text-dark">
                                <h5><?=$a['title']?></h5>
                                <hr>
                                <span class="float-end text-success">$<?=$a['price']?></span>
                                <p class="active-desc"><?=$a['description']?></p>
                                <span class="text-muted fw-bold">Submitted by <?=$a['fullname']?> on <?=date("F j, Y, g:i a",strtotime($a['submitted_on']))?></span><br>
                                <span class=" fw-bold text-danger">
                                    <?= $a['paid'] == 0 ? "This task is completed. Please pay the developer!":"" ?>
                                </span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="card m-3">
                        <div class="card-body text-dark">
                            <h5>There are no completed tasks.</h5>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>