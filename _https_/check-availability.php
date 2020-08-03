<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>



    <link rel="stylesheet" href="css/kronos.css"></link>

    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.6/highlight.min.js"></script>
    <script src="js/kronos.js"></script>


    <style type="text/css" media="screen">
        #inner .demowrap {margin: 0 0 100px;}
        #inner .demowrap .demo {width: 800px; margin: 0 auto 100px;}
        #inner .demowrap .demo:last-child {margin-bottom: 0;}
        #inner .demowrap .demo .desc {margin: 0 0 20px;}
        #inner .demowrap .demo .desc .tit {color: #000000;}
        #inner .demowrap .demo .desc .txt {margin: 10px 0 0;}
        #inner .demowrap .demo .source {margin: 30px 0 0; padding: 25px; border-radius: 15px; background: #1e1e1e; font-family: NanumGothic; font-size: 14px; line-height: 1.5; color: #ffffff; letter-spacing: 0.1em;}
        #inner .demowrap .demo .source .hljs-tag {color: #569cd6;}
        #inner .demowrap .demo .source .hljs-attr {color: #9cdcfe;}
        #inner .demowrap .demo .source .hljs-string {color: #ce723b;}
        #inner .demowrap .demo .source .hljs-number {color: #b5cea8;}
        #inner .demowrap .demo .source .hljs-selector-id {color: #d7983d;}
        #inner .demowrap .demo .source .hljs-selector-class {color: #d7983d;}
        #inner .demowrap .demo .source .hljs-selector-tag {color: #d7983d;}
        #inner .demowrap .demo .source .hljs-attribute {color: #9cdcfe;}
        #inner .demowrap .demo .source .hljs-keyword {color: #569cd6;}
        #inner .demowrap .demo .source .hljs-literal {color: #569cd6;}
        #inner .demowrap .demo .source .hljs-subst {color: #569cd6;}
    </style>
</head>
<body>
   <div class="vk-booking-hotel">
    <div class="container">
        <form action="https://html.univertheme.com/sparta/action.php" class="form-horizontal  booking-hotel-all">
            <ul>
                <li>
                    <h4>Check - In</h4>
                    <div class="input-group date date-check-in" data-date="12-February-2017" data-date-format="mmmm-dd-yyyy">
                        <!-- <input name="date1" class="form-control" type="text" value="12-February-2017"> -->
                        <input type="text" id="kronos9-1" class="form-control" placeholder="2020...">
                        <!-- <span class="input-group-addon btn"><span class="ti-calendar" id="ti-calendar1"></span></span> -->

                    </div>
                </li>
                <li>
                    <h4>Check - Out</h4>
                    <div class="input-group date date-check-out" data-date="12-February-2017" data-date-format="mmmm-dd-yyyy">
                        <!-- <input name="date2" class="form-control" type="text" value="12-February-2017"> -->
                        <input type="text" id="kronos9-2" class="form-control" placeholder="2020...">
                        <!-- <span class="input-group-addon btn"><span class="ti-calendar" id="ti-calendar2"></span></span> -->

                    </div>
                </li>
                <li>
                    <h4>Adults</h4>
                    <div class="wrap-select">
                        <div id="dd" class="wrapper-dropdown-3">
                            <span>1</span>
                            <ul class="dropdown">
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">6</a></li>
                                <li><a href="#">7</a></li>
                                <li><a href="#">8</a></li>
                                <li><a href="#">9</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <h4>Children</h4>
                    <div class="wrap-select">
                        <div id="dda" class="wrapper-dropdown-3">
                            <span>1</span>
                            <ul class="dropdown">
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">6</a></li>
                                <li><a href="#">7</a></li>
                                <li><a href="#">8</a></li>
                                <li><a href="#">9</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="vk-btn-check">
                        <button type="submit" class="btn vk-btn-primary btn-block btn-check">Check  Availability</button>
                    </div>
                </li>
            </ul>
            <div class="clearfix"></div>
        </form>
    </div>
</div>

<div class="vk-check-availability">
    <div class="container">
        <div class="vk-check-availability-content">

        </div>
    </div>
</div>
<script>
    $('#kronos9-1').kronos({
        periodTo: '#kronos9-2'
    });
    $('#kronos9-2').kronos({
        periodFrom: '#kronos9-1'
    });
</script>
</body>
</html>




</script>