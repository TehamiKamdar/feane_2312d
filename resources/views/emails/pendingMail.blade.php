<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Request Pending</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border: 1px solid #ddd;
        }
        .header {
            background-color: #ffff00;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }
        .content {
            padding: 20px;
        }
        .footer {
            text-align: center;
            color: #999;
            font-size: 12px;
            padding: 10px;
        }
        /* Mobile-first responsive design */
        @media only screen and (max-width: 600px) {
            body {
                background-color: #ffffff;
            }
            .container {
                width: 100% !important;
                border: none;
            }
            .header, .content, .footer {
                padding: 15px !important;
            }
            .header h2 {
                font-size: 22px;
            }
            .content p {
                font-size: 16px;
                line-height: 1.5;
            }
            .footer {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="header">
            <h2>Booking Request Pending</h2>
        </div>

        <div class="content">
            <p>Dear {{ $demo['name'] }},</p>

            <p>We have received your appointment request and are currently reviewing it. Your request is pending confirmation.</p>

            <p>Once your appointment is confirmed, you will receive another email with all the necessary details. Thank you for choosing our services!</p>

            <p>If you have any questions or need further assistance, feel free to reach out to us at support@feane.com or +923359285777.</p>

            <p>Best regards,<br>
            Feane.</p>
        </div>

        <div class="footer">
            <p>&copy; {{ date('Y') }} Feane. All rights reserved.</p>
        </div>
    </div>

</body>
</html>
