<?php
// Created by Professor Wergeles for CS2830 at the University of Missouri

	if(!session_start()) {
		header("Location: error.php");
		exit;
	}
	
	$loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];
	if (!$loggedIn) {
		header("Location: login_page.php");
		exit;
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>JSON Viewer</title>
    <meta charset="utf-8">
    <script src="jslibs/jquery-2.1.4.min.js"></script> 
    
    <style>
        body{
            color: aliceblue;
            background-color: #00527e;
            background-image: url(tec_background.png);
            background-size:cover;
        }
        #main_wrapper{
            margin: 5%;
            padding: 5%;
            text-align: center;
            background-color: #696969;
            border-radius: 10%;
            box-shadow: 0 0 10px 10px #0a0b0d;
        }
        h1{
             text-shadow: 0 0 4px #11181f;
        }
        #json_data{
            height: 400px;
            background-color: white;
            color: black;
            text-align: left;
            overflow: scroll;
        }
    </style>
    <script>
        $(function(){
            $("#selection_form").submit(function(event){
                event.preventDefault();
                var selection = $('select[name=file]').val();
                console.log(selection);
                if(selection != 'blank'){
                    if(selection == 'char_stats'){
                        $("#filename").html("Character Stat JSON File");
                        $.getJSON("character_stats.json", function(recieved){
                            recieved = JSON.stringify(recieved);
                            $("#json_data").html(recieved);           
                         });
                    }else{
                        $("#filename").html("Character Abilities JSON File");
                        $.getJSON("abilities.json", function(recieved){
                            recieved = JSON.stringify(recieved);
                            $("#json_data").html(recieved);  
                        });
                    }
                    
                }else{
                    alert("Please make a selection.");
                }
                
            });              
        });
    </script>
</head>
<body>
    <div id="main_wrapper">
        <h1>ROR2 Chacter Showcase JSON File Viewer</h1>
        <div id="form_wrapper">
            <form id='selection_form'>
                <label for="file">Select the JSON file</label>
                <select name="file">
                    <option value="blank"></option>
                    <option value="char_stats">Character Stats</option>
                    <option value="abilities">Character Abilities</option>
                </select>
                <input type="submit" value="Submit">
            </form>
        </div>
        <div id="json_div">
            <h3 id="filename"></h3>
            <div id="json_data">
            </div>
        </div>
        <p><a href='logout.php'>Logout</a></p>
    </div>
</body>
</html>
