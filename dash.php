
<?php

$sel="select * from librarians";
$res=$connect->query($sel);
$rows=$res->num_rows;


$sel2="select * from students";
$res2=$connect->query($sel2);
$rows2=$res2->num_rows;

$sel3="select * from books";
$res3=$connect->query($sel3);
$rows3=$res3->num_rows;



?>

 <h1 class="mt-4">Dashboard <small>(Librarians)</small></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-dark mb-4">
                                    <div class="card-body">All Studens</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a style="font-size:22px;color:black" class=" m-auto" href="#">0<?php echo $rows2; ?></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body">Visit Your Site</div>
                                    <div class="card-footer d-flex pb-4 align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="index.php">Click to visit</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info  text-dark mb-4">
                                    <div class="card-body">All Books</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a style="font-size:22px;color:black" class=" m-auto" href="#">0<?php echo $rows3; ?></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-light text-dark mb-4">
                                    <div class="card-body">All Librarians
									</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a style="font-size:22px;color:black" class=" m-auto" href="#">0<?php echo $rows; ?></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        