<?php 
@ob_start();
session_start();
include '../conn.php';
$user_id = $_SESSION['user_id'];
$eails ="SELECT * FROM register WHERE id =$user_id";
$ql = mysqli_query($connection,$eails);
$result = mysqli_fetch_assoc($ql);
if(!empty($_POST)){
	$break_fast_url = "https://api.edamam.com/search?app_id=af4aee2d&app_key=8d471e8eaa6e11b67cf582d6509bc6f7&q=Breakfast%20Snack&";
	$lunch_url = "https://api.edamam.com/search?app_id=af4aee2d&app_key=8d471e8eaa6e11b67cf582d6509bc6f7&q=Lunch&";
	$dinner_url = "https://api.edamam.com/search?app_id=af4aee2d&app_key=8d471e8eaa6e11b67cf582d6509bc6f7&q=Dinner&";
	$request_array = [
		'to'=>7,
		'diet'=>$_POST['diet'],
		'calories'=>'360-500'
	];

	$health = '';
	for($i=0;$i< count($_POST['health']);$i++){
		$health .='&health='.$_POST['health'][$i];
	}
	$break_fast_url = $break_fast_url.http_build_query($request_array).$health;
	$lunch_url = $lunch_url.http_build_query($request_array).$health;
	$dinner_url = $dinner_url.http_build_query($request_array).$health;

	$break_fast_response = get_web_page($break_fast_url);
	$lunch_response = get_web_page($lunch_url);
	$dinner_response = get_web_page($dinner_url);
	
	if(!empty($break_fast_response) && !empty($lunch_response) && !empty($dinner_response)){
		$update_query ="update register set break_fast_response = '". $break_fast_response ."', lunch_response = '". $lunch_response ."',dinner_response = '". $dinner_response ."' WHERE id =$user_id";
		
		mysqli_query($connection,$update_query);
	}
}else{
	$break_fast_response = $result['break_fast_response'];
	$lunch_response = $result['lunch_response'];
	$dinner_response = $result['dinner_response'];
}


$break_fastArr = json_decode($break_fast_response);
$lunchArr = json_decode($lunch_response);
$dinnerArr = json_decode($dinner_response);


function get_web_page($url) {
    $options = array(
        CURLOPT_RETURNTRANSFER => true,   // return web page
        CURLOPT_HEADER         => false,  // don't return headers
        CURLOPT_FOLLOWLOCATION => true,   // follow redirects
        CURLOPT_MAXREDIRS      => 10,     // stop after 10 redirects
        CURLOPT_ENCODING       => "",     // handle compressed
        CURLOPT_USERAGENT      => "test", // name of client
        CURLOPT_AUTOREFERER    => true,   // set referrer on redirect
        CURLOPT_CONNECTTIMEOUT => 120,    // time-out on connect
        CURLOPT_TIMEOUT        => 120,    // time-out on response
    ); 

    $ch = curl_init($url);
    curl_setopt_array($ch, $options);
    $content  = curl_exec($ch);
    curl_close($ch);
    return $content;
}


?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="FITNESS">
    <meta name="keywords" content="unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="app.js"></script>
    <title>Diet Plan</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script type="text/javascript">
    window.$crisp = [];
    window.CRISP_WEBSITE_ID = "8ba839ea-904f-4cae-a568-3b4b5c27a929";
    (function() {
        d = document;
        s = d.createElement("script");
        s.src = "https://client.crisp.chat/l.js";
        s.async = 1;
        d.getElementsByTagName("head")[0].appendChild(s);
    })();
    </script>
    <style>
    .Meal {
        text-decoration: none;
    }

    .Meal__content {
        border: 1px solid #e3e3e3;
        -ms-flex: 1 1;
        flex: 1 1;
    }

    .Meal__content__img img {
        width: 100%;
        height: 12rem;
        -o-object-fit: cover;
        object-fit: cover;
    }

    .Meal__content__desc {
        padding: 1rem;
    }

    .Meal__content__labels {
        display: flex;
        flex-flow: row wrap;
        padding: 1rem;
    }

    .Tag {
        margin: .51rem;
        border-radius: .5rem;
        padding: .2rem .61rem;
        background: #e3e3e3;
        color: #34495e;
    }
    </style>
</head>

<body>
    <a class="primary-btn">
        <h4></h4>
    </a><a class="primary-btn">

    </a><a class="primary-btn">
        <h4></h4>
    </a><a class="primary-btn">

    </a><a class="primary-btn">
        <h4></h4>
    </a><a class="primary-btn">

    </a>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <header class="header-section">
        <div>

            <div class="nav-menu">
                <nav class="mainmenu mobile-menu"></nav>

                <?php				 
				if(!isset( $_SESSION['username'])){
					header("location:login.php");
					exit;
				} 
				?>
                <a href="../../cms/index.php" class="primary-btn">Blogs</a><a href="../../gettrainer.php"
                    class="primary-btn">Get Trainer</a><a href="../../support.php" class="primary-btn">Support Us</a><a
                    href="" class="primary-btn">BMI </a><a href="../logout.php" class="primary-btn">Logout</a><a
                    class="primary-btn">Hi-
                    <?php echo $_SESSION['username']; ?></a>


            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->
    <!-- Register Section Begin -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="register-text">
                        <div class="section-title">
                            <h2>Food Survey <a href="enterbmi.php" class="btn btn-primary btn-xs pull-right">New
                                    Survey</a></h2>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mx-0">
                                <ul class="nav nav-pills">
                                    <li class="active"><a href="#1a" data-toggle="tab">Day 1</a></li>
                                    <li><a href="#2a" data-toggle="tab">Day 2</a></li>
                                    <li><a href="#3a" data-toggle="tab">Day 3</a></li>
                                    <li><a href="#4a" data-toggle="tab">Day 4</a></li>
                                    <li><a href="#5a" data-toggle="tab">Day 5</a></li>
                                    <li><a href="#6a" data-toggle="tab">Day 6</a></li>
                                    <li><a href="#7a" data-toggle="tab">Day 7</a></li>
                                </ul>


                                <div class="tab-content clearfix">
                                    <div class="tab-pane active" id="1a">
                                        <?php if(!empty($break_fastArr->hits)) { ?>
                                        <div class="col-sm-4">
                                            <h3>Breakfast</h3>
                                            <a href="<?php echo $break_fastArr->hits[0]->recipe->url ?>" class="Meal">
                                                <div class="Meal__content">
                                                    <div class="Meal__content__img">
                                                        <img src="<?php echo $break_fastArr->hits[0]->recipe->image ?>"
                                                            alt="Unavailable">
                                                    </div>
                                                    <div class="Meal__content__desc">
                                                        <h2 class="Meal__content__desc--heading">
                                                            <?php echo $break_fastArr->hits[0]->recipe->label;?></h2>
                                                        <h4 class="Meal__content__desc--source">
                                                            <?php echo $break_fastArr->hits[0]->recipe->source ?></h4>
                                                    </div>
                                                    <div class="Meal__content__labels">
                                                        <?php foreach($break_fastArr->hits[0]->recipe->healthLabels as $healthLabels) { ?>
                                                        <div class="Tag undefined">
                                                            <i class="Tag__icon undefined"></i><span
                                                                class="Tag__Name"><?php echo $healthLabels;?></span>
                                                        </div>
                                                        <?php } ?>
                                                    </div>

                                                </div>
                                            </a>
                                        </div>
                                        <?php } ?>
                                        <?php if(!empty($lunchArr->hits)) { ?>
                                        <div class="col-sm-4">
                                            <h3>Lunch</h3>
                                            <a href="<?php echo $lunchArr->hits[0]->recipe->url ?>" class="Meal">
                                                <div class="Meal__content">
                                                    <div class="Meal__content__img">
                                                        <img src="<?php echo $lunchArr->hits[0]->recipe->image ?>"
                                                            alt="Unavailable">
                                                    </div>
                                                    <div class="Meal__content__desc">
                                                        <h2 class="Meal__content__desc--heading">
                                                            <?php echo $lunchArr->hits[0]->recipe->label;?></h2>
                                                        <h4 class="Meal__content__desc--source">
                                                            <?php echo $lunchArr->hits[0]->recipe->source ?></h4>
                                                    </div>
                                                    <div class="Meal__content__labels">
                                                        <?php foreach($lunchArr->hits[0]->recipe->healthLabels as $healthLabels) { ?>
                                                        <div class="Tag undefined">
                                                            <i class="Tag__icon undefined"></i><span
                                                                class="Tag__Name"><?php echo $healthLabels;?></span>
                                                        </div>
                                                        <?php } ?>
                                                    </div>

                                                </div>
                                            </a>
                                        </div>
                                        <?php } ?>
                                        <?php if(!empty($dinnerArr->hits)) { ?>
                                        <div class="col-sm-4">
                                            <h3>Dinner</h3>
                                            <a href="<?php echo $dinnerArr->hits[0]->recipe->url ?>" class="Meal">
                                                <div class="Meal__content">
                                                    <div class="Meal__content__img">
                                                        <img src="<?php echo $dinnerArr->hits[0]->recipe->image ?>"
                                                            alt="Unavailable">
                                                    </div>
                                                    <div class="Meal__content__desc">
                                                        <h2 class="Meal__content__desc--heading">
                                                            <?php echo $dinnerArr->hits[0]->recipe->label;?></h2>
                                                        <h4 class="Meal__content__desc--source">
                                                            <?php echo $dinnerArr->hits[0]->recipe->source ?></h4>
                                                    </div>
                                                    <div class="Meal__content__labels">
                                                        <?php foreach($dinnerArr->hits[0]->recipe->healthLabels as $healthLabels) { ?>
                                                        <div class="Tag undefined">
                                                            <i class="Tag__icon undefined"></i><span
                                                                class="Tag__Name"><?php echo $healthLabels;?></span>
                                                        </div>
                                                        <?php } ?>
                                                    </div>

                                                </div>
                                            </a>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="tab-pane" id="2a">
                                        <?php if(!empty($break_fastArr->hits)) { ?>
                                        <div class="col-sm-4">
                                            <h3>Breakfast</h3>
                                            <a href="<?php echo $break_fastArr->hits[1]->recipe->url ?>" class="Meal">
                                                <div class="Meal__content">
                                                    <div class="Meal__content__img">
                                                        <img src="<?php echo $break_fastArr->hits[1]->recipe->image ?>"
                                                            alt="Unavailable">
                                                    </div>
                                                    <div class="Meal__content__desc">
                                                        <h2 class="Meal__content__desc--heading">
                                                            <?php echo $break_fastArr->hits[1]->recipe->label;?></h2>
                                                        <h4 class="Meal__content__desc--source">
                                                            <?php echo $break_fastArr->hits[1]->recipe->source ?></h4>
                                                    </div>
                                                    <div class="Meal__content__labels">
                                                        <?php foreach($break_fastArr->hits[1]->recipe->healthLabels as $healthLabels) { ?>
                                                        <div class="Tag undefined">
                                                            <i class="Tag__icon undefined"></i><span
                                                                class="Tag__Name"><?php echo $healthLabels;?></span>
                                                        </div>
                                                        <?php } ?>
                                                    </div>

                                                </div>
                                            </a>
                                        </div>
                                        <?php } ?>
                                        <?php if(!empty($lunchArr->hits)) { ?>
                                        <div class="col-sm-4">
                                            <h3>Lunch</h3>
                                            <a href="<?php echo $lunchArr->hits[1]->recipe->url ?>" class="Meal">
                                                <div class="Meal__content">
                                                    <div class="Meal__content__img">
                                                        <img src="<?php echo $lunchArr->hits[1]->recipe->image ?>"
                                                            alt="Unavailable">
                                                    </div>
                                                    <div class="Meal__content__desc">
                                                        <h2 class="Meal__content__desc--heading">
                                                            <?php echo $lunchArr->hits[1]->recipe->label;?></h2>
                                                        <h4 class="Meal__content__desc--source">
                                                            <?php echo $lunchArr->hits[1]->recipe->source ?></h4>
                                                    </div>
                                                    <div class="Meal__content__labels">
                                                        <?php foreach($lunchArr->hits[1]->recipe->healthLabels as $healthLabels) { ?>
                                                        <div class="Tag undefined">
                                                            <i class="Tag__icon undefined"></i><span
                                                                class="Tag__Name"><?php echo $healthLabels;?></span>
                                                        </div>
                                                        <?php } ?>
                                                    </div>

                                                </div>
                                            </a>
                                        </div>
                                        <?php } ?>
                                        <?php if(!empty($dinnerArr->hits)) { ?>
                                        <div class="col-sm-4">
                                            <h3>Dinner</h3>
                                            <a href="<?php echo $dinnerArr->hits[1]->recipe->url ?>" class="Meal">
                                                <div class="Meal__content">
                                                    <div class="Meal__content__img">
                                                        <img src="<?php echo $dinnerArr->hits[1]->recipe->image ?>"
                                                            alt="Unavailable">
                                                    </div>
                                                    <div class="Meal__content__desc">
                                                        <h2 class="Meal__content__desc--heading">
                                                            <?php echo $dinnerArr->hits[1]->recipe->label;?></h2>
                                                        <h4 class="Meal__content__desc--source">
                                                            <?php echo $dinnerArr->hits[1]->recipe->source ?></h4>
                                                    </div>
                                                    <div class="Meal__content__labels">
                                                        <?php foreach($dinnerArr->hits[1]->recipe->healthLabels as $healthLabels) { ?>
                                                        <div class="Tag undefined">
                                                            <i class="Tag__icon undefined"></i><span
                                                                class="Tag__Name"><?php echo $healthLabels;?></span>
                                                        </div>
                                                        <?php } ?>
                                                    </div>

                                                </div>
                                            </a>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="tab-pane" id="3a">
                                        <?php if(!empty($break_fastArr->hits)) { ?>
                                        <div class="col-sm-4">
                                            <h3>Breakfast</h3>
                                            <a href="<?php echo $break_fastArr->hits[2]->recipe->url ?>" class="Meal">
                                                <div class="Meal__content">
                                                    <div class="Meal__content__img">
                                                        <img src="<?php echo $break_fastArr->hits[2]->recipe->image ?>"
                                                            alt="Unavailable">
                                                    </div>
                                                    <div class="Meal__content__desc">
                                                        <h2 class="Meal__content__desc--heading">
                                                            <?php echo $break_fastArr->hits[2]->recipe->label;?></h2>
                                                        <h4 class="Meal__content__desc--source">
                                                            <?php echo $break_fastArr->hits[2]->recipe->source ?></h4>
                                                    </div>
                                                    <div class="Meal__content__labels">
                                                        <?php foreach($break_fastArr->hits[2]->recipe->healthLabels as $healthLabels) { ?>
                                                        <div class="Tag undefined">
                                                            <i class="Tag__icon undefined"></i><span
                                                                class="Tag__Name"><?php echo $healthLabels;?></span>
                                                        </div>
                                                        <?php } ?>
                                                    </div>

                                                </div>
                                            </a>
                                        </div>
                                        <?php } ?>
                                        <?php if(!empty($lunchArr->hits)) { ?>
                                        <div class="col-sm-4">
                                            <h3>Lunch</h3>
                                            <a href="<?php echo $lunchArr->hits[2]->recipe->url ?>" class="Meal">
                                                <div class="Meal__content">
                                                    <div class="Meal__content__img">
                                                        <img src="<?php echo $lunchArr->hits[2]->recipe->image ?>"
                                                            alt="Unavailable">
                                                    </div>
                                                    <div class="Meal__content__desc">
                                                        <h2 class="Meal__content__desc--heading">
                                                            <?php echo $lunchArr->hits[2]->recipe->label;?></h2>
                                                        <h4 class="Meal__content__desc--source">
                                                            <?php echo $lunchArr->hits[2]->recipe->source ?></h4>
                                                    </div>
                                                    <div class="Meal__content__labels">
                                                        <?php foreach($lunchArr->hits[2]->recipe->healthLabels as $healthLabels) { ?>
                                                        <div class="Tag undefined">
                                                            <i class="Tag__icon undefined"></i><span
                                                                class="Tag__Name"><?php echo $healthLabels;?></span>
                                                        </div>
                                                        <?php } ?>
                                                    </div>

                                                </div>
                                            </a>
                                        </div>
                                        <?php } ?>
                                        <?php if(!empty($dinnerArr->hits)) { ?>
                                        <div class="col-sm-4">
                                            <h3>Dinner</h3>
                                            <a href="<?php echo $dinnerArr->hits[2]->recipe->url ?>" class="Meal">
                                                <div class="Meal__content">
                                                    <div class="Meal__content__img">
                                                        <img src="<?php echo $dinnerArr->hits[2]->recipe->image ?>"
                                                            alt="Unavailable">
                                                    </div>
                                                    <div class="Meal__content__desc">
                                                        <h2 class="Meal__content__desc--heading">
                                                            <?php echo $dinnerArr->hits[2]->recipe->label;?></h2>
                                                        <h4 class="Meal__content__desc--source">
                                                            <?php echo $dinnerArr->hits[2]->recipe->source ?></h4>
                                                    </div>
                                                    <div class="Meal__content__labels">
                                                        <?php foreach($dinnerArr->hits[2]->recipe->healthLabels as $healthLabels) { ?>
                                                        <div class="Tag undefined">
                                                            <i class="Tag__icon undefined"></i><span
                                                                class="Tag__Name"><?php echo $healthLabels;?></span>
                                                        </div>
                                                        <?php } ?>
                                                    </div>

                                                </div>
                                            </a>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="tab-pane" id="4a">
                                        <?php if(!empty($break_fastArr->hits)) { ?>
                                        <div class="col-sm-4">
                                            <h3>Breakfast</h3>
                                            <a href="<?php echo $break_fastArr->hits[3]->recipe->url ?>" class="Meal">
                                                <div class="Meal__content">
                                                    <div class="Meal__content__img">
                                                        <img src="<?php echo $break_fastArr->hits[3]->recipe->image ?>"
                                                            alt="Unavailable">
                                                    </div>
                                                    <div class="Meal__content__desc">
                                                        <h2 class="Meal__content__desc--heading">
                                                            <?php echo $break_fastArr->hits[3]->recipe->label;?></h2>
                                                        <h4 class="Meal__content__desc--source">
                                                            <?php echo $break_fastArr->hits[3]->recipe->source ?></h4>
                                                    </div>
                                                    <div class="Meal__content__labels">
                                                        <?php foreach($break_fastArr->hits[3]->recipe->healthLabels as $healthLabels) { ?>
                                                        <div class="Tag undefined">
                                                            <i class="Tag__icon undefined"></i><span
                                                                class="Tag__Name"><?php echo $healthLabels;?></span>
                                                        </div>
                                                        <?php } ?>
                                                    </div>

                                                </div>
                                            </a>
                                        </div>
                                        <?php } ?>
                                        <?php if(!empty($lunchArr->hits)) { ?>
                                        <div class="col-sm-4">
                                            <h3>Lunch</h3>
                                            <a href="<?php echo $lunchArr->hits[3]->recipe->url ?>" class="Meal">
                                                <div class="Meal__content">
                                                    <div class="Meal__content__img">
                                                        <img src="<?php echo $lunchArr->hits[3]->recipe->image ?>"
                                                            alt="Unavailable">
                                                    </div>
                                                    <div class="Meal__content__desc">
                                                        <h2 class="Meal__content__desc--heading">
                                                            <?php echo $lunchArr->hits[3]->recipe->label;?></h2>
                                                        <h4 class="Meal__content__desc--source">
                                                            <?php echo $lunchArr->hits[3]->recipe->source ?></h4>
                                                    </div>
                                                    <div class="Meal__content__labels">
                                                        <?php foreach($lunchArr->hits[3]->recipe->healthLabels as $healthLabels) { ?>
                                                        <div class="Tag undefined">
                                                            <i class="Tag__icon undefined"></i><span
                                                                class="Tag__Name"><?php echo $healthLabels;?></span>
                                                        </div>
                                                        <?php } ?>
                                                    </div>

                                                </div>
                                            </a>
                                        </div>
                                        <?php } ?>
                                        <?php if(!empty($dinnerArr->hits)) { ?>
                                        <div class="col-sm-4">
                                            <h3>Dinner</h3>
                                            <a href="<?php echo $dinnerArr->hits[3]->recipe->url ?>" class="Meal">
                                                <div class="Meal__content">
                                                    <div class="Meal__content__img">
                                                        <img src="<?php echo $dinnerArr->hits[3]->recipe->image ?>"
                                                            alt="Unavailable">
                                                    </div>
                                                    <div class="Meal__content__desc">
                                                        <h2 class="Meal__content__desc--heading">
                                                            <?php echo $dinnerArr->hits[3]->recipe->label;?></h2>
                                                        <h4 class="Meal__content__desc--source">
                                                            <?php echo $dinnerArr->hits[3]->recipe->source ?></h4>
                                                    </div>
                                                    <div class="Meal__content__labels">
                                                        <?php foreach($dinnerArr->hits[3]->recipe->healthLabels as $healthLabels) { ?>
                                                        <div class="Tag undefined">
                                                            <i class="Tag__icon undefined"></i><span
                                                                class="Tag__Name"><?php echo $healthLabels;?></span>
                                                        </div>
                                                        <?php } ?>
                                                    </div>

                                                </div>
                                            </a>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="tab-pane" id="5a">
                                        <?php if(!empty($break_fastArr->hits)) { ?>
                                        <div class="col-sm-4">
                                            <h3>Breakfast</h3>
                                            <a href="<?php echo $break_fastArr->hits[0]->recipe->url ?>" class="Meal">
                                                <div class="Meal__content">
                                                    <div class="Meal__content__img">
                                                        <img src="<?php echo $break_fastArr->hits[0]->recipe->image ?>"
                                                            alt="Unavailable">
                                                    </div>
                                                    <div class="Meal__content__desc">
                                                        <h2 class="Meal__content__desc--heading">
                                                            <?php echo $break_fastArr->hits[0]->recipe->label;?></h2>
                                                        <h4 class="Meal__content__desc--source">
                                                            <?php echo $break_fastArr->hits[0]->recipe->source ?></h4>
                                                    </div>
                                                    <div class="Meal__content__labels">
                                                        <?php foreach($break_fastArr->hits[0]->recipe->healthLabels as $healthLabels) { ?>
                                                        <div class="Tag undefined">
                                                            <i class="Tag__icon undefined"></i><span
                                                                class="Tag__Name"><?php echo $healthLabels;?></span>
                                                        </div>
                                                        <?php } ?>
                                                    </div>

                                                </div>
                                            </a>
                                        </div>
                                        <?php } ?>
                                        <?php if(!empty($lunchArr->hits)) { ?>
                                        <div class="col-sm-4">
                                            <h3>Lunch</h3>
                                            <a href="<?php echo $lunchArr->hits[0]->recipe->url ?>" class="Meal">
                                                <div class="Meal__content">
                                                    <div class="Meal__content__img">
                                                        <img src="<?php echo $lunchArr->hits[0]->recipe->image ?>"
                                                            alt="Unavailable">
                                                    </div>
                                                    <div class="Meal__content__desc">
                                                        <h2 class="Meal__content__desc--heading">
                                                            <?php echo $lunchArr->hits[0]->recipe->label;?></h2>
                                                        <h4 class="Meal__content__desc--source">
                                                            <?php echo $lunchArr->hits[0]->recipe->source ?></h4>
                                                    </div>
                                                    <div class="Meal__content__labels">
                                                        <?php foreach($lunchArr->hits[0]->recipe->healthLabels as $healthLabels) { ?>
                                                        <div class="Tag undefined">
                                                            <i class="Tag__icon undefined"></i><span
                                                                class="Tag__Name"><?php echo $healthLabels;?></span>
                                                        </div>
                                                        <?php } ?>
                                                    </div>

                                                </div>
                                            </a>
                                        </div>
                                        <?php } ?>
                                        <?php if(!empty($dinnerArr->hits)) { ?>
                                        <div class="col-sm-4">
                                            <h3>Dinner</h3>
                                            <a href="<?php echo $dinnerArr->hits[0]->recipe->url ?>" class="Meal">
                                                <div class="Meal__content">
                                                    <div class="Meal__content__img">
                                                        <img src="<?php echo $dinnerArr->hits[0]->recipe->image ?>"
                                                            alt="Unavailable">
                                                    </div>
                                                    <div class="Meal__content__desc">
                                                        <h2 class="Meal__content__desc--heading">
                                                            <?php echo $dinnerArr->hits[0]->recipe->label;?></h2>
                                                        <h4 class="Meal__content__desc--source">
                                                            <?php echo $dinnerArr->hits[0]->recipe->source ?></h4>
                                                    </div>
                                                    <div class="Meal__content__labels">
                                                        <?php foreach($dinnerArr->hits[0]->recipe->healthLabels as $healthLabels) { ?>
                                                        <div class="Tag undefined">
                                                            <i class="Tag__icon undefined"></i><span
                                                                class="Tag__Name"><?php echo $healthLabels;?></span>
                                                        </div>
                                                        <?php } ?>
                                                    </div>

                                                </div>
                                            </a>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="tab-pane" id="6a">
                                        <?php if(!empty($break_fastArr->hits)) { ?>
                                        <div class="col-sm-4">
                                            <h3>Breakfast</h3>
                                            <a href="<?php echo $break_fastArr->hits[1]->recipe->url ?>" class="Meal">
                                                <div class="Meal__content">
                                                    <div class="Meal__content__img">
                                                        <img src="<?php echo $break_fastArr->hits[1]->recipe->image ?>"
                                                            alt="Unavailable">
                                                    </div>
                                                    <div class="Meal__content__desc">
                                                        <h2 class="Meal__content__desc--heading">
                                                            <?php echo $break_fastArr->hits[1]->recipe->label;?></h2>
                                                        <h4 class="Meal__content__desc--source">
                                                            <?php echo $break_fastArr->hits[1]->recipe->source ?></h4>
                                                    </div>
                                                    <div class="Meal__content__labels">
                                                        <?php foreach($break_fastArr->hits[1]->recipe->healthLabels as $healthLabels) { ?>
                                                        <div class="Tag undefined">
                                                            <i class="Tag__icon undefined"></i><span
                                                                class="Tag__Name"><?php echo $healthLabels;?></span>
                                                        </div>
                                                        <?php } ?>
                                                    </div>

                                                </div>
                                            </a>
                                        </div>
                                        <?php } ?>
                                        <?php if(!empty($lunchArr->hits)) { ?>
                                        <div class="col-sm-4">
                                            <h3>Lunch</h3>
                                            <a href="<?php echo $lunchArr->hits[1]->recipe->url ?>" class="Meal">
                                                <div class="Meal__content">
                                                    <div class="Meal__content__img">
                                                        <img src="<?php echo $lunchArr->hits[1]->recipe->image ?>"
                                                            alt="Unavailable">
                                                    </div>
                                                    <div class="Meal__content__desc">
                                                        <h2 class="Meal__content__desc--heading">
                                                            <?php echo $lunchArr->hits[1]->recipe->label;?></h2>
                                                        <h4 class="Meal__content__desc--source">
                                                            <?php echo $lunchArr->hits[1]->recipe->source ?></h4>
                                                    </div>
                                                    <div class="Meal__content__labels">
                                                        <?php foreach($lunchArr->hits[1]->recipe->healthLabels as $healthLabels) { ?>
                                                        <div class="Tag undefined">
                                                            <i class="Tag__icon undefined"></i><span
                                                                class="Tag__Name"><?php echo $healthLabels;?></span>
                                                        </div>
                                                        <?php } ?>
                                                    </div>

                                                </div>
                                            </a>
                                        </div>
                                        <?php } ?>
                                        <?php if(!empty($dinnerArr->hits)) { ?>
                                        <div class="col-sm-4">
                                            <h3>Dinner</h3>
                                            <a href="<?php echo $dinnerArr->hits[1]->recipe->url ?>" class="Meal">
                                                <div class="Meal__content">
                                                    <div class="Meal__content__img">
                                                        <img src="<?php echo $dinnerArr->hits[1]->recipe->image ?>"
                                                            alt="Unavailable">
                                                    </div>
                                                    <div class="Meal__content__desc">
                                                        <h2 class="Meal__content__desc--heading">
                                                            <?php echo $dinnerArr->hits[1]->recipe->label;?></h2>
                                                        <h4 class="Meal__content__desc--source">
                                                            <?php echo $dinnerArr->hits[1]->recipe->source ?></h4>
                                                    </div>
                                                    <div class="Meal__content__labels">
                                                        <?php foreach($dinnerArr->hits[1]->recipe->healthLabels as $healthLabels) { ?>
                                                        <div class="Tag undefined">
                                                            <i class="Tag__icon undefined"></i><span
                                                                class="Tag__Name"><?php echo $healthLabels;?></span>
                                                        </div>
                                                        <?php } ?>
                                                    </div>

                                                </div>
                                            </a>
                                        </div>
                                        <?php } ?>
                                    </div>

                                    <div class="tab-pane" id="7a">
                                        <?php if(!empty($break_fastArr->hits)) { ?>
                                        <div class="col-sm-4">
                                            <h3>Breakfast</h3>
                                            <a href="<?php echo $break_fastArr->hits[2]->recipe->url ?>" class="Meal">
                                                <div class="Meal__content">
                                                    <div class="Meal__content__img">
                                                        <img src="<?php echo $break_fastArr->hits[2]->recipe->image ?>"
                                                            alt="Unavailable">
                                                    </div>
                                                    <div class="Meal__content__desc">
                                                        <h2 class="Meal__content__desc--heading">
                                                            <?php echo $break_fastArr->hits[2]->recipe->label;?></h2>
                                                        <h4 class="Meal__content__desc--source">
                                                            <?php echo $break_fastArr->hits[2]->recipe->source ?></h4>
                                                    </div>
                                                    <div class="Meal__content__labels">
                                                        <?php foreach($break_fastArr->hits[2]->recipe->healthLabels as $healthLabels) { ?>
                                                        <div class="Tag undefined">
                                                            <i class="Tag__icon undefined"></i><span
                                                                class="Tag__Name"><?php echo $healthLabels;?></span>
                                                        </div>
                                                        <?php } ?>
                                                    </div>

                                                </div>
                                            </a>
                                        </div>
                                        <?php } ?>
                                        <?php if(!empty($lunchArr->hits)) { ?>
                                        <div class="col-sm-4">
                                            <h3>Lunch</h3>
                                            <a href="<?php echo $lunchArr->hits[2]->recipe->url ?>" class="Meal">
                                                <div class="Meal__content">
                                                    <div class="Meal__content__img">
                                                        <img src="<?php echo $lunchArr->hits[2]->recipe->image ?>"
                                                            alt="Unavailable">
                                                    </div>
                                                    <div class="Meal__content__desc">
                                                        <h2 class="Meal__content__desc--heading">
                                                            <?php echo $lunchArr->hits[2]->recipe->label;?></h2>
                                                        <h4 class="Meal__content__desc--source">
                                                            <?php echo $lunchArr->hits[2]->recipe->source ?></h4>
                                                    </div>
                                                    <div class="Meal__content__labels">
                                                        <?php foreach($lunchArr->hits[2]->recipe->healthLabels as $healthLabels) { ?>
                                                        <div class="Tag undefined">
                                                            <i class="Tag__icon undefined"></i><span
                                                                class="Tag__Name"><?php echo $healthLabels;?></span>
                                                        </div>
                                                        <?php } ?>
                                                    </div>

                                                </div>
                                            </a>
                                        </div>
                                        <?php } ?>
                                        <?php if(!empty($dinnerArr->hits)) { ?>
                                        <div class="col-sm-4">
                                            <h3>Dinner</h3>
                                            <a href="<?php echo $dinnerArr->hits[2]->recipe->url ?>" class="Meal">
                                                <div class="Meal__content">
                                                    <div class="Meal__content__img">
                                                        <img src="<?php echo $dinnerArr->hits[2]->recipe->image ?>"
                                                            alt="Unavailable">
                                                    </div>
                                                    <div class="Meal__content__desc">
                                                        <h2 class="Meal__content__desc--heading">
                                                            <?php echo $dinnerArr->hits[2]->recipe->label;?></h2>
                                                        <h4 class="Meal__content__desc--source">
                                                            <?php echo $dinnerArr->hits[2]->recipe->source ?></h4>
                                                    </div>
                                                    <div class="Meal__content__labels">
                                                        <?php foreach($dinnerArr->hits[2]->recipe->healthLabels as $healthLabels) { ?>
                                                        <div class="Tag undefined">
                                                            <i class="Tag__icon undefined"></i><span
                                                                class="Tag__Name"><?php echo $healthLabels;?></span>
                                                        </div>
                                                        <?php } ?>
                                                    </div>

                                                </div>
                                            </a>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Register Section End -->
    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>