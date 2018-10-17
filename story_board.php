<?php

session_start();

if (!isset($_SESSION['nameUser'])) {

    header ('Location: index.php');

}

?>

<!doctype html>

<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

        <style type="text/css">
            /* width */

            ::-webkit-scrollbar {
                width: 1px;
                height: 0px;
            }

            /* Track */

            ::-webkit-scrollbar-track {
                background: #f1f1f1;
            }

            /* Handle */

            ::-webkit-scrollbar-thumb {
                background: #888;
            }

            /* Handle on hover */

            ::-webkit-scrollbar-thumb:hover {
                background: #555;
            }

            .canvas-btn {

                cursor: pointer;
                position: relative;
                font-size: 80%;


            }

            bg-transparent {
                background-color: transparent;
            }

            canvas {
                position: absolute;
                z-index: 2;
                cursor: copy;


                /*				pointer-events: none;*/
            }

            .img-block {
                background: transparent;

            }

            .bg-shadow {

                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

            }

            .circleAndNo {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: 2;
                font-size: 80%;
                font-weight: bold;
                height: 1.7rem;
                width: 1.7rem;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                cursor: pointer;
            }

            .circleAndNo elem {

                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);

            }

            .circleAndNo span {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                height: 180%;
            }

            .fa-paint-brush {
                pointer-events: none;
            }

            textarea {
                resize: none;
            }

            .hover-pop {

                pointer-events: none;

            }

            /*
            .custom-dark-popover .arrow::after, .custom-dark-popover .arrow::before {

            border-top-color: #343a40;
            border-bottom-color: #343a40;

            }
            */

            .detailBox {
                position: absolute;
                z-index: 5;
                display: none;
                cursor: pointer;
            }

            .detailBox-text {

                position: relative;
                max-width: 100%;
                white-space: nowrap;
                overflow: hidden;

            }

            .span-No {
                min-width: 8.5%;
            }

            .detailBox-Big {

                top: 100%;
                left: 0%;
                /*								display: none;*/
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

            }

            .deletecircleAndNo {

                cursor: pointer;

            }

            .setting-btn {

                position: relative;

            }

            .settings-btn span {

                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                height: 1.5rem;

            }

            .box {

                height: 3rem;
                width: 4rem;
                position: relative;
                cursor: pointer;

            }

            .rtbt-subBox {

                right: 0px;
                bottom: 0px;

            }

            .ltbt-subBox {

                left: 0px;
                bottom: 0px;

            }

            .lttp-subBox {

                top: 0px;
                left: 0px;

            }

            .rttp-subBox {

                top: 0px;
                right: 0px;

            }

            .bgbt-subBox {

                bottom: 0px;

            }

            .custom-popover-header::before {
                width: 0rem !important;
            }

            .settings-btn {
                position: relative;
                cursor: pointer;
                font-size: 80%;
            }

            #overlay {

                left: 50%;
                transform: translate(-50%, 0);
                z-index: 3;

            }

            .image {

                display: block;
                width: auto;
                height: auto;

            }

            .custom-hide {
                position: absolute !important;
                top: -9999px !important;
                left: -9999px !important;
            }

            .overflow-hidden {
                overflow: hidden;
            }

            .ui-dialog-titlebar {
                display: none;
            }

            .logout-btn {
                cursor: pointer;
            }

            .check-label label {
                height: 0px;
            }

            .custom-control-input:checked~.custom-control-label::before {

                background-color: #18a2b9 !important;

            }

            .back-btn {
                cursor: pointer;
            }

            /*Story Board CSS here*/

            .card img {

                max-width: 100%;

            }

            .grid-item a:hover {
                text-decoration: none;
            }

            .draft-badge {

                position: absolute;
                top: 0.5em;
                right: 0.5em;

            }

            .modal-spinner {

                position: absolute;
                top: 0%;
                width: 100%;
                height: 100%;
                z-index: 1000;
                background-color: rgba(0, 0, 0, 0.4);

            }

            .spinner {

                position: fixed;
                z-index: 1000;
                top: 50%;
                left: 50%;
                width: 4rem;
                height: 4rem;
                border-radius: 50%;
                border: 0.2rem solid transparent !important;
                border-top: 0.1rem solid #ffc107 !important;
                border-right: 0.1rem solid #ffc107 !important;
                border-bottom: 0.1rem solid #ffc107 !important;
                margin-top: -2rem;
                margin-left: -2rem;
                pointer-events: none;
                animation: spin 2s linear infinite;

            }

            @keyframes spin {
                0% {
                    transform: rotate(0deg);
                }
                100% {
                    transform: rotate(360deg);
                }
            }

            .upload-btn-wrapper {

                cursor: pointer;
                /*				pointer-events: none;*/
            }

            .upload-btn-wrapper input[type=file] {

                position: absolute;
                top: -1000px;

            }

            .upload-textarea-wrapper .heading {

                z-index: 2;
                pointer-events: none;

            }

            .upload-btn-text {

                font-size: 200%;

            }

            .upload-textarea-wrapper textarea {

                font-size: 200%;
                z-index: 1;

            }

            .ok-btn {

                cursor: pointer;

            }

            .ok-btn-box {

                position: absolute;
                bottom: 0px;
                right: 0px;
                display: none;
                opacity: 0;
                z-index: 3;

            }

            .ok-btn-file {

                bottom: 0px;
                right: 0px;

            }

            .ok-btn-box label {

                height: 0px;

            }

            .ok-btn-box .error-span {

                display: none;

            }

            small {

                pointer-events: none;

            }

            #upload-error {

                display: none;

            }

            .preview-image-box {

                display: none;
                opacity: 0;

            }

            .card {
                cursor: pointer;
            }

            .small-elem {

                font-size: 80%;
            }

        </style>

        <title>Get the region to show</title>
    </head>

    <body class="bg-info text-light">

        <div class="btn-container dialog">

            <div class="d-flex flex-column">

                <div class="w-100 bg-dark bg-shadow p-4">

                    <div class="d-flex align-items-center mx-1">

                        <h1 class="display-4">
                            <?php 
                            echo ucfirst($_SESSION["nameUser"]); 
                            if (isset($_SESSION['idPicture'])) {
                                echo $_SESSION['idPicture'];
                            }
                            ?> </h1>

                        <a href="logout.php" class="text-light mx-2"><i class="fas fa-sign-out-alt"></i></a>

                    </div>

                    <div class="d-flex flex-wrap my-1">

                        <button type="button" class="open-btn btn btn-lg m-1 btn-info">Make a story now <i class="fas fa-plus"></i></button>

                        <div class="w-100"></div>

                        <button type="button" class="contribution-btn btn btn-sm m-1 btn-light">
                            Contributions <span class="badge badge-info">18</span>
                        </button>

                        <div class="w-100 d-sm-none"></div>

                        <button type="button" class="published-btn btn btn-sm m-1 btn-light">
                            Published <span class="badge badge-success">4</span>
                        </button>

                        <button type="button" class="drafts-btn btn btn-sm m-1 btn-light">
                            Drafts <span class="badge badge-danger">14</span>
                        </button>

                    </div>

                </div>

                <div class="grid pt-2">

                    <?php

                    $conn = new mysqli("localhost", "root", "", "mydb");

                    $myObj = new stdClass();

                    if ($conn->connect_error) {

                        echo "<div class='grid-item col-6 col-sm-4 col-md-3 col-lg-2 px-2 pb-2'>Couldn't connect to the database</div>".$conn->connect_error;

                    }  else {

                        $sql = "SELECT * FROM `picture` WHERE `users_idUsers` = '" . $_SESSION["idUser"] . "'";

                        if ($result = mysqli_query($conn, $sql)) {

                            if (mysqli_num_rows($result)  > 4) {

                                echo '<div class="grid-item col-6 col-sm-4 col-md-3 col-lg-2 m-0 p-0"></div>';

                            }

                            while ($row = mysqli_fetch_assoc($result)) {

                                if (strpos($row['img_thumbnail_link'], 'http://') === 0) {

                                    echo '
								<div class="grid-item col-6 col-sm-4 col-md-3 col-lg-2 px-1 pb-2">
										<div class="card p-0 bg-dark bg-shadow">';

                                    if ($row['edit_status'] == 0) {

                                        echo '	<div class="badge badge-danger draft-badge">Draft</div>';

                                    } else {

                                        echo '	<div class="badge badge-success draft-badge">Published</div>';

                                    }

                                    echo '	<img class="card-image-top rounded-top border border-dark" src="'.$row['img_thumbnail_link'].'"  alt="">
											<div class="card-body p-1">
												<h6 class="card-text">Battle of Chawinda</h6>
												<div class="mb-1"><small class="text-muted">created on 25 Apr 2018</small></div>
											</div>
										</div>
								</div>';

                                }

                            }

                            $conn->close();

                        } else {

                            echo "<div class='grid-item col-6 col-sm-4 col-md-3 col-lg-2 px-2 pb-2'></div>" . mysqli_error($conn);

                        }

                    }

                    ?>

                </div>

            </div>

        </div>

        <div class="container-fluid mainPage">

            <div id="dialog-uploadImage" class="container dialog d-flex align-items-center justify-content-center">

                <div class="col-lg-4 col-md-6 col-sm-8 col-12 bg-dark rounded text-light bg-shadow p-0 m-0">

                    <div class="p-0 m-0 upload-image-box">

                        <div class="my-0 position-relative h-50 bg-dark rounded-top ">

                            <label class="position-absolute upload-btn-wrapper w-100 h-100 d-flex align-items-center justify-content-center flex-wrap">

                                <div class="upload-error-here text-light text-center">
                                    <h5 class="upload-btn-text"><i class="fas fa-upload"></i></h5> 
                                    <small>Click here to upload your image</small>
                                </div>

                                <input id="imgInp" type="file" name="myfile"/>

                            </label>

                            <div class="preview-image-box position-absolute rounded-top bg-dark w-100 h-100 align-items-center justify-content-center">

                                <div class="position-relative w-50 h-50 d-flex align-items-center justify-content-center flex-wrap">

                                    <img class="bg-light rounded p-1 text-dark" id="imgPreview" src="" alt="Image preview...">

                                    <small class="my-1"><i class="text-success fas fa-check-circle"></i> Yep looks good.</small>

                                </div>

                                <div class="ok-btn-file position-absolute d-flex align-items-end">

                                    <span class="change-upload-btn px-2 py-1 rounded mr-1 mb-1 bg-light text-dark "><small>Change</small></span>

                                    <span class="next-upload-btn px-2 py-1 rounded mr-1 mb-1 bg-light text-dark"><small>Next</small></span>

                                </div>

                            </div>

                        </div>

                        <div class="my-0 position-relative upload-textarea-wrapper h-50 border border-dark rounded-bottom">

                            <div class="heading position-absolute w-100 h-100 text-light d-flex align-items-center justify-content-center">
                                <div class="text-dark text-center">
                                    <h5 class="upload-btn-text"><i class="fas fa-clipboard"></i></h5>
                                    <small>Paste the link to your image here</small>
                                </div>
                            </div>

                            <form class="validate-image-exists">

                                <textarea id="image-link" name="image-link" class="border border-light bg-light position-absolute w-100 h-100 rounded-bottom p-4"></textarea>


                                <div class="ok-btn-box d-flex align-items-end rounded m-1 bg-dark">

                                    <span class="error-span px-2 py-1 text-light">

                                        <small>
                                            <label for="image-link" generated="true" class="error"></label>
                                        </small>

                                    </span>

                                    <span class="ok-btn px-2 py-1"><small>Next</small></span>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

            <div id="dialog-final" class="pt-md-2 pt-0 d-flex flex-wrap align-items-stretch justify-content-center">

                <div class="col-lg-8 col-md-10 col-12 order-mdm-1 order-2 mx-0 p-0 rounded-top">

                    <div class="img-block">

                        <div id="overlay" class="position-absolute">

                            <div class="detailBox bg-dark rounded">

                                <!--
<small class="border-right px-1 rounded-left">1</small>
<small class="border-right px-1">2</small>
<small class="border-right px-1">3</small>
<small class=" px-1 rounded-right">4</small>
-->

                            </div>

                            <canvas data-html2canvas-ignore class="" id="myCanvas"></canvas>

                        </div>

                        <div class="" id="for-printing">

                            <div class="circleAndNo rounded-circle bg-info text-light">
                                <span data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></span>
                                <elem></elem>
                            </div>

                            <!--<img class="image mx-auto border border-dark rounded-top" id="blah" src="01f.%20img.jpg" alt="">-->

                            <!--<img class="image mx-auto border border-dark rounded-top" id="blah" src="http://res.cloudinary.com/miscellaneous/image/upload/v1528352946/7185GrAb4uL._SL1406_.jpg" alt="">-->

                            <img class="image bg-shadow mx-auto border border-dark rounded-top" id="blah" src="" alt="">

                            <div class="position-relative mx-auto detailBox-Big">

                                <div class="d-flex flex-wrap bg-dark rounded-bottom">

                                    <!--
<div class="col-md-4 col-sm-6 col-12 text-left p-2">

<span class="badge badge-light">1</span>
<small >Quickly manage the layout, alignment, and sizing of grid columbox utilities. For more complex implementations, custom CSS may be necessary.</small>

</div>
-->

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="order-md-2 order-1">

                    <div class="carry-menu d-flex align-items-center">

                        <div class="d-md-block mx-auto d-flex justify-content-center col-md-12 col-11 mx-2 text-center align-items-center">

                            <div data-toggle="tooltip" data-placement="left" title="Close" class="canvas-btn close-btn border rounded p-1 px-md-3 px-2 m-1"><i class="fas fa-times"></i></div>

                            <div data-toggle="tooltip" data-placement="left" title="Download as .Jpeg" class="download-pic canvas-btn border rounded p-1 px-md-3 px-2 m-1"><i class="fas fa-download"></i></div>

                            <div data-toggle="tooltip" data-placement="left" title="Shift + Ctrl + Z (Redo)" class="redo canvas-btn border rounded p-1 px-md-3 px-2 m-1"><i class="fas fa-redo"></i></div>

                            <div data-toggle="tooltip" data-placement="left" title="Ctrl + Z (Undo)" class="undo canvas-btn border rounded p-1 px-md-3 px-2 m-1"><i class="fas fa-undo"></i></div>

                            <div class="settings-btn border rounded bg-light text-dark p-1 px-md-3 px-2 m-1">
                                <i class="fas fa-cog"></i>
                                <span data-container="body" data-toggle="popover" data-placement="bottom" data-content=".."></span>
                            </div>

                            <div data-toggle="tooltip" data-placement="left" title="Done" class="share-btn canvas-btn border rounded p-1 px-md-3 px-2 m-1"><i class="fas fa-share"></i></div>

                        </div>
                    </div>

                </div>

            </div>

            <div id="dialog-share" class="container d-flex align-items-center justify-content-center">

                <div class="col-lg-4 col-md-6 col-sm-8 col-12 bg-dark rounded p-3 text-light bg-shadow">

                    <form id="share-form" method="post" action="http://localhost/themepic/save_photo.php" novalidate>

                        <div class="form-group">

                            <div class="d-flex justify-content-between align-items-center">

                                <label for="in-title">Title <span class="text-muted">(Optional)</span></label>

                                <small class="text-warning pl-2 text-right"><label for="in-title" generated="true" class="error"></label></small>

                            </div>

                            <input name="in-title" type="text" class="form-control" id="in-title" aria-describedby="emailHelp" placeholder="Fall of titans">

                            <div class="pt-1">

                                <small class="text-muted">Title is recommended as it will help you and others find your story easily</small>

                            </div>

                        </div>

                        <div class="form-group">

                            <label for="in-link">Your Link</label>

                            <div class="p-2 bg-white rounded">
                                <div class="d-none"><i class="far fa-copy"></i></div>
                                <code id="link2page" class="text-dark"></code>
                            </div>

                            <div class="pt-1">

                                <small class="text-muted">Visible to you only till you publish</small>

                            </div>

                        </div>

                        <button type="button" class="publish-btn btn btn-info">Publish</button>
                        <button type="button" class="edit-btn btn btn-outline-light">Edit</button>

                    </form>

                </div>

            </div>

        </div>

        <img class="image-for-storage position-absolute" id="blah" src="" alt="" style="top: -9999px; left: -9999px; opacity: 0">

        <canvas id="canvas-for-storage" style="top: -9999px; left: -9999px; opacity: 0"></canvas>

        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        <script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.0/additional-methods.js"></script>
        <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

        <script type="text/javascript">

            var canvas = document.getElementById('myCanvas');
            var context = canvas.getContext('2d');
            let circleAndNo = $('.circleAndNo:eq(-1)').hide();
            let clicking = false;
            let x;
            let sliderValue = 50;
            let fitcanvas = fitToContainer(canvas);
            let markerOnCanvasClicked = false;
            let oneInProgress = false;
            let sliderVal = $('.slider').val();
            let mouseEnteredPopOverAlready = false;
            let eventSequence = new Array();

            let wht = $(window).height();
            let wwt = $(window).width();

            let undoNredo = new command();

            let allFunctions = [];

            let undoneFunctions = [];

            function command(instance) {

                this.DOMelem = '';
                this.data1 = '';
                this.arrayData = [];
                this.arrayData2 = [];
                this.undoresult = [];
                this.freshresults = [];
                this.executedResult = '';

                this.executeInCommand = function execute(DOM, data1, data2) {

                    this.DOMelem = DOM
                    this.data1 = data1;
                    this.arrayData.push(data2);
                    allFunctions.push(instance);
                    this.executedResult = instance.execute(DOM, data1, data2);

                };

                this.undoInCommand = function undo() {

                    var command = allFunctions.pop();
                    undoneFunctions.push(command);
                    circleAndNo.hide().css({
                        opacity: 1
                    });
                    return command.undo();


                };

                this.redoInCommand = function redo() {

                    var command = undoneFunctions.pop();
                    allFunctions.push(command);
                    circleAndNo.hide().css({
                        opacity: 1
                    });
                    return command.redo();

                };

            }

            function fitToContainer(canvas) {
                //				Make it visually fill the positioned parent
                canvas.style.width = '100%';
                canvas.style.height = '100%';
                // 				...then set the internal size to match
                canvas.width = canvas.offsetWidth;
                canvas.height = canvas.offsetHeight;
            }

            function getMousePos(canvas, evt) {
                var rect = canvas.getBoundingClientRect();

                return {
                    x: evt.clientX - rect.left,
                    y: evt.clientY - rect.top
                };
            }

            function storeEvent() {

                let oldVisibleDOM = $.grep($('.detailBox'), function(item) {

                    if ($(item).css('display') != 'none') {

                        return item;

                    }

                })

                let oldVisibleBigDOM = ($.grep($('.detailBox-Big'), function(item) {

                    if ($(item).css('display') != 'none') {

                        return item;

                    }

                }))

                eventSequence.push({

                    event: 'Last Small Box Position or Big Box',
                    oldPosnElem: $(oldVisibleDOM[0]).css(['top', 'right', 'bottom', 'left']) || oldVisibleBigDOM[0]

                })

                return eventSequence;

            }

            $(document).ready(function() {

                $('.btn-container').height(wht);

                $('.upload-image-box').height(wht / 1.5);

                $('[data-toggle="popover"]').popover({

                    animation: true,

                });

                $('[data-toggle="tooltip"]').tooltip();

                $("#dialog-final").dialog({
                    resizable: false,
                    height: 'auto',
                    width: 'auto',
                    position: {
                        my: "center top",
                        at: "center top",
                        of: window
                    },
                    //					modal: true,
                    autoOpen: false,
                    appendTo: ".mainPage",
                    show: {
                        effect: "fade",
                        duration: 500
                    },
                })

                $("#dialog-uploadImage").dialog({
                    resizable: false,
                    height: 'auto',
                    width: 'auto',
                    position: {
                        my: "center",
                        at: "center",
                        of: window
                    },
                    modal: true,
                    autoOpen: false,
                    appendTo: ".mainPage",
                    show: {
                        effect: "fade",
                        duration: 500
                    }
                });

                $("#dialog-share").dialog({
                    resizable: false,
                    height: 'auto',
                    width: 'auto',
                    position: {
                        my: "center",
                        at: "center",
                        of: window
                    },
                    modal: true,
                    autoOpen: false,
                    appendTo: ".mainPage",
                    show: {
                        effect: "fade",
                        duration: 500
                    }
                });

            })

            $(window).resize(function() {

                wht = $(window).height();
                wwt = $(window).width();

                $('.mainPage').height(wht);

                $('.image').css({
                    'max-height': wht / 1.1,
                    'max-width': '100%'
                });

                let imgWt = $('.image').width();
                let imgHt = $('.image').height();

                $('.carry-menu').height(imgHt);

                if (wwt < 767) {

                    $('.carry-menu').height('auto');

                }

                $('#overlay').css({
                    height: imgHt,
                    width: imgWt
                });

                $('.detailBox-Big').css({
                    width: imgWt + 2
                });

                $('.circleAndNo').each(function(key, value) {

                    if ($(this).data().percentX) {

                        let percent = $(this).data();

                        $('.circleAndNo:eq(' + key + ')').css({
                            left: percent.percentX * $('#myCanvas').width() + $('#overlay').position().left,
                            top: percent.percentY * $('#myCanvas').height(),
                            'font-size': percent.mFontSize * $('#myCanvas').width(),
                            height: percent.mHeight * $('#myCanvas').width(),
                            width: percent.mWidth * $('#myCanvas').width()
                        })

                    }

                })

                $("#dialog-final").dialog("option", "position", {
                    my: "center top",
                    at: "center top",
                    of: window
                });

                $("#dialog-share").dialog("option", "position", {
                    my: "center",
                    at: "center",
                    of: window
                });

                $("#dialog-uploadImage").dialog("option", "position", {
                    my: "center",
                    at: "center",
                    of: window
                });

            })

            canvas.addEventListener('mousemove', function(evt) {

                if (oneInProgress) {

                    $('#myCanvas').css({
                        'cursor': 'not-allowed'
                    })
                    return

                };

                $('#myCanvas').css({
                    'cursor': 'copy'
                })

                circleAndNo.show();

                var mousePos = getMousePos(canvas, evt);

                let leftOfCanvas = $('#overlay').position().left;

                circleAndNo.css({
                    top: mousePos.y,
                    left: leftOfCanvas + mousePos.x
                });

                let visibleCircles = $.grep($('.circleAndNo'), function(item) {

                    if ($(item).css('display') != 'none') {
                        return item;
                    };

                })

                circleAndNo.children('elem').html(visibleCircles.length);

            }, false); // MOVE ON CANVAS

            function getEditFormatOfPopover() {

                return `
<h6 class="">Add Comment</h6>

<textarea rows="3" class="popTextArea px-2 w-100 border border-dark rounded text-dark" placeholder="It happened before summers... (min 5 characters)"></textarea>

<div class="d-flex justify-content-between align-items-center">

<span class="deletecircleAndNo text-center"><i class="fas fa-times px-2"></i></span>
<button class="popBtn btn btn-sm btn-dark no-active" disabled>Save</button>

            </div>
`;

            }

            let createEditablePopover = new command({

                execute: function() {

                    let circleNo = createEditablePopover.DOMelem;

                    $(circleNo).data({
                        editFlag: true
                    }).children('span').popover('show');

                    let elem = getEditFormatOfPopover();

                    $('.popover').removeClass('hover-pop custom-dark-popover bg-dark');

                    $('.popover-body:eq(-1)').html(elem);

                    createEditablePopover.freshresults.push(circleNo);

                    eventSequence.push({
                        event: 'editable popover created',
                        markerDOM: circleNo
                    })

                    oneInProgress = true;

                    console.log('Editable popover is created');

                },

                undo: function() {

                    let circleNo = createEditablePopover.freshresults.pop();

                    createEditablePopover.undoresult.push(circleNo);

                    $(circleNo).data({
                        editFlag: false
                    }).children('span').popover('hide');

                    oneInProgress = false;

                    return 'editable pop up hides';

                },

                redo: function() {

                    let circleNo = createEditablePopover.undoresult.pop();

                    createEditablePopover.freshresults.push(circleNo);

                    $(circleNo).data({
                        editFlag: true
                    }).children('span').popover('show');;

                    let elem = getEditFormatOfPopover();

                    $('.popover').removeClass('hover-pop custom-dark-popover bg-dark');

                    $('.popover-body:eq(-1)').html(elem);

                    oneInProgress = true;

                    undoNredo.redoInCommand();

                    return 'editable pop up shows';

                }

            })

            let markerCreated = new command({

                execute: function() {

                    let DOM = markerCreated.DOMelem;
                    let event = markerCreated.data1;

                    circleAndNo.clone().prependTo('#for-printing');

                    let mousePos = getMousePos(DOM, event);
                    let percentX = mousePos.x / $(DOM).width();
                    let percentY = mousePos.y / $(DOM).height();
                    let mFontSize = $('.circleAndNo:eq(0)').css('font-size').slice(0, -2) / $(DOM).width();
                    let mHeight = $('.circleAndNo:eq(0)').height() / $(DOM).width();
                    let mWidth = $('.circleAndNo:eq(0)').width() / $(DOM).width();

                    $('.circleAndNo:eq(0)').css({
                        'z-index': 4
                    }).data({
                        'percentX': percentX,
                        'percentY': percentY,
                        'mFontSize': mFontSize,
                        'mHeight': mHeight,
                        'mWidth': mWidth
                    });

                    let visibleCircles = $.grep($('.circleAndNo'), function(item) {

                        if ($(item).css('display') != 'none') {
                            return item;
                        };

                    })

                    circleAndNo.children('elem').html(visibleCircles.length);

                    markerCreated.freshresults.push($('.circleAndNo:eq(0)')[0]);

                    eventSequence.push({
                        event: 'marker created',
                        markerDOM: $('.circleAndNo:eq(0)')[0]
                    })

                    console.log('circle:eq(0) is created');

                    return $('.circleAndNo:eq(0)')[0];

                },

                undo: function() {

                    let circleNo = markerCreated.freshresults.pop();

                    markerCreated.undoresult.push(circleNo);

                    $(circleNo).hide();

                    reDrawCanvasMarkers();

                    store_circle_data();

                    return 'circle on canvas is hide()';

                },

                redo: function() {

                    let circleNo = markerCreated.undoresult.pop();

                    markerCreated.freshresults.push(circleNo);

                    $(circleNo).show();

                    reDrawCanvasMarkers();

                    oneInProgress = true;

                    return 'circle on canvas is show()'

                }

            })

            function reDrawCanvasMarkers() {

                let visibleCircles = $.grep($('.circleAndNo'), function(item) {

                    if ($(item).css('display') != 'none') {

                        return item;

                    };

                })

                let totalMarkersOnCanvas = visibleCircles.length;

                $.each(visibleCircles, function(key, value) {

                    $(this).children('elem').html(totalMarkersOnCanvas - key)

                })

                $('.circleAndNo').last().children('elem').html(totalMarkersOnCanvas + 1);

                return true;

            }

            canvas.addEventListener('mousedown', function(evt) {

                if (oneInProgress) {
                    return
                };

                markerCreated.executeInCommand(this, evt);

                let circleNo = markerCreated.executedResult;

                createEditablePopover.executeInCommand(circleNo);

            }, false); // MARKER PLOTTING IN CANVAS

            canvas.addEventListener('mouseleave', function(evt) {

                circleAndNo.hide();

            });

            $(document).on('mouseenter mouseleave', '.circleAndNo', function(e) {

                $(this).toggleClass('bg-dark').toggleClass('bg-light');

                if ($(this).data().editFlag || !($(this).data().comment)) {
                    return
                };

                $(this).children().popover('toggle');

                console.log('2 circle mouseenter');

                $('.popover:eq(-1)').addClass('hover-pop custom-dark-popover bg-dark');

                let elem = `
<div class="text-here p-2 w-100 bg-dark rounded text-light">` + $(this).data('comment') + `</div>
<div class="px-2"><small class="text-muted notify-in-pop py-2 text-light text-left">Press to edit or delete</small></div>
`;

                $('.popover-body:eq(-1)').html(elem);

                if (oneInProgress) {

                    $('.notify-in-pop').html('An edit is open');

                }

            })

            $(document).on('shown.bs.popover', '.circleAndNo', function(e) {

                let el = $('.popover:eq(-1)').css('transform');

                function getTransform(el) {

                    var results = el.match(/matrix(?:(3d)\(\d+(?:, \d+)*(?:, (\d+))(?:, (\d+))(?:, (\d+)), \d+\)|\(\d+(?:, \d+)*(?:, (\d+))(?:, (\d+))\))/)

                    if (!results) return [0, 0, 0];
                    if (results[1] == '3d') return results.slice(2, 5);
                    results.push(0);
                    return results.slice(5, 8);

                }

                let popHeight = parseInt(getTransform(el)[1], 10) + $('.popover:eq(-1)').height();

                console.log('popHt: ' + popHeight,
                            'popTop: ' + getTransform(el)[1],
                            'circleTop: ' + $(this).css('top'));

                if (popHeight >= $(document).height() * 0.9) {

                    $('.custom-dark-popover .arrow').remove();

                }

                $('#dynamic').remove();

                let popId = '#' + $(this).find('span').attr('aria-describedby');

                console.log($(popId).last().attr('x-placement'));

                if ($(popId).last().attr('x-placement') == 'bottom') {

                    $("<style type='text/css' id='dynamic' />").appendTo("head");

                    $("#dynamic").text(`

.custom-dark-popover .arrow::after {


border-bottom-color: #343a40;


}`

                                      );

                } else {

                    $("<style type='text/css' id='dynamic' />").appendTo("head");

                    $("#dynamic").text(`

.custom-dark-popover .arrow::after {


border-top-color: #343a40;


}`

                                      );

                }


            })

            $(document).on('click', '.circleAndNo', function() {

                if (oneInProgress) {
                    return
                };

                createEditablePopover.executeInCommand(this);

                placeCircleDatainTextArea($(this).data().comment);

            })

            function placeCircleDatainTextArea(comment) {

                $('.popTextArea:eq(-1)').html(comment);

                if ($('.popTextArea:eq(-1)').val().length > 4) {

                    $('.popBtn:eq(-1)').removeAttr('disabled', 'disabled');

                }

                console.log('data placed in the text area');

            }

            $(document).on('keyup', '.popTextArea', function() {

                if (!(($(this).val().length) >= 5)) {

                    $('.popBtn').attr('disabled', 'disabled');

                    return

                }

                $('.popBtn').removeAttr('disabled');

            })

            let dataAmendinPop = new command({

                execute: function(DOMelem) {

                    dataAmendinPop.freshresults.push($(DOMelem).data().comment);

                    console.log('data amended in text area');

                    return true;

                },

                undo: function() {

                    let currentData = $('.popTextArea').val();

                    dataAmendinPop.undoresult.push(currentData);

                    let oldData = dataAmendinPop.freshresults.pop();

                    if (!oldData) {

                        undoNredo.undoInCommand();

                        return 'No data found so cleared the textarea';

                    }

                    $('.popTextArea').val(oldData);

                    $('.popBtn').removeAttr('disabled');

                    return 'Old value replaced in textarea';

                },

                redo: function() {

                    let currentData = $('.popTextArea').val();

                    if (currentData) {

                        dataAmendinPop.freshresults.push(currentData);

                    }

                    let newData = dataAmendinPop.undoresult.pop();

                    $('.popTextArea').val(newData);

                    $('.popBtn').removeAttr('disabled');

                    return 'New value placed in textarea';

                }


            })

            let popGoesHidden = new command({

                execute: function(DOMelem, notReq, newData) {

                    let circleNo = $('[aria-describedby="' + $(DOMelem).closest('.popover').attr('id') + '"]').closest('.circleAndNo');

                    oneInProgress = false;

                    $(circleNo).data({
                        comment: newData,
                        editFlag: false
                    }).children('span').popover('hide');

                    circleAndNo.css({
                        opacity: 1
                    });

                    popGoesHidden.freshresults.push(circleNo);

                    console.log('Data saved in circle and popover goes hidden');

                    return true;

                },

                undo: function() {

                    let circleNo = popGoesHidden.freshresults.pop();

                    popGoesHidden.undoresult.push(circleNo);

                    let prvsData = popGoesHidden.arrayData.pop();

                    popGoesHidden.arrayData2.push(prvsData);

                    console.log('prvs Data', popGoesHidden.arrayData);

                    $(circleNo).data({
                        comment: prvsData,
                        editFlag: true
                    }).children('span').popover('show');

                    let elem = getEditFormatOfPopover();

                    $('.popover').removeClass('custom-dark-popover bg-dark');

                    $('.popover-body:eq(-1)').html(elem);

                    placeCircleDatainTextArea(prvsData);

                    oneInProgress = true;

                    return 'Popover editable format is opened now';

                },

                redo: function() {

                    oneInProgress = false;

                    let circleNo = popGoesHidden.undoresult.pop();

                    popGoesHidden.freshresults.push(circleNo);

                    let prvsData = popGoesHidden.arrayData2.pop();

                    popGoesHidden.arrayData.push(prvsData);

                    $(circleNo).data({
                        comment: prvsData,
                        editFlag: false
                    }).children('span').popover('hide');

                    store_circle_data();

                    return 'Popover goes hide';


                }

            })

            let givedatatotextbox = function() {

                let comments = new Array();

                let smallelem = ``;
                let bigelems = ``;

                $.each($('.circleAndNo'), function(key, value) {

                    if ($(this).data().comment && $(this).css('display') != 'none') {

                        comments[$(this).find('elem').html() - 1] = $(this).data().comment;

                    }

                })

                let needColAdjustments = false;

                $('.detailBox-Big').find('.rounded-bottom').children().remove();

                $('.detailBox').children().remove();

                $.each(comments, function(key, value) {

                    smallelem = `<span class="small-elem border-right px-1">` + (key + 1) + `</span>`;

                    bigelems = `<div class="big-text-here col-md-4 col-sm-6 col-12 text-left p-2">
<span class="badge badge-light">` + (key + 1) + `</span>
<small>` + value + `</small>
            </div>`;

                    $('.detailBox').append(smallelem);

                    $('.detailBox-Big').find('.rounded-bottom').append(bigelems);

                    $('.big-text-here').last().data({
                        textLength: value.length,
                        textBlock: Math.floor(key / 3)
                    });

                    if (value.length > 125) {

                        needColAdjustments = true;

                    }

                })

                $('.small-elem:eq(-1)').removeClass('border-right');

                if (!needColAdjustments) {

                    return;

                }

                needColAdjustments = false;

                let spaceAval = 12;
                let rowNo = 0;
                let rowAlloted = 0;
                let cArray = [];
                let rowArray = [];

                $.each($('.big-text-here'), function(key, value) {

                    let currentBlock = $(value).data().textBlock;

                    let sumLength = 0;

                    let totalSize = $.grep($('.big-text-here'), function(item) {

                        if ($(item).data().textBlock == currentBlock) {

                            sumLength += $(item).data().textLength;

                        }

                    });

                    let ownPercent = $(value).data().textLength / sumLength * 100;

                    let ineed = function() {

                        if (ownPercent <= 60) {

                            return 4;

                        }

                        if (ownPercent <= 90) {

                            return 8;

                        }

                        if (ownPercent <= 100) {

                            return 12;

                        }

                    }

                    let giveSpace = function(needed, item) {

                        if (needed <= spaceAval) {

                            spaceAval = spaceAval - needed;

                            cArray.push(item);

                            return rowNo;

                        }

                        cArray = [];

                        rowNo = rowNo + 1;

                        spaceAval = 12;

                        //						console.log(needed,item);

                        return giveSpace(needed, item);

                    }

                    let needed = ineed();

                    rowAlloted = giveSpace(needed, $(this));

                    $(this).data({
                        neededSpace: needed,
                        rowAlloted: rowAlloted
                    });

                    rowArray[rowAlloted] = cArray;

                    //					console.log($(this).data());

                });

                $.each(rowArray, function(key, value) {

                    let className = function() {

                        if (value.length == 1) {

                            value[0].toggleClass('col-md-4 col-md-12 col-sm-6 col-sm-12');

                            return 'col-md-12';

                        }

                        if (value.length == 3) {

                            value[2].toggleClass('col-sm-6 col-sm-12');
                            return 'col-md-4';

                        }

                        if (value.length == 2) {

                            if (value[0].data().neededSpace == value[1].data().neededSpace) {

                                value[0].toggleClass('col-md-4 col-md-6');
                                value[1].toggleClass('col-md-4 col-md-6');

                                return 'col-md-6 col-md-6';

                            }

                            if (value[0].data().neededSpace == 8) {

                                value[0].toggleClass('col-md-4 col-md-8');

                                return 'col-md-8 col-md-4';

                            }

                            value[1].toggleClass('col-md-4 col-md-8');

                            return 'col-md-4 col-md-8';


                        }

                    }

                    //					console.log(className());

                    className();

                })

            }

            $(document).on('mouseenter mouseleave', '.small-elem', function() {

                let serNo = parseInt($(this).html());

                let thisCircle = $.grep($('.circleAndNo'), function(item) {

                    return $(item).find('elem').html() == serNo;

                })

                $(thisCircle).trigger('mouseenter');

                $(this).toggleClass('bg-light text-dark');

            })

            $(document).on('mouseenter mouseleave', '.big-text-here', function() {

                let serNo = parseInt($(this).find('.badge').html());

                let thisCircle = $.grep($('.circleAndNo'), function(item) {

                    return $(item).find('elem').html() == serNo;

                })

                $(thisCircle).trigger('mouseenter');

                $(this).toggleClass('bg-light text-dark');

            })

            $(document).on('click', '.popBtn', function() {

                let oldData = $('[aria-describedby="' + $(this).closest('.popover').attr('id') + '"]').closest('.circleAndNo').data().comment;

                let newData = $('.popTextArea').val();

                if (oldData != newData) {

                    let circleNo = $('[aria-describedby="' + $(this).closest('.popover').attr('id') + '"]').closest('.circleAndNo');

                    dataAmendinPop.executeInCommand(circleNo, false, false);

                    eventSequence.push({

                        event: 'data amended in textArea',
                        markerDOM: circleNo,
                        data: oldData

                    })

                }

                popGoesHidden.executeInCommand(this, false, newData);

                store_circle_data();

                eventSequence.push({

                    event: 'Edit Pop goes hidden',
                    markerDOM: $('[aria-describedby="' + $(this).closest('.popover').attr('id') + '"]').closest('.circleAndNo'),
                    data: newData

                })

            })

            $(document).on('mouseenter mouseleave', '.deletecircleAndNo', function() {

                $(this).toggleClass('border rounded text-light').siblings('.popBtn').toggleClass('btn-dark btn-light').closest('.popover').toggleClass('bg-dark text-light custom-dark-popover').find('.popTextArea').toggleClass('text-dark text-light bg-dark border-light border-dark').siblings('h6').toggleClass('text-light').parent('.popover');

                $('[aria-describedby="' + $(this).closest('.popover').attr('id') + '"]').closest('.circleAndNo').toggleClass('bg-dark bg-light');

            })

            let markerDeleted = new command({

                execute: function() {

                    let DOM = markerDeleted.DOMelem;

                    oneInProgress = false;

                    $('[aria-describedby="' + $(DOM).closest('.popover').attr('id') + '"]').closest('.circleAndNo').hide();

                    $(DOM).closest('.popover').remove();

                    reDrawCanvasMarkers();

                    return $('[aria-describedby="' + $(DOM).closest('.popover').attr('id') + '"]').closest('.circleAndNo');

                },

                undo: function() {

                    let circleAndNo = markerDeleted.executedResult;

                    oneInProgress = true;

                    $(circleAndNo).removeClass('bg-dark bg-light').show();

                    reDrawCanvasMarkers();

                    let comment = circleAndNo.data().comment;

                    $(circleAndNo).children('span').popover('show');

                    let elem = getEditFormatOfPopover();

                    $('.popover').removeClass('custom-dark-popover bg-dark');

                    $('.popover-body:eq(-1)').html(elem);

                    $('.circleAndNo:eq(0)').data({
                        editFlag: true
                    });

                    $('.popTextArea').val(comment);

                    if (comment && comment.length > 4) {

                        $('.popBtn').removeAttr('disabled');

                    }

                    return 'editable popover no entry yet';

                },

                redo: function() {

                    let circleAndNo = markerDeleted.executedResult;

                    oneInProgress = false;

                    $(circleAndNo).hide().children('span').popover('hide');

                    reDrawCanvasMarkers();

                    store_circle_data();

                    return 'marker deleted again';

                }

            })

            $(document).on('click', '.deletecircleAndNo', function() {

                eventSequence.push({
                    event: 'marker deleted',
                    markerDOM: $('[aria-describedby="' + $(this).closest('.popover').attr('id') + '"]').closest('.circleAndNo')
                });

                console.log(eventSequence);

                markerDeleted.executeInCommand(this, false);

                store_circle_data();

            })

            $(document).on('mouseenter mouseleave', '.canvas-btn', function() {

                $(this).toggleClass('bg-light text-dark');

            }) // SIDE BAR BUTTONS

            $(document).on('click', '.settings-btn', function() {

                mouseEnteredPopOverAlready = true;

                $(this).toggleClass('bg-light text-dark');

                let popId = '#' + $(this).children('span').popover('toggle').attr('aria-describedby');

                $(popId).children('.popover-header').html(`Setting's`).addClass('bg-dark custom-popover-header');

                $(popId).children('.arrow').css({
                    visibility: 'hidden'
                });

                let elem = `



<div class="pb-2 border-bottom d-flex justify-content-center flex-wrap align-items-center">

<div class="marker-circle rounded-circle bg-info text-light border-light d-flex align-items-center justify-content-center mx-1">1</div>
<div class="marker-circle rounded-circle bg-warning text-dark border-light d-flex align-items-center justify-content-center mx-1">2</div>
<div class="marker-circle rounded-circle bg-light text-dark border-light d-flex align-items-center justify-content-center mx-1">3</div>
<div class="marker-circle rounded-circle bg-dark border-light text-light d-flex align-items-center justify-content-center mx-1">4</div>
<div class="marker-circle rounded-circle bg-primary border-light text-light d-flex align-items-center justify-content-center mx-1">5</div>
<div class="marker-circle rounded-circle bg-danger border-light text-light d-flex align-items-center justify-content-center mx-1">6</div>
<div class="marker-circle rounded-circle bg-success border-light text-light d-flex align-items-center justify-content-center mx-1">7</div>


            </div>

<div class="py-3 border-bottom d-flex justify-content-center flex-wrap align-items-center">

<input class="slider w-100" type="range" min="1" max="100" value="50">

            </div>

<div class="py-2 text-center d-flex justify-content-center flex-wrap align-items-center">

<div class="w-100 d-flex">

<div class="box box-right-bottom border border-dark rounded mx-1">

<div class="rtbt-subBox w-50 bg-dark border h-25 position-absolute rounded"></div>

            </div>

<div class="box box-left-bottom border border-dark rounded mx-1">

<div class="ltbt-subBox w-50 bg-dark border h-25 position-absolute rounded"></div>

            </div>

<div class="box box-left-top border border-dark rounded mx-1">

<div class="lttp-subBox w-50 bg-dark border h-25 position-absolute rounded"></div>

            </div>

<div class="box box-right-top border border-dark rounded mx-1">

<div class="rttp-subBox w-50 bg-dark border h-25 position-absolute rounded"></div>

            </div>

<div class="box box-big-bottom border border-dark rounded mx-1">

<div class="bgbt-subBox w-100 bg-dark border rounded-bottom h-50 position-absolute"></div>

            </div>

            </div>

            </div>



`;
                $(popId).children('.popover-body').html(elem);

                let currentht = $('.circleAndNo').css('height');
                let fontSize = $('.circleAndNo').css('font-size');
                let fontWeight = $('.circleAndNo').css('font-weight');

                $('.marker-circle').css({
                    height: '1.7rem',
                    width: '1.7rem',
                    'font-size': '90%',
                    'font-weight': 'bold',
                    cursor: 'pointer'
                });

                $('.circleAndNo:eq(-1)').css({
                    top: '50%',
                    left: '50%'
                }).show();

                $('.slider').css({
                    cursor: 'pointer'
                });

                if (typeof sliderVal != 'undefined') {

                    $('.slider').val(sliderVal);

                } else {

                    $('.slider').val(50);

                }

                $(document)
                    .on('mouseenter', popId, function() {

                    mouseEnteredPopOverAlready = true;

                })
                    .on('mouseleave', popId, function() {

                    mouseEnteredPopOverAlready = false;
                    $('.settings-btn').toggleClass('bg-light text-dark');
                    $('.settings-btn').children('span').popover('hide')
                    $('.circleAndNo:eq(-1)').hide();

                })

            })

            let markerSizeChanged = new command({

                execute: function() {

                    sliderVal = $('.slider').val();

                    circleAndNo.css({
                        'font-size': sliderVal / 50 * 80 + '%',
                        'height': sliderVal / 50 * 1.7 + 'rem',
                        'width': sliderVal / 50 * 1.7 + 'rem'
                    });

                    let presentCircleDims = circleAndNo.css(['font-size', 'height', 'width']);

                    return true;

                },

                undo: function() {

                    let prvsSliderValue = markerSizeChanged.arrayData.pop();

                    //					$('.circleAndNo:eq(-1)').css({top:'50%',left:'50%'}).show();

                    $('.circleAndNo:eq(-1)')
                        .show()
                        .stop(true, true)
                        .css({
                        top: '50%',
                        left: '50%',
                        opacity: 0
                    })
                        .animate({
                        opacity: 1
                    }, 0)
                        .animate({
                        opacity: 1
                    }, 2000)
                        .animate({
                        opacity: 0
                    }, 30);

                    circleAndNo.css(prvsSliderValue);

                    markerSizeChanged.undoresult.push(prvsSliderValue);

                    return 'Undo marker size';

                },

                redo: function() {

                    let prvsSliderValue = markerSizeChanged.undoresult.pop();

                    //					$('.circleAndNo:eq(-1)').css({top:'50%',left:'50%'}).show();

                    $('.circleAndNo:eq(-1)')
                        .show()
                        .stop(true, true)
                        .css({
                        top: '50%',
                        left: '50%',
                        opacity: 0
                    })
                        .animate({
                        opacity: 1
                    }, 0)
                        .animate({
                        opacity: 1
                    }, 2000)
                        .animate({
                        opacity: 0
                    }, 30);

                    circleAndNo.css(prvsSliderValue);

                    markerSizeChanged.arrayData.push(prvsSliderValue);

                    return 'Redo marker size';

                }

            })

            $(document).on('change', '.slider', function() {

                eventSequence.push({

                    event: 'marker size changed',
                    markerDOM: circleAndNo,

                })

                console.log(eventSequence);

                let presentCircleDims = circleAndNo.css(['font-size', 'height', 'width']);

                markerSizeChanged.executeInCommand(false, false, presentCircleDims);



            })

            let markerThemeChanged = new command({

                execute: function() {

                    let DOMelem = markerThemeChanged.DOMelem;

                    let fullClassesNew = DOMelem.classList;

                    let foundClassesNew = $.grep(fullClassesNew, function(item) {

                        if (item.indexOf('bg-') != -1 || item.indexOf('text-') != -1) {

                            return item

                        }

                    })

                    foundClassesNew = foundClassesNew.join(' ');

                    let str = $('.circleAndNo').attr('class');

                    var fullClassesOld = str.split(' ');

                    let foundClassesOld = $.grep(fullClassesOld, function(item) {

                        if (item.indexOf('bg-') != -1 || item.indexOf('text-') != -1) {

                            return item

                        }

                    })

                    foundClassesOld = foundClassesOld.join(' ');

                    eventSequence.push({

                        event: 'bg- and text- changed',
                        oldClass: foundClassesOld,
                        newClass: foundClassesNew

                    })

                    console.log(eventSequence);

                    let combinedClassNames = foundClassesNew + ' ' + foundClassesOld;

                    $('.circleAndNo').toggleClass(combinedClassNames);

                    let classNames = {

                        old: foundClassesOld,
                        new: foundClassesNew

                    }

                    markerThemeChanged.freshresults.push(classNames);

                    console.log('fresh', markerThemeChanged.freshresults);

                    return combinedClassNames;

                },

                undo: function() {

                    let classes = markerThemeChanged.freshresults.pop();

                    console.log(classes);

                    $('.circleAndNo:eq(-1)')
                        .show()
                        .stop(true, true)
                        .css({
                        top: '50%',
                        left: '50%',
                        opacity: 0
                    })
                        .removeClass(classes.new)
                        .addClass(classes.old)
                        .animate({
                        opacity: 1
                    }, 0)
                        .animate({
                        opacity: 1
                    }, 2000)
                        .animate({
                        opacity: 0
                    }, 30);

                    markerThemeChanged.undoresult.push(classes);

                    console.log(markerThemeChanged.undoresult);

                },

                redo: function() {

                    let classes = markerThemeChanged.undoresult.pop();

                    console.log(markerThemeChanged.undoresult);

                    $('.circleAndNo:eq(-1)')
                        .show()
                        .stop(true, true)
                        .css({
                        top: '50%',
                        left: '50%',
                        opacity: 0
                    })
                        .removeClass(classes.old)
                        .addClass(classes.new)
                        .animate({
                        opacity: 1
                    }, 0)
                        .animate({
                        opacity: 1
                    }, 2000)
                        .animate({
                        opacity: 0
                    }, 30);

                    markerThemeChanged.freshresults.push(classes);

                }

            })

            $(document).on('click', '.marker-circle', function() {

                markerThemeChanged.executeInCommand(this);


            })

            $(document).on('click', '.box-right-top', function() {

                let event = storeEvent();

                console.log(event);

                $('.detailBox-Big').hide();
                $('.detailBox').show().addClass('d-flex');
                $('.detailBox').css({
                    left: '',
                    right: '2%',
                    top: '2%',
                    bottom: ''
                });

            })

            $(document).on('click', '.box-left-top', function() {

                let event = storeEvent();

                console.log(event);

                $('.detailBox-Big').hide();
                $('.detailBox').show().addClass('d-flex');
                $('.detailBox').css({
                    left: '2%',
                    right: '',
                    top: '2%',
                    bottom: ''
                });

            })

            $(document).on('click', '.box-left-bottom', function() {

                let event = storeEvent();

                console.log(event);

                $('.detailBox-Big').hide();
                $('.detailBox').show().addClass('d-flex');
                $('.detailBox').css({
                    left: '2%',
                    right: '',
                    top: '',
                    bottom: '2%'
                });

            })

            $(document).on('click', '.box-right-bottom', function() {

                let event = storeEvent();

                console.log(event);

                $('.detailBox-Big').hide();
                $('.detailBox').show().addClass('d-flex');
                $('.detailBox').css({
                    left: '',
                    right: '2%',
                    top: '',
                    bottom: '2%'
                });

            })

            $(document).on('click', '.box-big-bottom', function() {

                let event = storeEvent();

                console.log(event);

                $('.detailBox').hide().removeClass('d-flex');
                $('.detailBox-Big').show();

            })

            $(document).on('click', 'body', function() {

                if (mouseEnteredPopOverAlready) {
                    return
                };

                $('.settings-btn').children('span').popover('hide');

            })

            $(document).on('click', '.undo', function() {

                undoNredo.undoInCommand();

            })

            $(document).on('click', '.redo', function() {

                undoNredo.redoInCommand();

            })

            $(document).on('mouseleave', '.undo', function() {

                $('.circleAndNo:eq(-1)').css({
                    opacity: 1
                }).hide();

            })

            $(document).on('mouseleave', '.redo', function() {

                $('.circleAndNo:eq(-1)').css({
                    opacity: 1
                }).hide();

            })

            function printcommand(instance) {

                this.array = [];

                this.execute = function execute(bool_textreq) {

                    this.array.push(instance);
                    instance.execute(bool_textreq);

                }

                this.undo = function undo(instance) {

                    let command = this.array.pop();
                    command.undo();

                }

            }

            let printhidendisplay = new printcommand({

                execute: function(textreq) {

                    let imgWt = $('.image').width();

                    let elem = $('#for-printing').clone().addClass('custom-hide bg-dark');

                    $('body').append(elem);

                    // Custom Hide is image cloned from printing area and placed out of visible DOMs. Image width is given the width of its original image.
                    $('.custom-hide').children('.image').width(imgWt);

                    if (!(textreq)) {

                        $('.custom-hide').children('.detailBox-Big').remove();

                    }

                    $('.custom-hide').children('.detailBox').remove();

                },

                undo: function() {

                    $('.custom-hide').remove();

                }

            });

            $(document).on('click', '.download-pic', function(e) {

                let aTag = `<a class="aTag" style="display:none">Click Me</a>`;

                $('body').append(aTag);

                printhidendisplay.execute(true);

                let div = document.querySelector('.custom-hide');

                html2canvas(div, {

                    useCORS: true,
                    backgroundColor: 'null'

                }).then(function(drawnPic) {

                    let link = drawnPic.toDataURL('image/jpeg');

                    console.log('converted successfully');

                    $('.aTag:eq(0)').attr({
                        href: link,
                        download: 'newImage'
                    }).click();

                    printhidendisplay.undo();

                });

            })

            $(document).on('click', '.aTag', function(e) {

                this.click();
                this.remove();

            })

            $('.open-btn').click(function() {

                $('.btn-container').hide();

                $("#dialog-uploadImage").dialog('open');

            })

            $('.close-btn').click(function() {

                //				$('.btn-container').show();

                $("#dialog-final").dialog('close');

                window.location.reload(true);

            })

            let spinner = {

                start: function() {

                    let elem = `
<div class="modal-spinner">

<div class="d-flex h-100 align-items-center">
<div class="progress col-2 p-0 mx-auto" style="height: 0.4rem">
<div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
            </div>
            </div>

            </div>`;

                    $('body').append(elem);

                },

                end: function() {

                    $('.modal-spinner').remove();

                }

            }

            $('.edit-btn').click(function() {

                $("#dialog-final").dialog('open');

                $("#dialog-share").dialog('close');

                $.post('http://localhost/themepic/store_plotting.php', {
                    delete: true
                }, function(result) {

                    console.log(result);

                });

            })

            $('.validate-image-exists').validate({

                rules: {
                    'image-link': {

                        required: true,
                        url: true,

                    }

                },
                messages: {

                    'image-link': {

                        required: '<i class="text-warning fas fa-exclamation-circle"></i> This url is required',
                        url: '<i class="text-warning fas fa-exclamation-circle"></i> a url looks just like a website e.g. "http://www.something.com"',

                    }

                }

            })

            $('.grid-item .card').on('click', function() {

                spinner.start();

                let thumbnail_link = $(this).find('.card-image-top').attr('src');

                // get this image from photo 

                $.post('http://localhost/themepic/give_me_image_data.php', {
                    link: thumbnail_link
                }, function(msg) {

                    let obj = JSON.parse(msg);

                    $('.btn-container').hide();

                    $("#dialog-final").dialog('open');

                    $('.image').attr({
                        src: obj.img_cloudinary_link,
                        firstLoad: false
                    });

                    dataforimageexists.status = true;

                    dataforimageexists.data = obj;

                })

            })

            let dataforimageexists = new Object();
            dataforimageexists.status = false;

            $('.image').on('load', function(e) {

                $(this).css({
                    'max-height': wht / 1.1,
                    'max-width': '100%'
                });

                let imgWt = $(this).width();
                let imgHt = $(this).height();

                if (imgHt < 0) return console.log('.image height is less then 0 so stopping resetting of canvas size.');

                $('.carry-menu').height(imgHt);

                if (wwt < 767 || imgHt < 300) {

                    $('.carry-menu').height('auto');

                }

                console.log('.image Load completed', imgHt, imgWt);

                $('#overlay').css({
                    height: imgHt,
                    width: imgWt
                });

                $('.detailBox-Big').css({
                    width: imgWt + 2
                });

                $('.detailBox').css({
                    right: '2%',
                    bottom: '2%'
                });

                spinner.end();

                if ($(this).attr('firstLoad') == 'true') {

                    console.log('-- This image is laoded for the first time: ' + $(this).attr('firstLoad') + '. Storing this image as draft');

                    // Todo: Create thumbnail -> store image in cloudinary -> store thumbnail in cloudinary -> save urls in local database 

                    var createThumbnail = new Promise((resolve, reject) => {
                        resolve('Success!');
                    });

                    createThumbnail.then(function(value) {
                        console.log(value);
                    });

                    //                    update_image_table_db('save_draft');

                }

                console.log(dataforimageexists.status + ': data for this image exists?');

                if (dataforimageexists.status) {

                    let elem = `<div class="circleAndNo rounded-circle bg-info text-light" >
<span data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></span>
<elem>1</elem>
            </div>`;

                    let obj = dataforimageexists.data;

                    $.each(obj.circledata, function(key, value) {

                        let newObj = JSON.parse(value.rawdata);

                        $('#for-printing').prepend(elem);

                        $('.circleAndNo:eq(0)').css({
                            'z-index': 4,
                            left: newObj.percentX * $('.image').width() + $('#overlay').position().left,
                            top: newObj.percentY * $('.image').height(),
                            'font-size': newObj.mFontSize * $('.image').width(),
                            height: newObj.mHeight * $('.image').width(),
                            width: newObj.mWidth * $('.image').width()
                        }).data({
                            'percentX': newObj.percentX,
                            'percentY': newObj.percentY,
                            'mFontSize': newObj.mFontSize,
                            'mHeight': newObj.mHeight,
                            'mWidth': newObj.mWidth,
                            comment: newObj.comment,
                            editFlag: false
                        }).find('elem').html(value.html);

                        $('.circleAndNo').removeClass().addClass(newObj.classs);

                    })

                    //					console.log($('.circleAndNo').classList);

                    let fullClassesNew = $('.circleAndNo').attr('class').split(' ');

                    let foundClassesNew = $.grep(fullClassesNew, function(item) {

                        if (item.indexOf('bg-') != -1 || item.indexOf('text-') != -1) {

                            return item

                        }

                    })

                    foundClassesNew = foundClassesNew.join(' ');

                    givedatatotextbox();

                    dataforimageexists.status = false;

                }

            });

            function readURL(input) {

                if (input.files && input.files[0] && (/\.(jpe?g|png|gif)$/i.test(input.files[0].name))) {

                    var reader = new FileReader();

                    reader.addEventListener("load", function(e) {

                        $('#imgPreview').attr('src', reader.result).css({
                            'max-height': '100%',
                            'max-width': '100%'
                        });

                        $('.preview-image-box').show().addClass('d-flex').animate({

                            opacity: 1,

                        }, 500, 'linear');

                        $('.image-for-storage').attr({
                            src: reader.result
                        });

                    })

                    reader.readAsDataURL(input.files[0]);

                } else {

                    $('#upload-error').remove();

                    let elem = `<div id="upload-error" class="mt-2"><small><i class="text-warning fas fa-exclamation-circle"></i> Oops this file is not an image.</small></div>`;

                    $('.upload-error-here').append(elem);

                    $('#upload-error').fadeIn();

                }

            }  

            $("#imgInp").change(function() {

                readURL(this);

            });

            $('.image-for-storage').on('load', function() {

                console.log('2. ".image-for-storage" is loaded now at an hidden place.');

                ConvertImageandStoreImageInCloudinary();

            })

            let ConvertImageandStoreImageInCloudinary = function() {

                var StorageCanvas = document.getElementById('canvas-for-storage');

                var ctx = StorageCanvas.getContext("2d");

                var img = $('.image-for-storage')[0];

                ctx.drawImage(img, 0, 0);

                var MAX_WIDTH = 1200;
                var MAX_HEIGHT = 800;
                var width = img.width;
                var height = img.height;

                if (width > height) {
                    if (width > MAX_WIDTH) {
                        height *= MAX_WIDTH / width;
                        width = MAX_WIDTH;
                    }
                } else {
                    if (height > MAX_HEIGHT) {
                        width *= MAX_HEIGHT / height;
                        height = MAX_HEIGHT;
                    }
                }

                StorageCanvas.width = width;
                StorageCanvas.height = height;
                var ctx = StorageCanvas.getContext("2d");
                ctx.drawImage(img, 0, 0, width, height);

                function isTainted(ctx) {
                    try {
                        //                        var pixel = ctx.getImageData(0, 0, 1, 1);
                        var dataurl = ctx.toDataURL("image/png");
                        return false;
                    } catch (err) {
                        return (err.code === 18);
                    }
                }

                if (isTainted(StorageCanvas)) {

                    console.log('3. image-for-storage when placed in canvas, it is tainted.');

                    console.log('4. Displayed error on the menu and sent request to save image in cloudinary directly from its unsplash sourse.');

                    $('.ok-btn-box .error-span').find('small').html('<i class="text-warning fas fa-exclamation-circle"></i> Sorry, canvas is tainted! I will save these images in local database. Wait a moment please.');

                    $.post('https://www.qasimfromchammala.com/books/img-annotation/store_generated_picture.php', {

                        main_img_link: img.src,
                        pic_id: $('.grid-item').length,
                        user_id: `<?php echo $_SESSION["idUser"]; ?>`,

                    }, function(msg) {

                        let myObj = JSON.parse(msg);

                        $('.image').attr({
                            src: myObj.image_link
                        });

                        console.log('5. Image is stored in cloudinary now: ' + myObj.image_link + '. Therefore placed .image src as this cloudinary link.');

                    })

                    return;

                }

                var dataurl = StorageCanvas.toDataURL("image/png");

                $('.image').attr({
                    src: dataurl
                });

                console.log('Image is now downsized.')

                return;

            }

            $('.next-upload-btn').on('click', function() {

                $('#upload-error').remove();

                $("#dialog-final").dialog('open');

                $("#dialog-uploadImage").dialog('close');

                console.log('2. ".image" is set to "firstLoad : true"');

                $('.image').attr({
                    firstLoad: true
                });

                $('.image').trigger('load');



                //                images_cloudinary.image_link = `http://res.cloudinary.com/miscellaneous/image/upload/visualstory/images/` + $('.grid-item').length + <?php echo $_SESSION["idUser"]; ?> + `image.png`;
                //
                //                $.post('http://localhost/themepic/store_images.php', {
                //
                //                    unsetSession: 'idPicture',
                //                    img_link: images_cloudinary.image_link,
                //                    edit_status: 0
                //
                //                }, function(msg) {
                //
                //                    update_image_table_db('save_draft');
                //
                //                });



            })

            $('.ok-btn').on('click', function(e) {

                if (!($(".validate-image-exists:eq(0)").valid())) {

                    $('.ok-btn-box').find('.error-span').show();

                    return;

                }

                console.log('1. Image is valid, add source to .image-for-storage');

                $('.image-for-storage').attr({
                    src: $("#image-link").val()
                });

                $('.ok-btn-box').find('.error-span').css({
                    display: 'none'
                });

                $("#dialog-final").dialog('open');

                $("#dialog-uploadImage").dialog('close');

                console.log('2. ".image" is set to "firstLoad : true"');

                $('.image').attr({
                    firstLoad: true
                });

                images_cloudinary.image_link = `http://res.cloudinary.com/miscellaneous/image/upload/visualstory/images/` + $('.grid-item').length + <?php echo $_SESSION["idUser"]; ?> + `image.png`;

                console.log('7. Image link will be: ' + images_cloudinary.image_link + '. Now storing this cloudinary link in store_images.php');

                $.post('http://localhost/themepic/store_images.php', {

                    unsetSession: 'idPicture',
                    img_link: images_cloudinary.image_link,
                    edit_status: 0

                }, function(msg) {

                    //                    console.log(msg);

                })

                return 'dialog final is being opened';

            })

            $('.change-upload-btn').on('click', function() {

                $('.preview-image-box').animate({

                    opacity: 0,

                }, 100, "linear", function() {

                    $(this).hide().removeClass('d-flex');

                })

            })

            $('.share-btn').click(function() {

                spinner.start();

                update_image_table_db();

            })

            let update_image_table_db = function(call) {

                if ($('.image').height() < 10) {

                    console.log('.image height is less then 10 that means no .image is there');

                    return;

                }

                let aTag = `<a class="aTag" style="display:none">Click Me</a>`;

                $('body').append(aTag);

                printhidendisplay.execute(true);

                let div = document.querySelector('.custom-hide');

                //                console.log('-- Going to print this printing area. Image link should be: ' + $('.custom-hide').find('.image').attr('src'));

                // THUMBNAILING

                html2canvas(div, {

                    useCORS: true,
                    backgroundColor: 'null',
                    scale: 0.6,
                    logging: true

                }).then(function(drawnPic) {

                    let link = drawnPic.toDataURL('image/jpeg');

                    printhidendisplay.undo();

                    $.post('http://localhost/themepic/store_in_cloudinary.php', {

                        img_thumbnail_link: link,
                        pic_id: $('.grid-item').length,
                        user_id: `<?php echo $_SESSION["idUser"]; ?>`,

                    }, function(msg) {

                        console.log(msg);
                        //                        let myObj = JSON.parse(msg);
                        //                        console.log(myObj);

                    })

                    console.log(`
8. html2Canvas has started. I have to trigger it if there is an image.
9. thumbnail link presumed and saved in cloudinary.
10. sending this thumbnail link and edit status of 0 to store images.php.

`);

                    images_cloudinary.thumbnail_link = `http://res.cloudinary.com/miscellaneous/image/upload/visualstory/thumbnails/` + $('.grid-item').length + <?php echo $_SESSION["idUser"]; ?> + `thumb.jpg`;

                    $.post('http://localhost/themepic/store_images.php', {
                        thumbnail_link: images_cloudinary.thumbnail_link,
                        edit_status: 0
                    }, function(msg) {

                        let myObj = JSON.parse(msg);

                        if (call == 'save_draft') {

                            console.log('saved draft');

                            return;

                        }

                        $("#dialog-final").dialog('close');

                        spinner.end();

                        $('#link2page').html(myObj.link2page);

                        $("#dialog-share").dialog('open');

                    })

                });

                return true;

            }

            let store_circle_data = function() {

                givedatatotextbox();

                let circleData = new Array();

                let circlesOnDOM = $('.circleAndNo').each(function() {

                    if ($(this).data().comment && $(this).css('display') != 'none') {

                        $(this).data({
                            classs: $(this).attr('class')
                        });

                        circleData.push({
                            data: $(this).data(),
                            label: $(this).children('elem').html(),
                            comment: $(this).data().comment,
                        });

                    }

                })

                console.log(circleData);

                $.post('http://localhost/themepic/store_plotting.php', {
                    elem: circleData
                }, function(result) {

                    console.log('data status: ', result);

                    // store thumbnail also

                    update_image_table_db('save_draft');

                });

            }

            let images_cloudinary = new Object();

            $('.publish-btn').on('click', function() {

                // close this dialog

                $('.btn-container').show();

                $("#dialog-share").dialog('close');

                // save title and edit_flag

                $.post('http://localhost/themepic/store_images.php', {
                    thumbnail_link: images_cloudinary.thumbnail_link,
                    edit_status: 1
                }, function(msg) {

                    console.log(msg);

                })

                // display this card with published heading in story_baord



            })

            var $grid = $('.grid').masonry({

                itemSelector: '.grid-item',
                initLayout: true

            });

            $('.contribution-btn').on('click', function() {

                $('.badge-success').closest('.grid-item').show();

                $('.badge-danger').closest('.grid-item').show();

                $grid.masonry('layout');


            })

            $('.drafts-btn').on('click', function() {

                $('.badge-success').closest('.grid-item').hide();

                $('.badge-danger').closest('.grid-item').show();

                $grid.masonry('layout');

            })

            $('.published-btn').on('click', function() {

                $('.badge-success').closest('.grid-item').show();

                $('.badge-danger').closest('.grid-item').hide();

                $grid.masonry('layout');


            })

            $('.back-btn').on('mouseenter mouseleave', function() {

                $(this).toggleClass('text-info', 50);

            })

            $('.upload-textarea-wrapper textarea').on('focusin', function() {

                $('.upload-textarea-wrapper').find('.text-center').css({
                    opacity: 0.05
                });
                $('.upload-textarea-wrapper').find('.ok-btn-box').css({
                    display: 'block',
                    opacity: 1
                });

            })

            $('body').on('click', function(e) {

                if ($(e.target).is('.ok-btn')) {

                    return;

                }

                // Clicking outside textarea will trigger c-event
                if (!($(e.target).is('.upload-textarea-wrapper textarea'))) {

                    $('.upload-textarea-wrapper textarea').trigger('c-event');

                }

            })

            $('.upload-textarea-wrapper textarea').on('c-event', function() {

                if ($(this).val() == '') {

                    $('.upload-textarea-wrapper').find('.text-center').css({
                        opacity: 1
                    });
                    $('.upload-textarea-wrapper').find('.ok-btn-box').css({
                        display: 'none',
                        opacity: 0
                    });

                }

            })

        </script>

    </body>

</html>
