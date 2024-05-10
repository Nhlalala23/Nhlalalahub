
package portfolio;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

//handling contacts mmessages
@Service
public class ContactMessService {
    private final ContactMessRepository contactMessRepository;

    @Autowired
    public ContactMessService(ContactMessRepository contactMessRepository){
        this.contactMessRepository = contactMessRepository;
    }

    public ContactMessage saveContactMessage(ContactMessage message){
        return contactMessRepository.save(message);
    }
}
