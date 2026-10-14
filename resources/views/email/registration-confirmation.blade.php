
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Confirmation</title>
</head>

<body style="font-family: Arial, sans-serif; background:#f3f4f6; padding:20px;">

    <div style="max-width:600px; margin:auto; background:#ffffff; padding:30px; border-radius:10px;">

        <h2 style="color:#2563eb;">
            Registration Successful!
        </h2>

        <p>
            Dear {{ $registration->full_name }},
        </p>

        <p>
            Thank you for registering with us.
            Your registration has been received successfully.
        </p>

        <h3>Registration Details</h3>

        <table cellpadding="8" cellspacing="0" width="100%">

            <tr>
                <td><strong>Name</strong></td>
                <td>{{ $registration->full_name }}</td>
            </tr>

            <tr>
                <td><strong>Email</strong></td>
                <td>{{ $registration->email }}</td>
            </tr>

            <tr>
                <td><strong>Mobile</strong></td>
                <td>{{ $registration->mobile }}</td>
            </tr>

            <tr>
                <td><strong>Complaints</strong></td>
                <td>{{ $registration->compliants ?? 'N/A' }}</td>
            </tr>

        </table>

        <p style="margin-top:25px;">
            We will contact you with further details.
        </p>

        <p>
            Thank you,<br>
            Rayaan systems
        </p>

    </div>

</body>
</html>