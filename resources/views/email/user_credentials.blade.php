<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>User Credentials</title>
</head>
<body style="margin:0; padding:0; background:#f5f6fa; font-family: Arial, Helvetica, sans-serif;">

    <table width="100%" cellspacing="0" cellpadding="0" style="padding: 30px 0;">
        <tr>
            <td align="center">
                <table width="600" style="background: #fff; border-radius: 10px; box-shadow: 0 3px 15px rgba(0,0,0,0.1);" cellpadding="0" cellspacing="0">

                    <!-- Header -->
                    <tr>
                        <td style="background: #4c6ef5; padding: 20px; text-align: center; color: white; font-size: 20px; font-weight: bold;">
                            Your Login Credentials
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td style="padding: 25px; font-size: 15px; color: #444; line-height: 1.6;">
                            <p>Hello,</p>

                            <p>Your account has been created successfully. Below are your login details:</p>

                            <p style="margin: 20px 0;">
                                <strong>Email:</strong> {{ $email }} <br>
                                <strong>Password:</strong> {{ $password }}
                            </p>

                            <p style="text-align: center; margin: 35px 0;">
                                <a href="{{ url('/login') }}"
                                   style="background:#4c6ef5; padding:12px 22px; color:white; text-decoration:none; border-radius:5px; font-weight:bold;">
                                    Login Now
                                </a>
                            </p>

                            <p>Please keep these credentials safe.</p>

                            <p>Thank you,<br><strong>Vardan</strong></p>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="padding: 15px; background:#f1f3f5; color:#666; text-align:center; font-size:12px;">
                            © {{ date('Y') }} Vardan. All rights reserved.
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>

</body>
</html>
