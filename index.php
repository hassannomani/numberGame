<?php
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="css/bootstrap.css"/>
            <link rel="stylesheet" href="css/font-awesome.css"/>
            <link rel="stylesheet" href="css/main.css"/>
            <script type="text/javascript" src="js/jquery.js"></script>
            <title>Game</title>

        </head>
        <body>
            <div class="container">
               <h1 id="welcome">Welcome to Math Game</h1>
                <div class="row" style="position: relative">
                    <div class="col-lg-6 col-lg-offset-3 text-center">
                        <button type="button" id="playnow" class="img-btn-playnow" data-toggle="modal" data-target="#myModal">
                            Play Now!
                        </button>
                    </div>
                    <div class="col-lg-6 box animlefthidden" id='box1' style="position:relative;">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <span id="timer"></span>
                            </div>
                        </div>
                            <img src="images/hourglass.gif" class="img-responsive" id="loading"/>
                        <div id="target" style="color:#C94500;clear:both;font-family: CartWheel;font-size: 25px;float:left">						                 				Your target is </div>
                        <div id="turn">Turn : </div>
                        <div id="showscore">Score : 0</div>

                        <div class="col-lg-12" data-signname="plus-op" data-core="plus" data-sign="+">
                            <div class="row">
                                <div class="col-lg-3 plus-op">
                                    <div id="plus">
                                        <img src="images/plus.png" class="img-responsive" />

                                    </div>
                                </div>
                                <div class="col-lg-3 minus-op" data-signname="minus-op" data-core="minus" data-sign="-">
                                    <div id="minus">
                                        <img src="images/minus.png" class="img-responsive" />
                                    </div>
                                </div>
                                <div class="col-lg-3 multiply-op" data-signname="multiply-op" data-core="multiply" data-sign="*">
                                    <div id="multiply">
                                        <img src="images/multiply.png" class="img-responsive" />
                                    </div>
                                </div>
                                <div class="col-lg-3 divide-op" data-signname="divide-op" data-core="divide" data-sign="/">
                                    <div id="divide">
                                        <img src="images/divide.png" class="img-responsive" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12" style="position: relative;margin-top:15px">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div id="first-part" data-detect="first-part" class="card" data-pos="0"><h2 class="text-center">0</h2> </div>
                                </div>
                                <div class="col-lg-3">
                                    <div id="second-part" data-detect="second-part" class="card" data-pos="1"><h2 class="text-center">0</h2> </div>
                                </div>
                                <div class="col-lg-3">
                                    <div id="third-part" data-detect="third-part" class="card" data-pos="2"><h2 class="text-center">0</h2></div>
                                </div>
                                <div class="col-lg-3">
                                    <div id="fourth-part" data-detect="fourth-part" class="card" data-pos="3"><h2 class="text-center">0</h2></div>
                                </div>
                                <div class="col-lg-3">
                                    <div id="fifth-part" data-detect="fifth-part" class="card"><h2 class="text-center">9</h2></div>
                                </div>
                                <div class="col-lg-3">
                                    <div id="sixth-part" data-detect="sixth-part" class="card"><h2 class="text-center">9</h2></div>
                                </div>
                                <div class="col-lg-3">
                                    <div id="seventh-part" data-detect="seventh-part" class="card"><h2 class="text-center">9</h2></div>
                                </div>
                                <div class="col-lg-3">
                                    <div id="eighth-part" data-detect="eighth-part" class="card"><h2 class="text-center">9</h2></div>
                                </div>
                                <div class="col-lg-3">
                                    <div id="ninth-part" data-detect="ninth-part" class="card"><h2 class="text-center">9</h2></div>
                                </div>
                                <div class="col-lg-3">
                                    <div id="tenth-part" data-detect="tenth-part" class="card"><h2 class="text-center">9</h2></div>
                                </div>
                                <div class="col-lg-3">
                                    <div id="eleventh-part" data-detect="eleventh-part" class="card"><h2 class="text-center">9</h2></div>
                                </div>
                                <div class="col-lg-3">
                                    <div id="twelveth-part" data-detect="twelveth-part" class="card"><h2 class="text-center">9</h2></div>
                                </div>
                            </div>
                            <div class="row" id="button_group">
                                <div class="col-lg-12">
                                    <button class="img-btn-next" id="next">Next</button>
                                    <button class="img-btn-undo" id="undo">Undo</button>
                                    <button class="img-btn-finish" id="finish">Finish</button>
                                    <button class="img-btn-reset" id="reset">Reset</button>
                                    <button class="img-btn-pass" id="pass">Pass</button>
                                    <button class="img-btn-reshuffle" id="replay">Re Shuffle</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 box settings animleft" id="box2">
                        <div class="contain">
                            <div class="header text-center">
<!--                             <h2 class="title" id="myModalLabel">Welcome to Math Game</h2>
-->                         </div>
                            <div class="cream">
                                        <div class="row">
                                            <div class="col-lg-8 col-lg-offset-2">
                                                <div class="text-center modal-topic"><h2>Settings</h2></div>
                                                <div class="col-lg-6">
                                                    <div class="radio">
                                                        <label class="control-label">
                                                            <input type="radio" id="oneeighty" value="oneeighty" name="timelimit" data-time="180"/>
                                                            <h3>180s</h3>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="radio">
                                                        <label class="control-label">
                                                            <input type="radio" id="threesixty" value="threesixty" name="timelimit" data-time="360"/>
                                                            <h3>360s</h3>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-6">
                                                    <label class="control-label">
                                                        <input type="radio" id="easy" value="easy" name="level" />
                                                        Easy Level
                                                    </label>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="control-label">
                                                        <input type="radio" id="medium" value="medium" name="level"/>
                                                        Intermediate Level
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-6">
                                                    <label class="control-label">
                                                        <input type="radio" id="hard" value="hard" name="level"/>
                                                        Advanced Level
                                                    </label>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="control-label">
                                                        <input type="radio" id="expert" value="expert" name="level" />
                                                        Expert Level
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-lg-offset-2">
                                                <div class="text-center modal-topic">
                                                    <h2 id="score"><b>Score : 0</b></h2>
                                                </div>
                                            </div>
                                            </div>

                                        </div>
                        </div>
                        <div class="footer">
                            <button id="submit" class="img-btn-play" data-dismiss="modal">Start the game</button>
                            <button id="close" class="img-btn-reshuffle" data-dismiss="modal" style="width: 146px;float: left;height: 59px;">Quit</button>
                        </div>
                    </div>
                    <div class="col-lg-3 box col-lg-offset-5 welcome" id="box3">
                        <h1 class="modal-topic" style="color: #52D7DE">Welcome!</h1>

                        <button id="instantplay" class="img-btn-play" data-dismiss="modal">Start the game</button>
                        <button id="settingbutton" class="img-btn-reshuffle" data-dismiss="modal" style="width: 146px;height: 59px;">Settings</button>

                    </div>
					<div class="col-lg-2 box4">
                        <p id="your-cal">Your Calculation</p>
                    <div class="log"><p id="logeq"></p>
                    </div> 
                    </div>
                    </div>

                </div>


            <div class="modal fade" id="myWarning" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h2 class="modal-title" id="myModalLabel"></h2>
                        </div>
                        <div class="modal-body cream">
                            <div class="row">
                                <div class="col-lg-8 col-lg-offset-2">
                                    <div class="text-center modal-topic"><h3>Select both time & level</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="modal-footer">
                            <button id="selecttl" class="img-btn-play" data-dismiss="modal">Select time & level</button>
                            <button id="closeWarning" class="img-btn-reshuffle" data-backdrop="false" data-dismiss="modal" style="width: 146px;float: left;height: 59px;">Quit</button>
                        </div>
                    </div>
                </div>



        <!-- Modal for showing result -->

            <div class="modal fade" id="mySolution" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h2 class="modal-title" id="myModalLabel"></h2>
                        </div>
                        <div class="modal-body cream">
                            <div class="row">
                                <div class="col-lg-8 col-lg-offset-2">
                                    <div class="text-center modal-topic"><h1>Solution is :</h1></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="closes" class="img-btn-reshuffle" data-dismiss="modal" style="width: 146px;float: left;height: 59px;">Ok</button>
                    </div>
                </div>
            </div>
            <footer>
                <script type="text/javascript" src="js/jquery.js"></script>
                <script type="text/javascript" src="js/bootstrap.js"></script>
                <script type="text/javascript" src="js/combinatorics.js"></script>
                <script type="text/javascript" src="js/jquery.blockUI.js"></script>
                <script type="text/javascript" src="js/js.cookie.js"></script>
                <script>

                    $(document).ready(function() {
                        var time = 0;
                        var tempVal = 0;
                        var secondTemp = 0;
                        var tempSign = "";
                        var divtoStay = "";
                        var divtoHide = "";
                        var arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30];
                        var helperarr=[];
                        var shortarr = [];
                        var target = 0;
                        var level = '';
                        var secondsleft = 0;
                        var score=0;
                        var clock=0;  //wher at first i get desired time
                        var playno = 0;
                        var resultset = [];
                        var solution;
                        var count=0;  //count =clock
                        var counter=0;  //calls the function for count--
                        var foolspass=0;  //total how many turn
                        var levelnested=[];
                        var tle=0;
                        var cardsleft=0;
                        var lastinlevelnested='';
                        var cookielimit;
                        var backuparr=[];
                        var criticalshit=0;
                        var serial=1;
                        var result=0;
                        var resultcache=0;
                        var undo={
                            hide:   "",
                            show:   "",
                            sign:   "",
                            res:    99999,
                            rescac: 99999,
                            cards:  99999,
                            first:  99999,
                            sec:    999999,
                            visible: false
                        };
                       // var resetclicked=0;

                        $(window).load(function(){
                            $('.box4').hide();
                            $("input:radio[name='timelimit']").each(function(i) {
                                this.checked = false;
                            });
                            $("input:radio[name='level']").each(function(i) {
                                this.checked = false;
                            });
                        });
                        $('#myWarning').on('hide.bs.modal', function () {
                            //alert('hello');
                            $('#your-cal').hide();
                            $('#box2').fadeIn(1000);

                        });
                        $('#playnow').click(function(){

                        });

                        $('#instantplay').click(function(){
                            $('.welcome').fadeOut(1000);
                            $('#box1').addClass('animlefthiddenun');
                            secondsleft="threesixty";
                            var json=Cookies.get('level');
                            if(json!="easy")
                                Cookies.remove('target');
                            level = "easy";
                            var date = new Date();
                            var minutes = 10;
                            date.setTime(date.getTime() + (minutes * 60 * 1000));
                            Cookies.set('level', level, { expires: date });
                            foolspass=0;
                            clock=360;
                            cookielimit=2;
                            makeready(1, 15);
                            count = clock;
                            counter = setInterval(timer, 1000);
                            $('.box4').show();
                            $('.box4>.log>#logeq').show();
                            $('#your-cal').show();
                        });

                        $('#close').click(function(){
                            $('#box2').fadeOut(1000);
                            $('.welcome').fadeIn(1000);
                        });

                        $('#reset').click(function(){
                            if(tempSign!=""&&divtoStay!=""&&divtoHide!="") {
                                if($("#" + divtoStay + "").is(':visible')) {
                                    $("#" + divtoStay + "").removeClass('activee');
                                    divtoStay = "";
                                    tempVal=0;

                                }
                                levelnested.pop();
                                levelnested.pop();   //deleting last 2
                                $("." + tempSign + "-op").removeClass('activee activee-border');
                                tempSign = "";
                                $("#" + divtoHide + "").removeClass('activee');
                                divtoHide = "";
                                secondTemp=0;

                                console.log('catching serial ' + serial);

                                console.log('tempsign' + tempSign + ' divtoStay' + divtoStay);
                                var log = document.querySelectorAll('#logeq');
                                var string = log[0].innerHTML;
                                console.log(string);
                                var searchres =  string.lastIndexOf('<span id="serial">'+ (serial - 1) + '</span>');
                                    //string.lastIndexOf('class="sign" data-id="' + (serial - 1) + '"');

                                if (searchres != -1) {
                                    console.log('searchres is not -1');
                                    log[0].innerHTML = jQuery.trim(string.substr(0, searchres));
                                    var searchress = string.lastIndexOf('class="sign" data-id="' + (serial - 1) + '"');
                                    if (searchress != -1) {
                                            var searchres1=string.lastIndexOf('<div');
                                        log[0].innerHTML = jQuery.trim(string.substr(0, searchres1));
                                    }
                                    serial--;
                                }
                            }
                            else {
                                $("." + tempSign + "-op").removeClass('activee activee-border');
                                var log = document.querySelectorAll('#logeq');
                                var string = log[0].innerHTML;
                                if(divtoStay!=""&&tempSign==""&&divtoHide=="")
                                {
                                    if($("#"+divtoStay+"").is(':visible')) {
                                        var searchres = string.lastIndexOf('<span id="serial">' + (serial) + '</span>');
                                        log[0].innerHTML = jQuery.trim(string.substr(0, searchres));

                                    }
                                }
                                else if(tempSign!=""&&divtoHide=="") {
                                    if($("#"+divtoStay+"").is(':hidden')) {
                                        var searchress = string.lastIndexOf('class="sign" data-id="' + (serial) + '"');
                                        if (searchress != -1) {
                                            var searchres1 = string.lastIndexOf('<div');
                                            log[0].innerHTML = jQuery.trim(string.substr(0, searchres1));
                                        }
                                    }
                                    else
                                    {
                                        var searchres = string.lastIndexOf('<span id="serial">'+ (serial) + '</span>');
                                        log[0].innerHTML = jQuery.trim(string.substr(0, searchres));
                                    }


                                }
                                freelastclick(lastinlevelnested);

                                $("#" + divtoHide + "").removeClass('activee');
                                divtoHide = "";
                                secondTemp=0;
                                tempSign = "";

                                if($("#"+divtoStay+"").is(':visible'))
                                {
                                    $("#" + divtoStay + "").removeClass('activee');
                                    divtoStay = "";
                                    tempVal=0;
                                }
                            }

                            console.log('cardsleft now after resett' + cardsleft);
/*
                            divtoHide="";divtoStay="";tempSign="";
*/
                            console.log('leaving reset result'+result
                                +' serial is '+serial);

                        });

                        $('#settingbutton').click(function(){
                            $('.welcome').fadeOut(1000);
                            $('#box2').fadeIn(1000);
                        });

                        $('#selecttl').click(function(){
                            $('#your-cal').hide();
                            $('#box4').hide();

                            $('#myWarning').fadeOut(1000);
                            $('.modal-backdrop').remove();

                            $('.settings').show();
                        });

                        $('#closeWarning').click(function(){
                            $('#your-cal').hide();
                            $('#myWarning').hide();
                            $('.welcome').fadeIn(1000);
                        });

                        $('input[type=radio][name=timelimit]').change(function (event,data=0) {

                            secondsleft = $(this).val();
                            clock = $(this).data('time');

                        });

                        $('input[type=radio][name=level]').change(function (event,data=0) {
                            var json=Cookies.get('level');
                            if(json!=level)
                                Cookies.remove('target');
                            level = $(this).val();
                            var date = new Date();
                            var minutes = 10;
                            date.setTime(date.getTime() + (minutes * 60 * 1000));

                            Cookies.set('level', level, { expires: date });
                            // console.log(level);
                                if (level == "easy") {

                                    foolspass = 0;
                                    cookielimit = 2;
                                    makeready(0, 10);
                                }

                                else if (level == "expert") {
                                    foolspass = 0;
                                    cookielimit = 3;
                                    makeready(20, 50);
                                }
                                else if (level == "medium") {
                                    foolspass = 0;
                                    cookielimit = 2;
                                    makeready(1, 15);
                                }
                                else if (level == "hard") {
                                    foolspass = 0;
                                    cookielimit = 2;
                                    makeready(1, 15);
                                }
                        });
                        //1000 will  run it every 1 second
                        function timer() {
                            if(tle==0)
                                count = count - 1;
                            else if(tle==1)
                            {
                                if(tle==0)
                                    return;
                                score = score + 0;
                                cardsleft = 4;
                                levelnested = [];
                                lastinlevelnested = '';
                                resultcache = 0;
                                result=0;

                                $("#" + divtoStay + "").removeClass('activee');
                                $("#" + divtoStay + "").html("<h2 class='text-center'></h2>");
                                $("#" + divtoHide + "").removeClass('activee');
                                $("#" + divtoHide + "").parent().hide();
                                $("." + tempSign + "-op").removeClass('activee activee-border');
                                tempSign = "";
                                divtoStay = "";
                                divtoHide = "";

                                playno++;
                                makeready(1, 15);
                                $('#first-part').parent().show();
                                $('#second-part').parent().show();
                                $('#third-part').parent().show();
                                $('#fourth-part').parent().show();
                                $('#fifth-part').parent().hide();
                                $('#sixth-part').parent().hide();
                                $('#seventh-part').parent().hide();
                                $('#eighth-part').parent().hide();
                                $('#ninth-part').parent().hide();
                                $('#tenth-part').parent().hide();
                                $('#eleventh-part').parent().hide();
                                $('#twelveth-part').parent().hide();
                                $("#pass").prop("disabled", false);
                                $('.log>#logeq').show();
                                tle=0;
                                count = clock;

                                $('div.box').block({
                                    message: '<img src="images/hourglass.gif" /><h1 style="color:#FFF;font-family:CartWheel">You have lost</h1>',
                                    css: {
                                        width: '50%',
                                        border: 'none',
                                        cursor: 'wait',
                                        backgroundColor: 'transparent'
                                    },
                                    overlayCSS: {backgroundColor: '#000000', opacity: 0.8, cursor: 'wait'},
                                    timeout: 2000,
                                    onUnblock: function () {

                                        clearInterval(counter);
                                        count = clock;

                                        counter = setInterval(timer,1000);

                                    }
                                });

                            }
                            // console.log(count);
                            if (count == 0) {
                                //counter ended, do something here
                                {
                                    tle=1;
                                }
                            }
                            document.getElementById("timer").innerHTML = count + " secs"; // watch for spelling            }
                        }

                        $('#submit').click(function () {
                            $('#box2').fadeOut(300);
                            //console.log(level);
                            if (playno == 4)
                                return;
                            if(level==''||secondsleft=='')
                            {
                                $('#myWarning').modal('show');
                            }
                            else {
                                /*
                                 $('body').removeClass('.overlay');
                                 */
                                $('#box2').fadeOut( 1000);
                                $('#box1').removeClass('animlefthidden');
                                $('#box1').addClass('animlefthiddenun');

                                clearInterval(counter);

                                count = clock;
                                counter = setInterval(timer, 1000);

                            }
                            $('.box4').fadeIn("slow");
                            $('#your-cal').show();
                            $('.box4>.log>#logeq').show();

                        });
                        
                        function  equationenhance(equation) {
                            var a=equation;
                            var k=a.split(/\*|-|\+|\//);
                            var i;
                            var j=0
                            var sings=[];
                            for(i=0;i<a.length;i++)
                            {
                                if(a[i]=="+"||a[i]=="/"||a[i]=="*"||a[i]=="-")
                                {
                                    sings[j]=a[i];
                                    j++;
                                }
                            }
                            var pos = - 1;
                            if (sings.indexOf('/') != - 1)
                            {
                                pos = sings.indexOf('/');
                                eq = '(' + k[pos] + '/' + k[pos + 1] + ')';
                            }
                            else if (sings.indexOf('*') != - 1)
                            {
                                pos = sings.indexOf('*');
                                eq = '(' + k[pos] + '*' + k[pos + 1] + ')';
                            }
                            else if (sings.indexOf('-') != - 1)
                            {
                                pos = sings.indexOf('-');
                                eq = '(' + k[pos] + '-' + k[pos + 1] + ')';
                            }
                            if (pos != - 1)
                            {
                                if (pos == 0)
                                    eq = eq + sings[1] + k[2] + sings[2] + k[3];
                                else if (pos == 1)
                                    eq = k[0] + sings[0] + eq + sings[2] + k[3];
                                else if (pos == 2)
                                    eq = k[0] + sings[0] + k[1] + sings[1] + eq;
                            }
                            else
                            {
                                eq = a;
                            }
                        return eq;

                        }
                        
                        $('#replay').click(function () {
                            sol=equationenhance(solution);
                            $('#mySolution').find('.modal-topic').html('Solution is '+sol+ " = "+target);
                            $('#mySolution').modal('show');
                            score=score+0;
                            $("#pass").prop("disabled", false);

                            if (level != "") {
                                if (level == "easy") {
                                    playno++;
                                    makeready(1, 10);
                                   // debugger;
                                }
                                else if (level == "medium") {
                                    playno++;
                                    makeready(1, 15);
                                    //debugger;

                                }
                                else if (level == "hard") {
                                    playno++;
                                    makeready(1, 15);
                                   // debugger;

                                }
                                else if (level == "expert") {
                                    playno++;
                                    makeready(1, 15);
                                 //   debugger;

                                }

                                $('#first-part').parent().show();
                                $('#second-part').parent().show();
                                $('#third-part').parent().show();
                                $('#fourth-part').parent().show();
                                $('#fifth-part').parent().hide();
                                $('#sixth-part').parent().hide();
                                $('#seventh-part').parent().hide();
                                $('#eighth-part').parent().hide();
                                $('#ninth-part').parent().hide();
                                $('#tenth-part').parent().hide();
                                $('#eleventh-part').parent().hide();
                                $('#twelveth-part').parent().hide();
                                $('#logeq').show();

                                $('div.box').block({
                                    message: '<img src="images/hourglass.gif" /><h1 style="color:#FFF;font-family:CartWheel">You lost</h1>',
                                    css: {width: '50%', border: 'none', cursor: 'wait', backgroundColor: 'transparent'},
                                    overlayCSS: {backgroundColor: '#000000', opacity: 0.8, cursor: 'wait'},
                                    timeout: 3000,
                                    onUnblock: function () {
                                        clearInterval(counter);
                                        count = clock;
                                        counter = setInterval(timer, 1000);
                                    }
                                });
                                undo.cards=99999;
                                undo.res=99999;
                                undo.rescac=99999;
                                undo.first=99999;
                                undo.sec=99999;
                                undo.sign="";
                                undo.hide="";
                                undo.show="";
                                undo.visible=false;
                            }


                        });

                        function final_target_easy(){
                            if(criticalshit==1|| target=== null || target=='' || typeof target=="undefined")
                            {
                                //console.log('recallling critical mayday');
                                if(levelnested.length!=0)
                                    fillmeup();
                                else
                                {
                                    shuffle(shortarr);
                                    helpertrim(shortarr);
                                }
                                target_for_easy(helperarr);
                                final_target_easy();
                                criticalshit=0;
                            }
                            else
                            {
                                target=eval(resultset[0]);
                                solution=resultset[0];
                                resultset.length=0;
                                //console.log('desired equation is this'+solution);
                            }
                        }

                        function final_target_medium(){
                            if(	criticalshit==1|| target=== null || target=='' || typeof(target)=="undefined")
                            {
                                console.log('recallling critical mayday');
                                if(levelnested.length!=0)
                                    fillmeup();
                                else
                                {
                                    shuffle(shortarr);
                                    helpertrim(shortarr);
                                }
                                target_for_medium(helperarr);
                                final_target_medium();
                                criticalshit=0;

                            }
                            else
                            {
                                target=eval(resultset[0]);
                                solution=resultset[0];
                                resultset.length=0;
                                console.log('desired equation is this'+solution);
                            }
                        }

                        function final_target_hard(){
                            if(criticalshit==1|| target=== null || target=='' || typeof(target)=="undefined")
                            {
                                //console.log('recallling critical mayday');
                                if(levelnested.length!=0)
                                    fillmeup();
                                else
                                {
                                    shuffle(shortarr);
                                    helpertrim(shortarr);
                                }
                                target_for_medium(helperarr);
                                final_target_hard();
                                criticalshit=0;
                            }
                            else
                            {
                                levelnested.length=0;
                                target=eval(resultset[0]);
                                solution=resultset[0];
                                resultset.length=0;
                                // console.log('desired equation is this'+solution);
                            }
                        }

                        function final_target_expert(){
                            if(criticalshit==1|| target=== null || target=='' || typeof(target)=="undefined")
                            {
                                console.log('recallling critical mayday');
                                if(levelnested.length!=0)
                                    fillmeup();
                                else
                                {
                                    shuffle(shortarr);
                                    helpertrim(shortarr);
                                }
                                target_for_expert(helperarr);
                                final_target_expert();
                                criticalshit=0;
                            }
                            else
                            {
                                target=eval(resultset[0]);
                                solution=resultset[0];
                                resultset.length=0;
                                console.log('desired equation is this'+solution);
                            }
                        }

                        function makeready(max, min) {
                            //console.log('examining from makeready levelnested '+levelnested);
                            if (playno == 5) {
                                cardsleft=4;
                                clearInterval(counter);
                                console.log(level+" "+secondsleft)
                                $('#box2').fadeIn( 1000);
                                $('#box1').addClass('animlefthidden');
                                $('#box1').removeClass('animlefthiddenun');                    $('#score').html("Score :"+score);
                                $("input:radio[name='timelimit']").each(function(i) {
                                    this.checked = false;
                                });
                                $("input:radio[name='level']").each(function(i) {
                                    this.checked = false;
                                });

                                result=0;
                                $('#first-part').parent().show();
                                $('#second-part').parent().show();
                                $('#third-part').parent().show();
                                $('#fourth-part').parent().show();
                                $('#fifth-part').parent().hide();
                                $('#sixth-part').parent().hide();
                                $('#seventh-part').parent().hide();
                                $('#eighth-part').parent().hide();
                                $('#ninth-part').parent().hide();
                                $('#tenth-part').parent().hide();
                                $('#eleventh-part').parent().hide();
                                $('#twelveth-part').parent().hide();
                                $("#pass").prop("disabled", false);
                                $('#logeq').hide();
                                $('.box4').hide();
                                count = 0;
                                tempVal=0;
                                clock=0;
                                $("#" + divtoStay + "").removeClass('activee');
                                divtoStay="";
                                divtoHide="";
                                playno=0;
                                score=0;
                                levelnested=[];
                                lastinlevelnested='';
                                $('#timer').html("0");

                                /*
                                 noofturn=0;
                                 */
                                if(secondsleft="oneeighty")
                                    $('input[type=radio][name=timelimit][id=oneeighty]').prop("checked",true).trigger('change');
                                else if(secondsleft="threesixty")
                                    $('input[type=radio][name=timelimit][id=threesixty]').prop("checked",true).trigger('change');
/*
                                         $("input:radio[id='"+level+"']").prop("checked",true);
*/
                                if(level=="easy")
                                    $('input[type=radio][name=level][id=easy]').prop("checked",true).trigger('change');
                                else if(level=="medium")
                                    $('input[type=radio][name=level][id=medium]').prop("checked",true).trigger('change');
                                else if(level=="hard")
                                    $('input[type=radio][name=level][id=hard]').prop("checked",true).trigger('change');
                                else
                                    $('input[type=radio][name=level][id=expert]').prop("checked",true).trigger('change');
                            }
                            tle=0;
                            //clearInterval(blinking);
                            if(level=="easy")
                            {

                                mytrim(arr,10);
                                shuffle(shortarr);
                                helpertrim(shortarr);
                                cardsleft=4;
                                target_for_easy(helperarr);
                                final_target_easy();
                            }
                            else if(level=="medium")
                            {
                                mytrim(arr,15);
                                shuffle(shortarr);
                                helpertrim(shortarr);
                                cardsleft=4;
                                target_for_medium(helperarr);
                                final_target_medium();
                            }
                            else if(level=="hard")
                            {
                                mytrim(arr,15);
                                shuffle(shortarr);
                                helpertrim(shortarr);
                                cardsleft=4;
                                target_for_medium(helperarr);
                                final_target_hard();
                            }
                            else if(level=="expert")
                            {
                                mytrim(arr,25);
                                shuffle(shortarr);
                                helpertrim(shortarr);
                                cardsleft=4;
                                target_for_expert(helperarr);
                                final_target_expert();
                            }

                            $("#" + divtoStay + "").removeClass('activee');
                            $("#" + divtoHide + "").removeClass('activee');
                            $("." + tempSign + "-op").removeClass('activee activee-border');
                            divtoStay="";
                            divtoHide="";
                            tempSign="";
                            tempVal=0;
                            secondTemp=0;
                            resultcache=0;
                            result=0;
                            foolspass=0;
                            serial=1;
                            $('#first-part').html("<h2 class='text-center'></h2>");
                            $('#second-part').html("<h2 class='text-center'></h2>");
                            $('#third-part').html("<h2 class='text-center'></h2>");
                            $('#fourth-part').html("<h2 class='text-center'></h2>");
                            $('#fifth-part').html("<h2 class='text-center'></h2>");
                            var dontdestroyplayno=playno+1;
                            $("#turn").html("Turn :" + dontdestroyplayno);
                            $("#showscore").html("Score :" + score);
                            $('.log>#logeq').html('<span id="logtarget">Your target '+ ' '+ target+'</span><br>');
                            $('.log>#logeq').hide();
                            $('#first-part').html("<h2 class='text-center'>" + helperarr[0] + "</h2>");
                            $('#second-part').html("<h2 class='text-center'>" + helperarr[1] + "</h2>");
                            $('#third-part').html("<h2 class='text-center'>" + helperarr[2] + "</h2>");
                            $('#fourth-part').html("<h2 class='text-center'>" + helperarr[3] + "</h2>");
                            $('#fifth-part').html("<h2 class='text-center'></h2>");


                            $('.box>#target').html("<h2 class='left'>Your target is <span id='tg'>" + target + "</span></h2>");
                        }

                        function mytrim(arr,n) {
                            var i = 0;
                            for (i = 0; i < n; i++)
                                shortarr[i] = arr[i];
                        }

                        function arrcutter(arr,n) {
                            var i = 0;
                            for (i = 0; i < n; i++)
                                backuparr[i] = arr[i];
                        }

                        function helpertrim(arr) {
                            var i = 0;
                            var j=0;
                            for (i = 0; i < 4; i++)
                                helperarr[i] = arr[i];
                        }

                        $('#pass').click(function () {
                            cardsleft++;
                            foolspass++;
                            //console.log('this is me from pass critical'+cardsleft);
                            if (foolspass == 1) {
                                $('#fifth-part').show();
                                $('#fifth-part').parent().show();

                                $('#fifth-part').html("<h2 class='text-center'>" + shortarr[4] + "</h2>");
                            }
                            else if (foolspass == 2) {
                                $('#sixth-part').show();
                                $('#sixth-part').parent().show();
                                $('#sixth-part').html("<h2 class='text-center'>" + shortarr[5] + "</h2>");
                            }
                            else if (foolspass == 3) {
                                $('#seventh-part').show();
                                $('#seventh-part').parent().show();

                                $('#seventh-part').html("<h2 class='text-center'>" + shortarr[6] + "</h2>");

                            }
                            else if (foolspass == 4) {
                                $('#eighth-part').show();
                                $('#eighth-part').parent().show();
                                $('#eighth-part').html("<h2 class='text-center'>" + shortarr[7] + "</h2>");
                            }
                            else if (foolspass == 5) {
                                $('#ninth-part').show();
                                $('#ninth-part').parent().show();
                                $('#ninth-part').html("<h2 class='text-center'>" + shortarr[8] + "</h2>");
                            }
                            else if (foolspass == 6) {
                                $('#tenth-part').show();
                                $('#tenth-part').parent().show();

                                $('#tenth-part').html("<h2 class='text-center'>" + shortarr[9] + "</h2>");
                            }
                            else if (foolspass == 7) {
                                $('#eleventh-part').show();
                                $('#eleventh-part').parent().show();

                                if(level=="easy")
                                    $('#eleventh-part').html("<h2 class='text-center'>" + shortarr[7] + "</h2>");
                                else
                                    $('#eleventh-part').html("<h2 class='text-center'>" + shortarr[10] + "</h2>");

                            }
                            else if (foolspass == 8) {
                                $('#twelveth-part').show();
                                $('#twelveth-part').parent().show();

                                if(level=="easy")
                                    $('#twelveth-part').html("<h2 class='text-center'>" + shortarr[5] + "</h2>");
                                else
                                    $('#twelveth-part').html("<h2 class='text-center'>" + shortarr[11] + "</h2>");                    $("#pass").prop("disabled", true);
                            }
                        })
                        
                        function freelastclick(a)
                        {
                            var i = levelnested.indexOf(a);
                            //console.log('amake tomar jiboner sathe ken jorale'+ a);

                            if(i != -1) {
                                levelnested.splice(i, 1);
                            }
                        }
                        $('#first-part,#second-part,#fourth-part,#third-part,#fifth-part,#sixth-part,#seventh-part,#eighth-part,#ninth-part,#tenth-part,#eleventh-part,#twelveth-part').click(function () {
                            var a = $(this).text();
                            //console.log(a);
                            if (tempVal == 0&&divtoStay=="") {
                                //if there was no previous value
                                tempVal = a;
                                divtoStay = $(this).data('detect');
                                var pos=parseInt($(this).data('pos'));
                                lastinlevelnested=pos;
                                levelnested.push(pos);

                                $(this).addClass('activee');
                                var logentry=$('.log>#logeq').html();
                                logentry = logentry + "<br>"+"<span id='serial'>" + serial + "</span>" + tempVal;
                                $('.log>#logeq').html(logentry);
                                //console.log('Assigning '+pos+' in level nested critical '+levelnested);
                            }
                            else {
                                //if there was previous value I mean a button was  clicked as first value

                                if ($(this).data('detect') != divtoStay && tempSign != "") {
                                    if(divtoHide!="") {
                                        freelastclick(lastinlevelnested);
                                        $("#" + divtoHide + "").removeClass('activee');
                                        // cardsleft=cardsleft+1;
                                        var log = document.querySelectorAll('#logeq');
                                        var string = log[0].innerHTML;
                                        /*  if($("#"+divtoStay+"").is(':visible'))
                                         {
                                         var searchres = string.lastIndexOf('<span id="serial">' + (serial - 1) + '</span>');
                                         if (searchres != -1) {
                                         log[0].innerHTML = string.substr(0, searchres);
                                         serial--;

                                         }
                                         }
                                         else
                                         {
                                         var searchres = string.lastIndexOf('class="sign" data-id="' + (serial - 1) + '"');
                                         if (searchres != -1) {
                                         var cut = string.lastIndexOf('<div');
                                         if (cut != -1) {
                                         log[0].innerHTML = string.substr(0, cut);
                                         serial--;

                                         }

                                         }
                                         }*/
                                        var searchres = string.lastIndexOf('<span id="serial">' + (serial - 1) + '</span>');
                                        if (searchres != -1) {
                                            log[0].innerHTML = string.substr(0, searchres);
                                            serial--;
                                            $('.sign[data-id="' + (serial - 1) + '"]').css({
                                                'opacity': '1'
                                            });
                                            console.log('this is cardsleft in divchange ' + cardsleft);
                                        }
                                    }
                                    secondTemp = a;
                                    divtoHide = $(this).data('detect');
                                    var pos=parseInt($(this).data('pos'));
                                    levelnested.push(pos);
                                    console.log('Assigning '+pos+' in level nested critical '+levelnested);
                                    setInterval(blinker,1000);
                                    $(this).addClass('activee');
                                    calc();
                                }
                                else if ($(this).data('detect') != divtoStay && tempSign == "") {
                                    //i changed my decission or clicked some div by fault and forgot to add operation
                                    if($("#"+divtoStay+"").is(':visible'))
                                    {
                                        freelastclick(lastinlevelnested);
                                        tempVal=a;
                                        var pos=parseInt($(this).data('pos'));
                                        levelnested.push(pos);
                                        lastinlevelnested=pos;
                                        $("#"+divtoStay+"").removeClass('activee');
                                        $(this).addClass('activee');
                                        divtoStay = $(this).data('detect');

                                    }
                                    else{
                                        freelastclick(lastinlevelnested);
                                        if(divtoHide!="")
                                            $("#"+divtoHide+"").removeClass('activee');
                                        secondTemp = a;
                                        divtoHide = $(this).data('detect');
                                        lastinlevelnested=pos;
                                        var pos=parseInt($(this).data('pos'));
                                        levelnested.push(pos);
                                        $(this).addClass('activee');
                                    }

                                }
                                else if ($(this).data('detect') == divtoStay && tempSign == "") {
                                    $(this).addClass('activee');
                                    //i changed my decission or clicked some div by fault and forgot to add operation
                                }
                            }

                        });

                        $('.plus-op').click(function () {
                            // console.log(tempSign);
                            if(divtoStay!="") {
                                if (tempSign == "") {
                                    tempSign = "plus";
                                    //   $(this).addClass('activee activee-border')
                                    $('.plus-op').addClass('activee activee-border');
                                    var logentry = $('.log>#logeq').html();
                                    if($("#"+divtoStay+"").is(':visible')) {
                                        logentry = logentry + ' ' + '<p id="tempsign">+</p>';
                                    }
                                    else
                                    {
                                        logentry=logentry+ "<br>" + "<div class='sign' data-id='" + serial + "'>+</div>";
                                    }
                                    $('.log>#logeq').html(logentry);
                                    if(divtoHide!="")
                                        calc();
                                }
                                else if (tempSign != "") {
                                    //console.log(tempSign);
                                    $("." + tempSign + "-op").removeClass('activee activee-border');
                                    tempSign = "plus";
                                    $('.plus-op').addClass('activee activee-border');
                                    var string=$('.log>#logeq').html();
                                    var setup="";
                                    if($("#"+divtoStay+"").is(':hidden')) {
                                        var searchres = string.lastIndexOf('class="sign" data-id="' + serial + '"');
                                        if (searchres == -1)
                                            setup = string + '<br>' + '<div class="sign" data-id="' + serial + '">+</div>';
                                        else if (searchres != -1) {
                                            var searchres1 = string.lastIndexOf('<div');
                                            setup = jQuery.trim(string.substr(0, searchres1)) + '<br>' + '<div class="sign" data-id="' + serial + '">+</div>';
                                        }
                                    }
                                    else
                                    {
                                        var searchres = string.lastIndexOf('<p id="tempsign">');
                                        if (searchres != -1)
                                            setup = jQuery.trim(string.substr(0, searchres)) + '<p id="tempsign">+</p>';
                                    }
                                    $('.log>#logeq').html(setup);

                                    if(divtoHide!="")
                                        calc(1);
                                }
                                $('.box4>.log').animate({
                                    scrollTop: $('#logeq').height() + 'px'
                                }, 1000);
                            }
                        });

                        $('.minus-op').click(function () {
                            //console.log(tempSign);
                            if(divtoStay!="") {
                                if (tempSign == "") {
                                    tempSign = "minus";
                                    $('.minus-op').addClass('activee activee-border');
                                    var logentry = $('.log>#logeq').html();
                                    if($("#"+divtoStay+"").is(':visible')) {
                                        logentry = logentry + ' ' + '<p id="tempsign">-</p>';
                                    }
                                    else
                                    {
                                        logentry=logentry+ "<br>" + "<div class='sign' data-id='" + serial + "'>-</div>";
                                    }
                                    $('.log>#logeq').html(logentry);
                                    if(divtoHide!="")
                                        calc();
                                }
                                else if (tempSign != "") {
                                    $("." + tempSign + "-op").removeClass('activee activee-border');
                                    tempSign = "minus";
                                    $('.minus-op').addClass('activee activee-border');
                                    var string=$('.log>#logeq').html();
                                    var setup="";
                                    if($("#"+divtoStay+"").is(':hidden')) {
                                        var searchres = string.lastIndexOf('class="sign" data-id="' + serial + '"');
                                        if (searchres == -1)
                                            setup = string + '<br>' + '<div class="sign" data-id="' + serial + '">-</div>';
                                        else if (searchres != -1) {
                                            var searchres1 = string.lastIndexOf('<div');
                                            setup = jQuery.trim(string.substr(0, searchres1)) + '<br>' + '<div class="sign" data-id="' + serial + '">-</div>';
                                        }
                                    }
                                    else
                                    {
                                        var searchres = string.lastIndexOf('<p id="tempsign">');
                                        if (searchres != -1)
                                            setup = jQuery.trim(string.substr(0, searchres)) + '<p id="tempsign">-</p>';
                                    }
                                    $('.log>#logeq').html(setup);
                                    if(divtoHide!="")
                                        calc(1);
                                }
                                $('.box4>.log').animate({
                                    scrollTop: $('#logeq').height() + 'px'
                                }, 1000);
                            }
                        });

                        $('.divide-op').click(function () {
                            if(divtoStay!="") {
                                if (tempSign == "") {
                                    tempSign = "divide";
                                    $('.divide-op').addClass('activee activee-border');
                                    var logentry = $('.log>#logeq').html();
                                    if($("#"+divtoStay+"").is(':visible')) {
                                        logentry = logentry + ' ' + '<p id="tempsign">/</p>';
                                    }
                                    else
                                    {
                                        logentry=logentry+ "<br>" + "<div class='sign' data-id='" + serial + "'>/</div>";
                                    }
                                    $('.log>#logeq').html(logentry);
                                    if(divtoHide!="")
                                        calc();
                                }
                                else if (tempSign != ""){

                                    $("." + tempSign + "-op").removeClass('activee activee-border');
                                    tempSign = "divide";
                                    $('.divide-op').addClass('activee activee-border');
                                    var string=$('.log>#logeq').html();
                                    var setup="";
                                    if($("#"+divtoStay+"").is(':hidden')) {
                                        var searchres = string.lastIndexOf('class="sign" data-id="' + serial + '"');
                                        if (searchres == -1)
                                            setup = string + '<br>' + '<div class="sign" data-id="' + serial + '">/</div>';
                                        else if (searchres != -1)
                                            {
                                                var searchres1 = string.lastIndexOf('<div');
                                                setup = jQuery.trim(string.substr(0, searchres1)) + '<br>' + '<div class="sign" data-id="' + serial + '">/</div>';
                                            }

                                    }
                                    else
                                    {
                                        var searchres = string.lastIndexOf('<p id="tempsign">');
                                        if (searchres != -1)
                                            setup = jQuery.trim(string.substr(0, searchres)) + '<p id="tempsign">/</p>';
                                    }
                                    $('.log>#logeq').html(setup);
                                    if(divtoHide!="")
                                        calc(1);
                                }
                                $('.box4>.log').animate({
                                    scrollTop: $('#logeq').height() + 'px'
                                }, 1000);
                            }
                        });

                        $('.multiply-op').click(function () {
                            if(divtoStay!="") {
                                if (tempSign == "") {
                                    tempSign = "multiply";
                                    $('.multiply-op').addClass('activee activee-border');
                                    var logentry = $('.log>#logeq').html();
                                    if($("#"+divtoStay+"").is(':visible')) {
                                        logentry = logentry + ' ' + '<p id="tempsign">*</p>';
                                    }
                                    else
                                    {
                                        logentry=logentry+ "<br>" + "<div class='sign' data-id='" + serial + "'>*</div>";
                                    }
                                    $('.log>#logeq').html(logentry);
                                    if(divtoHide!="")
                                        calc();
                                }
                                else if (tempSign != ""){
                                    $("." + tempSign + "-op").removeClass('activee activee-border');
                                    tempSign = "multiply";
                                    $('.multiply-op').addClass('activee activee-border');
                                    var string=$('.log>#logeq').html();
                                    var setup="";
                                    if($("#"+divtoStay+"").is(':hidden')) {

                                        var searchres = string.lastIndexOf('class="sign" data-id="' + serial + '"');
                                        if (searchres == -1)
                                            setup = string + '<br>' + '<div class="sign" data-id="' + serial + '">*</div>';
                                        else if (searchres != -1) {
                                            var searchres1 = string.lastIndexOf('<div');
                                            setup = jQuery.trim(string.substr(0, searchres1)) + '<br>' + '<div class="sign" data-id="' + serial + '">*</div>';
                                        }
                                    }
                                    else
                                    {
                                        var searchres = string.lastIndexOf('<p id="tempsign">');
                                        if (searchres != -1)
                                            setup = jQuery.trim(string.substr(0, searchres)) + '<p id="tempsign">*</p>';
                                    }

                                    $('.log>#logeq').html(setup);
                                    if(divtoHide!="")
                                        calc(1);
                                }
                                $('.box4>.log').animate({
                                    scrollTop: $('#logeq').height() + 'px'
                                }, 1000);
                            }
                        });

                        $('#finish').click(function(){
                            if(result==target) {
                                if (divtoHide != "" && result != resultcache) {
                                    cardsleft = cardsleft - 1;
                                    console.log(result);
                                }
                                console.log('result is ' + result + ' cardsleft is ' + cardsleft + ' target is ' + target);
                                if (result == target && cardsleft == 1) {
                                    cardsleft = 4;
                                    result = 0;
                                    tempVal = 0;
                                    serial = 1;
                                    //  resetclicked=0;
                                    levelnested = [];
                                    lastinlevelnested = '';
                                    resultcache = 0;
                                    $('div.box').block({
                                        message: '<img src="images/hourglass.gif" /><h1 style="color:#FFF;font-family:CartWheel">You have won</h1>',
                                        css: {
                                            width: '50%',
                                            border: 'none',
                                            cursor: 'wait',
                                            backgroundColor: 'transparent'
                                        },
                                        overlayCSS: {backgroundColor: '#000000', opacity: 0.8, cursor: 'wait'},
                                        timeout: 2000,
                                        onUnblock: function () {
                                            clearInterval(counter);
                                            //clearInterval(blinking);
                                            count = clock;
                                            counter = setInterval(timer, 1000);
                                        }
                                    });

                                    $("#" + divtoStay + "").removeClass('activee');
                                    $("#" + divtoStay + "").html("<h2 class='text-center'></h2>");
                                    $("#" + divtoHide + "").removeClass('activee');
                                    $("#" + divtoHide + "").parent().hide();
                                    $("." + tempSign + "-op").removeClass('activee activee-border');
                                    tempSign = "";
                                    divtoStay = "";
                                    divtoHide = "";

                                    var timepassed = 0;
                                    if (tle == 0)
                                        timepassed = clock - count;
                                    else
                                        timepassed = clock + count;

                                    if (secondsleft == "oneeighty") {

                                        if (timepassed <= 180)
                                            score = score + 5;
                                        else if (timepassed > 180 && timepassed <= 200)
                                            score = score + 4;
                                        else if (timepassed > 200 && timepassed <= 220)
                                            score = score + 3;
                                        else if (timepassed > 220 && timepassed <= 240)
                                            score = score + 2;
                                        else if (timepassed > 240)
                                            score = score + 1;
                                    }
                                    else if (secondsleft == "threesixty") {
                                        if (timepassed <= 300)
                                            score = score + 5;
                                        else if (timepassed > 300 && timepassed <= 329)
                                            score = score + 4;
                                        else if (timepassed > 329 && timepassed <= 350)
                                            score = score + 3;
                                        else if (timepassed > 350 && timepassed <= 390)
                                            score = score + 2;
                                        else if (timepassed > 390)
                                            score = score + 1;
                                    }
                                    //console.log(score);

                                    playno++;
                                    makeready(0, 10);
                                    resultset = [];

                                    $('#first-part').parent().show();
                                    $('#second-part').parent().show();
                                    $('#third-part').parent().show();
                                    $('#fourth-part').parent().show();
                                    $('#fifth-part').parent().hide();
                                    $('#sixth-part').parent().hide();
                                    $('#seventh-part').parent().hide();
                                    $('#eighth-part').parent().hide();
                                    $('#ninth-part').parent().hide();
                                    $('#tenth-part').parent().hide();
                                    $('#eleventh-part').parent().hide();
                                    $('#twelveth-part').parent().hide();
                                    $("#pass").prop("disabled", false);
                                    $('.log>#logeq').show();

                                }
                                else if (result != target && cardsleft == 1) {
                                    //console.log('I am foolspass'+foolspass);
                                    if (foolspass == 8) {
                                        score = score + 0;
                                        cardsleft = 4;
                                        levelnested = [];
                                        lastinlevelnested = '';
                                        resultcache = 0;
                                        $('div.box').block({
                                            message: '<img src="images/hourglass.gif" /><h1 style="color:#FFF;font-family:CartWheel">You have lost</h1>',
                                            css: {
                                                width: '50%',
                                                border: 'none',
                                                cursor: 'wait',
                                                backgroundColor: 'transparent'
                                            },
                                            overlayCSS: {backgroundColor: '#000000', opacity: 0.8, cursor: 'wait'},
                                            timeout: 2000,
                                            onUnblock: function () {
                                                clearInterval(counter);
                                                count = clock;
                                                counter = setInterval(timer, 1000);
                                            }
                                        });
                                        $("#" + divtoStay + "").removeClass('activee');
                                        $("#" + divtoStay + "").html("<h2 class='text-center'></h2>");
                                        $("#" + divtoHide + "").removeClass('activee');
                                        $("#" + divtoHide + "").parent().hide();
                                        $("." + tempSign + "-op").removeClass('activee activee-border');
                                        tempSign = "";
                                        divtoStay = "";
                                        divtoHide = "";

                                        playno++;
                                        makeready(1, 15);
                                        $('#first-part').parent().show();
                                        $('#second-part').parent().show();
                                        $('#third-part').parent().show();
                                        $('#fourth-part').parent().show();
                                        $('#fifth-part').parent().hide();
                                        $('#sixth-part').parent().hide();
                                        $('#seventh-part').parent().hide();
                                        $('#eighth-part').parent().hide();
                                        $('#ninth-part').parent().hide();
                                        $('#tenth-part').parent().hide();
                                        $('#eleventh-part').parent().hide();
                                        $('#twelveth-part').parent().hide();
                                        $("#pass").prop("disabled", false);
                                        $('.log>#logeq').show();

                                    }
                                }
                                else if (result == target && cardsleft > 1) {
                                    //console.log('Cards Left '+cardsleft);
                                    tempVal = 0;
                                    result = 0;
                                    fillmeup();
                                    resultcache = 0;
                                    if (level == "easy") {
                                        target_for_easy(helperarr);
                                        final_target_easy();
                                    }
                                    else if (level == "medium") {
                                        target_for_medium(helperarr);
                                        final_target_medium();
                                    }
                                    else if (level == "hard") {
                                        target_for_medium(helperarr);
                                        final_target_hard();
                                    }
                                    else if (level == "expert") {
                                        target_for_expert(helperarr);
                                        final_target_expert();
                                    }
                                    $("#" + divtoStay + "").removeClass('activee');
                                    $("#" + divtoHide + "").removeClass('activee');
                                    $("#" + divtoHide + "").parent().hide();
                                    $("#" + divtoStay + "").parent().hide();
                                    $("." + tempSign + "-op").removeClass('activee activee-border');
                                    tempSign = "";
                                    divtoStay = "";
                                    divtoHide = "";

                                    $('#first-part').html("<h2 class='text-center'>" + helperarr[0] + "</h2>");
                                    $('#second-part').html("<h2 class='text-center'>" + helperarr[1] + "</h2>");
                                    $('#third-part').html("<h2 class='text-center'>" + helperarr[2] + "</h2>");
                                    $('#fourth-part').html("<h2 class='text-center'>" + helperarr[3] + "</h2>");
                                    $('#first-part').parent().show();
                                    $('#second-part').parent().show();
                                    $('#third-part').parent().show();
                                    $('#fourth-part').parent().show();
                                    $('.box>#target').html("<h2 class='left'>Your target is <span id='tg'>" + target + "</span></h2>");
                                    var logentry = $('.log>#logeq').html();
                                    logentry = logentry + '<br><span id="logtarget">Your target  ' + target+'</span>';
                                    $('.log>#logeq').html(logentry);
                                    $('.sign[data-id="' + (serial - 1) + '"]').css({
                                        'opacity': '1'
                                    });
                                    $('.box4>.log').animate({
                                        scrollTop: $('#logeq').height() + 'px'
                                    }, 1000);

                                    levelnested.length = 0;
                                }

                                //reset undo
                                undo.cards=99999;
                                undo.res=99999;
                                undo.rescac=99999;
                                undo.first=99999;
                                undo.sec=99999;
                                undo.sign="";
                                undo.hide="";
                                undo.show="";
                                undo.visible=false;
                            }
                        });

                        $('#next').click(function(){
                            if(divtoStay!=""&divtoHide!="") {
                                //saving data
                                undo.cards=cardsleft;
                                undo.hide=divtoHide;
                                undo.show=divtoStay;
                                undo.first=tempVal;
                                undo.sec=secondTemp;
                                undo.res=result;
                                undo.rescac=resultcache;
                                undo.sign=tempSign;
                                undo.visible=$("#"+divtoStay+"").is(':visible');
                                resultcache=result;
                               // resetclicked=0;
                                $("#" + divtoHide + "").removeClass('activee');
                                $("#" + divtoHide + "").parent().hide();
                                $("#" + divtoHide + "").html("<h2 class='text-center'></h2>");
                                $("#" + divtoStay + "").html("<h2 class='text-center'>" + result + "</h2>");
                                $("#" + divtoStay + "").removeClass('activee');
                                $("#" + divtoStay + "").parent().hide();

                                $("." + tempSign + "-op").removeClass('activee activee-border');
                                tempVal = result;
                                secondTemp = 0;
                                tempSign = "";
                                divtoHide = "";
                                cardsleft=cardsleft-1;
                                console.log('this is status of cardsleft in calculation critical' + cardsleft);

                                if (cardsleft == 1)
                                    $("#finish").trigger("click");
                                console.log('this is result n resultcache'+result+' '+resultcache+' div to stay'+divtoStay);

                            }

                        });

                        $('#undo').click(function(){
                            if(undo.res!=99999&&undo.cards!=99999&&undo.rescac!=99999&&undo.first!=99999)
                            {
                                if(divtoHide!=""||tempSign!="")
                                {
                                    //removing active
                                    console.log($("#"+divtoHide+"").hasClass('activee'))
                                    console.log($("."+tempSign+"-op").hasClass('activee'))
                                    if($("."+tempSign+"-op").hasClass('activee'))
                                        $("."+tempSign+"-op").removeClass('activee activee-border');
                                    if($("#"+divtoHide+"").hasClass('activee'))
                                        $("#"+divtoHide+"").removeClass('activee');
                                    if((divtoHide!=""||tempsign!="")&&$("#"+divtoStay+"").is(':hidden'))
                                    {
                                        log = document.querySelectorAll('#logeq');
                                        var string = log[0].innerHTML;
                                        var searchres;
                                        if(divtoHide!=""&& tempsign!="") {
                                            searchres = string.lastIndexOf('class="sign" data-id="' + (serial - 1) + '"');//because div clicking adds serial
                                            serial--;
                                        }
                                        else if(divtoHide==""&&tempSign!="")
                                            searchres= string.lastIndexOf('class="sign" data-id="'+(serial)+'"');

                                        if(searchres!=-1)
                                        {
                                            var searchres1 = string.lastIndexOf('<div');
                                            substring= jQuery.trim(string.substr(0, searchres1));
                                            log[0].innerHTML=substring;
                                        }
                                    }
                                    //$("#"+divtoStay+"").removeClass('activee');
                                }
                                cardsleft=  undo.cards;
                                result=     undo.res;
                                resultcache=undo.rescac;
                                tempVal=    undo.first;
                                secondTemp= undo.sec;
                                tempSign=   undo.sign;
                                divtoHide=  undo.hide;
                                divtoStay=  undo.show;
                                $("#"+divtoHide+"").parent().show();
                                $("#"+divtoHide+"").html('<h2 class="text-center">'+ secondTemp+'</h2>');

                                $("#"+divtoHide+"").addClass('activee');
                                $("."+tempSign+"-op").addClass('activee activee-border');


                                if(undo.visible==true)
                                {
                                    $("#"+divtoStay+"").parent().show();
                                    $("#"+divtoStay+"").html('<h2 class="text-center">'+ tempVal+'</h2>');
                                    $("#"+divtoStay+"").addClass('activee');

                                }
                                else
                                {
                                    $("#"+divtoStay+"").html('<h2 class="text-center">'+ tempVal+'</h2>');

                                }
                                console.log(undo.hide+" "+undo.show+" "+undo.cards+" "+undo.first+" "+undo.sec+" "+undo.visible+" "+undo.res+" "+undo.rescac)

                                    undo.cards=99999;
                                    undo.res=99999;
                                    undo.rescac=99999;
                                    undo.first=99999;
                                    undo.sec=99999;
                                    undo.sign="";
                                    undo.hide="";
                                    undo.show="";
                                    undo.visible=false;

                                }
                        });

                        function shuffle(array) {
                            var currentIndex = array.length, temporaryValue, randomIndex;
                            // While there remain elements to shuffle...
                            while (0 !== currentIndex) {
                                // Pick a remaining element...
                                randomIndex = Math.floor(Math.random() * currentIndex);
                                currentIndex -= 1;
                                // And swap it with the current element.
                                temporaryValue = array[currentIndex];
                                array[currentIndex] = array[randomIndex];
                                array[randomIndex] = temporaryValue;
                            }

                            return array;
                        }

                        function check(array,target) {
                            var i;
                            for (i = 0; i < 4; i++) {
                                if (array[i] == target) {
                                    return -1;
                                }
                            }
                            return 1;
                        }

                        var permArr = [],usedChars = [];

                        function permute(input) {

                            var i, ch;
                            for (i = 0; i < input.length; i++) {
                                ch = input.splice(i, 1)[0];
                                usedChars.push(ch);
                                if (input.length == 0) {
                                    permArr.push(usedChars.slice());
                                }
                                permute(input);
                                input.splice(i, 0, ch);
                                usedChars.pop();
                            }
                            return permArr
                        }

                        function isInt(value) {
                            var x;
                            if (isNaN(value)) {
                                return false;
                            }
                            x = parseFloat(value);
                            return (x | 0) === x;
                        }

                        function target_for_easy(helperarr) {
                            resultset=[];
                            var temp = Combinatorics.permutation(helperarr,4);
                            var a=temp.toArray();
                            //console.log("target for easy a"+a);
                            var baseN = Combinatorics.baseN(['+', '/', '-', '*'], 3);
                            var b = baseN.toArray();
                            shuffle(b);
                            // console.log('length of number combination critical '+a.length);
                            // console.log('length of sign combination critical'+b.length);

                            var i = 0;
                            var j = 0;

                            for (i = 0; i < b.length; i++) {
                                for (j = 0; j < a.length; j++) {
                                    var tar = eval(a[j][0] + b[i][0] + a[j][1] + b[i][1]+a[j][2]+ b[i][2]+a[j][3]);
                                    if(isInt(tar)&&(tar>=1&&tar<=10)) {
                                        if(check(helperarr,tar)!=-1&&cookiechecker(tar))
                                        {
                                            resultset.push(a[j][0] + b[i][0] + a[j][1] + b[i][1]+a[j][2]+ b[i][2]+a[j][3]);
                                            target=eval(resultset[0]);
                                            criticalshit=0;
                                            return;

                                        }

                                    }

                                }

                            }
                            criticalshit=1;

                        }

                        function target_for_medium(helperarr) {
                            resultset=[];
                            // console.log("targer for medium short" +shortarr);
                            var temp = Combinatorics.permutation(helperarr,4);
                            var a=temp.toArray();
                            //console.log("targer for easy a"+a);
                            var baseN = Combinatorics.baseN(['+', '/', '-', '*'], 3);
                            var b = baseN.toArray();
                            shuffle(b);
                            var i = 0;
                            var j = 0;
                            //console.log(b);
                            if(level=="medium"){
                                for (i = 0; i < a.length; i++) {
                                    for (j = 0; j < b.length; j++) {
                                        var tar = eval(a[i][0] + b[j][0] + a[i][1] + b[j][1]+a[i][2]+ b[j][2]+a[i][3]);
                                        if(isInt(tar)&&(tar>=1&&tar<=15)) {
                                            if(check(helperarr,tar)!=-1&&cookiechecker(tar))
                                            {
                                                resultset.push(a[i][0] + b[j][0] + a[i][1] + b[j][1]+a[i][2]+ b[j][2]+a[i][3]);
                                                // console.log('I broke at '+ (i+1)*j);
                                                target=eval(a[i][0] + b[j][0] + a[i][1] + b[j][1]+a[i][2]+ b[j][2]+a[i][3]);
                                                criticalshit=0;
                                                return;

                                            }
                                        }
                                    }
                                }
                                console.log('executed critical'+(i+1)*j );
                                criticalshit=1;

                            }
                            else if(level=="hard"){
                                for (i = 0; i < a.length; i++) {
                                    for (j = 0; j < b.length; j++) {
                                        var tar = eval(a[i][0] + b[j][0] + a[i][1] + b[j][1]+a[i][2]+ b[j][2]+a[i][3]);
                                        if(isInt(tar)&&(tar>=5&&tar<=15)) {
                                            if(check(helperarr,tar)!=-1&&cookiechecker(tar))
                                            {
                                                resultset.push(a[i][0] + b[j][0] + a[i][1] + b[j][1]+a[i][2]+ b[j][2]+a[i][3]);
                                                // console.log('I broke at '+ ((i+1)*j));
                                                target=eval(a[i][0] + b[j][0] + a[i][1] + b[j][1]+a[i][2]+ b[j][2]+a[i][3]);
                                                criticalshit=0;
                                                return;
                                            }

                                        }

                                    }

                                }
                                console.log('executed critical'+(i+1)*j );
                                criticalshit=1;
                            }
                        }

                        function target_for_expert(helperarr) {
                            resultset=[];
                            var temp = Combinatorics.permutation(helperarr,4);
                            var a=temp.toArray();
                            var baseN = Combinatorics.baseN(['+', '/', '-', '*'], 3);
                            var b = baseN.toArray();
                            shuffle(b);
                            var i = 0;
                            var j = 0;

                            for (i = 0; i < b.length; i++) {
                                for (j = 0; j < a.length; j++) {
                                    var tar = eval(a[j][0] + b[i][0] + a[j][1] + b[i][1]+a[j][2]+ b[i][2]+a[j][3]);
                                    if(isInt(tar)&&(tar>=20&&tar<=50)) {
                                        if(check(helperarr,tar)!=-1&&cookiechecker(tar))
                                        {
                                            resultset.push(a[j][0] + b[i][0] + a[j][1] + b[i][1]+a[j][2]+ b[i][2]+a[j][3]);
                                            target=eval(resultset[0]);
                                            criticalshit=0;
                                            return;

                                        }
                                    }
                                }
                            }
                            criticalshit=1;

                        }

                        function calc(iamfromsign=0) {

                            result = 0;
                            sign="";
                            if (tempSign == "plus")
                            {
                                if(isInt(tempVal)!=false && isInt(secondTemp)!=false)
                                    result = parseInt(tempVal) + parseInt(secondTemp);
                                else
                                    result = parseFloat(tempVal) + parseFloat(secondTemp);
                                sign="+";
                            }
                            else if (tempSign == "minus"){
                                if(isInt(tempVal)!=false && isInt(secondTemp)!=false)
                                    result = parseInt(tempVal) - parseInt(secondTemp);
                                else
                                    result = parseFloat(tempVal) - parseFloat(secondTemp);

                                sign="-";
                            }
                            else if (tempSign == "multiply")
                            {
                                if(isInt(tempVal)!=false && isInt(secondTemp)!=false)
                                    result = parseInt(tempVal) * parseInt(secondTemp);
                                else
                                    result = parseFloat(tempVal) * parseFloat(secondTemp);
                                if(isInt(result)==false)
                                {
                                    if((result-parseInt(result))>=0.6)
                                         result=Math.ceil(result);
                                    else if((result-parseInt(result))<=0.35)
                                        result=Math.floor(result);
                                    else
                                        result=result;
                                }
                                sign="*";
                            }
                            else if (tempSign == "divide"){
                                if(isInt(tempVal)!=false && isInt(secondTemp)!=false)
                                    result = parseInt(tempVal) / parseInt(secondTemp);
                                else
                                    result = parseFloat(tempVal) / parseFloat(secondTemp);

                                if(isInt(result)==false)
                                   result= result.toFixed(2);
                                sign="/";
                            }
                            else {
                            }
                            // cardsleft--;

                            console.log('this is status of cardsleft in calculation critical'+cardsleft)
                            var logentry=$('.log>#logeq').html();
                            if(iamfromsign!=1) {

                                var substring='';
                                if($("#"+divtoStay+"").is(':visible')) {

                                    var searchres = logentry.lastIndexOf('<span id="serial">' + serial + '</span>');
                                    if (searchres != -1) {
                                        substring = jQuery.trim(logentry.substr(0, searchres));
                                        substring = substring + "<br>" + "<span id='serial'>" + serial + "</span>" + tempVal + " <p id='tempsign'>" + sign + "</p> " + secondTemp + " = " + result;
                                    }
                                    else
                                        substring = logentry + "<br>" + "<span id='serial'>" + serial + "</span>" + tempVal + " <p id='tempsign'>" + sign + "</p> " + secondTemp + " = " + result;

                                    $('.log>#logeq').html(substring);
                                }
                                else if($("#"+divtoStay+"").is(':hidden'))
                                {
                                    var searchres = logentry.lastIndexOf('<span id="serial">' + (serial) + '</span>');
                                    if (searchres != -1) {
                                        substring = jQuery.trim(logentry.substr(0, searchres));
                                        substring = substring + "<br>" + "<span id='serial'>" + serial + "</span>" + tempVal + " <p id='tempsign'>" + sign + "</p> " + secondTemp + " = " + result;
                                    }
                                    else
                                    {
                                        substring = logentry + "<br>" + "<span id='serial'>" + serial + "</span>" + tempVal + " <p id='tempsign'>" + sign + "</p> " + secondTemp + " = " + result;
                                    }
                                    $('.log>#logeq').html(substring);
                                }

                                serial++;
                                console.log(substring);
                                $('.box4>.log').animate({
                                    scrollTop: $('#logeq').height() + 'px'
                                }, 1000);

                                    $('.sign[data-id="' + (serial - 2) + '"]').css({
                                        'opacity': '1'
                                    });
                                $('.sign[data-id="' + (serial - 1) + '"]').css({
                                    'opacity': '1'
                                });

                            }
                            else if(iamfromsign==1){
                                console.log('i entering man'+serial);
                                var log;
                                var substring;
                                if($("#"+divtoStay+"").is(':hidden')) {
                           $('#logeq>div').eq(-1).remove();
                                     log = document.querySelectorAll('#logeq');
                                    var string = log[0].innerHTML;
                                    var searchres = string.lastIndexOf('class="sign" data-id="'+(serial-1)+'"');
                                    if(searchres!=-1)
                                    {
                                        var searchres1 = string.lastIndexOf('<div');
                                        substring= jQuery.trim(string.substr(0, searchres1));
                                        substring = substring + "<br>" +"<div class='sign' data-id='"+(serial-1)+"'>"+sign+"</div>"+ "<span id='serial'>" + (serial-1) + "</span>" + tempVal + " <p id='tempsign'>" + sign + "</p> " + secondTemp + " = " + result + "<br>" ;

                                    }
                                }
                                else if($("#"+divtoStay+"").is(':visible')) {
                                    log = document.querySelectorAll('#logeq');
                                    var string = log[0].innerHTML;
                                    var searchres = string.lastIndexOf('<span id="serial">' + (serial-1) + '</span>');

                                    if (searchres != -1)
                                    substring = jQuery.trim(string.substr(0, searchres));
                                    substring = substring + "<br>" + "<span id='serial'>" + (serial - 1) + "</span>" + tempVal + " <p id='tempsign'>" + sign + "</p> " + secondTemp + " = " + result + "<br>";
                                }

                                log[0].innerHTML=substring;
                                console.log(substring);
                                $('.box4>.log').animate({
                                    scrollTop: $('#logeq').height() + 'px'
                                }, 1000);
                                $('.sign[data-id="' + (serial - 1) + '"]').css({
                                    'opacity': '1'
                                });
                            }
                            console.log('this is result n resultcache n serial'+result+' '+resultcache+' '+serial);

                        }

                        function fillmeup(){
                            var len=0;
                            var i=0;
                            var j=0;
                            var lastround=[];
                            for(var i=0;i<levelnested.length;i++)
                            {
                                if(!isNaN(levelnested[i]))
                                {
                                    lastround[len]=helperarr[levelnested[i]];
                                    len++;
                                } //in order to get the card number on board accurate
                            }

                            cardsleft=cardsleft+len-1;

                            for(i=0;i<levelnested.length;i++)
                            {
                                helperarr[levelnested[i]]=0;
                            }
                            var dontbeamongus=[];
                            dontbeamongus=shortarr.slice(4,8);
                            var finaldontbeamongus=dontbeamongus.concat(lastround);
                            //console.log('Fill final dontbeamongus critical'+finaldontbeamongus);
                            backuparr.length=0;
                            if(level=="easy")
                            {
                                arrcutter(arr,10);

                            }
                            else if(level=="medium") {
                                arrcutter(arr,15);
                            }
                            else if(level=="hard")
                            {
                                arrcutter(arr,15);
                            }
                            else if(level=="expert")
                            {
                                arrcutter(arr,30);
                            }
                            shuffle(backuparr);
                            var array=[];
                            var k=0;
                            var l=0;
                            var backlength=backuparr.length;
                            if(level!="easy")
                            {
                                for(k=0;k<backlength;k++)
                                {
                                    if(jQuery.inArray(backuparr[k],finaldontbeamongus)==-1)
                                    {
                                        array[l]=backuparr[k];
                                        l++;
                                    }

                                }
                                //console.log('i receive var arr critical'+array);
                                var arraylength=array.length;

                                for(i=0;i<arraylength;i++)
                                {
                                    if(len==0)
                                    {
                                        //console.log("Short Array clear to engage critical"+helperarr);
                                        //levelnested=[];
                                        return;
                                    }
                                    if(jQuery.inArray(array[i],helperarr)==-1)
                                    {
                                        for(j=0;j<helperarr.length;j++)
                                        {
                                            if(helperarr[j]==0)
                                            {
                                                helperarr[j]=array[i];
                                                len--;
                                                break;
                                            }
                                        }
                                    }
                                }
                            }
                            else
                            {
                                for(i=0;i<backlength;i++)
                                {
                                    if(len==0)
                                    {
                                        return;
                                    }
                                    if(jQuery.inArray(backuparr[i],helperarr)==-1&&jQuery.inArray(backuparr[i],lastround)==-1)
                                    {
                                        for(j=0;j<helperarr.length;j++)
                                        {
                                            if(helperarr[j]==0)
                                            {
                                                helperarr[j]=backuparr[i];
                                                len--;
                                                break;
                                            }
                                        }
                                    }
                                }
                            }
                        }

                        function cookiechecker(tar){
                            var json=Cookies.get('target');
                            var redflag=0;
                            if(json=="" ||json==null||typeof json=='undefined')
                            {
                                var arr=[];
                            }
                            else {
                                //console.log('i will try to delete cookie');
                                var arr = JSON.parse(json);
                                var lengtth=arr.length;
                                //console.log('cookie lengtht'+lengtth+'cookie limit'+cookielimit);

                                if(lengtth>=cookielimit&&arr[lengtth-1]!=tar)
                                {
                                    console.log('engaging your target');
                                    arr.length=0;
                                    Cookies.remove('target');
                                }
                                for(var i=0;i<lengtth;i++)
                                {
                                    if(arr[i]==tar)
                                    {
                                        redflag=1;
                                        console.log('i broke .target was'+tar);
                                        break;
                                    }
                                }
                            }
                            if(redflag==1)
                                return 0;
                            else
                            {
                                arr.push(tar);
                                json = JSON.stringify(arr);
                                var date = new Date();
                                var minutes = 10;
                                date.setTime(date.getTime() + (minutes * 60 * 1000));
                                Cookies.set('target', json, { expires: date });
                                console.log('This is from cookie' + arr);
                                return 1;
                            }
                        }

                        function blinker() {
                            $('.sign').last().fadeOut(500);
                            $('.sign').last().fadeIn(500);
                        }


                    });
                </script>
            </footer>
        </body>

</html>
