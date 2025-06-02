<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="sidebar">
     <h2>STUDENT MENAGMENT SYSTEM</h2>
     <ul>
        <li a class="active" href="#">Dashboard</a></li>
        <li><a href="#">Students</a></li>
        <li><a href="#">Courses</a></li>
     </ul>
    </div>

    <div class="main-content">
        <h1>Students</h1>
        <button class="add-btn">Add Student</button>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Course</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($students as $student): ?>
             <tr>
               <td><?=htmlspecialchars($student['name'])?></td>
               <td><?=htmlspecialchars($student['email'])?></td>
               <td><?=htmlspecialchars($student['phone'])?></td>
               <td><?=htmlspecialchars($student['course'])?></td>
             </tr>

             <?php endforeach;?>
            </tbody>
        </table>
    </div>
</body>
</html>