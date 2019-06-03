<?php include 'header.php'; ?>

<div id="contact_wrap">

        <div id="contact_hero">
            <div id="contact_hero_helper"></div>
        </div>

        <div id="contact_hero_text">
            <h1>Need assistance?<br>Let us know.</h1>

            <p>Get all the answers to questions you may have from our Customer Service Team.</p>
            <p>Contact us below!</p>
            
        </div>
        <div id="contact_contact">
            <div id="contact_content_h">
                <div id="contact_content">
                    <h1>Here are some ways you can reach us.</h1>
                    <!-- row decoration -->
                    <!-- row decoration -->
                    <!-- row decoration -->
                    <div id="contact_contents">
                        <div id="number">1</div>
                        <div id="text">
                            <div id="top">Send us an email</div>
                            <div id="bottom">Between 9am - 5pm PST, we're available and get back to your emails quick!</div>
                        </div>
                    </div>
                    <!-- row decoration -->
                    <!-- row decoration -->
                    <!-- row decoration -->

                    <!-- contact form -->
                    <!-- contact form -->
                    <!-- contact form -->
                    <div id="contact_form">
                        <form action="index.php?action=contact_us" method="post">
                        <h3>What was your inquiry about?</h3>
                        <p>Lets narrow down the issue.</p>
                        <select name="inquiry">
                            <option value="I have a question before I book">I have a question before I book</option>
                            <option value="I have a question about payment">I have a question about payment</option>
                            <option value="I would like to make changes my booking">I would like to make changes my booking</option>
                            <option value="I want more information about a topic">I want more information about a topic</option>
                            <option value="I have a comment about customer service">I have a comment about customer service</option>
                            <option value="Other">Other</option>
                        </select>
                        <h3>How can we help you?</h3>
                        <p>Let us know how we can help you so we can provide you with better service.</p>
                        <textarea name="information">



                        </textarea>
                        <h3>What's your email address?</h3>
                        <p>We'll need this to get back to you. Please check if it's right.</p>
                        <input name="email" type="text" placeholder="Enter your e-mail address">
                        <div id="contact_send">
                            <div id="contact_send_item">
                                <h3>Let us know how we can help!</h3>
                            </div>
                            <div id="contact_send_item">
                                <input type="submit" value="SEND">

                            </div>
                        </div>
                        </form>
                    </div>
                    <!-- contact form -->
                    <!-- contact form -->
                    <!-- contact form -->

                    <!-- begin row decoration -->
                    <!-- begin row decoration -->
                    <!-- begin row decoration -->
                    <div id="contact_contents_2">
                        <div id="number">2</div>
                        <div id="text">Need to call us? Give us a ring at <div id="phone_number"><a class="telephone" href="tel:19168007795">+1 (916) 800-7795</a>.</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php include 'footer.php'; ?>