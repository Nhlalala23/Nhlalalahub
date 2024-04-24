package form;

@WebServlet("/formHandler")
public class formHandlerServelet extends HttpServlet {
    protected void doPost(HttpServletRequest request,HttpServletResponse) throws ServletException,IOException{
        String name = request.getParameter("name");
        String email = request.getParameter("email");
        String email = request.getParameter("message");

        //set attributes => forward to jsp

        request.setAttribute("name",name);
        request.setAttribute("email",email);
        request.setAttribute("message",message);

        //forward request to jsp
        request.getRequestDispatcher("formResult.jsp").forward(request,response);
        


    }
    
}
