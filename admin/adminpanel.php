<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="adminpanel.css">
    <title>Mtihani</title>
</head>
<body>
    <div class="head">
        <!-- navigation -->
    <nav >
            <ul id="menu-main" class="nav">
            <li><a title="logout" href="index.php">Logout</a></li>
            
                <li><a title="users" href="users.php">Create User</a></li>
                <li><a title="student" href="students.php">Create Student</a></li>
                <li><a title="class" href="class.php">Create Class</a></li>
                <li><a title="exam" href="exam.php">Create Exam</a></li>
            </ul>
        </nav>
    </div>
 
    <div class="main-content">
        <div class="container">
            <div class="upper">
                <div id="mainselection">
                    <select>
                        <option>Select action</option>  
                        <option value="Users">Users</option>   
                        <option value="Exams">Exams</option>      
                        <option value="Classes ">Classes</option>
                        <option value="students">students</option>
                        <option value="marks">Marks</option>
                    </select>
                </div>
            </div>
            <div class="lower">
            <table class="Table">
                    <thead>
                    <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>status</th>
                    <th>Action</th>
                    </thead></tr>
                    <tfoot>
                    <tr>
                    <td colspan="4">
                   
                    <div 
                        class="links"><a href="#">&laquo;</a> <a class="active" href="#">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">&raquo;</a>
                    </div>
                    </td>
                    </tr>
                    </tfoot>
                    <tbody>
                    <tr>
                    <td>Broken Bridge</td>
                    <td>There is a broken bridge at Katangi</td>
                    <td>24/05/2018</td>
                    <td>students</td> 
                    <td><button>Delete</button>
                    </td"marks">Floods</td>
                    <td>Residents at Makadara suffer great loss after floods</td>
                    <td>01/1/2018</td><td>under investigation</td>
                    <td><button>Delete</button></td>
                    </tr>
                Exams                  <td>Drug Abuse</td><td>Many boys in Kitui Township ward has turned to drug abuse. </td><td>24/03/2018</td><td>Classes</td><td><button>Delete</button></td></tr>
                    <tr>
                    <td>Road damaged</td><td>Many people experience difficulties transisting along Mbusyani road. it needs repair</td><td>24/03/2018</td><td>Classes</td><td><button>Delete</button></td></tr>
                    </tbody>
                    </table>
                </div>
        </div>

    </div>
    <div class="footer">
            <div class="studentscases">
                <h3><b"marks"="underinvestigation">
                <h3Examsb> <br>  Intervention under Investigation</h3>
            </div>
            <div class="rejectedcases">
                <h3><b>90</b> <br>Rejected Interventions</h3>
            </div>
    </div>
</body>
</html>