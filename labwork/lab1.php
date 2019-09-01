<!doctype html>
<html>
    <head>
        <title>Labwork 1: Hello World</title>
        <meta charset="utf-8">
        <style>
            body {
                background-color: #0093D1;
                color: white;
            }
            h1 {
                background-color: #004C70;
                color: white;
            }
            a {
                color: #F2635F;
            }
        </style>
    </head>
    <body>
        <h1>Scott Ashlock</h1>
            <p>Hello. My name is Scott and I am a web development student. I should have my
            associate degree in web development by the end of the Fall 2019 semester. I've 
            dabbled in web design here and there since back when GeoCities was still a thing. 
            I think I made my first website in 1996 or so and edited the code using WebTV since 
            I did not have computer at the time. Beyond web development and programming I spend 
            most of my time listening to podcasts or reading. </p>
            
            
            
            <?php
            echo "<p>Here are a few of the podcast I enjoy:
                    <ul>
                        <li><a href='https://www.dharmapunxnyc.com/' target='_blank'>Dharma Punx NYC</a>: Dhama talks and mediations by Josh Korda</li>
                        <li><a href='http://thedollop.libsyn.com/' target='_blank'>The Dollop</a></li>
                        <li><a href='https://www.bbc.co.uk/programmes/b006qykl/episodes/downloads' target='_blank'>In Our Time</a></li>
                    </ul>
                    
                </p>";
            ?>
    </body>
</html>