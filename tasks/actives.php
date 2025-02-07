<?php $activeTasks = $data[0]; $activeTask = $data[1]; $usertype=$_SESSION['user']['usertype']; ?>

<div class="card shadow-sm bg-dark tab-card">
    <div class="card-body">
        <?php if($usertype == 1): ?>
            <?php if(!empty($activeTasks)): ?>
                <?php foreach ($activeTasks as $a): ?>
                    <div class="card m-3">
                        <div class="card-body text-dark">
                            <h5><?=$a['title']?></h5>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    
                                </div>
                                <div class="col-sm-6">
                                    
                                </div>
                            </div>
                            
                            
                            
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="card m-3">
                    <div class="card-body text-dark">
                        <h5>There are no active tasks.</h5>
                    </div>
                </div>
            <?php endif; ?>
        <?php else: ?>
            <div class="card m-3">
                <div class="card-body text-dark">

                    <?php if(!empty($activeTask)): ?>
                        <div class="d-flex">
                            <h5><?=$activeTask['title']?></h5><span class="ms-auto text-success">$<?=$activeTask['price']?></span>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-6">
                                <strong>Company:</strong> <span><?=$activeTask['company']?></span><br>
                                <strong>Requested by </strong><span><?=$activeTask['name']?></span><br>
                                <strong>Contact: </strong><span><?=$activeTask['contact']?></span><br>
                                <strong>E-mail: </strong><span><?=$activeTask['email']?></span><br>
                            </div>
                            <div class="col-sm-6">
                                <strong>Requested on </strong><span><?=date("F j, Y, g:i a",strtotime($activeTask['created_on']))?></span><br>
                                <?php $newdate = new DateTime($activeTask['started_on']);
                                    $deadline = "";
                                    if(isset($activeTask['days']) && $activeTask['days'] != ''){
                                        $newdate->modify('+'.$activeTask['days'].' day');
                                        $deadline = $newdate->format("F j, Y, g:i a");
                                    }else{
                                        $deadline = date("F j, Y, g:i a",strtotime($activeTask['deadline']));
                                    }
                                    
                                    ?>
                                <span><strong>Deadline:</strong> <?=$deadline?></span>
                            </div>
                        </div>
                        <hr>
                        <p class="active-desc"><?=htmlspecialchars_decode($activeTask['description'])?></p>
                        
                    <?php else: ?>
                        <h5>You have no ongoing tasks.</h5>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>