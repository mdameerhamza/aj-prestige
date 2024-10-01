
<?php /*Template Name: Contact-Us-Chicago */ get_header(); ?>
    <main id="main">
        <section class="mainn-banner" style="background-image: url(images/main-banner.png);">
            <div class="container">
                <h1>Contact Us</h1>
            </div>
        </section>
        <section class="contact2-send-message">
            <div class="container">
                <h2 class="animation-custom">We’d love to hear from you Send Us A Message</h2>
                <div class="contact2-inner-send-message">

                    <div class="contact2-send-message-right">
                        <h2 class="animation-custom">Submit Request for Proposal</h2>
                        <form>
                            <div class="input-grp2">
                                <div class="input-container">
                                    <input type="text" id="fname" placeholder="">
                                    <label for="fname">Name</label>
                                </div>
                                <div class="input-container">
                                    <input type="number" id="phone" placeholder="">
                                    <label for="phone">Phone No</label>
                                </div>
                                <div class="input-container">
                                    <input type="email" id="email" placeholder="">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="input-grp2">


                                <div class="input-container">
                                    <select id="Client-Type" name="clientType"
                                        style="background-image: url(images/form-down-arrow.svg);">
                                        <option value="" disabled selected>No</option>
                                        <option value="yes">Yes</option>
                                    </select>
                                    <label for="past"> Do you use a transportation company?</label>
                                </div>
                                <div class="input-container">
                                    <select id="Client-Type" name="clientType"
                                        style="background-image: url(images/form-down-arrow.svg);">
                                        <option value="" disabled selected>Corporate</option>
                                        <option value="individual">Individual</option>
                                        <option value="company">Company</option>
                                        <option value="organization">Organization</option>
                                    </select>
                                    <label for="Client-Type">Client Type</label>
                                </div>
                            </div>



                            <div class="input-container">
                                <textarea id="message" rows="5"
                                    placeholder="Explain in a few words how we can help you.."></textarea>
                                <label for="message">Comments</label>
                            </div>
                            <button type="submit">Schedule Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="mappp animation-custom">
            <div class="container">
                <div class="in-mapp">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d190255.8460334488!2d-87.73196395!3d41.83373295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2c3cd0f4cbed%3A0xafe0a6ad09c0c000!2sChicago%2C%20IL%2C%20USA!5e0!3m2!1sen!2s!4v1707765993164!5m2!1sen!2s"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
    </main>

    <?php get_footer(); ?>