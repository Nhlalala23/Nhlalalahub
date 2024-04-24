<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<DOCTYPE html>
<html>
    <head>
        <title>form submission</title>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-5">
            <h2>form submission Result</h2>
            <div class="alert alert-sucess">
                <strong>Success!</strong> Form submitted successfully.
            </div>

            <h3>Submitted Data:</h3>
            <ul>
                <li><strong>Name:</strong><%=request.getParameter("name")%></li>
                <li><strong>Email:</strong> <%=request.getParameter("email")%></li>
                <li><strong>Message</strong><%= request.getParameter("message")%></li>
            </ul>
            <a href="index.jsp" class="btn btn-primary">Back to form</a>
        </div>
    </body>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</html>