<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
        <title>Hobbies</title>
    </head>
    <body>
        <?php $title = 'My Hobbies'; include('mini6header.php');?>
        <div class="content">
            <div class="row hobby">
                <div class="col-4">
                    <img src='https://images.unsplash.com/photo-1593341646782-e0b495cff86d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=60'/>
                </div>
                <div class="col-8">
                    <h2>Cricket</h2>
                    <p>The game of cricket has something for everyone because it gives people the opportunity to choose their favourite things about this game like betting or following a particular player. Many people enjoy watching cricket because they feel like they are there at the stadium cheering on their favourite team.</p>
                </div>
            </div>
            <div class="row hobby hobby-odd">
                <div class="col-8">
                    <h2>Video Games</h2>
                    <p>Gaming is really a workout for your mind disguised as fun. Studies have shown that playing video games regularly may increase gray matter in the brain and boost brain connectivity. (Gray matter is associated with muscle control, memories, perception, and spatial navigation.)</p>
                </div>
                <div class="col-4">
                    <img src='https://images.unsplash.com/photo-1586182987320-4f376d39d787?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80'/>
                </div>
            </div>
            <div class="row hobby">
                <div class="col-4">
                    <img src='https://images.unsplash.com/photo-1542204637-e67bc7d41e48?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=435&q=80'/>
                </div>
                <div class="col-8">
                    <h2>Movies</h2>
                    <p>We may learn a lot by watching movies. Movies may motivate us to make positive changes in our lives, and movies' strong characters can inspire us to do the same. The benefit of watching movies can increase self-motivation to be solid and inflexible in dealing with all the problems.</p>
                </div>
            </div>
        </div>
        <?php include('mini6footer.php')?>
    </body>
</html>