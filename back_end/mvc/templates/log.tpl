<html>
<head>
    <title> Logs </title>
</head>
<body>
<table border="1">
    <thead>
    <th>Message</th>
    <th>Logged In</th>
    </thead>
    <tbody>
    {foreach $errors as $error}
        <tr>
            <td>{$error['message']}</td>
            <td>{date("Y-m-D H:i:s", $error['time'])}</td>
        </tr>
    {/foreach}
    </tbody>
</table>

<table border="1">
    <thead>
    <th>Message</th>
    <th>Logged In</th>
    </thead>
    <tbody>
    {foreach $logs as $log}
        <tr>
            <td>{$log['message']}</td>
            <td>{date("Y-m-D H:i:s", $log['time'])}</td>
        </tr>
    {/foreach}
    </tbody>
</table>
</body>
</html>