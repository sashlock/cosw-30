<!doctype html>
<html>
    <head>
        <title>Labwork 1: Hello World</title>
        <meta charset="utf-8">
        <style>
            @import url('https://fonts.googleapis.com/css?family=Hepta+Slab|Roboto&display=swap');
            
            body {
                background-color: #0093D1;
                color: white;
                margin-left: 10%;
                margin-right: 10%;
                font-family: 'Roboto', sans-serif;
            }
            h1 {
                background-color: #004C70;
                color: white;
                padding: 1.5em;
                font-family: 'Hepta Slab', serif;
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
            most of my time listening to podcasts or reading.</p>
            
            
            
            <?php
            echo "<p>Here are a couple of the podcasts I enjoy:</p>
                    <ul>
                        <li><a href='https://www.dharmapunxnyc.com/' target='_blank'>Dharma Punx NYC</a>: Dharma talks and mediations by secular and unaffiliated Buddhist teacher Josh Korda.</li>
                        <li><a href='http://thedollop.libsyn.com/' target='_blank'>The Dollop</a>: This is a podcast is hosted by two commedians, Dave Anthony and Gereth Reynolds. They discuss
                        a funny or odd story from American history.</li>
                    </ul>
                    <p>This assignment was fairly challenging due to having working with the command line. Remembering the exact order of commands to update and push this assignment to GitHub so 
                    it would show up in Heroku was difficult at first. I think I have a a fairly good hang of it now.
                </p>";
                 /* lab1.php
                    Scott Ashlock
                    09/01/19 */
            ?>
    </body>
</html>