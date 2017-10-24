<div id="cv" class="instaFade">
    <div class="mainDetails">
        <div id="name">
            <h1 class="quickFade delayTwo user_name">{{ auth::user()->name }}</h1>
        </div>

        <div id="contactDetails" class="quickFade delayFour">
            <ul>
                <li>e: <a href="mailto:{{ auth::user()->email }}" target="_blank" id="user_email">{{ auth::user()->email }}</a></li>
                <li>a: <span id="adress"></span></li>
                <li>t: <span id="tel"></span></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>

    <div id="mainArea" class="quickFade delayFive">
        <section>
            <article>
                <div>
                    <h3>Dear <span id="dear"></span></h3>
                    <p>


                        I am writing to apply for the <span style="color: #ffa500" id="post">xxxx</span> position at your company <span style="color: #ffa500" id="companie_name">Company name</span> . As requested, I am enclosing a completed job application, my certification, my resume, and three references.

                        The opportunity presented in this listing is very interesting, and I believe that my strong technical experience and education will make me a very competitive candidate for this position. The key strengths that I possess for success in this position include:

                        I have successfully designed, developed, and supported live use applications

                        I strive for continued excellence
                        I provide exceptional contributions to customer service for all customers
                        With a BS degree in Computer Programming, I have a full understanding of the full lifecycle of a software development project. I also have experience in learning and excelling at new technologies as needed.

                        Please see my resume for additional information on my experience.

                        Thank you for your time and consideration. I look forward to speaking with you about this employment opportunity.
                    </p>
                </div>
                <div style="text-align: right">
                    <p>Sincerely,<br><span class="user_name">{{ auth::user()->name }}</span></p>
                </div>
            </article>
            <div class="clear"></div>
        </section>

    </div>
</div>