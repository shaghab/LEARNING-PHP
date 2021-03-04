<?php
    if (! empty($_GET))
        var_dump ($_GET);
?>

<h2>Contact</h2>

<form name="contact" method="GET">
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" placeholder="Your Name" />
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="Your Email" />
    </div>
    <div>
        <p>Reason for Contact:</p>
        <input type="radio" name="reason" id="consult" value="consult" />
        <label for="consult">Consult</label>
        <input type="radio" name="reason" id="question" value="question" />
        <label for="question">Question</label>
        <input type="radio" name="reason" id="hello" value="hello" />
        <label for="hello">Say Hello</label>
    </div>
    <div>
        <p>What topics do you like reading about:</p>
        <input type="checkbox" name="topics[]" id="topic_html" value="html" />
        <label for="html">HTML</label>
        <input type="checkbox" name="topics[]" id="topic_css" value="css" />
        <label for="css">CSS</label>
        <input type="checkbox" name="topics[]" id="topic_php" value="php" />
        <label for="php">PHP</label>
    </div>
    <div>
        <p>What's your favourite movie(s)?<p>
        <select name="movies[]" id="movies" size="4" multiple>
            <option value="star_wars_i">Star Wars I</option>
            <option value="star_wars_ii">Star Wars II</option>
            <option value="star_wars_iii">Star Wars III</option>
            <option value="star_wars_iv">Star Wars IV</option>
        </select> 
    </div>    
    <div>
        <label for="message">What's your message?</label>
        <textarea name="message" id="message" rows="3" cols="60" >Your Name...
        </textarea> 
    </div>    
    <div>
        <input type="submit" value="submit" />
    </div>
</form>