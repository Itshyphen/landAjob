<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<div class="postform" id="postform">
    <style>
        * {
            box-sizing: border-box;
        }

        input[type=text],input[type=email],input[type=date], select, textarea {
            width: 90%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            background-color: blue;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        input[type=submit]:hover {
            opacity: 0.6;
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .col-25, .col-75, input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
    </style>
    <strong>
    <form action="/action_page.php" method="post">
        <h2 style="color: blue">Company Information</h2>
        <div class="row">
            <div class="col-25">
                <label for="cname">Company Name</label>
            </div>
            <div class="col-75">
                <input type="text" id="cname" name="cname" placeholder="Company Name">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="cemail">Email</label>
            </div>
            <div class="col-75">
                <input type="email" id="cemail" name="cemail" placeholder="comp@example.com">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="website">Website</label>
            </div>
            <div class="col-75">
                <input type="text" id="website" name="website" placeholder="www.namaskar.np">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="country">Country</label>
            </div>
            <div class="col-75">
                <select id="country" name="country">
                    <option value="Nepal">Nepal</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="phone">Phone Number</label>
            </div>
            <div class="col-75">
                <input type="text" id="phone" name="Phone" placeholder="9846100552">
            </div>
        </div>
        <h1 style="color: blue">Job Vacancy Details</h1>
        <div class="row">
            <div class="col-25">
                <label>Job Title</label>
            </div>
            <div class="col-75">
                <input type="text" id="job" class="job" name="job">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label>Job level</label>
            </div>
            <div class="col-75">
                <select id="level" name="level">
                    <option value="Junior">Junior</option>
                    <option value="Senior">Senior</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label>Salary</label>
            </div>
            <div class="col-75">
                <input type="text" id="salary" class="salary" name="salary">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="education">Education</label>
            </div>
            <div class="col-75">
                <select id="education" name="education">
                    <option value="bachelor">Bachelor</option>
                    <option value="master">Master</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="efield">Field</label>
            </div>
            <div class="col-75">
                <select id="efield" name="efield">
                    <option value="Computer Engineering">Computer Engineering</option>
                    <option value="IT">IT</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label>Experience</label>
            </div>
            <div class="col-75">
                <input type="text" id="exp" class="exp" name="exp">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label>Deadline</label>
            </div>
            <div class="col-75">
                <input type="date" id="deadline" class="deadline" name="deadline">
            </div>
        </div>
        <div class="row">
            <input type="submit" value="Post">
        </div>
    </form>
    </strong>
</div>

</body>
</html>

