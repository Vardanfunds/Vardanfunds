<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Acknowledgement of Your Message</title>
</head>

<body style="margin:0; padding:0; background:#f5f6fa; font-family: Arial, Helvetica, sans-serif;">

    <table width="100%" cellspacing="0" cellpadding="0" style="padding: 30px 0;">
        <tr>
            <td align="center">

                <table width="600" cellspacing="0" cellpadding="0" 
                       style="background:#ffffff; border-radius:10px; overflow:hidden; box-shadow:0 4px 20px rgba(0,0,0,0.08);">

                    <!-- Header -->
                    <tr>
                        <td style="background:#003366; padding:20px; text-align:center; color:#ffffff;">
                            <h2 style="margin:0;">Vardan Funds</h2>
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td style="padding:30px; color:#444444; font-size:15px; line-height:1.7;">

                            <p>Dear <strong><?php echo e($name); ?></strong>,</p>

                            <p>Thank you for reaching out to us through our website.</p>

                            <p>
                                We have received your message and our team will review it shortly. 
                                One of our representatives will get back to you soon.
                            </p>

                            <p>
                                We appreciate your interest in <strong>Vardan Funds</strong> and look forward 
                                to connecting with you soon.
                            </p>

                            <br>

                            <p>Warm regards,</p>
                            <p><strong>Vardan Funds</strong></p>

                            <a href="https://www.vardanfunds.com" 
                               style="color:#003366; text-decoration:none; font-weight:bold;">
                               www.vardanfunds.com
                            </a>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background:#f1f3f5; padding:15px; text-align:center; color:#666666; font-size:13px;">
                            © <?php echo e(date('Y')); ?> Vardan Funds. All rights reserved.
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>
</html>
<?php /**PATH /home/wqq189w694ht/public_html/resources/views/email/enquiry_acknowledgement.blade.php ENDPATH**/ ?>