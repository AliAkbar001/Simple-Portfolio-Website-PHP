<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
        <title>Home</title>
    </head>
    <body>
        <?php $title = 'My Profile'; include('mini6header.php');?>
        <div class="content">
            <div id="home" class="row introduction">
                <div class="col-4 col-s-12">
                    <img src='https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&q=80'/>
                </div>
                <div class="col-8 col-s-12 title-name">
                    <h1>Welcome Here! I am Ali</h1>
                    <p>I am an experienced joiner with well developed skills and experience in groundwork, concrete finishing and steel fixing and have worked in the construction industry since 1982. I am also a skilled labourer who has supported many different trades over the years. I have a full clean UK driving licence with entitlement of up to 7.5 tonne. I am keen to return to work after a period of training and personal development which has broadened my skills and experiences.</p>
                    <p>
                        Education: <strong>Bachelors in Computer Science</strong>
                        <br>
                        Experience: <strong>2 years</strong>
                    </p>
                </div>
            </div>
            <div id="services" class='row services'>
                <div class="col-3 col-m-6 col-s-12">
                    <h2>Supervisor</h2>
                    <p>Monitors activity to identify project roadblocks</p>
                    <img src="https://assets.codepen.io/2301174/icon-supervisor.svg" alt="">
                </div>
                <div class="col-3 col-m-6 col-s-12">
                    <h2>Team Builder</h2>
                    <p>Scans our talent network to create the optimal team for your project</p>
                    <img src="https://assets.codepen.io/2301174/icon-team-builder.svg" alt="">
                </div>
                <div class="col-3 col-m-6 col-s-12">
                    <h2>Calculator</h2>
                    <p>Uses data from past projects to provide better delivery estimates</p>
                    <img src="https://assets.codepen.io/2301174/icon-calculator.svg" alt="">
                </div>
                <div class="col-3 col-m-6 col-s-12">
                    <h2>Karma</h2>
                    <p>Regularly evaluates our talent to ensure quality</p>
                    <img src="https://assets.codepen.io/2301174/icon-karma.svg" alt="">
                </div>
            </div>
            <div id="contact_me" class="row contact-me">
                <div class="col-12">
                    <h1>Contact Me</h1>
                    <h3>Email</h3>
                    <a href=“mail:abc@gmail.com”>abc@gmail.com</a>
                    <h3>Phone</h3>
                    <a href=“tel:555-666-7777”>555-666-7777</a>
                    <h3>Location</h3>
                    <a>Gujrat, Pakistan</a>
                </div>
            </div>
        </div>
        <?php include('mini6footer.php')?>
    </body>
</html>