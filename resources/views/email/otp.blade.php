<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <center>
        <h2>Verifikasi Akun Bengkel AE</h2>
    </center>
    <h3>Hello, {{ $name }}</h3>
    <p>Berikut ini adalah kode OTP anda, untuk selanjutnya anda dapat memasukkan kode tersebut ke dalam kolom yang disediakan untuk melanjutkan langkah berikutnya</p>
    <center>
        <tr>
            <td class="button" style="font-family: Geneva, Tahoma, Verdana, sans-serif; font-size: 16px; padding-top: 26px;" width="640" align="center">
                <a href="#" style="background: #0c99d5; color: #fff; text-decoration: none; border: 14px solid #0c99d5; border-left-width: 50px; border-right-width: 50px; text-transform: uppercase; display: inline-block;">
                    {{$otp}}
                </a>
            </td>
        </tr>
    </center>

</body>

</html>