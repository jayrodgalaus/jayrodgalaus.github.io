    <?php require 'head.php'; ?>
    <?php include 'functions.php';
        // if(!isset($_SESSION['user'])){header("Location: ../login.php");}
    ?>
        <title>Dashboard | JaGalau</title>
        <style type="text/css">
            #mast{
                min-height: calc(100vh - 55px);
                margin-top: 55px;
                overflow-x: hidden;
            }
            #myTab .nav-link.active{
                background-color: rgb(33,37,41) !important;
            }
            #myTabContent .tab-card{
                border-top-left-radius: 0;
                border-top-right-radius: 0;
            }
            .active-desc{
                max-width: 70%;
            }
            .view-desc{
                cursor: pointer;
            }
            label{font-weight: bold;}
            label>sup{color: red;}
            #cardDetails,#availableList{max-height: 80vh; overflow-y: auto;}
            #offcanvasDetails{border-radius:0.375rem;}
        </style>
    </head>
    <body>    
        <?php
            $user = $_SESSION['user'];
            $usertype = $user['usertype'];
            $available = getAvailableTasks($conn);
            
            $activeTasks = getActiveTasks($conn);
            $pendingTasks = $usertype == 1 ? getPending($conn) : getPending($conn,2);
            $completedTasks = $usertype == 1 ? getCompleted($conn) : getCompleted($conn,2);
        ?>
        <nav id="mainnav" class="mainnav navbar navbar-expand-lg bg-dark fixed-top">
            <div class="mainnav container-fluid px-5">
                
                <a class="mainnav navbar-brand" href="#">
                    <img class="mainnav " src="../assets/icons/logo.svg" alt="Bootstrap" width="30" height="24">
                </a>            
                <a class="nav-link" aria-current="page" href="#">Profile</a>
            </div>
        </nav>
        <!-- MODALS -->
        <?php if($usertype == 1): ?>
            <div class="modal modal-lg fade" id="addTaskModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5>New Task</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="addTaskForm">
                                <label for="nname">Task Title<sup>*</sup></label>
                                <input type="text" class="form-control my-1" id="nname" name="name" required>
                                <!-- <textarea class="form-control my-1" rows="10" name="description" required placeholder="Description"></textarea> -->
                                <label>Task Description<sup>*</sup></label>
                                <div id="editor">
                                    <p>Insert task description</p>
                                </div>
                                <label for="ntype" class="mt-1">Task type<sup>*</sup></label>
                                <select class="form-control mb-1" name="type" id="ntype">
                                    <option value="1">Graphics</option>
                                    <option value="2">Partials</option>
                                    <option value="3">Documentation</option>
                                </select>
                                <label for="ndays" class="mt-1 custom-tooltip">Task Duration (in days) 
                                    <i class="fa-regular fa-circle-question"></i>
                                    <div class="tooltiptext">Define the task duration if you do not have a set deadline for the task. The timer for task completion starts the moment a resource accepts the task.</div>
                                </label>
                                <input type="number" id="ndays" class="form-control mb-1" name="days" min='1' pattern="[0-9]*">
                                <div id="deadlineDiv">
                                    <label for="deadline">Deadline<sup>*</sup></label>
                                    <input class="form-control" type="datetime-local" id="deadline" name="deadline"
                                      min="<?=date('Y-m-d')?>T<?=date('h:i')?>" />
                                </div>
                                
                                <label for="nprice" class="mt-1">Price</label>
                                <input id="nprice" type="number" class="form-control mb-1" name="price" value="2" required min="2">
                                <input type="hidden" name="crud-type" value="add">
                                <button class="btn btn-dark float-end mt-2" >Save</button><!-- data-bs-dismiss="modal" -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        
        <!-- MAIN -->
        <div id="mast" class="vw-100">
            <div class="container container-lg text-light pt-3" >
                <!-- NAV -->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-light active" id="dashboardTab" data-bs-toggle="tab" data-bs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-current="page">Dashboard</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-light tab-btn" crud="Available" id="availableTab" data-bs-toggle="tab" data-bs-target="#available" type="button" role="tab" aria-controls="available"><?=$usertype == 1 ? "Requests" : "Available"?></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-light tab-btn" crud="Active" id="activeTab" data-bs-toggle="tab" data-bs-target="#active" type="button" role="tab" aria-controls="active">In Progress</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-light tab-btn" crud="Pending" id="pendingTab" data-bs-toggle="tab" data-bs-target="#pending" type="button" role="tab" aria-controls="pending">Pending</button>
                    </li>
                    <li class="nav-item" role="presentation" >
                        <button class="nav-link text-light tab-btn" crud="Completed" id="completedTab" data-bs-toggle="tab" data-bs-target="#completed" type="button" role="tab" aria-controls="completed">Completed</button>
                    </li>
                </ul>
                <!-- TABS -->
                <div class="tab-content" id="myTabContent">
                    <!-- DASHBOARD -->
                    <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="dashboardTab">
                        <div class="card shadow-sm bg-dark tab-card">
                            <div class="card-body">
                                <h3>Welcome <?=$user['name']?></h3>
                                <hr>
                                <?php if($usertype == 1): ?>
                                    <button class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#addTaskModal">Make task</button>
                                    
                                <?php else: ?>

                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <!-- ACTIVE -->
                    <div class="tab-pane fade" id="active" role="tabpanel" aria-labelledby="activeTab">
                        
                    </div>
                    <!-- PENDING -->
                    <div class="tab-pane fade" id="pending" role="tabpanel" aria-labelledby="pendingTab">
                        
                    </div>
                    <!-- COMPLETED -->
                    <div class="tab-pane fade" id="completed" role="tabpanel" aria-labelledby="completedTab">
                        
                    </div>
                    <!-- AVAILABLE -->
                    <div class="tab-pane fade" id="available" role="tabpanel" aria-labelledby="availableTab">
                        
                    </div>

                </div>
            </div>
        </div>
        
        
        <script>
            $(function(){
                <?php if($usertype == 1): ?>
                    const quill = new Quill('#editor', {
                        theme: 'snow'
                    });
                <?php endif;?>
                const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
                const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
                
                $(document)
                .on('click','body',function(e){
                    if(!$(e.target).hasClass('mainnav')){
                        var exp = ($('#mainnavbar-toggler').attr('aria-expanded'));
                        if(exp == 'true' || $('#navbarContent').hasClass('show')){
                            $('#navbarContent').removeClass('show')
                            $('#mainnavbar-toggler').attr('aria-expanded',false)
                        }
                    }
                })
                <?php if($usertype == 1): ?>
                    .on('submit','#addTaskForm',function(e){
                        e.preventDefault();
                        var form = document.getElementById('addTaskForm');
                        var formData = new FormData(form);
                        var description = quill.getSemanticHTML(0);
                        formData.set('description',description);
                        $.ajax({
                            url:"../controllers/tasks.php",
                            method: 'post',
                            data: formData,
                            dataType: 'json',
                            processData: false,
                            contentType: false,
                            cache: false,
                            enctype: 'multipart/form-data',
                            success: function(res){
                                if(res.success){
                                    alert('ok')

                                }else{
                                    alert('not ok')
                                }
                                    
                            }
                        })
                    })
                    .on('click','label[for=ndays]',function(){
                        tooltipList[0].show();
                    })
                <?php endif; ?>

                .on('input','input[type=number]',function(e){
                    this.value = this.value.replace(/[E\e\+\-]/gi, "");
                    if($(this).is('#ndays')){
                        console.log('a')
                        console.log($(this).val().length);
                        if($(this).val().length > 0){
                            $('#deadlineDiv').hide();
                            $('#deadline').val('');
                        }else{
                            $('#deadlineDiv').show();
                        }
                        
                    }
                })
                .on('keydown','input[type=number]',function(e){
                    let keyChar = e.key;
                    var invalidChars = ["-","+","e","E"];
                    if (invalidChars.includes(keyChar)) {
                        e.preventDefault();
                    }else{
                        
                        
                    }
                })
                .on('click','.tab-btn',function(){
                    let crud = "get"+($(this).attr('crud'));
                    let container = "#"+($(this).attr('crud')).toLowerCase();
                    $.ajax({
                        url:"../controllers/tasks.php",
                        method: 'post',
                        data: {"crud-type":crud},
                        dataType: 'json',
                        success: function(res){
                            if(res){
                                $(container).html(res)
                            }else{
                                alert('not ok')
                            }
                                
                        }
                    })
                })
                .on('click','.view-desc',function(){
                    let descdiv = $(this).closest('.item-desc');
                    let desc = descdiv.attr('data-desc');
                    let title = descdiv.attr('data-title');
                    let price = descdiv.attr('data-price');
                    let requestor = descdiv.attr('data-requestor'); 
                    let date = descdiv.attr('data-requestdate'); 
                    let duration = descdiv.attr('data-duration'); 
                    let deadline = descdiv.attr('data-deadline'); 
                    let company = descdiv.attr('data-company');
                    $('#viewTaskModal .modal-header h5').text(title)
                    $('#viewTaskDetails').html(desc.slice(0,-1))
                    $('#requestor').text(requestor);
                    $('#requestDate').text(date);
                    $('#taskDuration').text(duration);
                    $('#companyDesc').text(company);
                    $('#requestorDiv').removeClass('d-none');
                    $('#requestDateDiv').removeClass('d-none');
                    $('#companyDiv').removeClass('d-none');

                    if(deadline != null && deadline != ""){
                        $('#deadlineDesc').text(deadline);
                        $('#deadlineDescDiv').removeClass('d-none');
                        $('#durationDescDiv').addClass('d-none');
                        $('#durationDesc').text("");
                    }else{
                        $('#durationDesc').text(duration+" day(s)");
                        $('#durationDescDiv').removeClass('d-none');
                        $('#deadlineDescDiv').addClass('d-none');
                        $('#deadlineDesc').text("");
                    }
                })
                .on('click','.btn-filter',function(){
                    $(this).parent(.)siblings('.filter').toggleClass('d-none');
                })
                .on('change','.sort-by, .order-by',function(){
                    let parent = "#"+($(this).closest('.filter').siblings('.list-container').attr('id'));
                    let orderby = "requestdate";
                    let order = "ascending";
                    if($(this).hasClass('sort-by')){
                        orderby = "data-"+($(this).val());
                        order = $(this).siblings('.order-by').val();
                    }else{
                        orderby = "data-"+($(this).siblings('.sort-by').val());
                        order = $(this).val();
                    }
                    let items = parent+" .item-desc";
                    
                    let sorteditems = $(items).sort(function(a,b){
                        switch(orderby){
                            case "data-deadline":
                                let nodate = new Date("9999-10-10 10:00:00");
                                let dateA = ""; let dateB = "";
                                if($(a).attr("data-deadline")==""){dateA = nodate;} else {dateA = new Date($(a).attr(orderby))};
                                if($(b).attr("data-deadline")==""){dateB = nodate;} else {dateB = new Date($(b).attr(orderby))};
                                if(order == 'ascending')
                                    return  dateA > dateB ? -1 :(dateA < dateB ? 1 : 0);
                                else
                                    return  dateB > dateA ? -1 :(dateB < dateA ? 1 : 0);
                                break;
                            case "data-requestdate":
                                if($(a).attr("data-requestdate")==""|| $(b).attr("data-requestdate")=="") {/*return false; */break;}
                                let dateA1 = new Date($(a).attr(orderby));
                                let dateB1 = new Date($(b).attr(orderby));
                                if(order == 'ascending')
                                    return  dateA1 > dateB1 ? -1 :(dateA1 < dateB1 ? 1 : 0);
                                else
                                    return  dateB1 > dateA1 ? -1 :(dateB1 < dateA1 ? 1 : 0);
                                break; 
                            case "data-duration":
                                if($(a).attr("data-duration")==""|| $(b).attr("data-duration")=="") {return -1; break;}
                                if(order == 'ascending')
                                    return  $(b).attr(orderby) - $(a).attr(orderby);
                                else
                                    return  $(a).attr(orderby) - $(b).attr(orderby);
                                break;
                            case "data-title":
                                if(order == 'ascending')
                                    return String.prototype.localeCompare.call($(b).attr(orderby).toLowerCase(),$(a).attr(orderby).toLowerCase());
                                else
                                    return String.prototype.localeCompare.call($(a).attr(orderby).toLowerCase(),$(b).attr(orderby).toLowerCase());
                                break;
                            default:
                                if(order == 'ascending')
                                    return  $(b).attr(orderby) - $(a).attr(orderby);
                                else
                                    return  $(a).attr(orderby) - $(b).attr(orderby);
                                break;
                        }
                    });
                    sorteditems.each(function(){
                        if(orderby == "data-deadline" && order == "descending"){
                            
                            if($(this).attr("data-deadline")==""){
                                
                                $(parent).append(this);
                            }else{
                                $(parent).prepend(this);
                            }
                        }else{
                            $(parent).prepend(this);
                        }
                        
                    });

                })

            })
        </script>
    </body>
    </html>