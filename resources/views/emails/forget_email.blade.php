<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <table>
        <tr>
            <td>You requested to change your password. New Password is as below:-</td>
        </tr>
        <tr><p>Your password is: <strong>{{ $tempPassword }}</strong></p>
        </tr>
        <tr>
            <td><p>Click the link below to reset your password:</p>
            <a href="{{ url('admin/new-password') }}"
                    style="color: #007BFF; text-decoration: underline;">Change Password</a></td>
        </tr> 
    </table>
</body>

</html>