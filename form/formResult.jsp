<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<html>
<head>
    <title>Form Submission Result</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Form Submission Result</h2>
        <div class="alert alert-success">
            <strong>Success!</strong> Form submitted successfully.
        </div>
        
        <h3>Submitted Data:</h3>
        <ul>
            <li><strong>Name:</strong> <%= request.getAttribute("name") %></li>
            <li><strong>Email:</strong> <%= request.getAttribute("email") %></li>
            <li><strong>Message:</strong> <%= request.getAttribute("message") %></li>
        </ul>
        
        <a href="index.jsp" class="btn btn-primary">Back to Form</a>
    </div>
</body>
</html>