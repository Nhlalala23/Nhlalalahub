/*import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.ResponseBody;

@Controller
@RequestMapping("/contact")
public class ContactController{
    private final ContactMessService contactMessService;
    
    @Autowired
    public class ContactController(ContactMessService contactMessService){
        this.contactMessService = contactMessService;
    }

    @PostMapping("/submit")
    @ResponseBody

    public String submitContactMessage(@RequestBody ContactMessage message){
        ContactMessage savedMessage = contactMessService.saveContactMessage(message);
        return "Message received! Thank you for contacting us."
    }
}*/

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.ResponseBody;

@Controller
@RequestMapping("/api/contact")

public class ContactController{
    private final ContactMessService contactMessService;

    @Autowired
    public ContactController(ContactMessService contactMessService){
        this.contactMessService = contactMessService;
    }

    @PostMapping("/submit")
    @RequestBody
    public ResponseEntity<String> submitContactMessage(@RequestBody ContactMessage message){
        ContactMessage savedMessage = contactMessService.saveContactMessage(message);

        if(savedMessage !=null){
            return ResponseEntity.ok("Thank you for contacting us.");
        }
        else{
            return ResponseEntity.status(HttpStatus.INTERNAL_SERVER_ERROR).body("Failed to save message.");
        }
    }
}
