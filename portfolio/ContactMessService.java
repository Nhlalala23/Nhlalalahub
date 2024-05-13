
package portfolio;

//handling contacts messages
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
