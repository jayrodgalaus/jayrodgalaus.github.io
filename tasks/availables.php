<?php 
// require 'func'
$available = $data[0]; $activeTask=$data[1]; $usertype=$_SESSION['user']['usertype']; 

?>

<div class="card shadow-sm bg-dark tab-card">
    <div class="card-body">
        
        <div class="row">
            <div class="col-lg-7 item-list" id="availableList">
                <div class="d-flex w-100 mb-2">
                    <button class="btn btn-sm btn-secondary ms-auto btn-filter">
                        <i class="fa-solid fa-filter"></i>
                    </button>
                </div>
                <div class="mb-3 filter d-none" id="availableFilters">
                    <b>Filters</b><br>
                    <b>Order by</b>
                    <div class="d-flex">
                        <select class="form-control form-control-sm me-2 sort-by" >
                            <option value="title">Title</option>
                            <option value="deadline">Deadline</option>
                            <option value="duration">Duration</option>
                            <option value="price">Price</option>
                            <option value="requestdate" selected>Request Date</option>
                        </select>
                        <select class="form-control form-control-sm order-by">
                            <option value="ascending" selected>Ascending (A to Z)</option>
                            <option value="descending">Descending (Z to A)</option>
                        </select>
                    </div>
                    
                </div>
                <?php if(!in_array(1, array_column($available, 'type'))): ?>
                    <p class="active-desc">No tasks available</p>
                <?php endif; ?>
                <div class="list-container" id="availableListContainer">
                <?php foreach ($available as $v): ?>
                    <div class="card my-1 item-desc" 
                    data-title="<?=$v['title']?>" 
                    data-requestor="<?=$v['name']?>" 
                    data-requestdate = "<?=$v['created_on']?>" 
                    data-price = "<?=$v['price']?>" 
                    data-duration="<?=$v['days']?>" 
                    data-deadline="<?=$v['deadline']?>" 
                    data-desc="<?=$v['description']?>"
                    data-company="<?=$v['company']?>">
                        <div class="card-body text-dark">
                            <?php if($usertype == 2 && empty($activeTask)): ?>
                                <div class="btn btn-sm btn-dark float-end mx-1" data-id="<?=$v['id']?>">Accept</div>
                            <?php endif; ?>
                            <div class="view-desc btn btn-dark btn-sm float-end mx-1 d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDetails" aria-controls="offcanvasDetails">View</div>
                            <h5><?=$v['title']?></h5>
                            <span class="view-desc lg-d-inline sm-d-none xs-d-none"><u>View description</u></span>
                            <span class=" lg-d-inline sm-d-none xs-d-none">●</span>
                            <span><?= $v['days'] > 0 ? $v['days']." day(s) duration ●" : "" ?></span>
                            
                            <span><?=isset($v['deadline']) ? "Deadline on ".date("M j, Y H:i",strtotime($v['deadline'])):"No deadline" ?></span>
                            <span class="float-end">$<?=$v['price']?></span>
                            
                        </div>
                    </div>
                    
                <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-5" id="cardDetails">
                <div class="offcanvas-lg offcanvas-end text-dark bg-light lg-p-3" tabindex="-1" id="offcanvasDetails" aria-labelledby="offcanvasResponsiveLabel">
                  <div class="offcanvas-header">
                    <h5 class="offcanvas-title text-dark" id="offcanvasResponsiveLabel">Task description</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasDetails" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body d-block">
                    <h5 class="xs-d-none sm-d-none lg-d-block">Task Description</h5>
                    <div class="card bg-info fw-bold  mb-2">
                        <div class="card-body">
                            Make sure to only accept tasks you are confident that you can complete within the given duration or deadline.
                        </div>
                    </div>
                    <?php if($usertype == 2): ?>
                    <div id="companyDiv" class="d-none"><strong>Company:</strong> <span id="companyDesc"></span></div>
                    <div id="requestorDiv" class="d-none"><strong>Requested by </strong><span id="requestor"></span></div>
                    <?php endif; ?>
                    <div id="requestDateDiv" class="d-none"><strong>Requested on </strong><span id="requestDate"></span></div>
                    <div id="deadlineDescDiv" class="d-none">
                        <strong>Deadline:</strong> <span id="deadlineDesc"></span>
                    </div>
                    <div id="durationDescDiv" class="d-none">
                        <strong>Duration:</strong> <span id="durationDesc"></span>
                    </div>
                    <hr/>
                    <div id="viewTaskDetails"></div>
                  </div>
                </div>
            </div>
        </div>
        
    </div>
</div>