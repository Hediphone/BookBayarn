<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/css/contact.css">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <main>
        <h1>CONTACT US</h1>
        <div class="container">
            <div class="contact-box">
                <p>We'd Love To Hear From You! <br> Let's Get in Touch</p>
            
                <div class="form-fields">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label>Full Name</label>
                            <textarea name="fullname" placeholder="Enter name" rows="1"></textarea>
                        </div>
                        <div class="col-md-6">
                            <label>Company</label>
                            <textarea name="company" placeholder="Company name" rows="1"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label>Email</label>
                            <textarea name="email" placeholder="example@gmail.com" rows="1"></textarea>
                        </div>
                        <div class="col-md-6">
                            <label>Phone Number</label>
                            <textarea name="phone" placeholder="+1 (555) 000 - 0000" rows="1"></textarea>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label>Address</label>
                        <textarea name="address" placeholder="Brgy, City, Province" rows="1"></textarea>
                    </div>
                    <div class="message-form mb-3">
                        <label>Your Message</label>
                        <textarea name="message" placeholder="Type your message here" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </div>
            </div>
            <img src="asset/images/front.png" alt="Illustration" class="contact-image">
        </div>
    </main>
</body>
</html>
