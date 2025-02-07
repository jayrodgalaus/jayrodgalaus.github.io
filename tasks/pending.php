<?php $pendingTasks = $data; $usertype=$_SESSION['user']['usertype']; ?>
    <div class="card shadow-sm bg-dark tab-card">
        <div class="card-body">
            <?php if($usertype == 1 && !empty($pendingTasks)): ?>
                <?php foreach ($pendingTasks as $a): ?>
                    <div class="card m-3">
                        <div class="card-body text-dark">
                            <h5><?=$a['title']?></h5>
                            <hr>
                            <span class="float-end text-success">$<?=$a['price']?></span>
                            <p class="active-desc"><?=$a['description']?></p>
                            <span class="text-muted fw-bold">Submitted by <?=$a['fullname']?> on <?=date("F j, Y, g:i a",strtotime($a['submitted_on']))?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php elseif($usertype == 2 && !empty($pendingTasks)): ?>
                <?php foreach ($pendingTasks as $a): ?>
                    <div class="card m-3">
                        <div class="card-body text-dark">
                            <h5><?=$a['title']?></h5>
                            <hr>
                            <span class="float-end text-success">$<?=$a['price']?></span>
                            <p class="active-desc"><?=$a['description']?></p>
                            <span class="text-muted fw-bold">Submitted by <?=$a['fullname']?> on <?=date("F j, Y, g:i a",strtotime($a['submitted_on']))?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="card m-3">
                    <div class="card-body text-dark">
                        <h5>There are no pending tasks.</h5>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
