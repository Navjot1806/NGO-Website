<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> -->
    <title>Volunteering form</title>
    <link rel="stylesheet" href="form.css?v=<?php echo time(); ?>">
</head>
<body>
     <div class="testbox">
      <form action="volunteer_action.php" method="POST" onsubmit="return formvalidate()">
        <div class="banner">
          <h1>Volunteer Signup Form</h1>
        </div>
        <br/>
        <p>We are seeking volunteers to serve our community. Fill in the information below to indicate how you would like to become involved.</p>
        <br/>
        <div class="colums">
          <div class="item">
            <label for="name">Name<span>*</span></label>
            <input id="name" type="text" name="name" class="form-control" />
            <span id="username"></span>
          </div>
          <div class="item">
            <label for="email">Email Address<span>*</span></label>
            <input id="email" type="text" name="email" class="form-control" />
            <span id="emails"></span>
          </div>
          <div class="item">
            <label for="phone">Phone<span>*</span></label>
            <input id="phone" type="tel"   name="phone" class="form-control" />
            <span id="phonenumber"></span>
          </div></br>
          <div class="item">
            <label for="address">Address<span>*</span></label>
            <input id="address" type="text" name="address" class="form-control" />
            <span id="addr"></span>
          </div>
          
          <div class="item">
            <label for="city">City<span>*</span></label>
            <br>
            <select name="city" id="city" class="form-control" required>
                <option value="Ahmedabad">Ahmedabad</option>
                <option value="Vadodara">Vadodara</option>
                <option value="Surat">Surat</option>
                <option value="Rajkot">Rajkot</option>
                <option value="Anand">Anand</option>
                <option value="Vidyanagar">Vidyanagar</option>
            </select>
          </div>
        </div>

        <div class="week">
          <div class="question">
            <label>Different Events In Which You Can Volunteer :</label>
            <div class="question-answer">
              <span id="choice_error" style="color:red"></span>
              <div>
                <input type="radio" value="1" id="radio_0" name="choice">
                <label for="radio_0" class="radio" onclick="show(1)"><span>Volunteer For Child Education</span></label>
              </div>
              <div>
                <input  type="radio" value="2" id="radio_1" name="choice"/>
                <label for="radio_1" class="radio" onclick="show(2)"><span>Volunteer For Covid-19 relief</span></label>
              </div>
              <div>
                <input  type="radio" value="3" id="radio_2" name="choice"/>
                <label for="radio_2" class="radio" onclick="show(3)"><span>Volunteer For Tree Plantation Programme</span></label>
              </div>
            </div>
          </div>
        </div>
        <div class="week" id="education" style="display:none">
          <div class="question">
            <label>What grade children can you teach?</label>
            <div class="question-answer">
            <span id="err0" style="color:red"></span>
              <div>
                <input type="radio" value="Kindergarten" id="radio_3" name="grade">
                <label for="radio_3" class="radio"><span>Kindergarten</span></label>
              </div>
              <div>
                <input  type="radio" value="1-4" id="radio_4" name="grade"/>
                <label for="radio_4" class="radio"><span>1-4</span></label>
              </div>
              <div>
                <input  type="radio" value="5-8" id="radio_5" name="grade"/>
                <label for="radio_5" class="radio"><span>5-8</span></label>
              </div>
              <div>
                <input  type="radio" value="Any" id="radio_6" name="grade"/>
                <label for="radio_6" class="radio"><span>Any</span></label>
              </div>
            </div>
            <label>What is your Educational Qualification?</label>
            <div class="question-answer">
                <div class="item">
                <!-- <label for="city">City<span>*</span></label>
                <br> -->
                <select name="edu" id="edu" class="form-control" required>
                    <option value="10th">10th</option>
                    <option value="12th">12th</option>
                    <option value="UG">UG</option>
                    <option value="PG">PG</option>
                </select>
                </div>
            </div>
            <label>For how many days would you like to volunteer?</label>
            <div class="question-answer">
                <div class="item">
                <span id="err1" style="color:red"></span>
                <input id="days1" type="number" name="days1" class="form-control" min="1" max="30">
                </div>
            </div>
          </div>
        </div>
        <div class="week" id="covid" style="display:none">
          <div class="question">
          <label>For how many days would you like to volunteer?</label>
            <div class="question-answer">
                <div class="item">
                <span id="err2" style="color:red"></span>
                <input id="days2" type="number" name="days2" class="form-control" min="1" max="30">
                </div>
            </div>
          </div>
        </div>
        <div class="week" id="tree" style="display:none">
          <div class="question">
          <label>For how many days would you like to volunteer?</label>
            <div class="question-answer">
                <div class="item">
                <span id="err3" style="color:red"></span>
                <input id="days3" type="number" name="days3" class="form-control" min="1" max="30">
                </div>
            </div>
          </div>
        </div>
        <div class="btn-block">
          <button type="submit" href="/">Sign Up</button>
        </div>
      </form>
    </div>
    <script type="text/javascript" src="js/volunteer_control.js"></script>
    <script type="text/javascript" src="js/volunteer_validation.js"></script>
</body>
</html>