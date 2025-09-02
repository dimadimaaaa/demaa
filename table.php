<?php
$students = [
    [
        'stdNo' => '20003',
        'stdName' => 'Ahmed Ali',
        'stdEmail' => 'ahmed@gmail.com',
        'stdGAP' => 88.7
    ],
    [
        'stdNo' => '30304',
        'stdName' => 'Mona Khalid',
        'stdEmail' => 'mona@gmail.com',
        'stdGAP' => 78.5
    ],
    [
        'stdNo' => '10002',
        'stdName' => 'Bilal Hmaza',
        'stdEmail' => 'bilal@gmail.com',
        'stdGAP' => 98.7
    ],
    [
        'stdNo' => '10005',
        'stdName' => 'Said Ali',
        'stdEmail' => 'said@gmail.com',
        'stdGAP' => 98.7
    ],
    [
        'stdNo' => '10007',
        'stdName' => 'Mohammed Ahmed',
        'stdEmail' => 'mohamed@gmail.com',
        'stdGAP' => 98.7
    ]
];
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>بيانات الطلاب</title>
    <style>
        table {
            width: 60%;
            border-collapse: collapse;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }
        table, th, td {
            border: 1px solid #333;
            text-align: center;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h2 style="text-align:center;">جدول بيانات الطلاب</h2>

    <table>
        <tr>
            <th>رقم الطالب</th>
            <th>اسم الطالب</th>
            <th>البريد الإلكتروني</th>
            <th>المعدل</th>
        </tr>
        <?php foreach ($students as $student): ?>
            <tr>
                <td><?= $student['stdNo']; ?></td>
                <td><?= $student['stdName']; ?></td>
                <td><?= $student['stdEmail']; ?></td>
                <td><?= $student['stdGAP']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <p style="text-align:center;">عدد الطلاب: <?= count($students); ?></p>

</body>
</html>