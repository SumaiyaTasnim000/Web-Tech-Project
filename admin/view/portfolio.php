<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="POST" action=""><h1> Patient Portfolio</h1><br>
        <tr>
            <td>Patient Name:<input type="text" name = "PatientName" /></td>
            
        </tr>
        <br>
        <tr>
            <td>Patient Email:<input type="text" name = "PatientEmail" /></td>
        </tr>
        <br>
        <tr>
        Gender:
        <td><select name="Gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Others">Others</option>
        </select></td>
        </tr>
        <br>
        <tr>
        <tr>
            <td>Height:<input type="text" name = "Height" /></td>
            
        </tr>
        <br>
        <tr>
            <td>Weight:<input type="text" name = "Weight" /></td>
            
        </tr>
        <br>
        <tr>
            <td>Blood Group:<input type="text" name = "BloodGroup" /></td>
            
        </tr>
        <br>
        <tr>
        Diabetes:
        <td><select name="Diabetes">
        <option value="Yes">Yes</option>
        <option value="No">No</option>
        <option value="NotSure">Not Sure</option>
        </select></td>
        </tr>
        <br>
        
            <td>Appointment Time: <input type="text" name = "AppointmentTime" /></td>
        </tr>
        <br>
        <tr>
            <td>Patient Complaint: <input type="text" name = "PatientComplaint" /></td>
        </tr>
        <br>
        <tr>
            <td>Choosen Doctor: <input type="text" name = "ChoosenDoctor" /></td>
        </tr>
        <br>
    
    <tr>
        <td><input type="submit" name = "CreatePortfolio" value="Create Portfolio" /></td>
    </tr>
    
    </form>
</body>
</html>