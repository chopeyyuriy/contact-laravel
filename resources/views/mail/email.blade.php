<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feedback form</title>
</head>
<body>
<main role="main" class="inner cover">
    <table class="table" style="margin: 0 auto;
    color: #3b3a3a;
    background: #f1f2f7;
    padding: 54px;
    border-radius: 10px;">
        <tbody>
        <tr style="text-align: left;">
            <th colspan="2">Cообщение от {{ $contact->first_name }} {{ $contact->last_name }}</th>
            <td style="    color: #000000;"></td>
        </tr>
        <tr style="text-align: left;">
            <th style="    font-weight: 500;
    color: #acacac;">First Name
            </th>
            <td style="    color: #000000;">{{ $contact->first_name }}</td>
        </tr>
        <tr style="text-align: left;">
            <th style="font-weight: 500;color: #acacac;">Last Name</th>
            <td style="color: #000000;">{{ $contact->last_name }}</td>
        </tr>
        <tr style="text-align: left;">
            <th style="font-weight: 500;color: #acacac;">Email Name</th>
            <td style="color: #000000;">{{ $contact->email }}</td>
        </tr>
        </tbody>
    </table>
</main>
</body>
</html>






