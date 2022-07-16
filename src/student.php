<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Page</title>
    <link rel="stylesheet" href="student.css">
    <script src="student.js"></script>
</head>
<body>
    <section class="bg">
        <h3 class="heading">Student Accommodation</h3>
        <h3 class= "heading"><a href='logout.php'>LOGOUT</a></h3>

        <div class="history">
            <p class="h-head">History</p>
            <table width="100%">
                <thead>
                    <tr>
                        <td>Application</td>
                        <td>Status</td>
                    </tr>
                </thead>
                
                
                <tbody>
                    <tr>
                        <td class="app">Application 1</td>
                        <td>Approved</td>
                    </tr>
    
                    <tr>
                        <td>Application 2</td>
                        <td>Rejected</td>
                    </tr>
                </tbody>
                
            </table>
        </div>

        <div class="application">
            <p class="a-head">Application</p>

            <form name="aform" action="add_app.php?" method="post" onsubmit="return validate();" autocomplete="off">
                <div class="room">
                    <p>Room Type</p>
                    <select name="room">
                        <option style="display:none"></option>
                        <option value="single">Single room apartment (RM400/month)</option>
                        <option value="double">Double room apartment (RM600/month)</option>
                        <option value="deluxe">Deluxe apartment (RM1000/month)</option>
                    </select>
                </div>

                <div class="location">
                    <p>Location</p>
                    <select name="location">
                        <option style="display:none"></option>
                        <option value="South">South Wing</option>
                        <option value="West">West Wing</option>
                        <option value="East">East Wing</option>
                        <option value="North">North Wing</option>
                    </select>
                </div>

                <div class="date">
                    <p>Entry Date</p>
                    <input name="_date" type="date" value="" id="date">
                </div>

                <div>
                    <input name="submit" type="submit" class="button" value="Submit">
                </div>
                
            </form>
        </div>
    </section>

    
</body>
</html>