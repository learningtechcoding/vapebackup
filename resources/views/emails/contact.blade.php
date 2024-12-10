<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sky High</title>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* Your existing styles */
        body {
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .email-container {
            width: 70%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .header {
            background-color: #f4f4f4; /* Light gray background */
            color: #333;
            padding: 20px;
            text-align: center;
        }

        .header img {
            max-width: 80px;
            margin-bottom: 20px;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
            color: #0962ca;
        }

        .content {
            padding: 20px;
            line-height: 1.6;
        }

        .content h2 {
            color: #0962ca;
        }

        .content p {
            color: #333;
        }

        .footer {
            background-color: #f0f4f9;
            color: #333;
            padding: 20px;
            text-align: center;
            font-size: 14px;
            border-top: 1px solid #e0e0e0;
        }

        .back-link {
            text-align: center;
            margin-top: 20px;
        }

        .back-link a {
            color: #0962ca;
            text-decoration: none;
        }

        .back-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="header">
            <img src="https://rahhimdesigns.com/assets/img/Rahim.png" alt="Sky High Logo">
            <h1>Thank You for Contacting Us!</h1>
        </div>

        <div class="content">
            <h2>Dear {{ $name }},</h2>
            <p>Thank you for your interest. Here's a copy of your message:</p>

            <blockquote>
                "{{ $userMessage }}"
            </blockquote>

            <p>We will get back to you shortly.</p>
        </div>

        <div class="footer">
            <p>Best regards,</p>
            <p>Contact: <a href="mailto:info@gmail.com">info@gmail.com</a></p>

            <!-- Back Link -->
            <div class="back-link">
                <p><a href="https://rahhimdesigns.com" target="_blank">Back to Website</a></p>
            </div>
        </div>
    </div>
</body>

</html>
