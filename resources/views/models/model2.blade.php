<div id="cv" class="instaFade">
    <div id="mainArea" class="quickFade delayFive">
        <section>
            <article>
                <div style="height: 100px; text-align: center">
                    <h1 class="user_name">{{ auth::user()->name }}</h1>
                    email: <a href="mailto:{{ auth::user()->email }}" target="_blank" id="user_email">{{ auth::user()->email }}</a>,
                    adress: <span id="adress">---</span>
                    phone: <span id="tel">---</span>
                </div>
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